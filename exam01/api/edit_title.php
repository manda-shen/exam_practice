<?php
include_once "db.php";

if(isset($_POST['id'])){
    foreach($_POST['id'] as $idx => $id){
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            $Title->del($id);
        }else{
            $row=$Title->find($id);
            $row['text']=$_POST['text'][$idx];
            $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
            $Title->save($row);
            // echo "sh: {$_POST['sh']} ; id: {$id}; ".($_POST['sh']==$id ? 'true' : 'false')."<br/>";
        }
    }
}

to("../admin.php?do=title");

// print_r($_POST);

?>