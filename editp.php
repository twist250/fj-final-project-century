<?php
include('dbconfig.php');
if(isset($_REQUEST['submit']))
{
	$pid=$_POST['prid'];
	$amount=$_POST['amount'];
  $edit_id=$_GET['edit'];
	$qury="UPDATE price SET prid='$pid',amount='$amount' WHERE prid='$edit_id'";
	if(mysql_query($qury)){
	echo "<script>window.open('pricetable.php?edited=price has been updated!!','_self')</script>";
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
<link rel="stylesheet" type="text/css" href="css/table1.css"/>
<style>
table{
  position: relative;
  left: 85px;
}
.button a{
  padding-left: 70px;
}
.button{
  width: 211px;
}

.b1{
  padding-top: 10px;
  position: relative;
  left: -20px;
}
.b2{
  padding-right: 40px;
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
<input type="text" placeholder="Hall" name="prid"/>
</div>
<div class="form_input2">
<input type="text" placeholder="Number of seats" name="amount"/>
</div>
<div class="form_input1">
<input type="submit" value="Update" name="submit"/>
</div>
</form>
</div>
</table>
</div>
<div class="button"><br><a href="price.php">Add price</a></div>
</body>
</html>
