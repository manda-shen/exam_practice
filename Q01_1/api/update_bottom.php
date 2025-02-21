<?php include_once "db.php";

$bottom=$Bottom->find(1);
$bottom['bottom']=$_POST['bottom'];
$Bottom->save($bottom);

// dd($bottom);

to("../admin.php?do=bottom");
