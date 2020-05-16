 <?php
include('dbconfig.php');
if(isset($_POST['submit']))
{
$sid=$_POST['sid'];
$date=$_POST['date'];
$Auditorium_id=$_POST['hid'];
$time=$_POST['time'];

$insert1="INSERT into schedule (sid,sdate,stime,Auditorium_id) VALUES ('$sid','$date','$time','$Auditorium_id')";
if(mysql_query($insert1))
{
		echo"<script>window.open('schedule.php','_self')</script>";
}
else
{
		echo"<script>alert('Saving failed')</script>";
		exit();
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
<li><a href="post.php">Auditorium</a></li>
<li><a href="price.php">Price</a></li>
<li><a href="schedule.php">Schedule</a></li>
<li><a href="movies.php">Movies</a></li>
</ul>
</div>
<div class="nav">
<div class="container">
<form method="POST" action="schedule.php" >
<div class="form_input">
<input type="text" placeholder="Schedule" name="sid" required/>
</div>
<div class="form_input">
<input type="date" placeholder="Date" name="date" required/>
</div>
<div class="form_input3">
<input type="text" placeholder="Auditorium" name="Auditorium_id" required/>
</div>
<div class="form_input2">
<input type="time" placeholder="Time" name="time" required/>
</div>
<div class="form_input1">
<input type="submit" value="Submit" name="submit" required/>
</div>
</form>
</div>
</div>
<div class="button"><br><a href="scheduletable.php">View data </a></div>
</body>
</html>
