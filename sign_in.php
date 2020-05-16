<?php
session_start();
include'dbconfig.php';
 if(isset($_POST['loginb']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$select="SELECT * from user where uname='$username' AND pswd='$password' AND role='user'";
$selecti=mysql_query("SELECT * from user where uname='$username' AND pswd='$password' AND role='admin'");
$sqli=mysql_query($select);
if($rou=mysql_num_rows($sqli)==1)
{
$_SESSION['username']=$username;
header("location:home.php");
}
elseif (mysql_num_rows($selecti)==1) {
	$_SESSION['username']=$username;
  header("location:dashboard.php");
}
else
{
echo"<script>alert('Username or Password is incorrect')</script>";
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
top:10px;
font-size: 13px;
}
#paswd
{
  position: relative;
left:10px;
}
</style>
</head>
<body>
  <div class="logo">
<a href="index.php">  <img src="img/capture3.png" width='280'/></a>
</div>
  <div class="container">
  <form method="POST" action="">
  <div class="form_input">
  <input type="text" placeholder="Username" name="username" autocomplete="off" autofocus="on"/>
  </div>
  <div class="form_input">
  <input type="password" placeholder="Password" name="password" id="paswd"/><img src="img/eye.png" width="20" height="20" onmouseover="paswd.type='text'" onmouseout="paswd.type='password'"
   style="position:relative;left:-15px; top:5px;"/></td>
  </div>
  <div class="form_input1">
  <input type="submit" value="login" name="loginb"/>
  </div>
  </form>
  <a href="sign_up.php">Register here</a><br>
  <a href="forgot_password.php" class="f">Forget Password?</a>
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
