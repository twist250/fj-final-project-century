<?php
ob_start();
include('authentication.php');
include('dbconfig.php');
$usernow=$_SESSION['username'];
?>
<?php
if(isset($_POST['update']))
{
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
if($pass==$cpass)
{
$update="UPDATE user SET pswd='$pass' where uname='$usernow'";
if(mysql_query($update)==true)
{
  echo"<script>alert('Password successfully updated!')</script>";
}
else
{
echo"<script>alert('Please try again!')</script>";  
}
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

</style>
</head>
<body>
  <div class="logo">
<a href="index.php">  <img src="img/capture3.png" width='280'/></a>
</div>
  <div class="container">
  <form method="POST" action="?">
  <div class="form_input">
  <input type="password" placeholder="Password" name="pass" autocomplete="off" autofocus="on" required/>
  </div>
  <div class="form_input">
  <input type="password" placeholder="Confirm password" name="cpass" required/>
  </div>
  <div class="form_input1">
  <input type="submit" value="Submit" name="update"/>
  </div>
  </form>
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
