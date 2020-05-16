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
<link rel="stylesheet" type="text/css" href="css/movies.css"/>
<style>

.button{
  width: 243px;
  margin-left:600px;
}
.button a:hover{
padding-left: 80px;
padding-right: 80px;
}
table{
font-size: 10px;
  position: relative;
  left:-300px;
  top:-10px;
}
table th{
padding-left:;
padding-right:;
}
table tr td{

}
.nav1{
  width:800px;
  height: 365px;
}

.b1{
  padding-top: 10px;
  position: relative;
  left: -20px;
}
.b2{
  padding-right: 100px;
  position: relative;
  top:-11px;
}

</style>
</head>
<body>
<center>  <div class="logo">
  <a href="#"><img src="img/logo.png" /></a>
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
<table width="780">
<tr>
<th>Movie_id</th>
<th>Movie_poster</th>
<th>Title</th>
<th>Story</th>
<th>Screen</th>
<th>Genre</th>
<th>Status</th>
<th>Schedule</th>
<th>Price</th>
<th>Operation</th>
</tr>
<tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("century");
$qry="SELECT * from movie";
$run=mysql_query($qry);
while($row=mysql_fetch_array($run))
{
$movie=$row[0];
$img=$row[1];
$name=$row[2];
$story=$row[3];
$screen=$row[4];
$genre=$row[5];
$status=$row[6];
$schedule=$row[7];
$price=$row[8];
?>
<td><?php echo $movie; ?></td>
<td><?php echo $img ; ?></td>
<td><?php echo $name ; ?></td>
<td><?php echo $story ; ?></td>
<td><?php echo $screen ; ?></td>
<td><?php echo $genre ; ?></td>
<td><?php echo $status; ?></td>
<td><?php echo $schedule ; ?></td>
<td><?php echo $price ; ?></td>
<td><div class="b1"><a href='deletem.php?del=<?php echo $movie;?>'>Delete</a></div>
  <div class="b2"><a href='editm.php?edit=<?php echo $movie;?>'>Edit</a></div></td>
</tr>
<?php } ?>
</table>
</div>
<div class="button"><br><a href="movies.php">Add movie</a></div>
</body>
</html>
