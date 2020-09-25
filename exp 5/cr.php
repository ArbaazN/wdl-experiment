<?php 
include("connect.php");
$u=$_REQUEST["usn"];
$ps=$_REQUEST["pwd"];
$e_m=$_REQUEST["mail"];
$p=$_REQUEST["ph"];
$database=new DatabaseManager();
 $query ="INSERT INTO s_user (us_nm,us_pd,us_em,us_ph) VALUES ('$u','$ps','$e_m','$p')"; 
$status=$database->fireSafeQuery($query,NUll);
 ?>     	

