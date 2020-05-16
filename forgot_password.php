<?php
session_start();
include'dbconfig.php';
 if(isset($_POST['save']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$selecta="SELECT * from user where uname='$username' AND email='$email' AND role='user'";
$sqly=mysql_query($selecta);
if($rw=mysql_num_rows($sqly)==true)
{
  $_SESSION['username']=$username;
header("location:change_pass.php");
}
else
{
echo"<script>alert('Username or Email is incorrect')</script>";
}
}
?>
<html>
<head>
<title>
century cinemas Log in
</title>
<link  rel="stylesheet" type="text/css" href="css/style-all.css"/>
<link  rel="stylesheet" type="text/css" href="css/login.css"/>
<link  rel="stylesheet" type="text/css" href="css/logo.css"/>
<style>
.f{
position: relative;
top:-200px;
color:white;
font-size:15px;
font-weight: bold;
}
#g{
  position: relative;
  top:20px;
}
input{
  width: 250px;
  height: 40px;
  position: relative;
top:20px;
}
.container{
  width:300px;
  height: 270px;
}
.form_input1{
  position: relative;
  top:10px;
}
.form_input1 input{
  width: 150px;
}
</style>
</head>
<body>
  <div class="logo">
<a href="index.php">  <img src="img/capture3.png" width='280'/></a>
</div>
  <div class="container">
  <form method="POST" action="?">
  <div class="form_input">
  <input type="text" placeholder="Username" name="username" autocomplete="off" autofocus="on" required/>
  </div>
  <div class="form_input">
  <input type="email" placeholder="Email" name="email" autocomplete="off" autofocus="on" required/>
  </div>
  <div class="form_input1">
  <input type="submit" value="Submit" name="save"/>
  </div>
  </form>
  <div class="f">Information below required :</div>
  <a href="sign_in.php" id="g"> Return back to log in</a>
</div>
<div class="contact">
<ul>
<li>  <h2>Contact info</h2>
    Century Cinemas kigali<br>
    Avenue Du Commerce,00100 Kigali,Rwanda<br>
    Kigali City Tower,3rd Floor
  </li>
  <li>
       <h2>Copyright</h2>
    &copy 2016 Century Cinemas Kigali All right<br> reseved
  </li>
</ul>
</div>
</body>
</html>
