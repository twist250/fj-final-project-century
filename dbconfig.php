<?php
$localhost="localhost";
$dbuser="root";
$password="";
$dbname="century";
$connect=mysql_connect($localhost,$dbuser,$password) or die(mysql_error ());
if($connect)
{
$dbname=mysql_select_db($dbname) or die(mysql_error());
if($dbname)
{
}
}
else {
  echo "Please try again";
}
?>
