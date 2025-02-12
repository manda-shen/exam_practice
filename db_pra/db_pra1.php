<?php

class DB{
    protected $dsn="mysql:host=localhost;charset:utf8;dbname=db99";
    protected $pdo;
    protected $table;

    function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,'root','');
    }

   
    function a2sql($array){
        $tmp=[];
        foreach($array as $key => $value){
            $tmp[]="`$key`=>'$value'";
        }
        return $tmp;
    }


    function all(...$arg){
        $sql="SELECT * FROM $this->table";
        if(!empty($arg[0])){
            if(is_array($arg[0])){
                $where=$this->a2s($arg[0]);
                $sql=$sql . " WHERE " . join(" && ,$where");
            }else{
                $sql .=$arg[0];
            }
        }
        if(!empty($sql[1])){
            $sql=$sql . $arg[1];
        }
        return $this->fetchAll($sql);
    }

    function save($array){
        if(isset($array['id'])){
            $id=$array['id'];
            unset($array['id']);
            $set=$this->a2s($array);
            $sql="UPDATE $this->table SET ".join(',',$set)." WHERE `id`='$id'";

        }else{
            $cols=array_keys($array);
            $sql="INSERT INTO `$this->table` (`".join("`,`",$cols)."`) VALUES('".join("','",$array)."')";
        }
        return $this->pdo->exec($sql);
    }



}

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

?>