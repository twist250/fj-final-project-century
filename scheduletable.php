<html>
<head>
<title>
century cinemas
</title>
<link rel="stylesheet" type="text/css" href="css/post.css"/>
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/table1.css"/>
<style>
.button{
  width: 260px;
  margin-left: 545px;
}
.button a:hover{
padding-left: 90px;
padding-right: 64px;
}
table th{
  width: 50px;
}
table{
  margin-left: 22px;
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
<li><a href="post.php">Auditorium</a></li>
<li><a href="price.php">Price</a></li>
<li><a href="schedule.php">Schedule</a></li>
<li><a href="movies.php">Movies</a></li>
</ul>
</div>
<div class="nav1">
<table width='750'>
<tr>
<th>Schedule</th>
<th>Date</th>
<th>Time</th>
<th>Auditorium</th>
<th>Operation</th>
</tr>
<tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("century");
$qry="SELECT * from schedule";
$run=mysql_query($qry);
while($row=mysql_fetch_array($run))
{
$schedule_id=$row[0];
$date=$row[1];
$time=$row[2];
$Auditorium_id=$row[3];
?>
<td><?php echo $schedule_id; ?></td>
<td><?php echo $date ; ?></td>
<td><?php echo $time ; ?></td>
<td><?php echo $Auditorium_id ; ?></td>
<td><div class="b1"><a href='deletes.php?del=<?php echo $schedule_id;?>'>Delete</a></div>
  <div class="b2"><a href='edits.php?edit=<?php echo $schedule_id;?>'>Edit</a></div></td>
</tr>
<?php } ?>
</table>
</div>
<div class="button"><br><a href="schedule.php">Add schedule</a></div>
</body>
</html>
