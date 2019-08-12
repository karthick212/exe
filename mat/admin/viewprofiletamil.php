<?php
session_start();
include 'config.php';
?>
<style>
footer{
      position: relative;
    width: 100%;
}
.printpage
{
   border:1px solid #8b0000;
   width: 80%;
   margin: 20px 140px 20px;background-image: radial-gradient(#ff000038, #ffff0052, #eb0c99);
}
@media (max-width: 360px)
{
  footer{
      position: relative;
    width: 1234px;
}
  .printpage { width: 80%;
    margin: 20px 140px 20px;
    border: 0px solid #8b0000;
    background-image: radial-gradient(#fff, #fff, #fff);}
}
#table5
{
  padding-bottom: 40px;
}
.kattam
{
  overflow: hidden;
  text-align:justify;
  padding-left:2px ;  
  font-size: 13px;
  font-weight: 500;
}
.tdheader
{
  padding-left:0px;
  font-size:16px;
  font-weight:bold;
}
.tdvalue
{
  padding-left:3px;  
  font-size:16px;
  vertical-align:top; 
  /*font-family: Bamini, Helvetica, sans-serif;*/
}
.tblborder
{
  padding-left: 5px;
  padding-right: 10px;
  word-spacing: 10;
  border-style: solid;
  border-width: 3px;
  background-color: white;
  font-size:16px;
  width:11.4%;
  height:90px;
}
.heig{
  line-height: 50px !important;
}
.open-buttons {
 font-size: 13px;
 line-height: 22px;
 color: #7F7F7F;
 font-family: 'Open Sans';
 font-weight: 600;
 background-color: #c410d0;
 color: white;
 padding: 4px 7px;
 border: none;
 cursor: pointer;
 width: 152px;
 margin-top: -17px;
 margin-right: -401px;
}
textarea
{
  border-color: black;
}
.open-buttonss {
  font-size: 13px;
  line-height: 22px;
  color: #7F7F7F;
  font-family: 'Open Sans';
  font-weight: 600;
  background-color: #c410d0;
  color: white;
  padding: 4px 7px;
  border: none;
  cursor: pointer;
  width: 113px;
  margin-top: -4px;
  margin-right: 44px;
}

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.buttons {
  margin: 10%;
  text-align: center;
}
td
{
  font-size: 17px !important;
}
td textarea
{
  width: 100px !important;
  height:95px !important;
  resize: none;
  line-height: 1.2;
  font-size: 14px !important;
  !important;
}
.btn-hover {
  width: 148px;
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  cursor: pointer;
  margin: 20px;
  height: 45px;
  text-align: center;
  border: none;
  background-size: 300% 100%;
  border-radius: 5px;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.btn-hover:hover {
  background-position: 100% 0;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.btn-hover:focus {
  outline: none;
}
.btn-hover.color-1 {
  background-image: linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
  box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
}
.btn-hover.color-2 {
  background-image: linear-gradient(to right, #f5ce62, #e43603, #fa7199, #e85a19);
  box-shadow: 0 4px 15px 0 rgba(229, 66, 10, 0.75);
}
.btn-hover.color-3 {
  background-image: linear-gradient(to right, #667eea, #764ba2, #6B8DD6, #8E37D7);
  box-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
}
.btn-hover.color-4 {
  background-image: linear-gradient(to right, #fc6076, #ff9a44, #ef9d43, #e75516);
  box-shadow: 0 4px 15px 0 rgba(252, 104, 110, 0.75);
}
.btn-hover.color-5 {
  background-image: linear-gradient(to right, #0ba360, #3cba92, #30dd8a, #2bb673);
  box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);
}
.btn-hover.color-6 {
  background-image: linear-gradient(to right, #009245, #FCEE21, #00A8C5, #D9E021);
  box-shadow: 0 4px 15px 0 rgba(83, 176, 57, 0.75);
}
.btn-hover.color-7 {
  background-image: linear-gradient(to right, #6253e1, #852D91, #A3A1FF, #F24645);
  box-shadow: 0 4px 15px 0 rgba(126, 52, 161, 0.75);
}
.btn-hover.color-8 {
  background-image: linear-gradient(to right, #29323c, #485563, #2b5876, #4e4376);
  box-shadow: 0 4px 15px 0 rgba(45, 54, 65, 0.75);
}
.btn-hover.color-9 {
  background-image: linear-gradient(to right, #25aae1, #4481eb, #04befe, #3f86ed);
  box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
}
.btn-hover.color-10 {
 background-image: linear-gradient(to right, #f52174, #dc4913, #e08d0d , #ed1c9b);
 box-shadow: 0 4px 15px 0 rgba(13, 12, 12, 0.75);
}
.btn-hover.color-11 {
 background-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);  box-shadow: 0 5px 15px rgba(242, 97, 103, .4);
}
</style>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html"; charset="utf-8" />
<?php
//session_start();
?>

<html class=""><head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendors/Stroke-Gap-Icons-Webfont/style.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css">
  <link rel="stylesheet" href="vendors/imagelightbox/imagelightbox.min.css">
  <link rel="stylesheet" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  <link rel="stylesheet" type="text/css" href="css/all-ie-only.css">
  <script type="text/javascript">     
    function PrintDiv() {    
     var divToPrint = document.getElementById('divToPrint');

     var popupWin = window.open('', '_blank', 'width=1000,height=1000');
     popupWin.document.open();
     popupWin.document.write('<html><head><style>td{font-size: 17px !important;}.tdvalue{padding-left:3px;  font-size:16px;  vertical-align:top;   font-family: Helvetica, sans-serif; font-weight:bold;} .tdheader{  padding-left:15px;  font-size:16px;font-weight: bold;vertical-align:top; } .print:last-child {page-break-after: auto;}@page{size:auto; margin:3mm;}.tblborder{  padding-left: 5px;padding-right: 10px; word-spacing: 15;border-style: solid;border-width: 3px;background-color: white;font-size:16px;width:90px;height:90px;}td textarea{border-color:black!important;font-size:21px;}#table6{margin-top:-10px !important;}#table5{padding-top:120px;padding-bottom: 30px; !important;} tr.heig td{font-size:17px !important;padding-bottom:5px !important; line-height:27px !important;}tbody.b{margin-top}</style></head><body style="margin-top:210px;margin-left:40px; line-height:100px;font-family:Arial !important;font-weight:normal !important;" onload="window.print()">' + divToPrint.innerHTML + '</html>');
     popupWin.document.close();
   }
 </script>
 <style>
 tr.heig td{
  font-weight: 700;
}

</style>

<body>
  <section>
   <div class="container">
    <div class="row" style="margin-left: 35px;text-align: -webkit-right;">

      <?php
      if(isset($_GET['id']))
      {
        $mat_id=$_GET['id'];
      }
      //$t_id= $_SESSION['matri_id'];
        //echo $t_id;
      ?>

    </div></div>
  </section>
  <br> 
  <section>

    <div align="center" class="printpage">


    <table width="1003" border="0" align="center" style="background-image:url(images/bg.png);">
      <tr>
        <td height=""><table width="1003" id="table5" height="" border="0">
          <tr ><br /><td valign="bottom" height="" colspan="2" align="center" style="; font-size:12px;"></td></tr>
          <tr><td height="" colspan="2" align="center" style="; font-size:12px;"></td></tr>
          <tr align="center">
            <?php 
            if(isset($_GET['id']))
            {
              $mat_id=$_GET['id'];
            }
            $mat_id=$_GET['id'];

            $sql1="SELECT * FROM registerfree WHERE matri_id ='$mat_id'";
            $res1 = mysql_query($sql1);
            $row = mysql_fetch_assoc($res1);
            ?>
            <td width="230" height="" align="left"> <img src="<?php echo $row['up_profile']; ?>" style=" border: 2px solid #a4214a;" height="300px" width="230px" /></td>
            <td width="400">

              <img style="margin-left: 40px;" src="images/images/LOGOss.png" alt="Wedding Vendors" class="img-responsive" style="">
              <p style="font-size: 18px;
              ; margin-left: 26px;">
              <br>
              <br>
              <input type="hidden" name="matri_id" id="matri_id" value="<?php echo $_SESSION['matri_id']?>">
            </p>
          </td>
          <td width="346"> <table width="246" border="0" cellspacing="0" cellpadding="0">
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Contact Details</h4>
                  </div>
                  <div class="modal-body">
                    <div>
                      <label>Address:</label>
                      <span><?php echo  $row['address'];?></span>
                    </div>
                    <div>
                      <label>Contact:</label>
                      <span><?php echo  $row['mobile'];?></span>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <tr>
              <p style="font-size: 18px;
              ;"><b>Reg.No:
               <span style="font-size:26px"></span><?php echo $mat_id; ?></b><br>
               <a href="edit_profiletamil.php?id=<?php echo $mat_id; ?>"><button class="btn-hover color-10" id="print">Edit Profile</button></a><br>

               <a href="pic.php?id=<?php echo $mat_id; ?>"><button class="btn-hover color-10" id="print1">Manage Photos</button>
               </a>
               <a href=""><button class="btn-hover color-10" id="print2" onclick="PrintDiv()">Print</button>
               </a>
             </p>
           </tr>
         </table>
       </td>
     </tr>
   </table>
 </td>
</tr>
</table>
<hr style="height:20px;border-top: 2px solid #6b6a69;">
<div id="divToPrint" style="margin: 0px 67px;">
  <td height=""><table width="1003" id="table5" border="0" />
    <tr class="heig">
      <td width="200" height="29" align="left" class="tdheader">பதிவு எண்</td>
      <td width="11"  class="tdheader">:</td>
      <td width="300" class="tdvalue" style="font-weight: bold;"><?php echo  $mat_id;?></td>
      <td width="1">&nbsp;</td>
      <td width="200" align="left" class="tdheader">தேதி</td>
      <td width="10" class="tdheader">:</td>
      <td width="230"   class="tdvalue"><?php echo date('d/m/Y');?></td>
    </tr>
    <tr class="heig">
      <td width="200" height="29" align="left" class="tdheader">பெயர்</td>
      <td width="11"  class="tdheader">:</td>
      <td width="300" class="tdvalue"><?php echo  $row['name'];?></td>
      <td width="1">&nbsp;</td>
      <td width="200" align="left" class="tdheader">பாலினம்</td>
      <td width="10" class="tdheader">:</td>
      <td width="230"   class="tdvalue"><?php echo  $row['gender'];?></td>
    </tr>
    <tr class="heig"></tr>
    <tr class="heig">
      <td width="120" height="29" align="left" class="tdheader">மதம்</td>
      <td class="tdheader">:</td>
      <td width="411"   class="tdvalue"><?php echo  $row['religion'];?></td>
      <td width="10" class="tdheader">&nbsp;</td>
      <td width="163" align="left" class="tdheader">சாதி</td>
       <td class="tdheader">:</td>
      <td width="230" class="tdvalue"><?php echo  $row['caste'];?></td>
    </tr>
    <tr class="heig"></tr>
    <tr class="heig">
      <td width="120" height="29" align="left" class="tdheader">உட்பிரிவு</td>
       <td class="tdheader">:</td>
      <td width="411" class="tdvalue"><?php echo  $row['subcaste'];?></td>
      <td width="1">&nbsp;</td>
      <td width="163" align="left" class="tdheader">திருமண நிலை</td>
       <td class="tdheader">:</td>
      <td width="230" class="tdvalue"><?php echo  $row['mstatus'];?></td>
    </tr>
    <tr class="heig"></tr>
    <tr class="heig">
      <td width="120" height="29" align="left"  class="tdheader">பிறந்த தேதி/வயது</td>
       <td class="tdheader">:</td>
      <td width="411" class="tdvalue"><?php echo  $row['dob'];?> (<?php
        $dob= $row['dob'];
        $from = new DateTime($dob);
        $to   = new DateTime('today');
        echo $from->diff($to)->y;
        ?>)</td>
      <td width="1">&nbsp;</td>
      <td width="163" align="left" class="tdheader">குலதெய்வம்</td>      
       <td class="tdheader">:</td>       
      <td width="230" class="tdvalue">
        <?php echo  $row['god'];?>
        </td>
      </tr>
      <tr class="heig"></tr>

      <tr class="heig">
        <td width="120" height="29" align="left" class="tdheader">பிறந்த நேரம்</td>
         <td class="tdheader">:</td>
        <td width="411" class="tdvalue"><?php  $gt= $row['dot'];
        if($row['dot']!='')
        echo date('h:i a', strtotime($gt))

        ?></td>
        <td width="1">&nbsp;</td>
        <td width="163" align="left" class="tdheader">பிறந்த இடம்</td>
         <td class="tdheader">:</td>
        <td width="230" class="tdvalue">
          <?php
          echo $row['birth_place'];
          ?></td>
        </tr>
        <tr class="heig"></tr>
        <tr class="heig">
          <td width="120" height="29" align="left"  class="tdheader">கல்வித்தகுதி</td>
           <td class="tdheader">:</td>
          <td width="411" class="tdvalue"><?php echo $row['edu'];?></td>
          <td width="1">&nbsp;</td>
          <td width="163" align="left" class="tdheader">உயரம்</td>
           <td class="tdheader">:</td>
          <td width="230"  class="tdvalue"><?php echo  $row['height'];?>&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr class="heig"></tr>
        <tr class="heig">
          <td width="120" height="29" align="left" class="tdheader">தொழில்</td>
           <td class="tdheader">:</td>
          <td width="411"  class="tdvalue"><?php echo  $row['working_place'];?></td>
          <td width="1">&nbsp;</td>
          <td width="163" align="left" class="tdheader">மாத வருமானம்</td>
           <td class="tdheader">:</td>
          <td width="230"  class="tdvalue"><?php echo  $row['monthlyincome'];?></td>
        </tr>
        <tr class="heig"></tr>

        <tr class="heig">
          <td width="120" height="29" align="left" class="tdheader">தந்தை பெயர்</td>
           <td class="tdheader">:</td>
          <td width="411" class="tdvalue"><?php echo  $row['father_name'];?></td>
          <td width="1">&nbsp;</td>
          <td width="163" align="left" class="tdheader">தாயார் பெயர்</td>
           <td class="tdheader">:</td>
          <td width="230" class="tdvalue"><?php echo  $row['mother_name'];?></td>
        </tr>
        <tr class="heig"></tr>
        <tr class="heig">
          <td width="120" height="29" align="left" class="tdheader">தந்தை தொழில்</td>
           <td class="tdheader">:</td>
          <td width="411" class="tdvalue"><?php echo  $row['father_occ'];?></td>
          <td width="1">&nbsp;</td>
          <td width="163" align="left" class="tdheader">தாயார் தொழில்</td>
           <td class="tdheader">:</td>
          <td width="230" class="tdvalue"><?php echo  $row['mother_occ'];?></td>
        </tr>
        <tr class="heig"></tr>
        <tr class="heig">
         <td width="120" height="29" align="left" class="tdheader">சகோதரர்கள்</td>
          <td class="tdheader">:</td>
         <td width="411"  class="tdvalue"><?php echo  'அண்:'.$row['bro'].'&nbsp;/&nbsp;தம்:'.$row['ybrother'];?></td>
         <td width="1">&nbsp;</td>
         <td width="163" align="left" class="tdheader">சகோதரிகள்</td>
          <td class="tdheader">:</td>
         <td width="230" class="tdvalue"><?php echo 'அக்:'.$row['sis'].'&nbsp;/&nbsp;தங்:'.$row['ysister'];?></td>
       </tr>
       <tr class="heig"></tr>

       <tr class="heig">
         <td width="120" height="29" align="left" class="tdheader">திருமணமானவர்கள்</td>
          <td class="tdheader">:</td>
         <td width="411" class="tdvalue"><?php echo 'ஆண்:'.$row['mbro'].'&nbsp;/&nbsp;பெண்:'.$row['msis'];?></td>
         <td width="1">&nbsp;</td>

         <td width="163" align="left" class="tdheader">நிறம்</td>
          <td class="tdheader">:</td>
         <td width="230" class="tdvalue"><?php echo  $row['color'];?></td>
       </tr>
       <tr class="heig"></tr>

       <tr class="heig">
        <td width="120" height="29" align="left" class="tdheader">குடும்ப நிலை</td>
         <td class="tdheader">:</td>
        <td width="411" class="tdvalue"><?php echo  $row['f_status'];?></td>
        <td width="1">&nbsp;</td>
        <td width="163" align="left" class="tdheader">ஊர்</td>
         <td class="tdheader">:</td>
        <td width="230" class="tdvalue"><?php echo  $row['city'];?></td>
      </tr>
      <tr class="heig"></tr>
      <tr class="heig">
        <td width="120" height="29" align="left" class="tdheader">ராசி</td>
         <td class="tdheader">:</td>
        <td width="411" class="tdvalue"><?php echo  $row['rasi'];?></td>
        <td width="1">&nbsp;</td>
        <td width="163" align="left" class="tdheader">நட்சத்திரம்</td>
         <td class="tdheader">:</td>
        <td width="230" class="tdvalue"><?php echo  $row['star'];?></td>
      </tr>
      <tr class="heig"></tr>
      <tr class="heig">
        <td width="120" height="29" align="left" class="tdheader">லக்னம்</td>
         <td class="tdheader">:</td>
        <td width="411" class="tdvalue"><?php echo  $row['lagnam'];?></td>
        <td width="1">&nbsp;</td>
        <td width="163" align="left" class="tdheader">திசை</td>
         <td class="tdheader">:</td>
        <td width="230"  class="tdvalue"><?php echo  $row['thisai'];?></td>        
      </tr>
      <tr class="heig">
        <td width="120" height="29" align="left" class="tdheader">எதிர்பார்ப்பு</td>
        <td class="tdheader">:</td>
        <td colspan="5" width="411" class="tdvalue"><?php echo  $row['expectation'];?></td>
        <td width="1">&nbsp;</td>
      </tr>
      <tr class="heig">
        <td width="120" height="29" align="left" class="tdheader">முகவரி</td>
        <td class="tdheader">:</td>
        <td colspan="5" width="411" class="tdvalue"><?php echo  $row['address'];?></td>
        <td width="1">&nbsp;</td>
      </tr>
      <tr class="heig">
        <td width="120" height="29" align="left" class="tdheader">அலைபேசி எண்</td>
        <td>:</td>
        <td width="411" colspan="5" class="tdvalue"><?php echo  $row['mobile'];?></td>
        <!-- <td width="1">&nbsp;</td>
        <td width="163" align="left" class="tdheader">Email</td>
        <td>:</td>
        <td width="230" style=";font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>"><?php echo  $row['email'];?></td> -->
      </tr>
      <tr class="heig"></tr>
      




      <!-- <tr>
        <td width="120" height="29" align="left"  style="padding-left:0px;font-size: 16px;;">Address</td>
        <td>:</td>
        <td width="411" style=";font-size:18px;"><?php echo  $row['address'];?></td>
        <td width="1">&nbsp;</td>
         <td width="163" align="left" style="padding-left:0px;font-size: 16px;;">Phone no:</td>
        <td>:</td>
        <td width="230" style=";font-size:18px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>">
          <?php
          echo $row['mobile'];
?></td>
</tr>-->


</table></td>
</tr>
</table></td>
</tr>
<!-- <br /> -->
<tr>
  <td >
   <div style="padding-left: 30px;"> <table width="1003" border="0" cellspacing="0" cellpadding="0" align="center" class="b" style=";font-size:16px;<?php /*?>font-family: Bamini, Helvetica, sans-serif;<?php */?>">
    <tr valign="top">
      <th height="373"  align="left" scope="col"></th>
      <th scope="col" align="left">

        <table  border="0" align="center" cellpadding="0"  id="table6" style="border-collapse: collapse;margin-left:0px;margin-right: 56px;">
          <tbody class="b" style=";font-size:18px;"><tr class="b" style=";font-size:18px;">
           <td width="77" height="40"  class="b tblborder" >
            <div  class="translate a kattam"  rows="6" name="r1" cols="11" tabindex="48"> <?php
            $c1=$row['one'];        
            $array =  explode(',', $c1);
            foreach ($array as $item) {
  //echo $item;
              ?>

              <?php $t=trim($item); 
              if($t=='à®ªà¯à®¤à®©à¯')
              {
                echo 'பு';
              }

              elseif($t=='à®ªà¯à®¤à®©à¯')
              {
                echo 'பு';
              }

              elseif($t=='à®°à®¾à®•à¯')
              {
                echo 'ரா';
              }
              elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
              {
                echo 'வி';
              }
              elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
              {
                echo 'சு';
              }
              elseif($t=='à®•à¯à¯«')
              {
                echo 'கு௫';
              }
              elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
              {
                echo 'சூ';
              }
              elseif($t=='à®šà®©à®¿')
              {
                echo 'சனி';
              }
              elseif($t=='à®•à¯‡à®¤à¯')
              {
                echo 'கே';
              }
              elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
              {
                echo 'சந்';
              }
              elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
              {
                echo 'செ';
              }
              elseif($t=='à®²à®•à¯à®©à®®à¯')
              {
                echo 'ல';
              }
              else
              {
                echo $t;
              }
            }   ?>
          </div>
        </td>
        <td width="77" height="40" class="tblborder">
          <div  class="translate a kattam"  rows="6" name="r2" cols="11" tabindex="48"><?php $c2=$row['two'];        
          $array =  explode(',', $c2);
          foreach ($array as $item) {
  //echo $item;

            ?>

            <?php $t=trim($item);  
            if($t=='à®ªà¯à®¤à®©à¯')
            {
              echo 'பு';
            }

            elseif($t=='à®ªà¯à®¤à®©à¯')
            {
              echo 'பு';
            }

            elseif($t=='à®°à®¾à®•à¯')
            {
              echo 'ரா';
            }
            elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
            {
              echo 'வி';
            }
            elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
            {
              echo 'சு';
            }
            elseif($t=='à®•à¯à¯«')
            {
              echo 'கு௫';
            }
            elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
            {
              echo 'சூ';
            }
            elseif($t=='à®šà®©à®¿')
            {
              echo 'சனி';
            }
            elseif($t=='à®•à¯‡à®¤à¯')
            {
              echo 'கே';
            }
            elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
            {
              echo 'சந்';
            }
            elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
            {
              echo 'செ';
            }
            elseif($t=='à®²à®•à¯à®©à®®à¯')
            {
              echo 'ல';
            }
            else
            {
              echo $t;
            }

          }   ?>
        </div></td>
        <td width="77" class="tblborder">
          <div class="translate a kattam"  rows="6" name="r3" cols="11" tabindex="48">  <?php
          $c3=$row['three'];        
          $array =  explode(',', $c3);
          foreach ($array as $item) {
  //echo $item;


            ?>
            <?php $t=trim($item); 
            if($t=='à®ªà¯à®¤à®©à¯')
            {
              echo 'பு';
            }

            elseif($t=='à®ªà¯à®¤à®©à¯')
            {
              echo 'பு';
            }

            elseif($t=='à®°à®¾à®•à¯')
            {
              echo 'ரா';
            }
            elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
            {
              echo 'வி';
            }
            elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
            {
              echo 'சு';
            }
            elseif($t=='à®•à¯à¯«')
            {
              echo 'கு௫';
            }
            elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
            {
              echo 'சூ';
            }
            elseif($t=='à®šà®©à®¿')
            {
              echo 'சனி';
            }
            elseif($t=='à®•à¯‡à®¤à¯')
            {
              echo 'கே';
            }
            elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
            {
              echo 'சந்';
            }
            elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
            {
              echo 'செ';
            }
            elseif($t=='à®²à®•à¯à®©à®®à¯')
            {
              echo 'ல';
            }
            else
            {
              echo $t;
            }

          }   ?>
        </div></td>
        <td width="77" class="tblborder">
          <div  class="translate a kattam" rows="6" name="r4" cols="11" tabindex="48"> <?php
          $c4=$row['four'];       
          $array =  explode(',', $c4);
          foreach ($array as $item) {
  //echo $item;


            ?>
            <?php $t=trim($item); 
            if($t=='à®ªà¯à®¤à®©à¯')
            {
              echo 'பு';
            }

            elseif($t=='à®ªà¯à®¤à®©à¯')
            {
              echo 'பு';
            }

            elseif($t=='à®°à®¾à®•à¯')
            {
              echo 'ரா';
            }
            elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
            {
              echo 'வி';
            }
            elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
            {
              echo 'சு';
            }
            elseif($t=='à®•à¯à¯«')
            {
              echo 'கு௫';
            }
            elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
            {
              echo 'சூ';
            }
            elseif($t=='à®šà®©à®¿')
            {
              echo 'சனி';
            }
            elseif($t=='à®•à¯‡à®¤à¯')
            {
              echo 'கே';
            }
            elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
            {
              echo 'சந்';
            }
            elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
            {
              echo 'செ';
            }
            elseif($t=='à®²à®•à¯à®©à®®à¯')
            {
              echo 'ல';
            }
            else
            {
              echo $t;
            }

          }   ?>
        </div>
      </td>
      <td width="77" rowspan="4" >&nbsp;</td>
      <td width="58" class="tblborder">
        <div  class="translate a kattam"  rows="6" name="a1" cols="11" tabindex="48"> <?php
        $c13=$row['aone'];        
        $array =  explode(',', $c13);
        foreach ($array as $item) {
  //echo $item;
          ?>

          <?php $t=trim($item); 
          if($t=='à®ªà¯à®¤à®©à¯')
          {
            echo 'பு';
          }

          elseif($t=='à®ªà¯à®¤à®©à¯')
          {
            echo 'பு';
          }

          elseif($t=='à®°à®¾à®•à¯')
          {
            echo 'ரா';
          }
          elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
          {
            echo 'வி';
          }
          elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
          {
            echo 'சு';
          }
          elseif($t=='à®•à¯à¯«')
          {
            echo 'கு௫';
          }
          elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
          {
            echo 'சூ';
          }
          elseif($t=='à®šà®©à®¿')
          {
            echo 'சனி';
          }
          elseif($t=='à®•à¯‡à®¤à¯')
          {
            echo 'கே';
          }
          elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
          {
            echo 'சந்';
          }
          elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
          {
            echo 'செ';
          }
          elseif($t=='à®²à®•à¯à®©à®®à¯')
          {
            echo 'ல';
          }
          else
          {
            echo $t;
          }

        }   ?>
      </textarea></td>
      <td width="77" class="tblborder">
        <div  class="translate a kattam"  rows="6" name="a2" cols="11" tabindex="48"> <?php
        $c14=$row['atwo'];        
        $array =  explode(',', $c14);
        foreach ($array as $item) {
  //echo $item;


          ?>

          <?php $t=trim($item);  
          if($t=='à®ªà¯à®¤à®©à¯')
          {
            echo 'பு';
          }

          elseif($t=='à®ªà¯à®¤à®©à¯')
          {
            echo 'பு';
          }

          elseif($t=='à®°à®¾à®•à¯')
          {
            echo 'ரா';
          }
          elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
          {
            echo 'வி';
          }
          elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
          {
            echo 'சு';
          }
          elseif($t=='à®•à¯à¯«')
          {
            echo 'கு௫';
          }
          elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
          {
            echo 'சூ';
          }
          elseif($t=='à®šà®©à®¿')
          {
            echo 'சனி';
          }
          elseif($t=='à®•à¯‡à®¤à¯')
          {
            echo 'கே';
          }
          elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
          {
            echo 'சந்';
          }
          elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
          {
            echo 'செ';
          }
          elseif($t=='à®²à®•à¯à®©à®®à¯')
          {
            echo 'ல';
          }
          else
          {
            echo $t;
          }

        }   ?>
      </div>
    </td>
    <td width="77" class="tblborder">
      <div  class="translate a kattam" rows="6" name="a3" cols="11" tabindex="48"> <?php
      $c15=$row['athree'];        
      $array =  explode(',', $c15);
      foreach ($array as $item) {
  //echo $item;


        ?>

        <?php $t=trim($item); 
        if($t=='à®ªà¯à®¤à®©à¯')
        {
          echo 'பு';
        }

        elseif($t=='à®ªà¯à®¤à®©à¯')
        {
          echo 'பு';
        }

        elseif($t=='à®°à®¾à®•à¯')
        {
          echo 'ரா';
        }
        elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
        {
          echo 'வி';
        }
        elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
        {
          echo 'சு';
        }
        elseif($t=='à®•à¯à¯«')
        {
          echo 'கு௫';
        }
        elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
        {
          echo 'சூ';
        }
        elseif($t=='à®šà®©à®¿')
        {
          echo 'சனி';
        }
        elseif($t=='à®•à¯‡à®¤à¯')
        {
          echo 'கே';
        }
        elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
        {
          echo 'சந்';
        }
        elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
        {
          echo 'செ';
        }
        elseif($t=='à®²à®•à¯à®©à®®à¯')
        {
          echo 'ல';
        }
        else
        {
          echo $t;
        }

      }   ?>
    </div></td>
    <td width="65" class="tblborder">
      <div  class="translate a kattam" rows="6" name="a4" cols="11" tabindex="48"> <?php
      $c16=$row['afour'];       
      $array =  explode(',', $c16);
      foreach ($array as $item) {
  //echo $item;


        ?>

        <?php $t=trim($item); 
        if($t=='à®ªà¯à®¤à®©à¯')
        {
          echo 'பு';
        }

        elseif($t=='à®ªà¯à®¤à®©à¯')
        {
          echo 'பு';
        }

        elseif($t=='à®°à®¾à®•à¯')
        {
          echo 'ரா';
        }
        elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
        {
          echo 'வி';
        }
        elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
        {
          echo 'சு';
        }
        elseif($t=='à®•à¯à¯«')
        {
          echo 'கு௫';
        }
        elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
        {
          echo 'சூ';
        }
        elseif($t=='à®šà®©à®¿')
        {
          echo 'சனி';
        }
        elseif($t=='à®•à¯‡à®¤à¯')
        {
          echo 'கே';
        }
        elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
        {
          echo 'சந்';
        }
        elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
        {
          echo 'செ';
        }
        elseif($t=='à®²à®•à¯à®©à®®à¯')
        {
          echo 'ல';
        }
        else
        {
          echo $t;
        }

      }   ?>
    </div></td>
  </tr>
  <tr>
    <td width="77" height="50" class="tblborder">
      <div  class="translate a kattam"  rows="6" name="r9" cols="11" tabindex="48">
        <?php
        $c12=$row['twelve'];       
        $array =  explode(',', $c12);
        foreach ($array as $item) {
  //echo $item;


          ?>

          <?php $t=trim($item);  
          if($t=='à®ªà¯à®¤à®©à¯')
          {
            echo 'பு';
          }

          elseif($t=='à®ªà¯à®¤à®©à¯')
          {
            echo 'பு';
          }

          elseif($t=='à®°à®¾à®•à¯')
          {
            echo 'ரா';
          }
          elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
          {
            echo 'வி';
          }
          elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
          {
            echo 'சு';
          }
          elseif($t=='à®•à¯à¯«')
          {
            echo 'கு௫';
          }
          elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
          {
            echo 'சூ';
          }
          elseif($t=='à®šà®©à®¿')
          {
            echo 'சனி';
          }
          elseif($t=='à®•à¯‡à®¤à¯')
          {
            echo 'கே';
          }
          elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
          {
            echo 'சந்';
          }
          elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
          {
            echo 'செ';
          }
          elseif($t=='à®²à®•à¯à®©à®®à¯')
          {
            echo 'ல';
          }
          else
          {
            echo $t;
          }

        }   ?>
      </div>
    </td>
    <td width="114" colspan="2" rowspan="2" align="center"><strong><span lang="ta" xml:lang="ta">ராசி</span></strong></td>
    <td width="77" class="tblborder">
      <div  class="translate a kattam"  rows="6" name="r10" cols="11" tabindex="48">
        <?php
        $c5=$row['five'];       
        $array =  explode(',', $c5);
        foreach ($array as $item) {
  //echo $item;
          ?>

          <?php $t=trim($item); 
          if($t=='à®ªà¯à®¤à®©à¯')
          {
            echo 'பு';
          }

          elseif($t=='à®ªà¯à®¤à®©à¯')
          {
            echo 'பு';
          }

          elseif($t=='à®°à®¾à®•à¯')
          {
            echo 'ரா';
          }
          elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
          {
            echo 'வி';
          }
          elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
          {
            echo 'சு';
          }
          elseif($t=='à®•à¯à¯«')
          {
            echo 'கு௫';
          }
          elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
          {
            echo 'சூ';
          }
          elseif($t=='à®šà®©à®¿')
          {
            echo 'சனி';
          }
          elseif($t=='à®•à¯‡à®¤à¯')
          {
            echo 'கே';
          }
          elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
          {
            echo 'சந்';
          }
          elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
          {
            echo 'செ';
          }
          elseif($t=='à®²à®•à¯à®©à®®à¯')
          {
            echo 'ல';
          }
          else
          {
            echo $t;
          }

        }   ?></div></td>
        <td width="77" class="tblborder">
          <div  class="translate a kattam" rows="6" name="a12" cols="11" tabindex="60">
            <?php
            $c24=$row['atwelve'];       
            $array =  explode(',', $c24);
            foreach ($array as $item) {
  //echo $item;
              ?>

              <?php $t=trim($item); 

              if($t=='à®ªà¯à®¤à®©à¯')
              {
                echo 'பு';
              }

              elseif($t=='à®ªà¯à®¤à®©à¯')
              {
                echo 'பு';
              }

              elseif($t=='à®°à®¾à®•à¯')
              {
                echo 'ரா';
              }
              elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
              {
                echo 'வி';
              }
              elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
              {
                echo 'சு';
              }
              elseif($t=='à®•à¯à¯«')
              {
                echo 'கு௫';
              }
              elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
              {
                echo 'சூ';
              }
              elseif($t=='à®šà®©à®¿')
              {
                echo 'சனி';
              }
              elseif($t=='à®•à¯‡à®¤à¯')
              {
                echo 'கே';
              }
              elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
              {
                echo 'சந்';
              }
              elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
              {
                echo 'செ';
              }
              elseif($t=='à®²à®•à¯à®©à®®à¯')
              {
                echo 'ல';
              }
              else
              {
                echo $t;
              }

            }   ?>
          </div>
        </td>
        <td width="114" colspan="2" rowspan="2" align="center"><strong><span lang="ta" xml:lang="ta">அம்சம்</span></strong></td>
        <td width="77" class="tblborder">
          <div  class="translate a kattam" rows="6" name="a5" cols="11" tabindex="60">
            <?php
            $c17=$row['afive'];       
            $array =  explode(',', $c17);
            foreach ($array as $item) {
  //echo $item;


              ?>

              <?php $t=trim($item); 
              if($t=='à®ªà¯à®¤à®©à¯')
              {
                echo 'பு';
              }

              elseif($t=='à®ªà¯à®¤à®©à¯')
              {
                echo 'பு';
              }

              elseif($t=='à®°à®¾à®•à¯')
              {
                echo 'ரா';
              }
              elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
              {
                echo 'வி';
              }
              elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
              {
                echo 'சு';
              }
              elseif($t=='à®•à¯à¯«')
              {
                echo 'கு௫';
              }
              elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
              {
                echo 'சூ';
              }
              elseif($t=='à®šà®©à®¿')
              {
                echo 'சனி';
              }
              elseif($t=='à®•à¯‡à®¤à¯')
              {
                echo 'கே';
              }
              elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
              {
                echo 'சந்';
              }
              elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
              {
                echo 'செ';
              }
              elseif($t=='à®²à®•à¯à®©à®®à¯')
              {
                echo 'ல';
              }
              else
              {
                echo $t;
              }

            }   ?>
          </div></td>
        </tr>
        <tr>
          <td width="77" height="50" class="tblborder">
            <div  class="translate a kattam" rows="6" name="r11" cols="11" tabindex="48">
              <?php
              $c11=$row['eleven'];        
              $array =  explode(',', $c11);
              foreach ($array as $item) {
  //echo $item;


                ?>

                <?php $t=trim($item); 
                if($t=='à®ªà¯à®¤à®©à¯')
                {
                  echo 'பு';
                }

                elseif($t=='à®ªà¯à®¤à®©à¯')
                {
                  echo 'பு';
                }

                elseif($t=='à®°à®¾à®•à¯')
                {
                  echo 'ரா';
                }
                elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
                {
                  echo 'வி';
                }
                elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
                {
                  echo 'சு';
                }
                elseif($t=='à®•à¯à¯«')
                {
                  echo 'கு௫';
                }
                elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
                {
                  echo 'சூ';
                }
                elseif($t=='à®šà®©à®¿')
                {
                  echo 'சனி';
                }
                elseif($t=='à®•à¯‡à®¤à¯')
                {
                  echo 'கே';
                }
                elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
                {
                  echo 'சந்';
                }
                elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
                {
                  echo 'செ';
                }
                elseif($t=='à®²à®•à¯à®©à®®à¯')
                {
                  echo 'ல';
                }
                else
                {
                  echo $t;
                }

              }   ?></div></td>
              <td width="77" class="tblborder">
                <div  class="translate a kattam" rows="6" name="r6" cols="11" tabindex="48">
                  <?php
                  $c6=$row['six'];        
                  $array =  explode(',', $c6);
                  foreach ($array as $item) {
  //echo $item;
                    ?>

                    <?php $t=trim($item);
                    if($t=='à®ªà¯à®¤à®©à¯')
                    {
                      echo 'பு';
                    }

                    elseif($t=='à®ªà¯à®¤à®©à¯')
                    {
                      echo 'பு';
                    }

                    elseif($t=='à®°à®¾à®•à¯')
                    {
                      echo 'ரா';
                    }
                    elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
                    {
                      echo 'வி';
                    }
                    elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
                    {
                      echo 'சு';
                    }
                    elseif($t=='à®•à¯à¯«')
                    {
                      echo 'கு௫';
                    }
                    elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
                    {
                      echo 'சூ';
                    }
                    elseif($t=='à®šà®©à®¿')
                    {
                      echo 'சனி';
                    }
                    elseif($t=='à®•à¯‡à®¤à¯')
                    {
                      echo 'கே';
                    }
                    elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
                    {
                      echo 'சந்';
                    }
                    elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
                    {
                      echo 'செ';
                    }
                    elseif($t=='à®²à®•à¯à®©à®®à¯')
                    {
                      echo 'ல';
                    }
                    else
                    {
                      echo $t;
                    }

                  }   ?>
                </div></td>
                <td width="77" class="tblborder">
                  <div class="translate a kattam"  rows="6" name="a11" cols="11" tabindex="60">
                    <?php
                    $c23=$row['aeleven'];       
                    $array =  explode(',', $c23);
                    foreach ($array as $item) {
  //echo $item;


                      ?>

                      <?php $t=trim($item); 
                      if($t=='à®ªà¯à®¤à®©à¯')
                      {
                        echo 'பு';
                      }

                      elseif($t=='à®ªà¯à®¤à®©à¯')
                      {
                        echo 'பு';
                      }

                      elseif($t=='à®°à®¾à®•à¯')
                      {
                        echo 'ரா';
                      }
                      elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
                      {
                        echo 'வி';
                      }
                      elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
                      {
                        echo 'சு';
                      }
                      elseif($t=='à®•à¯à¯«')
                      {
                        echo 'கு௫';
                      }
                      elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
                      {
                        echo 'சூ';
                      }
                      elseif($t=='à®šà®©à®¿')
                      {
                        echo 'சனி';
                      }
                      elseif($t=='à®•à¯‡à®¤à¯')
                      {
                        echo 'கே';
                      }
                      elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
                      {
                        echo 'சந்';
                      }
                      elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
                      {
                        echo 'செ';
                      }
                      elseif($t=='à®²à®•à¯à®©à®®à¯')
                      {
                        echo 'ல';
                      }
                      else
                      {
                        echo $t;
                      }

                    }   ?></div>
                  </td>
                  <td width="77" class="tblborder">
                    <div  class="translate a kattam"  rows="6" name="a6" cols="11" tabindex="60">
                      <?php
                      $c18=$row['asix'];        
                      $array =  explode(',', $c18);
                      foreach ($array as $item) {
  //echo $item;
                        ?>

                        <?php $t=trim($item);
                        if($t=='à®ªà¯à®¤à®©à¯')
                        {
                          echo 'பு';
                        }

                        elseif($t=='à®ªà¯à®¤à®©à¯')
                        {
                          echo 'பு';
                        }

                        elseif($t=='à®°à®¾à®•à¯')
                        {
                          echo 'ரா';
                        }
                        elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
                        {
                          echo 'வி';
                        }
                        elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
                        {
                          echo 'சு';
                        }
                        elseif($t=='à®•à¯à¯«')
                        {
                          echo 'கு௫';
                        }
                        elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
                        {
                          echo 'சூ';
                        }
                        elseif($t=='à®šà®©à®¿')
                        {
                          echo 'சனி';
                        }
                        elseif($t=='à®•à¯‡à®¤à¯')
                        {
                          echo 'கே';
                        }
                        elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
                        {
                          echo 'சந்';
                        }
                        elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
                        {
                          echo 'செ';
                        }
                        elseif($t=='à®²à®•à¯à®©à®®à¯')
                        {
                          echo 'ல';
                        }
                        else
                        {
                          echo $t;
                        }

                      }   ?>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td width="77" height="50" class="tblborder">
                    <div  class="translate a kattam"  rows="6" name="r10" cols="11" tabindex="48">
                      <?php
                      $c10=$row['ten'];       
                      $array =  explode(',', $c10);
                      foreach ($array as $item) {
  //echo $item;


                        ?>

                        <?php $t=trim($item); 
                        if($t=='à®ªà¯à®¤à®©à¯')
                        {
                          echo 'பு';
                        }

                        elseif($t=='à®ªà¯à®¤à®©à¯')
                        {
                          echo 'பு';
                        }

                        elseif($t=='à®°à®¾à®•à¯')
                        {
                          echo 'ரா';
                        }
                        elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
                        {
                          echo 'வி';
                        }
                        elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
                        {
                          echo 'சு';
                        }
                        elseif($t=='à®•à¯à¯«')
                        {
                          echo 'கு௫';
                        }
                        elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
                        {
                          echo 'சூ';
                        }
                        elseif($t=='à®šà®©à®¿')
                        {
                          echo 'சனி';
                        }
                        elseif($t=='à®•à¯‡à®¤à¯')
                        {
                          echo 'கே';
                        }
                        elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
                        {
                          echo 'சந்';
                        }
                        elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
                        {
                          echo 'செ';
                        }
                        elseif($t=='à®²à®•à¯à®©à®®à¯')
                        {
                          echo 'ல';
                        }
                        else
                        {
                          echo $t;
                        }

                      }   ?>
                    </div></td>
                    <td width="77" class="tblborder">
                      <div  class="translate a kattam"  rows="6" name="r9" cols="11" tabindex="48">
                        <?php
                        $c9=$row['nine'];       
                        $array =  explode(',', $c9);
                        foreach ($array as $item) {
  //echo $item;


                          ?>

                          <?php $t=trim($item); 

                          if($t=='à®ªà¯à®¤à®©à¯')
                          {
                            echo 'பு';
                          }

                          elseif($t=='à®ªà¯à®¤à®©à¯')
                          {
                            echo 'பு';
                          }

                          elseif($t=='à®°à®¾à®•à¯')
                          {
                            echo 'ரா';
                          }
                          elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
                          {
                            echo 'வி';
                          }
                          elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
                          {
                            echo 'சு';
                          }
                          elseif($t=='à®•à¯à¯«')
                          {
                            echo 'கு௫';
                          }
                          elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
                          {
                            echo 'சூ';
                          }
                          elseif($t=='à®šà®©à®¿')
                          {
                            echo 'சனி';
                          }
                          elseif($t=='à®•à¯‡à®¤à¯')
                          {
                            echo 'கே';
                          }
                          elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
                          {
                            echo 'சந்';
                          }
                          elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
                          {
                            echo 'செ';
                          }
                          elseif($t=='à®²à®•à¯à®©à®®à¯')
                          {
                            echo 'ல';
                          }
                          else
                          {
                            echo $t;
                          }

                        }   ?></div></td>
                        <td width="77" class="tblborder">
                          <div  class="translate a kattam" rows="6" name="r8" cols="11" tabindex="48">
                            <?php
                            $c8=$row['eight'];        
                            $array =  explode(',', $c8);
                            foreach ($array as $item) {
  //echo $item;


                              ?>

                              <?php $t=trim($item); 
                              if($t=='à®ªà¯à®¤à®©à¯')
                              {
                                echo 'பு';
                              }

                              elseif($t=='à®ªà¯à®¤à®©à¯')
                              {
                                echo 'பு';
                              }

                              elseif($t=='à®°à®¾à®•à¯')
                              {
                                echo 'ரா';
                              }
                              elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
                              {
                                echo 'வி';
                              }
                              elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
                              {
                                echo 'சு';
                              }
                              elseif($t=='à®•à¯à¯«')
                              {
                                echo 'கு௫';
                              }
                              elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
                              {
                                echo 'சூ';
                              }
                              elseif($t=='à®šà®©à®¿')
                              {
                                echo 'சனி';
                              }
                              elseif($t=='à®•à¯‡à®¤à¯')
                              {
                                echo 'கே';
                              }
                              elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
                              {
                                echo 'சந்';
                              }
                              elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
                              {
                                echo 'செ';
                              }
                              elseif($t=='à®²à®•à¯à®©à®®à¯')
                              {
                                echo 'ல';
                              }
                              else
                              {
                                echo $t;
                              }

                            }   ?>
                          </div></td>
                          <td width="77" class="tblborder">
                            <div  class="translate a kattam" rows="6" name="r7" cols="11" tabindex="48">
                              <?php
                              $c7=$row['seven'];        
                              $array =  explode(',', $c7);
                              foreach ($array as $item) {
  //echo $item;


                                ?>

                                <?php $t=trim($item); 

                                if($t=='à®ªà¯à®¤à®©à¯')
                                {
                                  echo 'பு';
                                }

                                elseif($t=='à®ªà¯à®¤à®©à¯')
                                {
                                  echo 'பு';
                                }

                                elseif($t=='à®°à®¾à®•à¯')
                                {
                                  echo 'ரா';
                                }
                                elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
                                {
                                  echo 'வி';
                                }
                                elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
                                {
                                  echo 'சு';
                                }
                                elseif($t=='à®•à¯à¯«')
                                {
                                  echo 'கு௫';
                                }
                                elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
                                {
                                  echo 'சூ';
                                }
                                elseif($t=='à®šà®©à®¿')
                                {
                                  echo 'சனி';
                                }
                                elseif($t=='à®•à¯‡à®¤à¯')
                                {
                                  echo 'கே';
                                }
                                elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
                                {
                                  echo 'சந்';
                                }
                                elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
                                {
                                  echo 'செ';
                                }
                                elseif($t=='à®²à®•à¯à®©à®®à¯')
                                {
                                  echo 'ல';
                                }
                                else
                                {
                                  echo $t;
                                }

                              }   ?>
                            </div></td>
                            <td width="77" class="tblborder">
                              <div  class="translate a kattam" rows="6" name="a10" cols="11" tabindex="60">
                                <?php
                                $c22=$row['aten'];        
                                $array =  explode(',', $c22);
                                foreach ($array as $item) {
  //echo $item;


                                  ?>

                                  <?php $t=trim($item); 

                                  if($t=='à®ªà¯à®¤à®©à¯')
                                  {
                                    echo 'பு';
                                  }

                                  elseif($t=='à®ªà¯à®¤à®©à¯')
                                  {
                                    echo 'பு';
                                  }

                                  elseif($t=='à®°à®¾à®•à¯')
                                  {
                                    echo 'ரா';
                                  }
                                  elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
                                  {
                                    echo 'வி';
                                  }
                                  elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
                                  {
                                    echo 'சு';
                                  }
                                  elseif($t=='à®•à¯à¯«')
                                  {
                                    echo 'கு௫';
                                  }
                                  elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
                                  {
                                    echo 'சூ';
                                  }
                                  elseif($t=='à®šà®©à®¿')
                                  {
                                    echo 'சனி';
                                  }
                                  elseif($t=='à®•à¯‡à®¤à¯')
                                  {
                                    echo 'கே';
                                  }
                                  elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
                                  {
                                    echo 'சந்';
                                  }
                                  elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
                                  {
                                    echo 'செ';
                                  }
                                  elseif($t=='à®²à®•à¯à®©à®®à¯')
                                  {
                                    echo 'ல';
                                  }
                                  else
                                  {
                                    echo $t;
                                  }

                                }   ?></div></td>
                                <td width="77" class="tblborder">
                                  <div  class="translate a kattam" rows="6" name="a9" cols="11" tabindex="60">
                                    <?php
                                    $c21=$row['anine'];       
                                    $array =  explode(',', $c21);
                                    foreach ($array as $item) {
  //echo $item;


                                      ?>

                                      <?php $t=trim($item); 
                                      if($t=='à®ªà¯à®¤à®©à¯')
                                      {
                                        echo 'பு';
                                      }

                                      elseif($t=='à®ªà¯à®¤à®©à¯')
                                      {
                                        echo 'பு';
                                      }

                                      elseif($t=='à®°à®¾à®•à¯')
                                      {
                                        echo 'ரா';
                                      }
                                      elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
                                      {
                                        echo 'வி';
                                      }
                                      elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
                                      {
                                        echo 'சு';
                                      }
                                      elseif($t=='à®•à¯à¯«')
                                      {
                                        echo 'கு௫';
                                      }
                                      elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
                                      {
                                        echo 'சூ';
                                      }
                                      elseif($t=='à®šà®©à®¿')
                                      {
                                        echo 'சனி';
                                      }
                                      elseif($t=='à®•à¯‡à®¤à¯')
                                      {
                                        echo 'கே';
                                      }
                                      elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
                                      {
                                        echo 'சந்';
                                      }
                                      elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
                                      {
                                        echo 'செ';
                                      }
                                      elseif($t=='à®²à®•à¯à®©à®®à¯')
                                      {
                                        echo 'ல';
                                      }
                                      else
                                      {
                                        echo $t;
                                      }

                                    }   ?>
                                  </div></td>
                                  <td width="77" class="tblborder">
                                    <div  class="translate a kattam" rows="6" name="a8" cols="11" tabindex="60">
                                      <?php
                                      $c20=$row['aeight'];        
                                      $array =  explode(',', $c20);
                                      foreach ($array as $item) {
  //echo $item;
                                        ?>

                                        <?php $t=trim($item); 
                                        if($t=='à®ªà¯à®¤à®©à¯')
                                        {
                                          echo 'பு';
                                        }

                                        elseif($t=='à®ªà¯à®¤à®©à¯')
                                        {
                                          echo 'பு';
                                        }

                                        elseif($t=='à®°à®¾à®•à¯')
                                        {
                                          echo 'ரா';
                                        }
                                        elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
                                        {
                                          echo 'வி';
                                        }
                                        elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
                                        {
                                          echo 'சு';
                                        }
                                        elseif($t=='à®•à¯à¯«')
                                        {
                                          echo 'கு௫';
                                        }
                                        elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
                                        {
                                          echo 'சூ';
                                        }
                                        elseif($t=='à®šà®©à®¿')
                                        {
                                          echo 'சனி';
                                        }
                                        elseif($t=='à®•à¯‡à®¤à¯')
                                        {
                                          echo 'கே';
                                        }
                                        elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
                                        {
                                          echo 'சந்';
                                        }
                                        elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
                                        {
                                          echo 'செ';
                                        }
                                        elseif($t=='à®²à®•à¯à®©à®®à¯')
                                        {
                                          echo 'ல';
                                        }
                                        else
                                        {
                                          echo $t;
                                        }

                                      }   ?>
                                    </div>
                                  </td>

                                  <td width="77" class="tblborder">
                                    <div  class="translate a kattam" rows="6" name="a7" cols="11" tabindex="60">
                                      <?php 
                                      $c19=$row['aseven'];        
                                      $array =  explode(',', $c19);
                                      foreach ($array as $item) {
    //echo $item;
                                        ?>
                                        <?php $t=trim($item); 
                                        if($t=='à®ªà¯à®¤à®©à¯')
                                        {
                                          echo 'பு';
                                        }

                                        elseif($t=='à®ªà¯à®¤à®©à¯')
                                        {
                                          echo 'பு';
                                        }

                                        elseif($t=='à®°à®¾à®•à¯')
                                        {
                                          echo 'ரா';
                                        }
                                        elseif($t=='à®µà®¿à®¯à®¾à®´à®©à¯')
                                        {
                                          echo 'வி';
                                        }
                                        elseif($t=='à®šà¯à®•à¯à®•à®¿à®°à®©à¯')
                                        {
                                          echo 'சு';
                                        }
                                        elseif($t=='à®•à¯à¯«')
                                        {
                                          echo 'கு௫';
                                        }
                                        elseif($t=='à®šà¯‚à®°à®¿à®¯à®©à¯')
                                        {
                                          echo 'சூ';
                                        }
                                        elseif($t=='à®šà®©à®¿')
                                        {
                                          echo 'சனி';
                                        }
                                        elseif($t=='à®•à¯‡à®¤à¯')
                                        {
                                          echo 'கே';
                                        }
                                        elseif($t=='à®šà®¨à¯à®¤à®¿à®°à®©à¯')
                                        {
                                          echo 'சந்';
                                        }
                                        elseif($t=='à®šà¯†à®µà¯à®µà®¾à®¯à¯')
                                        {
                                          echo 'செ';
                                        }
                                        elseif($t=='à®²à®•à¯à®©à®®à¯')
                                        {
                                          echo 'ல';
                                        }
                                        else
                                        {
                                          echo $t;
                                        }

                                      }   ?>
                                    </div>
                                  </td>

                                </tr>
                              </tbody></table> 

                            </th>

                          </tr>


                        </table></td>
                      </tr>

                    </table></td>
                  </tr>

                </div>
              </div>

            </section>


            <!-- <?php include('footer.php'); ?> -->



            <script src="js/jquery-2.2.4.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/jquery.bxslider.js"></script>
            <!-- owl carousel-->
            <script src="vendors/owlcarousel/owl.carousel.min.js"></script>
            <script src="js/jquery.easing.min.js"></script>
            <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="js/zebra_datepicker.js"></script>
            <!-- jQuery appear-->
            <script src="vendors/jquery-appear/jquery.appear.js"></script>
            <!-- jQuery countTo-->
            <script src="vendors/jquery-countTo/jquery.countTo.js"></script>
            <script src="js/jquery.form.js"></script>
            <script src="js/jquery.validate.min.js"></script>
            <script src="js/contact.js"></script>
            <script src="js/jquery.mixitup.min.js"></script>
            <script src="js/jquery.fancybox.pack.js"></script>
            <script src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
            <script src="js/custom.js"></script>
            <script type="text/javascript">
  // function showhidediv()
  // {
  //   alert(2);
  // }<script type="text/javascript">

  $(document).ready(function()
  {
    $("#print12").click(function()
    {
      var matri_id = $('#matri_id').val();
      var dataString = 'matri_id='+ matri_id;

      $.ajax
      ({
        type: "POST",
        url: "caste.php",
        data: dataString,
        cache: false,
        success: function(data)
        {
          alert(data)
        }
      });

    });
  });
</script>



</body></html>