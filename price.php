<?php
include('dbconfig.php');
if(isset($_POST['submit']))
{
$pid=$_POST['pid'];
$amount=$_POST['amount'];
if($pid=='')
{
	echo"<script>alert('Please enter a price id')</script>";
	exit();
}
if($amount=='')
{
	echo"<script>alert('Please enter the price amount')</script>";
	exit();
}
$insert="INSERT into price (prid,amount) VALUES ('$pid','$amount')";
if(mysql_query($insert))
{
	echo"<script>window.open('price.php','_self')</script>";
}
else
{
		echo"<script>alert('Saving failed')</script>";
		exit();
}
}

 ?>
<html>
<?php
ob_start();
include('authentication.php');
?>
<head>
<title>
Post on century cinemas
</title>
<link rel="stylesheet" type="text/css" href="css/post.css"/>
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/view.css"/>
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
<li><a href="post.php">Auditorium</a></li>
<li><a href="price.php">Price</a></li>
<li><a href="schedule.php">Schedule</a></li>
<li><a href="movies.php">Movies</a></li>
</ul>
</div>
<div class="nav">
<div class="container">
<form method="POST" action="price.php" >
<div class="form_input">
<input type="text" placeholder="Price" name="pid"/>
</div>
<div class="form_input2">
<input type="text" placeholder="Amount" name="amount"/>
</div>
<div class="form_input1">
<input type="submit" value="Submit" name="submit"/>
</div>
</form>
</div>
</div>
<div class="button"><br><a href="pricetable.php">View data </a></div>
</body>
</html>
