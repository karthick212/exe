<?php

include 'config.php';
 $r_id=$_POST['r_id'];
 
	 $note=$_POST['note'];
	 $billn=trim($_POST['billn']);
	
    $countryname=$_POST['countryname'];
    $country_code = $_POST['country_code'];
    $phone_code = $_POST['phone_code'];
    $country_no = $_POST['country_no'];
   
    $date = $_POST['date'];
	
	 
    $pid = implode(",", $_POST['itemNo']);
    $pname = implode(",", $_POST['itemName']);
    $box = implode(",", $_POST['price']);
    $price = implode(",", $_POST['quantity']);
    $total = implode(",", $_POST['total']);
   
    $totalamount=$_POST['ta'];
	 $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
$f=$date->format('Y-m-d	');	
$c=trim($f);
if($r_id!='')
{
$u="insert into reg(reg,reg_no,date)values('$countryname','$r_id','$c')";

 $s =mysql_query($u);
 
 $sel=mysql_query("select * from customer where cus_id='$r_id' ");
                                    
                                  while($data=mysql_fetch_array($sel))

							 {
								$status=$data['status']; 
								
							$st=	rtrim($status,',');
								//echo $st;
							//	exit;
								 
							 }
  header("location:date1.php?r_id=$st"); 
}

else
{
		$v="insert into invoice(bill_no,cus_id,cus_name,address,mobile,item_no,item_name,price,quantity,netamount,totalamount)values('$billn','$countryname','$country_code','$phone_code','$country_no','$pid','$pname','$box','$price','$total','$totalamount')";
}
	   $sql =mysql_query($v);
	   
	   
	   
	 if($sql)
				  {
						echo "<script>
alert('Register Successfully');
window.location.href='bill1.php?customer=$pid';
</script>";
				  }
				  else
				  {
					  
					  
						echo "<script>
alert('Not Inserted');
window.location.href='bill.php';

    
</script>";
					  
				

	
}

?>