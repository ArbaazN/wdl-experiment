<!DOCTYPE html><html lang="en">
<head>
<title>Contact us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
 
    .top-container{
                background-image:url("Para4%20.jpeg");
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
           
                background-repeat: no-repeat;
        color:ghostwhite;
        font-size: 20px;
    }
.box{
 width: 100%;
  margin: auto 0px;
  margin-left: 50%;
  color: white;
  background:SkyBlue;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;}
  
  form, .content {
    margin-left: 50%;
  width: 100%;
  padding: 20px;
  border: 2px solid #B0C4DE;
  text-align: center;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
body{
  background-image:url("fbback.jpg");
}
</style>
</head>
<script type="text/javascript">
  function valid(){
    var fs_name=document.forms["contact"]["fname"];
    var ls_name=document.forms["contact"]["lname"];
    var e_ml=document.forms["contact"]["mail"];
    var qry=document.forms["contact"]["issue"];

    if(fs_name.value == "")
    {
      window.alert("Please enter your First Name.");
      fl_name.focus();
      return false;
    }
    if(ls_name.value == "")
    {
      window.alert("Please enter your Last Name");
      ls_name.focus();
      return false;
    }
    if(e_ml.value == "")
    {
      window.alert("Please enter your Email");
      e_ml.focus();
      return false;
    }
    if(qry.value == "")
    {
      window.alert("Please enter your Problem");
      qry.focus();
      return false;
    }
  }
</script>
<body>

      <nav class="navbar navbar-inverse">
  <div class="  container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<div class="col-md-6">
  <div class="box"><h1>Create User</h1></div>
<form id="contact" action="cr.php" name="contact" onsubmit="valid()">
    <div class="form-group">
     <div class="form-group">
      <input type="text" class="form-control" id="usn" placeholder="Enter your Username " name="usn">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="pwd" placeholder="Enter your Password" name="pwd">
    </div>
      <input type="email" class="form-control" id="mail" placeholder="Enter email" name="mail">
    </div>
  <div class="form-group">
      <input type="text" class="form-control" id="Ph" placeholder="Enter Your Phone-no" name="ph">
    </div>
    <button type="submit" class="btn btn-primary" style="width:300px;">Create</button>
  </form>
</div>
</div>
</body>
</html>
      
