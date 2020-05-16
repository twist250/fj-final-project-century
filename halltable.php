<html>
<head>
<title>
century cinemas
</title>
<link rel="stylesheet" type="text/css" href="css/post.css"/>
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/table1.css"/>
<style>
.button a{
padding-right: 76px;
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
<li><a href="post.php">Auditorum</a></li>
<li><a href="price.php">Price</a></li>
<li><a href="schedule.php">Schedule</a></li>
<li><a href="movies.php">Movies</a></li>
</ul>
</div>
<div class="nav1">
<table width='600'>
<tr>
<th>Auditorum</th>
<th>Auditorum name</th>
<th>Seats</th>
<th>Operation</th>
</tr>
<tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("century");
$qry="SELECT * from auditorium";
$run=mysql_query($qry);
while($row=mysql_fetch_array($run))
{
$Auditorium_id=$row[0];
$Auditorum_name=$row[1];
$Total_Seats=$row[2];
?>
<td><?php echo $Auditorium_id ; ?></td>
<td><?php echo $Auditorum_name ; ?></td>
<td><?php echo $Total_Seats ; ?></td>
<td><div class="b1"><a href='delete.php?del=<?php echo $Auditorium_id;?>'>Delete</a></div>
  <div class="b2"><a href='edit.php?edit=<?php echo $Auditorium_id;?>'>Edit</a></div></td>
</tr>
<?php } ?>
</table>
</div>
<div class="button"><br><a href="post.php">Add  Auditorum</a></div>
</body>
</html>
