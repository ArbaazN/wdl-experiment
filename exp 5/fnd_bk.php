<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
.jumbotron {
    background-color: skyblue;
    color: #fff;
  }

        table{
            border-collapse: collapse;
            height:80px;
            width: 80%;
            border-radius: 10px;
            position:absolute;
            top:450px;
            text-align: center;
            left:9%;
        }
        td{
        	padding: 2px;
        	background-color:white;
        	color:black;	
             border:2px black solid;
        }
        th{
            text-align: center;
            background:black;
            color:white;
            padding: 2px;
        }
        tr{
            background:black;
            color:white;
        }
  </style>

</head>
<body>
<form action="" method="POST">
<div class="jumbotron text-center">
  <h1 style="">Library Management</h1> 
  <p>(Learn From anywhere Anytime in the World)</p>
</div>
<br><br>
<h1><center>Enter The Book Name</center></h1><br>
<center><input type="text"  placeholder="Search.." id="sk" name="sk" style="width:30%;">
<button type="submit" class="btn btn-success" id="sub" name="sub">Search</button></center>
    </form>
</div>
	</body>
	 

	 <?php
    require("connect.php");

if(isset($_POST['sub'])){
    $cs=$_POST['sk'];
//echo $cs;
$database=new DatabaseManager();
 $query ="SELECT * from bk_dt where bk_nm='".$cs."'";
//echo "<br>query:".$query; 
$status=$database->safeRetrieve($query,NUll);

             for ($i=0; $i<count($status); $i++)
    { echo"<center>";   echo"<table border='1' class='card'>";
                 echo"<th>Book Image</th><th>Book Id</th><th>Book Name</th><th>Book Author</th><th>Book Price</th><th>Book Pdf</th>";
   echo "<tr>
    <td><img src=".$status[$i]['bk_img']." width=100, height=100></td>
    <td>" . $status[$i]['bk_id'] . "</td>
    <td>" . $status[$i]['bk_nm'] . "</td>
    <td>" . $status[$i]['bk_aut'] . "</td>
    <td>" . $status[$i]['bk_pr'] . "</td>
    <td>" . $status[$i]['bk_pd'] . "</td>
    <td><input type='button' value='Download' class='btn btn-success'></td>
    </tr>";
                 echo"</table>";echo"</center>";
    }
}
    ?>