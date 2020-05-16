<?php
include('dbconfig.php');
 $delete_id=$_GET['del'];
 $query="delete from hall where hid='$delete_id'";
if(mysql_query($query))
{
echo "<script>window.open('halltable.php?deleted=hall has been deleted!!','_self')</script>";
}
?>
