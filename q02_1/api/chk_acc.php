<?php include_once "db.php";

$acc=$_GET['acc'];

$res=$User->count(['acc'=>$acc]);

echo $res;

// $User->count($_GET); 一行就可以解決，但怕忘記就先附註


?>