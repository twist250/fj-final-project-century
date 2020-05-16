<?php
include('dbconfig.php');
 $delete_id=$_GET['del'];
 $query="delete from schedule where sid='$delete_id'";
if(mysql_query($query))
{
echo "<script>window.open('halltable.php?deleted=schedule has been deleted!!','_self')</script>";
}
?>
