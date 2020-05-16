<?php
ob_start();
include('authentication.php');
include('dbconfig.php');
$usernow=$_SESSION['username'];
$qury=mysql_query("SELECT fname from user where uname='$usernow'");
$fetch=mysql_fetch_array($qury);
?>
<?php
if(isset($_POST['pay']))
{
$account=$_POST['account'];
$no_tkt=$_POST['numtkt'];
if($account=='' || $no_tkt=='')
{
  echo"<script> alert('Please fill the empty gap')</script>";
  exit();
}
$q0=mysql_query("SELECT amount from price where prid in(select priceid from movie where name='$name')");
$q1=mysql_query("SELECT fname from user where uname='$usernow'");
$q2=mysql_query("SELECT lname from user where uname='$usernow'");
$q3=mysql_query("SELECT email from user where uname='$usernow'");
$q4=mysql_query("SELECT user_id from user where uname='$usernow'");
$q5=mysql_query("SELECT mid from movie where name='$name'");
$sq1=mysql_num_rows($q1);
$sq2=mysql_num_rows($q2);
$sq3=mysql_num_rows($q3);
mysql_connect("localhost","root","");
mysql_select_db("bank");
$q=mysql_query("SELECT first name, last name from records where account_id='$account' first name='$sq1' AND last name='$sq2' ");

mysql_connect("localhost","root","");
mysql_select_db("century");
$q6="INSERT into payment values('','$q4','$q5','$date','$time','$no_tkt','$payment')";
if(mysql_query("INSERT into payment values('','$q4','$q5','$date','$time','$no_tkt','$payment')"))
{
$to=$q3;
$subject="Movie Ticket booking confirmed";
$body="
Dear customer,
Thank you for using our services,your reservation
has been confirmed.
century cinemas.
This is an automated e-mail no need to reply to this!";
mail('$to','$subject','$body');

}
}
}
?>
<html>
<head>
<title>
 century cinemas booking
</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link  rel="stylesheet" type="text/css" href="css/logo.css"/>
<link  rel="stylesheet" type="text/css" href="css/user_session.css"/>
<style>
.container{
background-color:rgba(20, 24, 25, 0.7);
height: 200px;
width: 585px;
position: absolute;
margin-left: 470px;
margin-top: px;

}
input{
  height: 45px;
  width: 250px;
  border:1px;
  font-size: 15px;
  color: rgb(234, 117, 0);
  margin-top: 5px;
  background-color:#fff;
  padding-left:10px;
}
.form_input{
margin-left: 30px;
margin-top: 20px;
}
.form_input1{
margin-left:175px;
margin-top:50px;
}
.form_input2{
margin-left:305px;
margin-top:-50px;
}
.contact {
margin-top: 220px;
}
</style>
</head>
<body>
  <div class="nav"><br>
<div class="nav_container"><br>
<ul>
<li><a href="home.php">Home</a></li>
<li><a href="service.php">Services</a></li>
<li><a href="contact_us.php">Contact us</a></li>
<div class='user_img'><img src="img/user.png" width='30' height='30'></div>
<div id="user"><li><a href="#"><?php echo $fetch['fname']; ?></a>
<ul>
  <li><a href="account.php">Profile</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
</li>
</div>
</ul>
</div>
<div class="img"><img src="img/arrow.png" width='20' height='20'/></div>
<div class="logo1">
<a href="home.php">  <img src="img/capture4.png" /></a>
</div>
</div>
</div>
<div class="container">
<form method="POST" action="price.php" >
<div class="form_input">
<input type="text" placeholder="Account" name="account" autocomplete="off" autofocus="on"/>
</div>
<div class="form_input2">
<input type="text" placeholder="Confirm Number of tickets" name="numtkt"/>
</div>
<p>Fee:</p>
<div class="form_input1">
<input type="submit" value="submit" name="pay"/>
</div>
</form>
  <div class="contact">
  <ul>
  <li>  <h2>Contact info</h2>
      Century Cinemas kigali<br>
      Avenue Du Commerce,00100 Kigali,Rwanda<br>
      Kigali City Tower,3rd Floor
    </li>
    <li>
         <h2>Copyright</h2>
        &copy 2016 Century Cinemas Kigali All right<br> reserved
    </li>
  </ul>
</div>
</body>
</html>
