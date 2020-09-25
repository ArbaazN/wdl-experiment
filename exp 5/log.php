<?php  
 include('connect.php');
            $x=$_REQUEST['usn'];
            $y=$_REQUEST['pwd'];
            $z=$_REQUEST['mail'];
   echo "<br>Username:".$x;
     echo "<br>password:".$y;
       echo "<br>email:".$z;
 $e="SELECT * FROM s_user where us_nm='".$x."'";
$database=new databaseManager();
$tr=$database->safeRetrieve($e,null);
$tt=count($tr);
for ($i=0; $i <$tt; $i++) { 
if ($y==$tr[$i]['us_pd'] && $z==$tr[$i]['us_em']) {

       header("Location:home.php?lg=1");
      
}
else{


        header("Location:cr_us.php?OUT=1");
    
}
   }
