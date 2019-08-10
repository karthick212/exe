<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Inaikkumkarangal  Matrimony</title> <link rel="icon" type="image/png" sizes="32x32" href="images/header.png"> 
</head>
<style>
@font-face {

font-family: 'Bamini';

src: url('font/Bamini.ttf');

}

.s{
    <?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>
	font-size:16px;
}

</style>

<style>
.a{
	resize:none;}
</style>
<script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=500,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
           popupWin.document.close();
                }
     </script>
     <script>
function printPage(id)
{
   var html="<html>";
   html+= document.getElementById(id).innerHTML;

   html+="</html>";

   var printWin = window.open('', '_blank', 'width=500,height=300');
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   printWin.close();
}
</script>
     <script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=500,width=300');
        mywindow.document.write('<html><head><title>my div</title>');
       
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
 <script type="text/javascript">     

function myFunction() {
    window.print();
}
</script>
  <script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=1000,height=1000');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
           popupWin.document.close();
                }
     </script>
     <script>
function printPage(id)
{
   var html="<html>";
   html+= document.getElementById(id).innerHTML;

   html+="</html>";

   var printWin = window.open('', '_blank', 'width=1000,height=1000');
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   printWin.close();
}
</script>
     <script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
 <script type="text/javascript">     

function myFunction() {
    window.print();
}
</script>
<style type="text/css" media="print">
@page { size: auto;  margin: 0mm; }
</style>
<body ><div id="block1">


<?php
include 'config.php';
$caste=$_GET['caste'];
$a=$_GET['age1'];
$b=$_GET['age2'];
$gender=$_GET['gender'];
$s=$_GET['star'];
// echo $caste;
// echo $a;
// echo $b;
// echo $gender;
// echo $s;



if($a != '' && $b != '' && $s != '' && $gender != '' && $caste != '')
            {
              $sql="SELECT * FROM registerfree where  age>='$a' and age<='$b' and gender='$gender' and star='$s' and caste='$caste'" ;
              // echo $sql;
              

            }
            elseif($a != '' && $b != '' && $gender != '' && $caste != '')
            {

              $sql="SELECT * FROM registerfree where  age>='$a' and age<='$b' and gender='$gender' and caste='$caste'";
             
              
            }
            elseif($a != '' && $b != '' && $gender != '')
            {
              $sql="SELECT * FROM registerfree where  age>='$a' and age<='$b' and gender='$gender'";
              
            }
             elseif($a != '' && $b != '')
            {
              $sql="SELECT * FROM registerfree where  age>='$a' and age<='$b'";
              
            }
          
            else{
              // echo "<script>alert('Please Select all the column properly'); window.location.href='planreport1.php'</script>";
            }

