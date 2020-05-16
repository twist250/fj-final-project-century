<?php
include('dbconfig.php');
if(isset($_REQUEST['submit']))
{
$sid=$_POST['sid'];
$date=$_POST['date'];
$hid=$_POST['hid'];
$time=$_POST['time'];
$edit_id=$_GET['edit'];

$qury="UPDATE schedule SET sid='$sid',sdate='$date',stime='$time',hallid='$hid' WHERE prid='$edit_id'";
if(mysql_query($qury)){
echo "<script>window.open('scheduletable.php?edited=schedule has been updated!!','_self')</script>";
}
}
?>
<html>
<head>
<title>
Post on century cinemas
</title>
<link rel="stylesheet" type="text/css" href="css/post.css"/>
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/schedule.css"/>
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
<li><a href="#">Statistics</a></li>
<li><a href="logout.php">Log out</a></li>
</ul>
</div>
<div class="nav_container">
<ul>
<li><a href="post.php">Hall</a></li>
<li><a href="price.php">Price</a></li>
<li><a href="schedule.php">Schedule</a></li>
<li><a href="movies.php">Movies</a></li>
</ul>
</div>
<div class="nav">
<div class="container">
<form method="POST" action="schedule.php" >
<div class="form_input">
<input type="text" placeholder="Schedule" name="sid"/>
</div>
<div class="form_input">
<input type="date" placeholder="Date" name="date"/>
</div>

<div class="form_input3">
<input type="text" placeholder="Hall" name="hid"/>
</div>
<div class="form_input2">
<input type="time" placeholder="Time" name="time"/>
</div>
<div class="form_input1">
<input type="submit" value="Update" name="submit"/>
</div>
</form>
</div>
</div>
<div class="button"><br><a href="scheduletable.php">View data </a></div>
</body>
</html>
