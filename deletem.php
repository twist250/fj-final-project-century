<?php
include('dbconfig.php');
 $del_id=$_GET['del'];
 $query="delete from movie where mid='$del_id'";
if(mysql_query($query))
{
echo "<script>window.open('moviestable.php?deleted=movie has been deleted!!','_self')</script>";
}
?>
