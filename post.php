<?php
ob_start();
include('authentication.php');
?>
<?php
include('dbconfig.php');
if(isset($_POST['submit']))
{
	$Auditorium_id=$_POST['Auditorium_id'];
	$Auditorium_name=$_POST['Auditorium_name'];
	$Total_Seats=$_POST['Total_Seats'];
	if($Auditorium_id=='')
	{
		echo"<script>alert('Please enter which Auditorium')</script>";
		exit();
	}
	if($Auditorium_name=='')
	{
		echo"<script>alert('Please enter which Auditorium name')</script>";
		exit();
	}
	if($Total_Seats=='')
	{
		echo"<script>alert('Please enter number of seats')</script>";
		exit();
	}
	$qry="INSERT into auditorium (Auditorium_id,Auditorium_name,Total_Seats) VALUES('$Auditorium_id','$Auditorium_name','$Total_Seats')";
	if(mysql_query($qry)){

		echo"<script>window.open('post.php','_self')</script>";
	}
	else
	{
		echo"<script>alert('Saving Failed')</script>";
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
</head>
<body>
<center>  <div class="logo">
  <a href="dashboard.php">  <img src="img/logo.png" /></a>
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
<li><a href="post.php">Auditorium</a></li>
<li><a href="price.php">Price</a></li>
<li><a href="schedule.php">Schedule</a></li>
<li><a href="movies.php">Movies</a></li>
</ul>
</div>
<div class="nav">
<div class="container">
<form method="POST" action="post.php" >
<div class="form_input">
<input type="text" placeholder="Auditorium id" name="Auditorium_id"/>
</div>
<div class="form_input">
<input type="text" placeholder="Auditorium name" name="Auditorium_name"/>
</div>
<div class="form_input2">
<input type="text" placeholder="Number of seats" name="Total_Seats"/>
</div>
<div class="form_input1">
<input type="submit" value="Submit" name="submit"/>
</div>
</form>
</div>
</div>
<div class="button"><br><a href="halltable.php">View data </a></div>
</body>
</html>
