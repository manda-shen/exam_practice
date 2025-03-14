<?php include_once "db.php";



if(isset($_POST['del']) && is_array($_POST['del'])){
    foreach($_POST['del'] as $id){

        $User->del($id);
    }
    to("../admin.php?do=news");
    exit();
}

if(isset($_POST['sh'])){
    
}