$result = mysql_query($sql)or die(mysql_error());
$k=mysql_num_rows($result);
if($k=='')
{

echo "<script>alert('No Records Found');self.location='planreport1.php';</script>";
}
while ($row = mysql_fetch_array($result)) {
?>


<table width="1003" border="0" align="center">
  <tr><br>
    <td height=""><table width="1003" height="" border="0">

    <tr ><!-- <td valign="bottom" height="" colspan="2" align="center" style="font-weight:bold; font-size:14px;font-weight:bold; color: #246d01;">ஸ்ரீ லிங்கம்மாள் துணை</td> --></tr>
       <tr><td height="" colspan="2" align="center"></td></tr>
      <tr align="center"><br>
        <td width="647" height="" align="center" style="font-size: 40px; color:#d8348e;"> <!-- <img src="images/reg.jpg" width="400px" height="75px" /> --> Inaikkum karangal matrimony</td>
      <td width="346"> <table width="246" border="0" cellspacing="0" cellpadding="0">
          <tr >
            
       <th width="242" scope="col" align="left"  style="font-size:14px; padding:12px;font-weight:bold; color: #246d01;" >
              பதிவு எண்:<span style="font-size:26px;font-weight:bold; color: #246d01;"><?php echo  $row['matri_id'];?></span></th>
          
            <td width="10">
          </tr>
        </table>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height=""><hr/><table width="1003" border="0" style="font-weight:bold; color: #246d01;" >
      <tr>
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">பெயர்</td>
        <td width="9">:</td>
        <td width="343" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['name'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;">பாலினம்</td>
        <td width="9">:</td>
        <td width="256" style="font-weight:bold;font-size:16px;"><?php echo  $row['gender'];?></td>
      </tr>
      <tr>
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">மதம்</td>
        <td>:</td>
        <td width="343" style="font-weight:bold;font-size:16px;font-family: Bamini, Helvetica, sans-serif;"><?php echo  $row['religion'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;">ஜாதி</td>
        <td>:</td>
        <td width="256" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['caste'];?></td>
      </tr>
       <tr>
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">உட்பிரிவு</td>
        <td>:</td>
        <td width="343" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['subcaste'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;">திருமண நிலை</td>
        <td>:</td>
        <td width="256" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['mstatus'];?></td>
      </tr>
     
     <tr>
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">பிறந்த தேதி்</td>
        <td>:</td>
        <td width="343" style="font-weight:bold;font-size:18px;"><?php echo  $row['dob'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;">வயது</td>
        <td>:</td>
        <td width="256" style="font-weight:bold;font-size:18px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['age'];?></td>
      </tr>
      <tr>
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">கல்வி தகுதி</td>
        <td>:</td>
        <td width="343" style="font-weight:bold;font-size:18px;"><?php echo  $row['edu'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;">உயரம்</td>
        <td>:</td>
        <td width="256" style="font-weight:bold;font-size:16px;"><?php echo  $row['height'];?>&nbsp;&nbsp;&nbsp;<span style=" font-size:12px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>">நிறம்:</span><span style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['color'];?></span></td>
      </tr>
       <tr>
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">தொழில்/பணி</td>
        <td>:</td>
        <td width="343" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['working_place'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;">சொத்து விபரம்</td>
        <td>:</td>
        <td width="256" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['assests'];?></td>
      </tr>
      <tr >
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">மாத வருமானம்</td>
        <td>:</td>
        <td width="343" style="font-weight:bold;font-size:16px;"><?php echo  $row['monthlyincome'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;">பணிபுரியும் இடம்</td>
        <td>:</td>
        <td width="256" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['w_place'];?></td>
      </tr>
      <tr>
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">தந்தை பெயர்</td>
        <td>:</td>
        <td width="343" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['father_name'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;">தாயார் பெயர்</td>
        <td>:</td>
        <td width="256" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['mother_name'];?></td>
      </tr>
      <tr>
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">தந்தை தொழில் </td>
        <td>:</td>
        <td width="343" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['father_occ'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;">தாயார் தொழில் </td>
        <td>:</td>
        <td width="256" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['mother_occ'];?></td>
      </tr>
      <tr>
         <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">சகோதரர்கள்</td>
        <td>:</td>
        <td width="343" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['bro'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;">திருமணமானவர்</td>
        <td>:</td>
        <td width="256" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['mbro'];?></td>
      </tr>
      <tr>
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">சகோதரிகள்</td>
        <td>:</td>
        <td width="343" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['sis'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;">திருமணமானவர்</td>
        <td>:</td>
        <td width="256" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['msis'];?></td>
      </tr>
       <tr>
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">பூர்வீகம்</td>
        <td>:</td>
        <td width="343" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['native'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;">இருப்பிடம் </td>
        <td>:</td>
        <td width="256" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['hometown'];?></td>
      </tr>
       <tr>
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">குல தெய்வம்</td>
        <td>:</td>
        <td width="343" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['god'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;">கோத்ரம்</td>
        <td>:</td>
        <td width="256" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['gothram'];?></td>
      </tr>
       <tr>
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">ராசி</td>
        <td>:</td>
        <td width="343" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['rasi'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;">நட்சத்திரம்</td>
        <td>:</td>
        <td width="256" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['star'];?></td>
      </tr>
      <tr>
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">லக்னம்</td>
        <td>:</td>
        <td width="343" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['lagnam'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;">திசை இருப்பு</td>
        <td>:</td>
        <td width="256" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['thisai'];?></td>
      </tr>
       <tr>
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">சீர் வரிசை</td>
        <td>:</td>
        <td width="343" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['a1'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;"></td>
        <td></td>
        <td width="256" style="font-weight:bold;font-size:18px;"></td>
      </tr>
     
      
       <tr>
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">எதிர்பார்ப்பு</td>
        <td>:</td>
        <td  colspan="3" align="left" style="font-weight:bold;font-size:16px;"><?php echo  $row['expectation'];?></td>
       
       
      </tr>
      <tr>
        <td width="186" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">வருடம்</td>
        <td>:</td>
        <td width="343" style="font-weight:bold;font-size:16px;"><?php echo  $row['thisai_year'];?></td>
        <td width="1">&nbsp;</td>
         <td width="169" align="left"style=" font-size:12px;">மாதம்:<span style="font-weight:bold;font-size:16px;"><?php echo  $row['thisai_month'];?></span></td>
        <td>:</td>
        <td width="256" style="font-weight:bold;font-size:16px;"><span style=" font-size:12px;">நாள்</span>:<?php echo  $row['thisai_date'];?></td>
      </tr>
        </table></td>
    </tr>
  </table></td>
  </tr>
   
   <tr>
    <td ><table width="1003" border="0" cellspacing="0" cellpadding="0" align="center" class="b" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>">
      <tr valign="top">
        <th height="373"  align="left" scope="col"></th>
        <th scope="col" align="left">
        
        <table  border="1" align="center" cellpadding="0"  id="table6" style="border-collapse: collapse;margin-left:45px;">
						<tbody class="b" style="font-weight:bold;font-size:18px;"><tr class="b" style="font-weight:bold;font-size:18px;">
							<td width="77"  >
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r1'];?> <?php
$c1=$row['one'];				
$array =  explode(',', $c1);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="77"  >
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r2'];?> <?php
$c2=$row['two'];				
$array =  explode(',', $c2);
foreach ($array as $item) {
	//echo $item;

	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="77"  >
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r3'];?> <?php
$c3=$row['three'];				
$array =  explode(',', $c3);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="77"  >
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r4'];?> <?php
$c4=$row['four'];				
$array =  explode(',', $c4);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="77" rowspan="4">&nbsp;</td>
							<td width="58">
						<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r13'];?> <?php
$c13=$row['aone'];				
$array =  explode(',', $c13);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r14'];?> <?php
$c14=$row['atwo'];				
$array =  explode(',', $c14);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r15'];?> <?php
$c15=$row['athree'];				
$array =  explode(',', $c15);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="65">
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r16'];?> <?php
$c16=$row['afour'];				
$array =  explode(',', $c16);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
						</tr>
						<tr>
							<td width="77" >
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r12'];?> <?php
$c12=$row['twelve'];				
$array =  explode(',', $c12);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="114" colspan="2" rowspan="2" valign="top" align="center" style="background:url(images/user-avatar1.png) no-repeat;"><span style="font-size:14px;"><br /><br /> </span><br /><br/><br /><strong><span lang="ta" xml:lang="ta" style="font-weight:bold; color: #246d01;">ராசி</span></strong><br /></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r5'];?> <?php
$c5=$row['five'];				
$array =  explode(',', $c5);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r24'];?> <?php
$c24=$row['atwelve'];				
$array =  explode(',', $c24);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td><td width="114" colspan="2" rowspan="2" valign="top" align="center" style="background:url(images/user-avatar1.png) no-repeat;"><span style="font-size:14px;"><br /><br /></span><br /><br/><br /><strong><span lang="ta" xml:lang="ta" style="font-weight:bold; color: #246d01;">அம்சம்</span></strong><br /></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r17'];?> <?php
$c17=$row['afive'];						
$array =  explode(',', $c17);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
						</tr>
						<tr>
							<td width="77" >
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r11'];?> <?php
$c11=$row['eleven'];				
$array =  explode(',', $c11);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r6'];?> <?php
$c6=$row['six'];				
$array =  explode(',', $c6);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r23'];?> <?php
$c23=$row['aeleven'];				
$array =  explode(',', $c23);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r18'];?> <?php
$c18=$row['asix'];				
$array =  explode(',', $c18);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
						</tr>
						<tr>
							<td width="77" >
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r10'];?> <?php
$c10=$row['ten'];				
$array =  explode(',', $c10);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="77">
						  <textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r9'];?> <?php
$c9=$row['nine'];				
$array =  explode(',', $c9);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r8'];?> <?php
$c8=$row['eight'];				
$array =  explode(',', $c8);



foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r7'];?> <?php
$c7=$row['seven'];				
$array =  explode(',', $c7);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r22'];?> <?php
$c22=$row['aten'];				
$array =  explode(',', $c22);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r21'];?> <?php
$c21=$row['anine'];				
$array =  explode(',', $c21);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							<td width="77">
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r20'];?> <?php
$c20=$row['aeight'];				
$array =  explode(',', $c20);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
  <td width="77">
							<textarea  class="a" style="overflow: hidden;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> text-align:justify; font-weight: bold; color: #246d01;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48"> <?php   $row['r19'];?> <?php
$c19=$row['aseven'];				
$array =  explode(',', $c19);
foreach ($array as $item) {
	//echo $item;
	

	?>
   
  <?php $t=trim($item); echo $t; }  ?>
  </textarea></td>
							
			  </tr>
			</tbody></table> 
             
        </th>

      </tr>
      
       
    </table></td>
  </tr>
       
  </table></td>
  </tr>
 <br>
  <tr>
    <td ><table width="919" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
    <td ><table width="1000"  border="0" align="left" cellpadding="0" cellspacing="0" style="margin-left:0px;">
      <tr>
        <th width="996" height=""   align="left" scope="col"><table width="99%" height="95" border="0" cellpadding="0" cellspacing="0">
           <tr >
            <td width="20%" height="55"  align="left" class="php" style="font-size:12px;font-weight: bold; color: #246d01;" scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;முகவரி</td>
            <td width="1%" scope="col"  align="left" style="font-weight: bold; color: #246d01;">:</td>
            <td width="79%" scope="col"align="left"  class="b2"  style="font-weight: bold; color: #246d01;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> font-size:16px"><?php echo  $row['dno'];?> , <?php echo  $row['adres1'];?> , <?php echo  $row['adres2'];?> , <?php echo  $row['city'];?></td>
          </tr>
          <tr >
            <td width="20%" height="40"  align="left" class="php" style="font-size:12px;font-weight: bold; color: #246d01;" scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;தொலைபேசி</td>
            <th width="1%" scope="col" align="left" style="font-weight: bold; color: #246d01;">:</th>
            <td width="79%" scope="col"  align="left"  class="b2"  style="font-weight: bold; color: #246d01; font-size:20px" ><?php echo  $row['phone'];?> </td>
          </tr>
        </table></th>
        
      </tr>
      
     
  </table>
      </td>
  </tr>
 
  
  
 
</table> <?php } ?>
</td>
  </tr></div> 
</table>

</body>
</html>

