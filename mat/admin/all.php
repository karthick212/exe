<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Inaikkumkarangal  Matrimony</title> <link rel="icon" type="image/png" sizes="32x32" href="images/header.png"> 
</head>
 

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    font-family: Arial;
}

* {
    box-sizing: border-box;
}

form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}
</style>
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

<div align="right">
<form class="example" action="viewprofile.php" style="margin:auto;max-width:300px;margin-top: 23px;" method="post">

  <input type="text" placeholder="Search.." name="search2">
  <button style="padding: 5px 13px 23px 10px;" type="submit" name="search_id"><i class="fa fa-search"></i></button>
</form>
</div>

<?php
include 'config.php';


$mode=$_GET['mode'];
if($mode=='all'){
  $q="SELECT * FROM `registerfree`  ORDER BY id DESC ";
}
elseif($mode=='male')
{
 $q="SELECT * FROM `registerfree` WHERE gender='Male'  ORDER BY id DESC ";
}
elseif($mode=='female')
{
   $q="SELECT * FROM `registerfree` WHERE gender='Female'  ORDER BY id DESC ";
}
else{
  echo "Choose the tab";
}

$result = mysql_query($q)or die(mysql_error());
$k=mysql_num_rows($result);
if($k=='')
{

echo "<script>alert('No Records Found');self.location='dashboard.php';</script>";
}
while ($row = mysql_fetch_array($result)) {
?>
<br>
<br>

<table width="1003" align="center" style="border:5px double #9c0a57;">
  <tr style="height: 150px;"><br>
    <td height="" style="border: 1px solid;"><table width="1003" height="" border="0">

    <tr ><!-- <td valign="bottom" height="" colspan="2" align="center" style="font-weight:bold; font-size:14px;font-weight:bold; color: #246d01;">ஸ்ரீ லிங்கம்மாள் துணை</td> --></tr>
       <tr><td height="" colspan="2" style="font-weight:bold; font-size:12px;"></td></tr>
      <tr><br>
        <td width="420"  style="font-size: 35px; color:#d8348e;"> <!-- <img src="images/reg.jpg" width="400px" height="75px" /> -->&nbsp;&nbsp;&nbsp;INAIKKUM <br>&nbsp;&nbsp;&nbsp;KARANGAL </td>
      <td > <table border="0" cellspacing="0" cellpadding="0">
          <tr >
            
       <th scope="col" align="left"  style="font-size:14px; padding:12px;font-weight:bold; color: #d8348e;" >
              பதிவு எண்:<span style="font-size:26px;font-weight:bold; color: #d8348e;">
                &nbsp;<?php echo  $row['matri_id'];?>  </span></th>

                <td width="388" style="font-weight:bold;font-size:16px;">
   <img src="<?php echo '../'. $row['up_profile']; ?>" style="margin-left: 12em;
   margin-left: 6em;
    width: 79%;
    height: 22em;
    margin-top: -29px;
    border: 2px solid #9c0a57;"></td>
				
				 
          
            <td width="10">
          </tr>
		 
        </table>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="">
     
      <table width="1003" border="0" style="font-weight:bold; color: #d8348e;" >
      <tr>
        <td width="143" height="29" align="left"  style="padding-left:50px; font-size:12px;font-weight:bold; color: #d8348e;">பெயர்</td>
        <td width="10">:</td>
        <td width="329" style="font-weight:bold;font-size:16px;font-weight:bold; color: #d8348e;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['name'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;">பாலினம்</td>
        <td width="10">:</td>
        <td width="388" style="font-weight:bold;font-size:16px;"><?php echo  $row['gender'];?></td>
      </tr>
      <tr>
        <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">மதம்</td>
        <td>:</td>
        <td width="329" style="font-weight:bold;font-size:16px;font-family: Bamini, Helvetica, sans-serif;"><?php echo  $row['religion'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;">ஜாதி</td>
        <td>:</td>
        <td width="388" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['caste'];?></td>
      </tr>
       <tr>
        <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">உட்பிரிவு</td>
        <td>:</td>
        <td width="329" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['subcaste'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;">திருமண நிலை</td>
        <td>:</td>
        <td width="388" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['mstatus'];?></td>
      </tr>
     
     <tr>
        <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">பிறந்த தேதி்</td>
        <td>:</td>
        <td width="329" style="font-weight:bold;font-size:18px;"><?php echo  $row['dob'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;">வயது</td>
        <td>:</td>
        <td width="388" style="font-weight:bold;font-size:18px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['age'];?></td>
      </tr>
      <tr>
        <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">கல்வி தகுதி</td>
        <td>:</td>
        <td width="329" style="font-weight:bold;font-size:18px;"><?php echo  $row['edu'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;">உயரம்</td>
        <td>:</td>
        <td width="388" style="font-weight:bold;font-size:16px;"><?php echo  $row['height'];?>&nbsp;&nbsp;&nbsp;<span style=" font-size:12px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>">நிறம்:</span><span style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['color'];?></span></td>
      </tr>
       <tr>
        <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">தொழில்/பணி</td>
        <td>:</td>
        <td width="329" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['working_place'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;">சொத்து விபரம்</td>
        <td>:</td>
        <td width="388" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['assests'];?></td>
      </tr>
      <tr >
        <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">மாத வருமானம்</td>
        <td>:</td>
        <td width="329" style="font-weight:bold;font-size:16px;"><?php echo  $row['monthlyincome'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;">பணிபுரியும் இடம்</td>
        <td>:</td>
        <td width="388" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['w_place'];?></td>
      </tr>
      <tr>
        <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">தந்தை பெயர்</td>
        <td>:</td>
        <td width="329" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['father_name'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;">தாயார் பெயர்</td>
        <td>:</td>
        <td width="388" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['mother_name'];?></td>
      </tr>
      <tr>
        <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">தந்தை தொழில் </td>
        <td>:</td>
        <td width="329" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['father_occ'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;">தாயார் தொழில் </td>
        <td>:</td>
        <td width="388" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['mother_occ'];?></td>
      </tr>
      <tr>
         <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">சகோதரர்கள்</td>
        <td>:</td>
        <td width="329" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['bro'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;">திருமணமானவர்</td>
        <td>:</td>
        <td width="388" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['mbro'];?></td>
      </tr>
      <tr>
        <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">சகோதரிகள்</td>
        <td>:</td>
        <td width="329" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['sis'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;">திருமணமானவர்</td>
        <td>:</td>
        <td width="388" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['msis'];?></td>
      </tr>
       <tr>
        <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">பூர்வீகம்</td>
        <td>:</td>
        <td width="329" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['native'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;">இருப்பிடம் </td>
        <td>:</td>
        <td width="388" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['city'];?></td>
      </tr>
       <tr>
        <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">குல தெய்வம்</td>
        <td>:</td>
        <td width="329" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['god'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;">கோத்ரம்</td>
        <td>:</td>
        <td width="388" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['gothram'];?></td>
      </tr>
       <tr>
        <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">ராசி</td>
        <td>:</td>
        <td width="329" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['rasi'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;">நட்சத்திரம்</td>
        <td>:</td>
        <td width="388" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['star'];?></td>
      </tr>
      <tr>
        <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">லக்னம்</td>
        <td>:</td>
        <td width="329" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['lagnam'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;">திசை இருப்பு</td>
        <td>:</td>
        <td width="388" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['thisai'];?></td>
      </tr>
       <tr>
        <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">சீர் வரிசை</td>
        <td>:</td>
        <td width="329" style="font-weight:bold;font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['a1'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;"></td>
        <td></td>
        <td width="388" style="font-weight:bold;font-size:18px;"></td>
      </tr>
     
      
       <tr>
        <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">எதிர்பார்ப்பு</td>
        <td>:</td>
        <td  colspan="3" align="left" style="font-weight:bold;font-size:16px;"><?php echo  $row['expectation'];?></td>
       
       
      </tr>
      <tr>
        <td width="143" height="29" align="left"  style="padding-left:50px;font-size: 13px;font-weight: bold;">வருடம்</td>
        <td>:</td>
        <td width="329" style="font-weight:bold;font-size:16px;"><?php echo  $row['thisai_year'];?></td>
        <td width="1">&nbsp;</td>
         <td width="92" align="left"style=" font-size:12px;">மாதம்:<span style="font-weight:bold;font-size:16px;"><?php echo  $row['thisai_month'];?></span></td>
        <td>:</td>
        
			
      </tr>

      <tr >
            <td width="20%" height="55"  align="left" class="php" style="font-size:12px;font-weight: bold; color: #d8348e;" scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;முகவரி</td>
            <td width="1%" scope="col"  align="left" style="font-weight: bold; color: #d8348e;">:</td>
            <td width="79%" scope="col"align="left"  class="b2"  style="font-weight: bold; color:#d8348e;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?> font-size:16px"><?php echo  $row['dno'];?> , <?php echo  $row['address'];?> , <?php echo  $row['city'];?></td>
          </tr>

          <tr >
            <td width="20%" height="40"  align="left" class="php" style="font-size:12px;font-weight: bold; color:#d8348e;" scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;தொலைபேசி</td>
            <th width="1%" scope="col" align="left" style="font-weight: bold; color: #d8348e;">:</th>
            <td width="79%" scope="col"  align="left"  class="b2"  style="font-weight: bold; color: #d8348e; font-size:20px" ><?php echo  $row['mobile'];?>,<?php echo  $row['land'];?> </td>
          </tr>
        </table>


<table width="1003" border="0" cellspacing="0" cellpadding="0" align="center" class="b" style="font-weight:bold;font-size:16px;">
      <tbody><tr valign="top">
        <th height="373" align="left" scope="col"></th>
        <th scope="col" align="left">
        
        <table border="1" align="center" cellpadding="0" id="table6" style="border-collapse: collapse;">
            <tbody class="b" style="font-weight:bold;font-size:18px;line-height: 0.89;"><tr class="b" style="font-weight:bold;font-size:18px;">
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color:#d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
  கு௫  </textarea></td>
              <td width="77" rowspan="4">&nbsp;</td>
              <td width="58">
            <textarea class="a" style="overflow: hidden; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color:#d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td>
              <td width="65">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td>
            </tr>
            <tr>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
  ராகு  </textarea></td>
              <td width="114" colspan="2" rowspan="2" valign="top" align="center" style="background:url(images/user-avatar1.png) no-repeat;"><span style="font-size:14px;"><br><br> </span><br><br><br><strong><span lang="ta" xml:lang="ta" style="font-weight:bold; color: #d8348e;">ராசி</span></strong><br></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
  கேது  </textarea></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color:#d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td><td width="114" colspan="2" rowspan="2" valign="top" align="center" style="background:url(images/user-avatar1.png) no-repeat;"><span style="font-size:14px;"><br><br></span><br><br><br><strong><span lang="ta" xml:lang="ta" style="font-weight:bold; color: #d8348e;">அம்சம்</span></strong><br></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td>
            </tr>
            <tr>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
  சனி   
  லக்னம்  </textarea></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td>
            </tr>
            <tr>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color:#d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
  சுக்கிரன்  </textarea></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color: red; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
  புதன்   
  சூரியன்  </textarea></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color:#d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
  சந்திரன்   
  செவ்வாய்  </textarea></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden;font-family: Bamini, Helvetica, sans-serif; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color:#d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td>
              <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td>
  <td width="77">
              <textarea class="a" style="overflow: hidden; font-weight: bold; color: #d8348e; text-align:justify;  font-size:14px;font-weight:bold;" rows="6" name="r1" cols="11" tabindex="48">     
    </textarea></td>
              
        </tr>
      </tbody></table> 
             
        </th>

      </tr>
      
       
    </tbody></table>


      </td> </tr>
   
      </table></td>
  </tr>
   
   <tr>
    <td >
	<!--jathagambox-->
	
             
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
