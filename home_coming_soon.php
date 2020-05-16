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
<link  rel="stylesheet" type="text/css" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/buttons.css"/>
<link  rel="stylesheet" type="text/css" href="css/logo.css"/>
<link  rel="stylesheet" type="text/css" href="css/user_session.css"/>

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
<div class="logo1">
<a href="home.php">  <img src="img/capture4.png" /></a>
</div>
</div>
<?php
mysql_connect("localhost","root","");
mysql_select_db("century");
$qr="SELECT * from movie where status='comingsoon'";
$rqn=mysql_query($qr);
while($rw=mysql_fetch_array($rqn))
{
?>
<div class="pic"><img src="<?php echo $rw['img']?>" width="220" height="320"/></div>
<div class="name" style="margin-bottom: 70px;"><?php echo $rw['name']; ?>
<p>Genre:</p><div class="genre"><?php echo $rw['genre'] ;?></div>
<p>Story:</p><div class="story"><?php echo $rw['story'] ;?></div>
</div>
<?php } ?>
<div class="button1">
<a href="home.php">Now showing</a><br><br><br><br>
</div>
<div class="button2">
<a href="home_coming_soon">Coming soon</a>
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
      &copy 2018 Century Cinemas Kigali All right<br> reseved
    </li>
  </ul>
</div>
</body>
</html>
