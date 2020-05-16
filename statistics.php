<html>
<head>
<title>
century cinemas
</title>
<link rel="stylesheet" type="text/css" href="css/post.css"/>
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<style>
.views a{
  text-decoration: none;
  font-family: arial;
  color:#fff;
  font-weight: bold;
  margin-left:170px;
  position: relative;
  left: 40px;
  top:-140px;
  background-color: rgba(0, 128, 0, 0.7);
  padding: 20px;
}
.views a:hover{
  background-color: rgba(255,255, 255, 0.7);
  color:rgba(0, 128, 0, 0.7)
}
</style>
</head>
<body>
<center>  <div class="logo">
  <a href="#">  <img src="img/logo.png" /></a>
</div></center>
<div class="nav_container1">
<ul>
<li><a href="dashboard.php">Home</a></li>
<li><a href="notifications.php">Notification</a></li>
<li><a href="post.php">Post</a></li>
<li><a href="statistics.php">Statistics</a></li>
<li><a href="logout.php">Log out</a></li>
</ul>
</div>
<div class="nav" style="position:relative;top:-30px;">
<?php
include'dbconfig.php';
$qry=mysql_query("SELECT count(user_id) as user from user where role='user'");
$fech=mysql_fetch_array($qry);
$num_user=$fech['user'];
$qqry=mysql_query("SELECT count(pid) as bookings from payment");
$fec=mysql_fetch_array($qqry);
$num_bookingz=$fec['bookings'];
 ?>
 <div style="font-family:arial;font-weight:bold; color:rgba(255,255,255,1);background-color:rgba(255,255,255,0.5);
 height:100px;width:180px;padding-top:20px;padding-left:30px;position:relative;top:50px;left:150px;">Number of users</div>
<div style="color: rgb(214, 102, 0);font-family:arial;font-size:45px;font-weight:bolder;position:relative;top:-10px;left:240px;"><?php echo $num_user; ?></div>
<div style="font-family:arial;font-weight:bold; color:rgba(255,255,255,1);background-color:rgba(255,255,255,0.5);
height:100px;width:180px;padding-top:20px;padding-left:30px;position:relative;top:-123px;left:400px;">Number of bookings</div>
<div class="book" style="color: rgb(214, 102, 0);font-family:arial;font-size:45px;font-weight:bolder;position:relative;top:-180px;left:490px;"><?php echo $num_bookingz; ?></div>
<div class="views"><a href="dashboard_user.php">View </a><a href="dashboard_movie.php">View</a></div>
</div>
</body>
</html>
