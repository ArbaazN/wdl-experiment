<?php 
include("connect.php");
$u=$_POST["nm"];
$ps=$_POST["em"];
$e_m=$_POST["cm"];
$database=new DatabaseManager();
$query ="INSERT INTO feedbacks (name,email,comment) VALUES ('$u','$ps','$e_m')"; 
//echo $query;
$status=$database->fireSafeQuery($query,NUll);
echo $query;
echo $status;
?>