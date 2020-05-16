<?php
include('dbconfig.php');
if(isset($_POST['submit']))
{
     $movieid=$_POST['movie'];
     $moviename=$_POST['movietitle'];
     $moviestory=$_POST['story'];
     $screen=$_POST['screen'];
     $genre=$_POST['genre'];
     $status=$_POST['status'];
     $schedule=$_POST['schedule'];
     $price=$_POST['price'];


       $name=$_FILES['myfile']['name'];
       $type=$_FILES['myfile']['type'];
       $size=$_FILES['myfile']['size'];
       $temp=$_FILES['myfile']['tmp_name'];
       $file_basename=basename($name);
       $dir="uploads/";
       $final_dir=$dir.$file_basename;
       move_uploaded_file($temp,$final_dir);


$sqli="INSERT INTO movie (mid,img,name,story,screen,genre,status,scheduleid,priceid)
VALUES('$movieid','$final_dir','$moviename','$moviestory','$screen','$genre','$status','$schedule','$price')";
$mquery=mysql_query($sqli) or die(mysql_error());
if ($mquery==true)
{
echo"<script>alert('Data has been inserted');</script>";
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
<link rel="stylesheet" type="text/css" href="css/movies.css"/>
<style>
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
<div class="container">
<form method="POST" action="movies.php" enctype="multipart/form-data">
<div class="form_input">
<input type="text" placeholder="Movie" name="movie" required/>
</div>
<div class="form_input6">
<input type="text" placeholder="Movie title" name="movietitle" required/>
</div>
<div class="form_input">
<input type="text" placeholder="Screen" name="screen"/>
</div>
<div class="form_input6">
<input type="text" placeholder="Genre" name="genre" required/>
</div>
<div class="form_input5">
<input type="text" placeholder="Schedule" name="schedule"/>
</div>
<div class="form_input0">
<input type="text" placeholder="Price" name="price"/>
</div>
<div class="form_input">
<textarea placeholder="Story" name="story"></textarea>
</div>
<div class="form_input7">
<div class="p1">Movie poster</div><input type="file" name="myfile" >
</div>
<div class="form_input3">
<select name="status" style="width:250px;height:47px;padding-left:8px;color:rgba(204, 102, 0,1);margin-top:5px;">
  <option disabled selected>Status</option>
  <option value="nowshowing">Now showing</option>
  <option value="comingsoon">Coming soon</option>
</div>
<input type="submit" value="Submit" name="submit" style="position:relative;left:-270px;top:50px;"/>

<div class="button" style="position:relative;left:-570px;top:60px;"><br><a href="moviestable.php">View data </a></div>
</form>
</body>
</html>
