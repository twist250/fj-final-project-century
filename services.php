<html>
<head>
<title>
century cinemas services
</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/buttons.css"/>
<link  rel="stylesheet" type="text/css" href="css/logo.css"/>
<style>
.name{
  margin-top:-160px;
  height:120px;
  margin-left: 555px;
}
.pic{
  margin-left:430px;
}
.genre{
  margin-left: 60px;
  margin-top: -40px;
}
.p{
margin-top: 19px;
}
#screen{
margin-left:210px;
margin-top: -38px;
}
.button1{
  margin-left: 580px;
}
.button2{
  margin-left: 780px;
}
.contact{
margin-left: 30px;

}
.logo1{
  position: relative;
  top:-10px;
}
</style>
</head>
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
<?php
include'dbconfig.php';
$qry="SELECT * from movie where mid='M1' AND status='nowshowing'";
$run=mysql_query($qry);
while($row=mysql_fetch_array($run) or die(mysql_error()))
{
?>
<div class="pic"><img src="<?php echo $row['img'];?>" width="120" height="160"/></div>
<div class="name"><p><?php echo $row['name']; ?></p><div id="screen"><?php echo $row['screen'] ;?></div>
<p>Genre:</p><div class="genre"><?php echo $row['genre'] ;?></div>
  <?php
  $ran=mysql_query("SELECT amount from price where prid in(SELECT priceid from movie)");
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
<a href="http//:www.youtube.com">Watch Trailer</a><br><br><br><br>
</div>
<div class="button2">
<a href="booking.php">Book Ticket</a>
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
