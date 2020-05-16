<?php
ob_start();
include('authentication.php');
include('dbconfig.php');
$usernow=$_SESSION['username'];
$qury=mysql_query("SELECT fname from user where uname='$usernow'");
$fetch=mysql_fetch_array($qury);
?>
<html>
<head>
<title>
welcome to century cinemas
</title>
<link type="text/css" rel="stylesheet" href="css/buttons.css"/>
<link  rel="stylesheet" type="text/css" href="css/style.css"/>
<link  rel="stylesheet" type="text/css" href="css/style-all.css"/>
<link  rel="stylesheet" type="text/css" href="css/logo.css"/>
<link  rel="stylesheet" type="text/css" href="css/user_session.css"/>
</head>
<style>
.name{
  margin-top:-160px;
  margin-bottom:70px;
  height:120px;
  margin-left: 555px;
}
.pic{
  margin-left:430px;
}
.genre{
  margin-left: 60px;
  margin-top: -34px;
}
.p{
margin-top: 10px;
}
#screen{
margin-left:210px;
margin-top: -38px;
}
.button1{
  margin-left: 380px;
}
.button2{
  margin-left: 780px;
}
.contact{
margin-left: 30px;

}
#watch a
{
	text-decoration: none;font-family: arial,sans-serif;color: #ffffff;font-weight: bold;
}
#watch a:hover
{
	text-decoration: none;font-family: arial,sans-serif;color: #ffffff;font-weight: bold;
	text-decoration: underline;
}
</style>
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
<div class="logo1">
<a href="home.php">  <img src="img/capture4.png" /></a>
</div>
</div>
<?php
include'dbconfig.php';
$qry="SELECT * from movie where status='nowshowing'";
$run=mysql_query($qry);
while($row=mysql_fetch_array($run))
{
?>
<div class="pic"><img src="<?php echo $row['img'];?>" width="120" height="160"/></div>
<div class="name"><p><?php echo $row['name']; ?></p><div id="screen"><?php echo $row['screen'] ;?></div>
<p>Genre:</p><div class="genre"><?php echo $row['genre'] ;?></div>

 <?php
	$priceid=$row["priceid"];
  $ran=mysql_query("SELECT amount from price inner join movie on price.prid=movie.priceid where movie.priceid='$priceid'");
  $raw=mysql_fetch_array($ran);
  
  ?>
  <div class="p">PRICE:</div><div class="price"><?php echo $raw['amount']; ?></div>
  <?php
  $scheduleid=$row["scheduleid"];
  $sqri="SELECT sdate from schedule inner join movie on schedule.sid=movie.scheduleid where movie.scheduleid='$scheduleid'";
  $sran=mysql_query($sqri);
  $raw=mysql_fetch_array($sran);
  ?>
  <div class="p1">DATE:</div><div class="date"><?php echo $raw['sdate'] ?></div>

  <?php
  $sqeri="SELECT stime from schedule inner join movie on schedule.sid=movie.scheduleid where movie.scheduleid='$scheduleid'";
  $ran=mysql_query($sqeri);
  $raw=mysql_fetch_array($ran);
  
  ?>
  <div class="p2">TIME:</div><div class="time"><?php echo $raw['stime'] ?></div>
<div style="margin-top:20px;" id="watch">
<a href="https://www.youtube.com/">Watch Trailers</a><br><br><br><br>
</div>
</div>
<?php } ?>


</div>


<div class="button2">
<a href="Booking.php">Book Ticket</a>
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
