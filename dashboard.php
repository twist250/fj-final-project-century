<?php
ob_start();
include('authentication.php');
?>
<html>
<head>
<title>
century cinemas Dashboard
</title>
<link rel="stylesheet" type="text/css" href="css/post.css"/>
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/dashboard.css"/>
<style>
h1{
  background-color: rgba(195,195,195,1);
  margin-left:380px;
  height: 30px;
}
.nav{
  margin-left: 380px;
  margin-top: 80px;
}
.nav_container1{
margin-left: 150px;
}
.nav a{
text-decoration: none;
font-weight: bold;
font-family: arial,sans-serif;
color: #fff;
position: relative;
top:50px;
}
.user,.movie{
background-color: rgba(204, 102, 0,0.7);
padding: 30px;
padding-left: 40px;
padding-right: 40px;
position: relative;
left: 230px;
}
.nav a:hover{
  color: rgba(204, 102, 0,1);
  background-color:rgba(230,230,230,0.7)
}
.movie{
  margin-left:10px;
}
</style>
</head>
<body>
<center>  <div class="logo">
  <a href="dashboard.php">  <img src="img/logo.png" /></a>
</div></center>
<h1>Dashboard</h1>
<div class="nav_container1">
<ul>
<li><a href="dashboard.php">Home</a></li>
<li><a href="notifications.php">Notification</a></li>
<li><a href="post.php">Post</a></li>
<li><a href="statistics.php">Statistics</a></li>
<li><a href="logout.php">Log out</a></li>
</ul>
</div>
<div class="nav">
  <br><br>
  <a href="dashboard_user.php" class="user">Users</a>
  <a href="dashboard_movie.php" class="movie">Movies</a>
</div>
</body>
</html>
