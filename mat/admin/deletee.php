<?php
include 'config.php';
$id=$_GET['id'];

$del=mysql_query("delete  from registerfree where matri_id='$id'");

$del1=mysql_query("delete  from login where username='$id'");

if($del)

echo "<script>alert(' The record is  deleted');window.location.href='viewlist.php?mode=all';</script>";


?>