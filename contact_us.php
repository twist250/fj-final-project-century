<?php
ob_start();
include('authentication.php');
include('dbconfig.php');
$usernow=$_SESSION['username'];
$qury=mysql_query("SELECT fname from user where uname='$usernow'");
$fetch=mysql_fetch_array($qury);
?>
<html>
<head>
<title>
century cinemas contact us
</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/style-all.css"/>
<link type="text/css" rel="stylesheet" href="css/contact_us.css"/>
<link  rel="stylesheet" type="text/css" href="css/logo.css"/>
<link  rel="stylesheet" type="text/css" href="css/user_session.css"/>
</head>
<body>
<div class="nav"><br>
<div class="nav_container"><br>
<ul>
<li><a href="home.php">Home</a></li>
<li><a href="service.php">Services</a></li>
<li><a href="contact_us.php">Contact us</a></li>
<div class='user_img'><img src="img/user.png" width='30' height='30'></div>
<div id="user"><li><a href="#"><?php echo $fetch['fname']; ?></a>
<ul>
  <li><a href="account.php">Profile</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
</li>
</div>
</ul>
</div>
<div class="logo2">
<a href="home.php">  <img src="img/capture5.png" /></a>
</div>
</div>
<div class="details">
  <h1>CENTURY CINEMA, Kigali (KCT Centre)</h1>
  From the Box Office through the Concession Stand to each Auditorium,<br>
  guests are treated to a world of luxury and sheer delight.<br>
  With state-of-the-art projection equipment and Dolby Surround sound,<br>
  every performance is designed to deliver an unparalleled experience in filmed<br>
  entertainment. All Auditoriums are well equipped with excellent air-conditioning system.<br><br>
  For cinema info: Contact the hotline 0789 133333<br>
  <h1>Theatre Rentals</h1>
  Our cinema auditoriums are available for private rentals and movie premiers.<br>
  Century Cinema Auditoriums are used for 2D or 3D film presentations or video presentations:<br>
  Auditorium capacity<br>
  Auditorium 1 accommodates 233 seats (Has a large stage area)<br>
  Auditorium 2 accommodates 129 seats<br>
  Auditorium 3 accommodates 70 seats
  <h1>5D Auditorium</h1>
  Auditorium 4 accommodates 18 seats for 5D screenings. (A must to experience)
  <h1>Concession sales</h1>
  At our concession stand, we offer a wide variety of snacks, candies, ice cream, soda, juice, water and of <br>
  course the crispiest fresh popcorn you can get in Rwanda. Our prices are fair and our stock is always <br>
  fresh and tasty.
  <h1>Birthday party or Group bookings:</h1>
  Give your loved one and their friends the treat of a lifetime on their birthdays or any special occasion by<br>
  spending it @ Century Cinema. We are keen to assist you by providing a foyer area for the set up <br>
  of your exclusive party. Contact the manager or call (250) 787 376 942 to arrange the bookings.<br>
  Specials apply to bookings of a minimum of 30 persons.
  <h1>School/ University group bookings:</h1>
  Century Cinema offers specials to school or university groups. We will assist you with arranging<br>
  screenings at special starting times to suit the school/ university. Special care is taken with the students<br>
  and we assist with monitoring the movement of all students. Concessions can also be<br>
  arranged at discounted prices. Contact the manager or call (250) 787 376 942 to arrange the<br>
  bookings.
  <h1>Advertise your business</h1>
  We @ Century Cinema offer a wide variety of advertising deals, either by “on screen motion adverts” or <br>
  “still poster type” adverts. All advertising options are inside the auditoriums or outside in the foyer<br>
  areas. Contact the manager or call (250) 787 376 942 to discuss the different advertising <br>
  options available.
  <h1>Gift Vouchers:</h1>
  We offer Century Cinema Gift Vouchers on sale. These can be used by companies or individuals<br>
  whenever you run out of gift ideas or simply feel like rewarding a staff member or friend <br>
  to a day @ Century Cinema. The vouchers are not exchangeable for cash and you can decide what <br>
  amount you want to give to someone as a gift. Voucher values are set at RWF2000 or RWF10000. <br>
  The Gif Vouchers are only on sale at the cinema.
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
