<?php 
include('config.php');
if(isset($_GET['14id']))
{
	$id=$_GET['14id'];

	//echo $id;
	$sql= "UPDATE registerfree SET category='14' WHERE matri_id='$id'";

}
elseif(isset($_GET['50id']))
{
	$id=$_GET['50id'];

	//echo $id;
	$sql= "UPDATE registerfree SET category='50' WHERE matri_id='$id'";

}


 $query=mysql_query($sql);
 if($query){
 echo "<script>
alert('Profile Allocation Successfully...! ');
window.location.href='profile.php';
</script>";
            } else {
           echo "<script>
alert('Profile Allocate Properly....!');
window.location.href='profile.php';
</script>";	  
            }
// while($row=mysql_fetch_array($query))
// {                                                                                             
// echo "<pre>";
// print_r($row);exit;
// $id=$row['id'];
// $vat=$row['price'];

// $a=explode(',',$vat);
// $a_sum=array_sum($a);
// $insert="update invoice2 set saddress='$a_sum' where id='$id'";
// //echo $insert;exit;
// }
?>