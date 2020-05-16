<head>
<title>
welcome to century cinemas
</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/buttons.css"/>
<link  rel="stylesheet" type="text/css" href="css/logo.css"/>
<style>
.logo1{
margin-top: -125px;
margin-left: 9px;
}
.button1,.button2{
  position:relative;
  top: 20px;
  align:center;
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
mysql_connect("localhost","root","");
mysql_select_db("century");
$qr="SELECT * from movie where status='comingsoon'";
$rqn=mysql_query($qr);
while($rw=mysql_fetch_array($rqn))
{
?>
<div class="pic"><img src="<?php echo $rw['img']?>" width="220" height="320"/></div>
<div class="name"><?php echo $rw['name']; ?>
<p>Genre:</p><div class="genre"><?php echo $rw['genre'] ;?></div>
<p>Story:</p><div class="story"><?php echo $rw['story'] ;?><div>
</div>
</div>
</div>

<?php } ?>
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
      &copy 2018 Century Cinemas Kigali All right<br> reseved
    </li>
  </ul>
</div>
</body>
</html>
