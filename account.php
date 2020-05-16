<?php
ob_start();
include('authentication.php');
include('dbconfig.php');
$usernow=$_SESSION['username'];
$qury=mysql_query("SELECT * from user where uname='$usernow'");
$fetch=mysql_fetch_array($qury);
?>
<?php
if(isset($_POST['edit1']))
{
$fname=$_POST['fname'];
$fname_qry="UPDATE user SET fname='$fname' where uname='$usernow'";
if(mysql_query($fname_qry)==true)
{
echo"<script>window.open('account.php','_self')</script>";
}
else
{
echo"<script>alert('Please Retry!')</script>";
}
}
if(isset($_POST['edit2']))
{
$lname=$_POST['lname'];
$lname_qry="UPDATE user SET lname='$lname' where uname='$usernow'";
if(mysql_query($lname_qry)==true)
{
echo"<script>window.open('account.php','_self')</script>";
}
else
{
echo"<script>alert('Please Retry!')</script>";
}
}
if(isset($_POST['edit3']))
{
$email=$_POST['email'];
$email_qry="UPDATE user SET email='$email' where uname='$usernow'";
if(mysql_query($email_qry)==true)
{
echo"<script>window.open('account.php','_self')</script>";
}
else
{
echo"<script>alert('Please Retry!')</script>";
}
}


if(isset($_POST['gender']))
{
$gender=$_POST['gender'];
if($gender=='')
{
echo "<script> alert('Please select a gender!')</script>";
}
else {
$gender_qry="UPDATE user SET gender='$gender' where uname='$usernow'";
if(mysql_query($gender_qry)==true)
{
echo"<script>window.open('account.php','_self')</script>";
}
else
{
echo"<script>alert('Please Retry!')</script>";
}
}
}
if(isset($_POST['edit6']))
{
$telno=$_POST['telno'];
$telno_qry="UPDATE user SET telno='$telno' where uname='$usernow'";
if(mysql_query($telno_qry)==true)
{
echo"<script>window.open('account.php','_self')</script>";
}
else
{
echo"<script>alert('Please Retry!')</script>";
}
}
if(isset($_POST['edit7']))
{
$address=$_POST['address'];
$address_qry="UPDATE user SET address='$address' where uname='$usernow'";
if(mysql_query($address_qry)==true)
{
echo"<script>window.open('account.php','_self')</script>";
}
else
{
echo"<script>alert('Please Retry!')</script>";
}
}
if(isset($_POST['update']))
{
$input=$_POST['input'];
$get=$_POST['pass'];
$cu_pswd=mysql_query("SELECT * FROM user WHERE uname='$usernow'");
$fetch_cu_pswd=mysql_fetch_array($cu_pswd);
$actual_pswd=$fetch_cu_pswd['pswd'];
if($input==$actual_pswd)
{
$change="UPDATE user set pswd='$get' where uname='$usernow'";
if(mysql_query($change)==true)
{
echo("<script>alert('password changed successfully!')</script>");
}
else{
echo("<script>alert('Try again!')</script>");
}
}
else {
echo("<script>alert('password don't match!')</script>");
}
}
if(isset($_POST['edit4']))
{
$username=$_POST['uname'];
$uname_qry="UPDATE user SET uname='$username' where uname='$usernow'";
if(mysql_query($uname_qry)==true)
{
echo"<script>window.open('account.php','_self')</script>";
}
else
{
echo"<script>alert('Please Retry!')</script>";
}
}
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
<style>
table{
font-weight: bold;
color: #fff;
}
table tr td{
  padding: 10px;
  padding-left: 20px;
}
h1{
  font-size: 30px;
  margin-left: 280px;
  margin-top: -10px;
}
p{
  color: rgb(204, 102, 0);
}
input{
padding: 10px;
color: rgb(204, 102, 0);
}
.details{
height:600px;
width: 750px;
margin-left: 350px;
}
select{
  width: 183px;
  height: 35px;
  padding: 10px;
  color: rgb(204, 102, 0);
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
<div id="user"><li><a href="account.php"><?php echo $fetch['fname']; ?></a>
<ul>
  <li><a href="account.php">Profile</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
</li>
</div>
</ul>
</div>
<div class="logo5">
<a href="home.php">  <img src="img/captur01.png" /></a>
</div>
</div>
<div class="details">
  <h1>Profile</h1><br><br>
  <form method="post" action="?">
<table>
  <tr><td><p>First name</p></td><td>:<?php echo $fetch['fname']; ?>
<td><input type="text" placeholder="First name" name="fname"  autocomplete="off" onkeypress="return isAlphaKey(event)" required/></td>
<td><input type="submit" value="Edit" name="edit1"/></td>
  </tr>
</form>
    <form method="post" action="?">
  <tr><td><p>Last name</p></td><td>:<?php echo $fetch['lname']; ?>
<td><input type="text" placeholder="Last name" name="lname"   autocomplete="off" onkeypress="return isAlphaKey(event)" required/></td>
<td><input type="submit" value="Edit" name="edit2"/></td>
  </tr>
</form>
    <form method="post" action="?">

  <tr><td><p>E-mail </p></td><td>:<?php echo $fetch['email']; ?></td>
<td><input type="email" placeholder="Email" name="email" autocomplete="off" required /></td>
<td><input type="submit" value="Edit" name="edit3"/></td>
  </tr>
</form>
    <form method="post" action="?">

  <tr><td><p>Username </p></td><td>:<?php echo $fetch['uname']; ?></td>
    <td><input type="text" placeholder="Username" name="uname"  autocomplete="off" required/></td>
    <td><input type="submit" value="Edit" name="edit4"/></td>
  </tr>
</form>
    <form method="post" action="?">

  <tr><td><p>Change Password</p></td>
  <td><input type="password" placeholder="Current password" name="input" id="pass1" required/>
  <img src="img/eye.png" width="25" height="25" onmouseover="pass1.type='text'" onmouseout="pass1.type='password'"
   style="position:relative;left:-40px; top:7px;"/></td>
  <td><input type="password" placeholder="New password" name="pass" id="pass2" required/>
  <img src="img/eye.png" width="25" height="25" onmouseover="pass2.type='text'" onmouseout="pass2.type='password'"
   style="position:relative;left:-40px; top:7px;"/></td>
  <td><input type="submit" value="Edit" name="update"/></td>
</tr>
</form>
    <form method="post" action="?">

  <tr><td><p>Gender</p></td><td>:<?php echo $fetch['gender']; ?></td>
    <td><select name="gender">
      <option disabled="true"selected>Gender</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      </select>
    </td>
    <td><input type="submit" value="Edit" name="edit5"/></td>
  </tr>
</form>
    <form method="post" action="?">

  <tr><td><p>Telephone number</p></td><td>:<?php echo $fetch['telno']; ?></td>
    <td><input type="text" placeholder="Telephone number" name="telno"  autocomplete="off" required/></td>
    <td><input type="submit" value="Edit" name="edit6"/></td>
  </tr>
</form>
    <form method="post" action="?">

  <tr><td><p>Address</p></td><td>:<?php echo $fetch['address']; ?></td>
    <td><input type="text" placeholder="address" name="address" autocomplete="off" required/></td>
    <td><input type="submit" value="Edit" name="edit7"/></td>
  </tr>
</table>
</form>
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
