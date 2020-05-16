<?php
include('dbconfig.php');
if(isset($_REQUEST['submit']))
{
	$hids=$_POST['hall'];
	$sit=$_POST['seats'];
  $edit_id=$_GET['edit'];
	$qury="UPDATE hall SET hid='$hids',seat='$sit' WHERE hid='$edit_id'";
	if(mysql_query($qury)){
	echo "<script>window.open('halltable.php?edited=hall has been updated!!','_self')</script>";
	}
}
?>
<html>
<head>
<title>
century cinemas
</title>
<link rel="stylesheet" type="text/css" href="css/post.css"/>
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
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
<form method="POST" >
<div class="form_input">
<input type="text" placeholder="Hall" name="hall"/>
</div>
<div class="form_input2">
<input type="text" placeholder="Number of seats" name="seats"/>
</div>
<div class="form_input1">
<input type="submit" value="Update" name="submit"/>
</div>
</form>
</div>
</div>
<div class="button"><br><a href="halltable.php">View data </a></div>
</body>
</html>
