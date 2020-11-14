<?php 
include("connect.php");
$u=$_REQUEST["nm"];
$ps=$_REQUEST["em"];
$e_m=$_REQUEST["cm"];
$database=new DatabaseManager();
$query ="INSERT INTO feedbacks (name,email,comments) VALUES ('$u','$ps','$e_m')"; 
//echo $query;
$status=$database->fireSafeQuery($query,NUll);
echo $query;
?>