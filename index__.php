<html>
<head>
<title>
welcome to century cinemas
</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/buttons.css"/>
<link  rel="stylesheet" type="text/css" href="css/logo.css"/>
<link  rel="stylesheet" type="text/css" href="css/pre.css"/>
<link  rel="stylesheet" type="text/css" href="css/slider.css"/>
</head>
<style>
.prev{
  font-size: 200px;
  position:absolute;
  margin-top: 50px;
}
.prev a{
  text-decoration: none;
  color: rgba(255,255,255,0.1);
}
.prev a:hover{

  color: rgba(255,255,255,0.8);
}
.next{
  font-size: 200px;

  position:absolute;
  margin-left:1200px;
  margin-top: 50px;
}
.next a{
  text-decoration: none;
  color: rgba(255,255,255,0.1);
}
.next a:hover{

  color: rgba(255,255,255,0.8);
}
.logo1{
margin-top: -125px;
margin-left: 9px;
}
</style>
<body>
  <div class="nav"><br>
<div class="nav_container"><br>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="services.php">Services</a></li>
<li><a href="contactus.html">Contact us</a></li>
<li><a href="sign_in.php">Sign in/up</a></li>
</ul>
</div>
<div class="logo1">
<a href="index.php">  <img src="img/capture4.png" /></a>
</div>
</div>
<div class="prev"><a href="index_.php"><</a></div>
<?php
include'dbconfig.php';
$qry="SELECT * from movie where mid='M5' AND status='nowshowing'";
$run=mysql_query($qry);
while($row=mysql_fetch_array($run))
{
?>
<div class="pic"><img src="<?php echo $row['img'];?>" width="220" height="320"/></div>
<div class="name"><?php echo $row['name']; ?>
<p>Genre:</p><div class="genre"><?php echo $row['genre'] ;?></div>
<p>Story:</p><div class="story" style="height:130px;"><?php echo $row['story'] ;?><div>
  <?php
  $ran=mysql_query("SELECT price.amount FROM `price` inner join movie on price.prid=movie.priceid WHERE movie.mid='m5'");
  while($raw=mysql_fetch_array($ran))
  {
  ?>
  <div class="p">PRICE:</div><div class="price"><?php echo $raw['amount']; ?></div>
  <?php } ?>
  <?php
  $sqri="SELECT sdate from schedule where sid in(select scheduleid from movie)";
  $sran=mysql_query($sqri);
  while($raw=mysql_fetch_array($sran))
  {
  ?>
  <div class="p1">DATE:</div><div class="date"><?php echo $raw['sdate'] ?></div>
  <?php } ?>
  <?php
  $sqeri="SELECT stime from schedule where sid in(select scheduleid from movie)";
  $ran=mysql_query($sqeri);
  while($raw=mysql_fetch_array($ran))
  {
  ?>
  <div class="p2">TIME:</div><div class="time"><?php echo $raw['stime'] ?></div>
  <?php } ?>
<?php } ?>
</div>
</div>
<div class="button1">
<a href="index.php">Now showing</a><br><br><br><br>
</div>
<div class="button2">
<a href="index_coming_soon.php">Coming soon</a>
</div>
  <div class="contact">
  <ul>
  <li>  <h2>Contact info</h2>
      Century Cinemas kigali<br>
      Avenue Du Commerce,00100 Kigali,Rwanda<br>
      Kigali City Tower,3rd Floor
    </li>
    <li>
         <h2>Copyright</h2>
      &copy 2016 Century Cinemas Kigali All right<br> reseved
    </li>
  </ul>
</div>
</body>
</html>
