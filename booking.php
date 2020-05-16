<?php
ob_start();
include('authentication.php');
include('dbconfig.php');
$usernow=$_SESSION['username'];
$qury=mysql_query("SELECT fname from user where uname='$usernow'");
$fetch=mysql_fetch_array($qury);
?>
<?php
if(isset($_POST['book']))
{
$name=$_POST['movie'];
$date=$_POST['date'];
$time=$_POST['time'];
$save_seat=$_POST['seats'];
$save_audi=$_POST['auditorium'];
$num_tkt=$_POST['notkt'] ;
$account=$_POST['account'];
$user=mysql_query("SELECT user_id from user where uname='$usernow'");
$sname="Select movie";
$sdate="Select date";
$stime="Select time";
if($name==$sname || $date==$sdate || $time==$stime)
{
  echo"<script>alert('Selection Required!')</script>";
  exit();
}
if($num_tkt=='')
{
echo"<script>alert('Tickets Number Required!')</script>";
exit();
}
if($account=='')
{
echo"<script>alert('Bank account Required!')</script>";
exit();
}
$q1=mysql_query("SELECT fname,lname from user where uname='$usernow'");
$getdata=mysql_fetch_array($q1);
$firstname=$getdata['fname'];
$lastname=$getdata['lname'];

$getbankdata=mysql_query("SELECT * FROM bank WHERE firstname='$firstname' AND lastname='$lastname'AND account_id='$account'");
if($rw=mysql_num_rows($getbankdata)==1)
{
$m_price=mysql_query("SELECT amount from price where prid in(select priceid from movie where name='$name')");
$dataprice=mysql_fetch_array($m_price);
$movieprice=$dataprice['amount'];

$payment=$movieprice*$num_tkt;
$equityquery=mysql_query("SELECT equity from bank where account_id='$account'");
$equityqry=mysql_query("SELECT equity from bank where account_id='0001-1023-0001'");
$equitydata=mysql_fetch_array($equityquery);
$equity=$equitydata['equity'];
$admin_equity=mysql_fetch_array($equityqry);
$ma_shit=$admin_equity['equity'];
$new_equity=$equity-$payment;
$mamulla=$ma_shit+$payment;

$mid=mysql_query("SELECT mid from movie where name='$name'");
$midata=mysql_fetch_array($mid);
$moid=$midata['mid'];
if($equity<$payment)
{
  echo"<script>alert('Dear customer you do not have sufficient money on your account!')</script>";
}
else {
$user_fname=mysql_query("SELECT * from user where uname='$usernow'");
$user=mysql_fetch_array($user_fname);
$actual_user=$user['fname'];
$actual_user_lname=$user['lname'];
$equity_update=mysql_query("UPDATE bank SET equity=$new_equity WHERE account_id='$account'");
$admin_equity_update=mysql_query("UPDATE bank SET equity=$mamulla WHERE account_id='0001-1023-0001'");
$queryinsert=mysql_query("INSERT INTO payment(customerid,customerid_lname,movieid,pdate,ptime,tkt_num,amount)
values('$actual_user','$actual_user_lname','$moid','$date','$time','$num_tkt','$payment')");

if ($queryinsert==true && $equity_update==true && $admin_equity_update==true)
{
  $email=mysql_query("SELECT email from user where uname='$usernow'");
  $email_fetch=mysql_fetch_array($email);
  $to=$email_fetch['email'];
  require'email/PHPMailer/PHPMailerAutoload.php';

  $mail = new PHPMailer;
  $mail->isSMTP();                  //use SMTP protocal
  $mail->Host = 'smtp.gmail.com';   //backup emails on SMTP server
  $mail->SMTPAuth = true;            //enable authentication
  $mail->Username = 'fabrice5512@gmail.com';
  $mail->Password = 'blaise12';
  $mail->SMTPSecure = 'tls';             //enable tls encruption
  $mail->Port = 587;

  $mail->setFrom('fabrice5512@gmail.com', 'Century cinemas');
  $mail->addReplyTo('', '');
  $mail->addAddress($to);

  $mail->isHTML(true);  // Set email format to HT

  $bodyContent = '<h1> Century cinemas</h1>';
  $bodyContent .= "<p> Dear customer,
    Thank you for using our services,your reservation
    has been confirmed.
    This is an automated e-mail no need to reply to this!</p>"; //message again

  $mail->Subject = 'Booking Movie Ticket Confirmed'; //email subject
  $mail->Body    = $bodyContent;

  if(!$mail->send()) {
  //    echo '<script>alert(Message could not be sent.)</script>';
  //    echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
      echo 'Message has been sent';
  }
?>
    <html>
  <head>
    <style>
    #p{
      position: absolute;
      margin-top: 420px;
      margin-left: 623px;
      color:rgb(204, 102, 0);
      font-family: arial,sans-serif;
      font-weight: bold;
      }

    </style>
  </head>
  <body>
  <div id='p'>Booking confirmed</div>

<?php } ?>
<?php } ?>
<?php
$q=mysql_query("SELECT amount from price where prid in(select priceid from movie where name='$name')");
$fetch_q=mysql_fetch_array($q);
$fetch_amount=$fetch_q['amount'];
$fee=$fetch_amount*$num_tkt;
 ?>
 <p style="position:absolute;top:350px;left:785px;color: rgb(204, 102, 0);font-weight:bold;font-size:20px;">FEE:</p>
 <div class="prce" style="position:absolute;top:370px;left:835px;color: rgb(64,64,64);font-weight:bold;font-size:20px;"><?php echo $fee;?>RWF</div>
<?php }
else {
echo"<script>alert('Bank account incorrect!')</script>";
}
} ?>
</body>
</html>
<html>
<head>
<title>
 century cinemas booking
