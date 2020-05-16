<?php
include('dbconfig.php');
 $delete_id=$_GET['del'];
 $query="delete from price where prid='$delete_id'";
if(mysql_query($query))
{
echo "<script>window.open('pricetable.php?deleted=price has been deleted!!','_self')</script>";
}
?>
