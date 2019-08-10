<?php
include 'config.php';
$id=$_GET['id'];
//$d=$_GET['d'];
$del=mysql_query("delete  from registerfree where matri_id='$id'");

if(!$del)
	

echo "<script>alert(' The record is not deleted');window.location.href='list_view.php?mode=all';</script>";


else
echo "<script>alert(' The record is  deleted');window.location.href='list_view.php?mode=all';</script>";

?>