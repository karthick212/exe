<?php
include 'config.php';
$id=$_GET['s'];
$d=$_GET['d'];
$del=mysql_query("delete  from caste where id='$id'");

if(!$del)

echo "<script>alert(' The record is not deleted');window.location.href='master.php';</script>";


else
echo "<script>alert(' The record is  deleted');window.location.href='master.php';</script>";

?>