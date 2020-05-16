<?php
ob_start();
include('authentication.php');
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
table th{
  padding-left: 30px;
  padding-right: 30px;
}
<style>
.nav_container ul li{
  padding-left: 45px;
  padding-right: 30px;
}
table{
  position: relative;
  top:-60px;
  left: -65px;
}
</style>
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
  <center><li><a href="bookings.php">Bookings</a></li></center>
</ul>
</div>
<div class="nav1">
<table width='400'>
<tr>
<th>Pid</th>
<th>Customer</th>
<th>Movie</th>
<th>Date</th>
<th>Time</th>
<th>Tickets</th>
<th>payment</th>
</tr>
<tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("century");
$today=date('Y-m-d');
$qry="SELECT * from payment";
$run=mysql_query($qry);
while($row=mysql_fetch_array($run))
{
$pid=$row[0];
$customerid=$row[1];
$customerid_lname=$row[2];
$movieid=$row[3];
$pdate=$row[4];
$ptime=$row[5];
$tickets=$row[6];
$payment=$row[7];
?>
<td><?php echo $pid; ?></td>
<td><?php echo $customerid; ?>  <?php echo $customerid_lname;?></td>
<td><?php echo $movieid ; ?></td>
<td><?php echo $pdate; ?></td>
<td><?php echo $ptime; ?></td>
<td><?php echo $tickets; ?></td>
<td><?php echo $payment; ?></td>
</tr>
<?php } ?>
</table>
<a href="report1.php" style="text-decoration:none;background-color:rgba(0,128,0,0.7);color:#fff;
font-family:arial;font-weight:bold;padding:20px;margin-left:200px;
">Daily Report</a>
<a href="report1.php" style="text-decoration:none;background-color:rgba(0,128,0,0.7);color:#fff;
font-family:arial;font-weight:bold;padding:20px;
">All bookings report</a>
</div>
</body>
</html>