</title>
<link type="text/css" rel="stylesheet" href="css/style-all.css"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/booking.css"/>
<link  rel="stylesheet" type="text/css" href="css/logo.css"/>
<link  rel="stylesheet" type="text/css" href="css/user_session.css"/>
<style>
.container{
margin-left:400px;
margin-top: -40px;
}
.contact {
margin-top: 90px;
}
.form_input{
  position: relative;
}
.button{
  margin-top:-10px;
  margin-left: 640px;
}
.button input{
  width: 200px;
}
</style>
<script src="validation.js"></script>
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
<div class="logo1">
<a href="home.php">  <img src="img/capture4.png" /></a>
</div>
</div>
</div>
<div class="container">
<form method="POST">
<?php
include'dbconfig.php';
$qry="SELECT * from movie where status='nowshowing'";
$gt=mysql_query($qry);
?>
<select name="movie" required>
  <option selected disabled="true">Select movie
<?php
while($rw=mysql_fetch_array($gt))
{
?>
  <option><?php echo $rw['name']; ?>

<?php } ?>
</select>
<?php
$sqry="SELECT * from schedule where sid in(select scheduleid from movie)";
$do=mysql_query($sqry);
?>
<input type="date" name="date">
<select name="time" required>
  <option selected disabled="true">Select time
<?php
while($rqw=mysql_fetch_array($do))
{
?>
  <option><?php echo $rqw['stime']; ?>
<?php }  ?>
</select>
<?php
$aud_qry="SELECT Auditorium_name from auditorium;";
$aud_result=mysql_query($aud_qry);
?>
<select name="auditorium" required>
  <option selected disabled="true">Select auditorium
<?php
while($aud_rw=mysql_fetch_array($aud_result))
{
?>
  <option><?php echo $aud_rw['Auditorium_name'];?>
	
<?php } ?>
</select>

<select name="seats" required>
  <option selected disabled="true">Select seat
  <?php
		for($seat=1;$seat<=255;$seat++)
		{
			echo "<option value=".$seat.">$seat</option>";
		}
	?>
</select>
<input type=text placeholder="Number Ticket" name="notkt" autocomplete="off" onkeypress="return isNumberKey(event)" required />
<input type="text"  class="form_input" placeholder="Bank account" name="account" autocomplete="off" autofocus="on" required/>
</div>
<div class="button">
<input type=submit value="Book Ticket" name="book"/>
</div>
</div>
</form>
  <div class="contact">
  <ul>
  <li>  <h2>Contact info</h2>
      Century Cinemas kigali<br>
      Avenue Du Commerce,00100 Kigali,Rwanda<br>
      Kigali City Tower,3rd Floor
    </li>
    <li>
         <h2>Copyright</h2>
        &copy 2018 Century Cinemas Kigali All right<br> reserved
    </li>
  </ul>
</div>
</body>
</html>
