<?php
include('dbconfig.php');
if(isset($_POST['signup']))
{
$fname=$_POST['name'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$uname=$_POST['uname'];
$pswd=$_POST['pswd'];
$gender=$_POST['gender'];
$telno=$_POST['tel'];
$address=$_POST['address'];
$check_email="SELECT email FROM user";
$run=mysql_query($check_email);
$fe=mysql_fetch_object($run);
$output=$fe->email;
if($output==$email)
{
 echo"<script>alert('The email email already exists')</script>";
 exit();
}
$check_telno="SELECT telno FROM user";
$ran=mysql_query($check_telno);
$fe=mysql_fetch_object($ran);
$holla=$fe->telno;
if($holla==$telno)
{
 echo"<script>alert('The telephone number telno already exists')</script>";
 exit();
}
$sql="INSERT INTO user (fname,lname,email,uname,pswd,gender,telno,address)
VALUES('$fname','$lname','$email','$uname','$pswd','$gender','$telno','$address')";
$query=mysql_query($sql) or die(mysql_error());
if ($query==true)
{
?>
<html>
<head>
  <style>
  #p{
    position: absolute;
  margin-top: 430px;
  margin-left: 630px;
  color:rgb(62,62,62);
  font-family: arial,sans-serif;
  font-weight: bold;
  }
#p a{
  text-decoration: none;
  color: rgb(204, 102, 0);
}
#p a:hover{
  text-decoration: underline;
}
  </style>
</head>
<body>
<div id='p'>Signing Up successfull! <a href='http://localhost/century/sign_in.php'>Sign in</a></div>
</body>
</html>
<?php } ?>
<?php } ?>

<html>
<head>
	<title>century cinema SIGN_UP</title>
  <style>
  select{
width: 350px;
height: 45px;
padding: 10px;
color: rgb(204, 102, 0);
position: relative;
left: 2px;
  }
  .email{
    position: relative;
    left: -8px;
  }
  .g{
    text-decoration: none;
    color:#fff;
    font-family: arial,sans-serif;
    font-size: 12px;
    font-weight: bold;
    position: relative;
    left:600px;
    top:-25px;
  }
  .g:hover{
  color:rgb(128, 128, 128);
  }
  #pass{
    position: relative;
    left: 14px;
  }
  #uname{
    position: relative;
    left: -15px;
  }
  </style>
</head>
<link  rel="stylesheet" type="text/css" href="css/style-all.css"/>
<link  rel="stylesheet" type="text/css" href="css/signup.css"/>
<link  rel="stylesheet" type="text/css" href="css/logo.css"/>
<body>
	<div class="logo4">
<a href="index.php">  <img src="img/capture6.png" width='340' /></a>
</div>
<form method='POST'>
<div class="container">
<input type="text" placeholder="First name" name="name" autocomplete="off" autofocus="on" onkeypress="return isAlphaKey(event)" required/>
<input type="text" placeholder="Last name" name="lname" autocomplete="off" autofocus="on" onkeypress="return isAlphaKey(event)" required/><br>
<input type="email" placeholder="E-mail" name="email"  class="email" autocomplete="off" autofocus="on" required/>
<select name="gender" required>
  <option disabled="true"selected>Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  </select>
<input type="password" placeholder="Password" name="pswd" id="pass" required/><img src="img/eye.png" width="30" height="30" onmouseover="pass.type='text'" onmouseout="pass.type='password'"
 style="position:relative;left:-40px; top:9px;"/>
<input type="text" placeholder="Username" id="uname" name="uname" autocomplete="off" autofocus="on" required/><br>
<div class="input_tel"><input type="text" placeholder="Telephone number" name="tel"  autocomplte="off" required/><br></div>
<div class="input_address"><input type="text" placeholder="Address" name="address" autocomplte="off"  required/><br></div>

	<input type="submit" value="Sign Up" name="signup"/></div>

<a href="sign_in.php" class="g">Return back to log in</a>
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
			&copy 2018 Century Cinemas Kigali All right<br> reseved
	</li>
</ul>
</div>
</body>
</html>
