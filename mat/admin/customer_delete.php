<?php
include 'config.php';
$id=$_GET['id'];
//$d=$_GET['d'];
$del=mysql_query("delete  from add_customer where id='$id'");

if(!$del)

echo "<script>alert(' The record is not deleted');window.location.href='cus_view.php';</script>";


else
echo "<script>alert(' The record is  deleted');window.location.href='cus_view.php';</script>";

?>