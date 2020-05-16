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
  left: 0px;
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
<div class="nav1">
  <table width='600'>
  <tr>
  <th>Auditorium</th>
  <th>Seats</th>
  <th>Operation</th>
  </tr>
  <tr>
  <?php
  mysql_connect("localhost","root","");
  mysql_select_db("century");
  $qry="SELECT * from price";
  $run=mysql_query($qry);
  while($row=mysql_fetch_array($run))
  {
  $prid=$row[0];
  $amount=$row[1];
  ?>
  <td><?php echo $prid; ?></td>
  <td><?php echo $amount ; ?></td>
  <td><div class="b1"><a href='deletep.php?del=<?php echo $prid;?>'>Delete</a></div>
    <div class="b2"><a href='editp.php?edit=<?php echo $prid;?>'>Edit</a></div></td>
  </tr>
  <?php } ?>
</table>
</div>
<div class="button"><br><a href="price.php">Add price</a></div>
</body>
</html>
