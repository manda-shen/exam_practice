<?php

date_default_timezone_set('Asia/Taipei');
session_start();

class DB{
    protected $dsn="mysql:host=localhost;charset=utf8;dbname=q01_1";
    protected $pdo;
    protected $table;

    function __construct($table){
        $this->table=$table;
        $pdo=new PDO($this->dsn,'root','');
    }

    protected function fetchOne($sql){
        return $this->pdo->query($sql)->fetch(PDO::FECTH_ASSOC);
    }

    protected function fetchAll($sql){
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    function a2s($array){
        $tmp=[];
        foreach($array as $key => $value){
            $tmp[]="`$key`='$value'";
        }
        return $tmp;
    }

    function all(...$arg){
        $sql="SELECT * FROM $this->table";
        if(isset($arg[0])){
            if(is_array($arg[0])){
                $where=$this->a2s($arg[0]);
                $sql .= " WHERE " . join(" && ",$where);
            }else{
                $sql .= $arg[0];
            }
        }
        if(isset($arg[1])){
            $sql .= $arg[1];
        }
        return $this->fetchAll($sql);
    }

    function find($id){
        $sql="SELECT * FROM $this->table";
        if(is_array($id)){
            $where=$this->a2s($id);
            $sql .= " WHERE " . join(" && ",$where);
        }else{
            $sql .= " WHERE `id`='$id'";
        }
        return $this->fetchOne($sql);
    }

    function save($array){
        if(isset($array['id'])){
            $id=$array['id'];
            unset($array['id']);
            $tmp=$this->a2s($array);
            $sql="UPDATE $this->table SET " . join(",",$tmp) . " WHERE `id`='$id'";
        }else{
            $keys=array_keys($array);
            $sql="INSERT INTO $this->table (`" . join("`, `",$keys) . " VALUES ('" . join("','",$array) . "')";
        }
        return $this->pdo->exec($sql);
    }

    function del($id){
        $sql="DELETE FROM $this->table";
        if(is_array($id)){
            $where=$this->a2s($id);
            $sql .= " WHERE " . join(" && ",$where);
        }else{
            $sql .= " WHERE `id`='$id'";
        }
        return $this->pdo->exec($sql);
    }

    protected function math($math,$col='id',$where=[]){
        $sql="SELECT $math($col) FROM $this->table";
        if(!empty($where)){
            $tmp=$this->a2s($where);
            $sql .= " WHERE " . join(" && ",$tmp);
        }
        return $this->pdo->query($sql)->fetchColumn();
    }

    function max($col,$where=[]){
        return $this->math('max',$col,$where);
    }

    function min($col,$where=[]){
        return $this->math('min',$col,$where);
    }

    function sum($col,$where=[]){
        return $this->math('sum',$col,$where);
    }

    function svg($col,$where=[]){
        return $this->math('svg',$col,$where);
    }

    function count($col,$where=[]){
        return $this->math('count',$col,$where);
    }


}

function q($sql){
    $pdo=new PDO("mysql:host=localhost;charset=utf8;dbname=q01_1",'root','');
    return $pdo->query($sql)->fetchAll();
}

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function to($url){
    header("location:".$url);
}

if(isset($_SESSION['view'])){
    $_SESSION['view']=1;
    $total=$Total->find(1);
    $total['total']++;
    $Total->save($total);
}

?>
