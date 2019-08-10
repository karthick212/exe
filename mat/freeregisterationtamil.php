<?php

include('conn.php'); 
// if($conn){
//   //echo "database connected";
// }
// else{
//   //echo "database connection failed";

// }


if(isset($_POST['registers']))
{
  $dob=$_POST['dob'];
  $time=$_POST['dot'];
  echo $time;
  $from = new DateTime($dob);
  $to   = new DateTime('today');
  $d2=$from->diff($to)->y;
  extract ( $_POST );
  $size = 6;
  date_default_timezone_set('Asia/Kolkata');
                //$date = date('dmy', time());
  $alpha_key = '';
  $keys = range('A', 'Z');

  for ($i = 0; $i < 3; $i++) {
    $alpha_key .= $keys[array_rand($keys)];
  }

  $length = $size - 2;

  $key = '';
  $keys = range(0, 10);

  for ($i = 0; $i < $length; $i++) {
    $key .= $keys[array_rand($keys)];
  }

  $password= $alpha_key . $key;

  $raasi1=isset($raasi1)?implode(',',$raasi1):'';
  $raasi2=isset($raasi2)?implode(',',$raasi2):'';
  $raasi3=isset($raasi3)?implode(',',$raasi3):'';
  $raasi4=isset($raasi4)?implode(',',$raasi4):'';
  $raasi5=isset($raasi5)?implode(',',$raasi5):'';
  $raasi6=isset($raasi6)?implode(',',$raasi6):'';
  $raasi7=isset($raasi7)?implode(',',$raasi7):'';
  $raasi8=isset($raasi8)?implode(',',$raasi8):'';
  $raasi9=isset($raasi9)?implode(',',$raasi9):'';
  $raasi10=isset($raasi10)?implode(',',$raasi10):'';
  $raasi11=isset($raasi11)?implode(',',$raasi11):'';
  $raasi12=isset($raasi12)?implode(',',$raasi12):'';

  $amsam1=isset($amsam1)?implode(',',$amsam1):'';
  $amsam2=isset($amsam2)?implode(',',$amsam2):'';
  $amsam3=isset($amsam3)?implode(',',$amsam3):'';
  $amsam4=isset($amsam4)?implode(',',$amsam4):'';
  $amsam5=isset($amsam5)?implode(',',$amsam5):'';
  $amsam6=isset($amsam6)?implode(',',$amsam6):'';
  $amsam7=isset($amsam7)?implode(',',$amsam7):'';
  $amsam8=isset($amsam8)?implode(',',$amsam8):'';
  $amsam9=isset($amsam9)?implode(',',$amsam9):'';
  $amsam10=isset($amsam10)?implode(',',$amsam10):'';
  $amsam11=isset($amsam11)?implode(',',$amsam11):'';
  $amsam12=isset($amsam12)?implode(',',$amsam12):'';

  $new_image = $_FILES['photo']['name'];
  $tmp_name = $_FILES['photo']['tmp_name'];
  $target_dir = "photos/".basename($new_image);
  if($new_image != "")
  {
    if(move_uploaded_file($tmp_name,$target_dir))
    {
          //$message = "";
      /*echo "<script type='text/javascript'>alert('$message');</script>";*/
    }
    else
    {
          //echo "failed";
    }
  }
  $new_image = $_FILES['docs']['name'];
  $tmp_name = $_FILES['docs']['tmp_name'];
  $target_dir1 = "jathagam/".basename($new_image);
  if($new_image != "")
  {
    if(move_uploaded_file($tmp_name,$target_dir1))
    {
          //$message = "";
      /*echo "<script type='text/javascript'>alert('$message');</script>";*/
    }
    else
    {
          //echo "failed";
    }
  }
//echo "testttt";
  $sel=mysql_query("SELECT id FROM registerfree ORDER BY id DESC LIMIT 1;");
     //$t=mysql_num_rows($sel);
  $res1=mysql_fetch_assoc($sel);
  $id1= $res1["id"];
  $id3 =$id1+1;
  $id2="IK00".$id3;


  $cc="INSERT INTO `login`(`username`, `password`, `phone`) VALUES ('$id2','$password','$mobile')";
      //echo $cc;

  $vv=mysql_query($cc);

  $employee=isset($employee)?$employee:'';
  $weight=isset($weight)?$weight:'';
  $food=isset($food)?$food:'';
  $language=isset($language)?$language:'';
  $native_place=isset($native_place)?$native_place:'';
  $Family_Background=isset($Family_Background)?$Family_Background:'';
  $gothiram=isset($gothiram)?$gothiram:'';
  $years=isset($years)?$years:'';
  $months=isset($months)?$months:'';
  $days=isset($days)?$days:'';
  $comments=isset($comments)?$comments:'';
  $thosh=isset($thosh)?$thosh:'';
  $profiles=isset($profiles)?$profiles:'';
  $email=isset($email)?$email:'';

//echo $profiles;
  $i="INSERT INTO `registerfree`( `name`,`matri_id`,`gender`,`caste`,`subcaste`,`dob`,`dot`,`age`,`height`,`color`,`edu`,`employed`,`working_place`,`monthlyincome`,`phy`,`mstatus`,`religion`,`god`,`weight`,`food`,`father_name`,`mother_name`,`father_occ`,`mother_occ`,`bro`,`sis`,`mbro`,`msis`,`language`,`hometown`,`expectation`,`f_status`,`family_bg`,`lagnam`,`star`,`rasi`,`gothram`,`thisai_year`,`thisai_month`,`thisai_date`,`jathagam`,
  `thisai`, `one`, `two`, `three`, `four`, `five`, `six`, 
  `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `aone`, `atwo`, `athree`, `afour`,
  `afive`, `asix`, `aseven`, `aeight`, `anine`, `aten`, `aeleven`, `atwelve`, `up_profile`,
  `address`, `email`, `mobile`,`land`, `profile_for`,`detail`,`ybrother`,`ysister`,`birth_place`,`city`,`thosam`,`ptype`) VALUES
  ('$name','$id2','$sex','$caste','$sub_caste','$dob','$dot','$d2','$height','$colour','$qualification','$employee','$work_place','$income','$phy_status','$married','$religion','$bestgod','$weight','$food','$fa_name','$mo_name','$fa_occ','$mo_occ','$brothers','$sisters','$mbrother','$msister','$language','$native_place','$expect','$Family_Status','$Family_Background','$lagnam','$star','$rasi','$gothiram','$years','$months','$days',
  '$target_dir1',
  '$thisai','$raasi1','$raasi2',
  '$raasi3','$raasi4','$raasi5','$raasi6',
  '$raasi7','$raasi8','$raasi9','$raasi10','$raasi11','$raasi12',
  '$amsam1','$amsam2','$amsam3','$amsam4','$amsam5','$amsam6',
  '$amsam7','$amsam8','$amsam9',
  '$amsam10','$amsam11','$amsam12',
  '$target_dir','$address','$mail','$mobile','$land','$profiles','$comments','$ybrothers','$ysisters','$bplace','$city','$thosh','1')";


//echo $i;
//exit;
  $res=mysql_query($i);
  if($res)
  {
    echo "<script> alert ('successfully inserted'); </script>";
  }
  else{
  //echo "Failed";
  }
}

?>

<?php
if(isset($_POST['registers']))
  { extract($_POST);

//     $from = 'Inaikkum Karangal Contact Mailer <web@http://inaikkumkarangalmatrimony.in/>'."\r\n" .'Reply-To: '.$email."\r\n" .'X-Mailer: PHP/' . phpversion(); 
//   $to = "info@inaikkumkarangal.in"; 
//       //$to = "rajabasheer.94@gmail.com"; 
      
//       $message = '<html><body>';
// $message .= '<table rules="all" border="1" width="700" style="border-color: #666;" cellpadding="10">';
// $message .= "<tr><td colspan='4' align='center'><img src='http://inaikkumkarangal.in/images/LOGOss.png'></td></tr>";
// $message .= "<tr style='background: #da1e13;'><td colspan='4' align='center' style='color: white;'><strong>User Register Details</strong> </td></tr>";

// $message .= "<tr><td><strong> Name: </strong></td><td colspan='3'>" . $name. "</td></tr>";
// $message .= "<tr><td><strong>User_id:</strong> </td><td colspan='3'>" . $id2  . "</td></tr>";
// $message .= "<tr><td><strong>Password:</strong> </td><td colspan='3'>" . $password . "</td></tr>";
// $message .= "<tr><td><strong>Mobile Number:</strong> </td><td colspan='3'>" . $land . "</td></tr>";
// //$message .= "<tr><td><strong>User Id::</strong> </td><td colspan='3'>" . $user . "</td></tr>";
// //$message .= "<tr><td><strong>Bank Name::</strong> </td><td colspan='3'>" . $bank . "</td></tr>";
// //$message .= "<tr><td><strong>Account No:</strong> </td><td colspan='3'>" . $acc . "</td></tr>";
// //$message .= "<tr><td><strong>Amount:</strong> </td><td colspan='3'>" . $amount . "</td></tr>";
// //$message .= "<tr><td><strong>Receipt Photo:</strong> </td><td colspan='3'>" . $upload . "</td></tr>";

//  $subject =  $name .' ' . 'Register Details';

//       $headers = "From: " . $from . "\r\n";
//       $headers .= "MIME-Version: 1.0\r\n";
//       $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//       $success=mail($to, $subject, $message, $headers);
//    if($success) {
//             echo "<script>alert('Thank you for contacting us');window.location.href='freeregisteration.php';</script>";
//             } else {
//               $err=error_get_last()['message'];
//            echo "<script>
// alert('$err');
// alert('Some problem occur in sending mail...Please try again');
// window.location.href='freeregisteration.php';
// </script>";   
// //             }
    
// require 'PHPMailerAutoload.php';

// $mail = new PHPMailer;

// $mail->SMTPDebug = 4;                               // Enable verbose debug output

// $mail->isSMTP();
// $mail->Host = 'mail.enfive.in';//'smtpout.asia.secureserver.net';
// $mail->Port = 587;
// $mail->SMTPAuth = false;
// $mail->SMTPSecure = false;
// //$mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'software@enfive.in';//'spyderinfotech2017@gmail.com';                 // SMTP username
// $mail->Password = 'Admin@123';                           // SMTP password
// //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
// //$mail->Port = 25;                                    // TCP port to connect to

// $mail->setFrom('software@enfive.in', 'Mailer');
// $mail->addAddress('info@inaikkumkarangal.in', 'Joe User');     // Add a recipient

// // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
// $mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Here is the subject';
// $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// if(!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message has been sent';
// }           



      $message = '';
$message .= '<table rules="all" border="1" width="700" style="border-color: #666;" cellpadding="10">';
$message .= "<tr><td colspan='4' align='center'><img src='http://inaikkumkarangal.in/images/LOGOss.png'></td></tr>";
$message .= "<tr style='background: #da1e13;'><td colspan='4' align='center' style='color: white;'><strong>User Register Details</strong> </td></tr>";

$message .= "<tr><td><strong> Name: </strong></td><td colspan='3'>" . $name. "</td></tr>";
$message .= "<tr><td><strong>User_id:</strong> </td><td colspan='3'>" . $id2  . "</td></tr>";
$message .= "<tr><td><strong>Password:</strong> </td><td colspan='3'>" . $password . "</td></tr>";
$message .= "<tr><td><strong>Mobile Number:</strong> </td><td colspan='3'>" . $land . "</td></tr>";
// $message .= "<tr><td><strong>User Id::</strong> </td><td colspan='3'>" . $user . "</td></tr>";
// $message .= "<tr><td><strong>Bank Name::</strong> </td><td colspan='3'>" . $bank . "</td></tr>";
// $message .= "<tr><td><strong>Account No:</strong> </td><td colspan='3'>" . $acc . "</td></tr>";
// $message .= "<tr><td><strong>Amount:</strong> </td><td colspan='3'>" . $amount . "</td></tr>";
// $message .= "<tr><td><strong>Receipt Photo:</strong> </td><td colspan='3'>" . $upload . "</td></tr>";

 $subject =  $name .' ' . 'Register Details';

$url = 'http://18.213.86.227:4000/api/user/sendmail';
$data = array('Port' => '465','Service' => 'Godaddy','Host' => 'smtpout.secureserver.net','Username' => 'info@inaikkumkarangal.in', 'Password' => 'Meena@123', 'From' => 'Inaikkum<info@inaikkumkarangal.in>', 'To' => 'Inaikkum<info@inaikkumkarangal.in>', 'Subject' => $subject, 'Text' => $message);

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { echo 'Error';/* Handle error */ }
else {  }
//var_dump($result);

// echo httpPost($url,$data);
// function httpPost($url, $data)
// {
//     $curl = curl_init($url);
//     curl_setopt($curl, CURLOPT_POST, true);
//     curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//     $response = curl_exec($curl);
//     curl_close($curl);
//     return $response;
// }
 }
 ?>


 <!DOCTYPE html>
 <html>
 
 <head>
  <meta charset="UTF-8">
  <title></title>
  <!-- reponsive meta-->
  <meta name="viewport" content="user-scalable=no">
  <!-- Bootstrap-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- strock gap icons-->
  <link rel="stylesheet" href="vendors/Stroke-Gap-Icons-Webfont/style.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <!-- owl-carousel-->
  <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css">
  <link rel="stylesheet" href="vendors/imagelightbox/imagelightbox.min.css">
  <link rel="stylesheet" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
  <!-- Main Css-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  <!--if IE-->
  <link rel="stylesheet" type="text/css" href="css/all-ie-only.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
  <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')
    
  -->

  <script type="text/javascript">
    function rthosam()
    {
//var checkboxes = document.getElementsById('1rragu');



document.getElementById('thosh').value='Ragu/kethu Thosam';

}


function rthosam1()
{
//var checkboxes = document.getElementsById('1rragu');


document.getElementById('thosh').value='Sevvai Thosam';

}
</script>





<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}
@media (min-width: 768px)
{
  .container {
    width: 90% !important;
    /* margin: 0px; */
  }
}
/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  /*float: right;*/
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>



<script>
  function uncheck(hname,cnt)
  {
    
    if(document.getElementById(cnt+hname).checked) { 
      
      if(cnt!=1) { document.getElementById('1'+hname).disabled=true; $('#tr1'+hname).hide(); }
      if(cnt!=2) { document.getElementById('2'+hname).disabled=true; $('#tr2'+hname).hide(); }
      if(cnt!=3) { document.getElementById('3'+hname).disabled=true; $('#tr3'+hname).hide(); }
      if(cnt!=4) { document.getElementById('4'+hname).disabled=true; $('#tr4'+hname).hide(); }
      if(cnt!=5) { document.getElementById('5'+hname).disabled=true; $('#tr5'+hname).hide(); }
      if(cnt!=6) { document.getElementById('6'+hname).disabled=true; $('#tr6'+hname).hide(); }
      if(cnt!=7) { document.getElementById('7'+hname).disabled=true; $('#tr7'+hname).hide(); }
      if(cnt!=8) { document.getElementById('8'+hname).disabled=true; $('#tr8'+hname).hide(); }
      if(cnt!=9) { document.getElementById('9'+hname).disabled=true; $('#tr9'+hname).hide(); }
      if(cnt!=10) { document.getElementById('10'+hname).disabled=true; $('#tr10'+hname).hide(); }
      if(cnt!=11) { document.getElementById('11'+hname).disabled=true; $('#tr11'+hname).hide(); }
      if(cnt!=12) { document.getElementById('12'+hname).disabled=true; $('#tr12'+hname).hide(); }
      
    }
    else
    {
      if(cnt!=1) { document.getElementById('1'+hname).disabled=false; $('#tr1'+hname).show(); }
      if(cnt!=2) { document.getElementById('2'+hname).disabled=false; $('#tr2'+hname).show(); }
      if(cnt!=3) { document.getElementById('3'+hname).disabled=false; $('#tr3'+hname).show(); }
      if(cnt!=4) { document.getElementById('4'+hname).disabled=false; $('#tr4'+hname).show(); }
      if(cnt!=5) { document.getElementById('5'+hname).disabled=false; $('#tr5'+hname).show(); }
      if(cnt!=6) { document.getElementById('6'+hname).disabled=false; $('#tr6'+hname).show(); }
      if(cnt!=7) { document.getElementById('7'+hname).disabled=false; $('#tr7'+hname).show(); }
      if(cnt!=8) { document.getElementById('8'+hname).disabled=false; $('#tr8'+hname).show(); }
      if(cnt!=9) { document.getElementById('9'+hname).disabled=false; $('#tr9'+hname).show(); }
      if(cnt!=10) { document.getElementById('10'+hname).disabled=false; $('#tr10'+hname).show(); }
      if(cnt!=11) { document.getElementById('11'+hname).disabled=false; $('#tr11'+hname).show(); }
      if(cnt!=12) { document.getElementById('12'+hname).disabled=false; $('#tr12'+hname).show(); }
    }
  }
</script>


</head>
<body>
  <!-- .hidden-bar-->
  <section id="sidebarCollapse" class="side-menu">
    <button type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse" class="close-button"><i class="fa fa-times"></i></button>
    <div class="side-menu-widget about-widget"><a href="index-2.html" class="logo"><img src="images/icon/lr-home.png" alt="Awesome Image"></a>
      <h3 class="title playball-font">Welcome to Resort</h3>
      <!-- /.title playball-font-->
      <p>Edolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit.</p>
    </div>
    <!-- /.side-menu-widget-->
    <div class="side-menu-widget gallery-widget">
      <div class="title-box">
        <h4>From Our Gallery</h4><span class="decor-line inline"></span>
      </div>
      <!-- /.title-box-->
      <ul class="list-inline">
        <li><a href="#"><img src="images/gallery-thumb/1.jpg" alt="Awesome Image"></a></li>
        <li><a href="#"><img src="images/gallery-thumb/2.jpg" alt="Awesome Image"></a></li>
        <li><a href="#"><img src="images/gallery-thumb/3.jpg" alt="Awesome Image"></a></li>
        <li><a href="#"><img src="images/gallery-thumb/4.jpg" alt="Awesome Image"></a></li>
        <li><a href="#"><img src="images/gallery-thumb/5.jpg" alt="Awesome Image"></a></li>
        <li><a href="#"><img src="images/gallery-thumb/6.jpg" alt="Awesome Image"></a></li>
        <li><a href="#"><img src="images/gallery-thumb/7.jpg" alt="Awesome Image"></a></li>
        <li><a href="#"><img src="images/gallery-thumb/8.jpg" alt="Awesome Image"></a></li>
      </ul>
      <!-- /.list-inline-->
      <ul class="contact-info">
        <li>hello@youremail.com</li>
        <li>+1234567890</li>
      </ul>
      <!-- /.contact-info-->
    </div>
    <!-- /.side-menu-widget-->
    <div class="side-menu-widget subscribe-widget">
      <div class="title-box">
        <h4>Subscribe for our Special Offers</h4><span class="decor-line inline"></span>
      </div>
      <!-- /.title-box-->
      <form action="#" class="clearfix">
        <input type="text" placeholder="Enter email address">
        <button type="submit" class="res-btn">Subscribe</button>
      </form>
    </div>
  </section>
  <!-- /.side-menu-->
  <?php include('header.php'); ?>
  
  <section class="row final-inner-headerss">
    <div class="container">
      <h2 class="this-title">இலவச பதிவு</h2>
    </div>
  </section>
  <section class="row final-breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
       
        <li class="active">இலவச பதிவுக்கு</li>
      </ol>
    </div>
  </section>
  
  
  <section style="background:url(images/regbac.jpg);">
    <div class="container">
      
      <div class="row fadeInUp animated">
        <form name="freesearch" method="post" action="#" enctype="multipart/form-data" autocomplete="on">
          <div class="col-md-12 col-sm-12 divborder1" style="background: #ff8300;
          color: white;">
          <div class="row divborder pag">
            <div class="col-md-12 divborder1 pags">சொந்த விவரங்கள்</div>
            <div class="row"><div class="col-md-12 divborder1"><p>&nbsp;&nbsp;</p></div></div>
            <div class="form-group">
              <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">பெயர்</label></div>
              <div class="col-md-4 divborder1">
                <input type="text" class="form-control input-sm textbox1" name="name" id="name" placeholder="உங்கள் பெயர்" value="" data-title="Please valid Name">
              </div>
            </div>
            <div class="col-md-2 divborder1" style="margin-top: -11px;"><label class="control-label">பாலினம்</label></div>
            <div class="col-md-4 divborder1">
              <div class="form-group" style="margin-top: -20px;">
                <label class="radio-inline" style="margin-left: -40px;">
                  <input type="radio" name="sex" id="optionsRadios3" class="form-control input-sm" value="ஆண்" checked=""><span class="regp">ஆண்</span>
                </label>
                <label class="radio-inline"> 
                  <input type="radio" name="sex" id="optionsRadios4" class="form-control input-sm" value="பெண்"><span class="regp">பெண்</span>
                </label>
              </div>
            </div>
            <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">பிறந்த தேதி</label></div>
            <div class="col-md-4 divborder1">
              <div class="form-group">
                <input type="date" class="form-control" style="height: 30px;line-height: 15px" id="exampleInputDOB1" name="dob" placeholder="Date of Birth" value="">
              </div>
            </div>
            
            
            <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">திருமண நிலை</label></div>
            <div class="col-md-4 divborder1">
              <div class="form-group">
                <select class="form-control required combo input-sm" name="married" id="married">
                  <option value="">தேர்ந்தெடு</option>
                  <option value="திருமணமாகாதவர்">திருமணமாகாதவர்</option>
                  <option value="விவாகரத்தானவர்">விவாகரத்தானவர்</option>
                  <option value="விதவை">விதவை</option>
                </select>
              </div>
            </div>
            
            
            <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">உடல் நிலை</label></div>
            <div class="col-md-4 divborder1">
              <div class="form-group">
                <select class="form-control required combo input-sm" name="phy_status" id="phy_status">
                  <option value="">தேர்ந்தெடு</option>
                  <option value="சாதாரண">சாதாரண</option>
                  <option value="ஊனமுற்றவர்">ஊனமுற்றவர்</option>
                </select>
              </div>
            </div>
            
            <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">மதம்</label></div>
            <div class="col-md-4 divborder1">
              <div class="form-group">
                <select class="form-control required combo input-sm" name="religion" id="religion" data-title="Please select Complexion">
                  
                  <option value="">தேர்ந்தெடு</option>
                  <option value="கிறிஸ்டியன்">கிறிஸ்டியன்</option>
                  <option value="இந்து">இந்து</option>
                  <option value="முஸ்லிம்">முஸ்லிம்</option>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">சாதி</label></div>
            <div class="col-md-4 divborder1">
              <div class="form-group">
                <select class="form-control required combo input-sm" name="caste" id="caste" data-title="Please select Caste">
                 <option value="default">தேர்ந்தெடு</option>
                 <option value="நாடார்">நாடார்</option>
                 <option value="யாதவர்">யாதவர்</option>
                 <option value="தெலுங்கு யாதவர்">தெலுங்கு யாதவர்</option>
                 <option value="தமிழ் விஸ்வகர்மா">தமிழ் விஸ்வகர்மா</option>
                 <option value="தெலுங்கு விஸ்வகர்மா">தெலுங்கு விஸ்வகர்மா</option>
                 <option value="அகமுடைய முதலியார்">அகமுடைய முதலியார்</option>
                 <option value="முதலியார்">முதலியார்</option>
                 <option value="தேவர்">தேவர்</option>
                 <option value="கள்ளர்">கள்ளர்</option>
                 <option value="மறவர்">மறவர்</option>
                 <option value="அகமுடைய தேவர்">அகமுடைய தேவர்</option>
                 <option value="செட்டியார்">செட்டியார்</option>
                 <option value="RC கிறிஸ்டியன்">RC கிறிஸ்டியன்</option>
                 <option value="CSI கிறிஸ்டியன்">CSI கிறிஸ்டியன்</option>
                 <option value="AG கிறிஸ்டியன்">AG கிறிஸ்டியன்</option>
                 <option value="பிள்ளைமார்">பிள்ளைமார்</option>
                 <option value="சைவ பிள்ளைமார்">சைவ பிள்ளைமார்</option>
                 <option value="இல்லத்து பிள்ளைமார்">இல்லத்து பிள்ளைமார்</option>
                 <option value="ரெட்டியார்">ரெட்டியார்</option>
                 <option value="ஆதி திராவிடர்-பறையர்">ஆதி திராவிடர்-பறையர்</option>
                 <option value="தேவேந்திர குலம்-பள்ளர்">தேவேந்திர குலம்-பள்ளர்</option>
                 <option value="பிராமணர்">பிராமணர்</option>
                 <option value="கவுடர்">கவுடர்</option>
                 <option value="முஸ்லிம்-தமிழ்">முஸ்லிம்-தமிழ்</option>
                 <option value="நாயுடு">நாயுடு</option>
                 <option value="கௌரவ நாயுடு">கௌரவ நாயுடு</option>
                 <option value="கம்மவர் நாயுடு">கம்மவர் நாயுடு</option>
                 <option value="பலிஜா நாயுடு">பலிஜா நாயுடு</option>
                 <option value="நாயர்">நாயர்</option>
                 <option value="அருந்ததியர்">அருந்ததியர்</option>
                 <option value="மூப்பனார்">மூப்பனார்</option>
                 <option value="மருத்துவர்">மருத்துவர்</option>
                 <option value="வீர சைவம்">வீர சைவம்</option>
                 <option value="வண்ணார்">வண்ணார்</option>
                 <option value="சௌராஷ்ட்ரா">சௌராஷ்ட்ரா</option>
                 <option value="நாயக்கர்">நாயக்கர்</option>
                 <option value="வேளார்">வேளார்</option>
                 <option value="உடையர்">உடையர்</option>
                 <option value="சாலியர்">சாலியர்</option>
                 
                 <option value="போயர்">போயர்</option>
                 <option value="ஒக்காலிக கௌடர்">ஒக்காலிக கௌடர்</option>
                 <option value="முத்தரையர்">முத்தரையர்</option>
                 <option value="முத்து ராஜா">முத்து ராஜா</option>
                 <option value="வள்ளுவன்">வள்ளுவன்</option>
                 <option value="அம்பலக்காரர்">அம்பலக்காரர்</option>
                 <option value="மீனவர் பர்வத ராஜகுலம்">மீனவர் பர்வத ராஜகுலம்</option>
                 <option value="குலாலர்">குலாலர்</option>
                 <option value="குறவர்">குறவர்</option>
                 <option value="வன்னியர்">வன்னியர்</option>
                 <option value="கலப்பு திருமணம்">கலப்பு திருமணம்</option>
                 <option value="சாதி தடையில்லை">சாதி தடையில்லை</option>
                 <option value="மறுமணம்-ஆண்">மறுமணம்-ஆண்</option>
                 <option value="மறுமணம்-பெண்">மறுமணம்-பெண்</option>
                 <option value="மற்றவை">மற்றவை</option>
               </select>
             </div>
           </div>
           <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">உட்பிரிவு</label></div>
           <div class="col-md-4 divborder1">
            <div class="form-group">
              <input type="text" class="form-control input-sm textbox1" name="sub_caste" id="sub_caste" value="" data-title="Please valid sub Caste">
            </div>
          </div>

          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">குலதெய்வம்</label></div>
          <div class="col-md-4 divborder1">
            <div class="form-group">
              <input type="text" class="form-control input-sm textbox1" name="bestgod" id="bestgod" value="" data-title="Please Fill God">
            </div>
          </div>
          
          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">உயரம்</label></div>
          <div class="col-md-4 divborder1">
            <div class="form-group">
              <select class="form-control required combo input-sm" id="ddlheightno" name="height" data-title="Please select Height">
                <option value="">தேர்ந்தெடு</option>
                <option value="3ft.5in-105cm">3ft.5in-105cm</option><option value="3ft.6in-107cm">3ft.6in-107cm</option><option value="3ft.7in-110cm">3ft.7in-110cm</option><option value="3ft.8in-112cm">3ft.8in-112cm</option><option value="3ft.9in-115cm">3ft.9in-115cm</option><option value="3ft.10in-117cm">3ft.10in-117cm</option><option value="3ft.11in-120cm">3ft.11in-120cm</option><option value="4ft-122cm">4ft-122cm</option><option value="4ft.1in-125cm">4ft.1in-125cm</option><option value="4ft.2in-127cm">4ft.2in-127cm</option><option value="4ft.3in-130cm">4ft.3in-130cm</option><option value="4ft.4in-132cm">4ft.4in-132cm</option><option value="4ft.5in-135cm">4ft.5in-135cm</option><option value="4ft.6in-137cm">4ft.6in-137cm</option><option value="4ft.7in-140cm">4ft.7in-140cm</option><option value="4ft.8in-142cm">4ft.8in-142cm</option><option value="4ft.9in-145cm">4ft.9in-145cm</option><option value="4ft.10in-147cm">4ft.10in-147cm</option><option value="4ft.11in-150cm">4ft.11in-150cm</option><option value="5ft-152cm">5ft-152cm</option><option value="5ft.1in-155cm">5ft.1in-155cm</option><option value="5ft.2in-157cm">5ft.2in-157cm</option><option value="5ft.3in-160cm">5ft.3in-160cm</option><option value="5ft.4in-162cm">5ft.4in-162cm</option><option value="5ft.5in-165cm">5ft.5in-165cm</option><option value="5ft.6in-167cm">5ft.6in-167cm</option><option value="5ft.7in-170cm">5ft.7in-170cm</option><option value="5ft.8in-172cm">5ft.8in-172cm</option><option value="5ft.9in-175cm">5ft.9in-175cm</option><option value="5ft.10in-177cm">5ft.10in-177cm</option><option value="5ft.11in-180cm">5ft.11in-180cm</option><option value="6ft-182cm">6ft-182cm</option><option value="6ft.1in-185cm">6ft.1in-185cm</option><option value="6ft.2in-187cm">6ft.2in-187cm</option><option value="6ft.3in-190cm">6ft.3in-190cm</option><option value="6ft.4in-192cm">6ft.4in-192cm</option><option value="6ft.5in-195cm">6ft.5in-195cm</option><option value="6ft.6in-197cm">6ft.6in-197cm</option><option value="6ft.7in-200cm">6ft.7in-200cm</option><option value="202">6ft.8in-202cm</option><option value="206ft.9in-205cm5">6ft.9in-205cm</option><option value="6ft.10in-207cm">6ft.10in-207cm</option><option value="6ft.11in-210cm">6ft.11in-210cm</option>           </select>
              </div>
            </div>
            
               <!-- <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Age</label></div>
        <div class="col-md-4 divborder1">
          <div class="form-group">
            <input type="text" class="form-control input-sm required textbox1" name="age" id="age" onkeypress="return isNumberKey(event);" maxlength="2">
          </div>
        </div>-->
        <!-- 
            <div class="col-md-2 col-md-offset-2 divborder1"><label class="control-label">Age</label></div>
            <div class="col-md-4 divborder1">
              <div class="form-group">
                
              </div>            
            </div>            
          </div>

        </div>-->
        

        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">நிறம்</label></div>
        <div class="col-md-4 divborder1">
          <div class="form-group">
            <select class="form-control required combo input-sm" name="colour" id="complexion" data-title="Please select Complexion">
                  <option value="">தேர்ந்தெடு</option>
              <option value="புது நிறம்">புது நிறம்</option>
              <option value="சிவப்பு">சிவப்பு</option>
              <option value="மாநிறம்">மாநிறம்</option>
              <!-- <option value="கருப்பு">கருப்பு</option> -->
            </select>
          </div>
        </div>
        
        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">கல்வித்தகுதி</label></div>
        <div class="col-md-4 divborder1">
          <div class="form-group">
            <input type="text" class="form-control" style="height: 30px;" id="exampleInputDOB1" name="qualification" placeholder="" value="">
          </div>
        </div>
        
        
        
        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">தொழில்</label></div>
        <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" 
          name="work_place" id="work_place" value="" data-title="Please enter Working Place"></div></div>
          
          
          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">மாத வருமானம்</label></div>
          <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" name="income" id="income" value="" data-title="Monthly Income"></div></div>
          
          

          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">முகவரி</label></div>
          <div class="col-md-4 divborder1">
            <div class="form-group">
              <textarea class="form-control" style="height: 68px;"  id="address" name="address" required></textarea>
            </div>
          </div>
          
          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">ஊர்</label></div>
          <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" 
            name="city" id="city" value="" data-title="Please enter your city"></div></div>
            
            <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">உங்கள் புகைப்படம்</label></div>
            <div class="col-md-4 divborder1">
              <div class="row">
                <div class="col-md-6 divborder1">
                  <div class="form-group">
                    <input type="file" name="photo" id="your_photo" size="48" accept="image/jpg,image/jpeg" onchange="loadFile(event)">
                  </div>
                </div>
                <div class="col-md-6 divborder1">
                  <font size="2">( Only jpg files allowed )</font>
                </div>
              </div>
            </div>
            
            <div class="col-md-12 divborder1 pags" style="margin-bottom: 1em;">தொடர்பு விபரங்கள்</div>
            
            
            <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">மின்னஞ்சல் முகவரி</label></div>
            <div class="col-md-4 divborder1"><div class="form-group">
              <input type="text" class="form-control input-sm required textbox1" name="mail" id="mail" value="" data-title="">
            </div>
          </div>
          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">அலைபேசி எண்</label></div>
          <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" id="mobile1" name="mobile" value="" data-title="Please enter Contact No 1" required></div></div>
          
          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">தொலைபேசி எண்</label></div>
          <div class="col-md-4 divborder1">
            <div class="form-group"><input type="text" class="form-control input-sm required textbox1" id="mobile2" name="land" value=""></div>
          </div>
          
          
          <div class="col-md-12 divborder1 pags" style="margin-bottom:1em;">குடும்ப விவரங்கள்</div>
          
          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">தந்தை பெயர்</label></div>
          <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" name="fa_name" id="fa_name" value="" data-title="Please enter father name"></div></div>
          
          
          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">தந்தை தொழில்</label></div>
          <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" name="fa_occ" id="fa_occ" value="" data-title="Please enter mother name"></div></div>
          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">தாயார் பெயர்</label></div>
          <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" id="mo_name" name="mo_name" value=""></div></div>     
          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">தாயார் தொழில்</label></div>
          <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" id="mo_occ" name="mo_occ" value=""></div></div>

          
          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">உடன்பிறப்புகள்</label><span style="font-size:0.8em"></span></div>
          <div class="col-md-4 divborder1">
            <div class="row">
              <div class="col-xs-3 col-md-3 divborder1" style="margin-top: 5px"><label class="control-label" style="font-size: 12px;">அண்ணன்</label></div>
              <div class="col-xs-3 col-md-3 divborder1">
                <div class="form-group">
                  <select name="brothers" id="brothers" class="form-control input-sm" style="width:75px;">
                    <option value="0" selected="">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>                </select>
                  </div>
                </div>
                <div class="col-xs-2 col-md-3 divborder1" style="margin-top: 5px"><label class="control-label" style="font-size: 12px;">அக்கா</label></div>
                <div class="col-xs-3 col-md-3 divborder1">
                  <div class="form-group">
                    <select name="sisters" id="sisters" class="form-control input-sm" style="width:75px;">
                      <option value="0" selected="">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>              </select>
                    </div>
                  </div>
                </div>
              </div>
              
              
              <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">உடன்பிறப்புகள்</label><span style="font-size:0.8em"></span></div>
              <div class="col-md-4 divborder1">
                <div class="row">
                  <div class="col-xs-3 col-md-3 divborder1" style="margin-right: -35px;margin-top: 5px"><label class="control-label" style="font-size: 12px;">தம்பி</label></div>
                  <div class="col-xs-3 col-md-3 divborder1">
                    <div class="form-group">
                      <select name="ybrothers" id="brothers" class="form-control input-sm" style="width:75px;">
                        <option value="0" selected="">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>                </select>
                      </div>
                    </div>
                    <div class="col-xs-2 col-md-3 divborder1" style="margin-right: -25px;margin-top: 5px"><label class="control-label" style="font-size: 12px;">தங்கை</label></div>
                    <div class="col-xs-3 col-md-3 divborder1">
                      <div class="form-group">
                        <select name="ysisters" id="sisters" class="form-control input-sm" style="width:75px;">
                          <option value="0" selected="">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>              </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">திருமணமானவர்கள்</label></div>
                  <div class="col-md-4 divborder1">
                    <div class="row">
                      <div class="col-xs-3 col-md-3 divborder1" style="margin-top: 5px"><label class="control-label" style="font-size: 12px;">ஆண்</label></div>
                      <div class="col-xs-3 col-md-3 divborder1">
                        <div class="form-group">
                          <select name="mbrother" id="brother" class="form-control input-sm" style="width:75px;">
                            <option value="0" selected="">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>                  </select>
                          </div>
                        </div>
                        <div class="col-xs-2 col-md-3 divborder1" style="margin-top: 5px"><label class="control-label" style="font-size: 12px;">பெண்</label></div>
                        <div class="col-xs-3 col-md-3 divborder1">
                          <div class="form-group">
                            <select name="msister" id="sister" class="form-control input-sm" style="width:75px;">
                              <option value="0" selected="">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>              </select>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">எதிர்பார்ப்பு</label></div>
                      <div class="col-md-4 divborder1"><div class="form-group">
                        
                        <input type="text" class="form-control input-sm required textbox1" name="expect" id="Family_Status" value="" data-title="Please select Status">
                      </div></div>

                      <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">குடும்ப நிலை</label></div>
                      <div class="col-md-4 divborder1"><div class="form-group">
                        
                        <input type="text" class="form-control input-sm required textbox1" name="Family_Status" id="Family_Status" value="" data-title="Please select Status">
                      </div></div>
                      
                      <div class="col-xs-12 col-md-12 divborder1 pags" style="margin-bottom: 1em;">ஜாதக குறிப்புகள்</div>
                      
                      <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">ராசி</label></div>
                      <div class="col-md-4 divborder1">
                        <div class="form-group">
                          <select name="rasi" id="Rasi" class="form-control input-sm">
                           
                           <option>தேர்ந்தெடு</option>     
                           <option>மேசம்</option>
                           <option>ரிசபம்</option>
                           <option>மிதுனம்</option>
                           <option>கடகம்</option>
                           <option>சிம்மம்</option>
                           <option>கன்னி</option>
                           <option>துலாம்</option>
                           <option>விருச்சிகம்</option>
                           <option>தனுசு</option>
                           <option>மகரம்</option>
                           <option>கும்பம்</option>
                           <option>மீனம்</option>
                         </select>
                         
                       </div>
                     </div>
                     
                     <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">நட்சத்திரம்</label></div>
                     <div class="col-md-4 divborder1">
                      <div class="row">
                        <div class="col-md-5 divborder1">
                          <div class="form-group">
                            <select name="star" id="star" class="form-control input-sm">
                             <option value="">தேர்ந்தெடு</option>
                             <option>அஸ்வினி</option>
                             <option>அஸ்வினி 1</option>
                             <option>அஸ்வினி 2</option>
                             <option>அஸ்வினி 3</option>
                             <option>அஸ்வினி 4</option>
                             <option>பரணி</option>
                             <option>பரணி 1</option>
                             <option>பரணி 2</option>
                             <option>பரணி 3</option>
                             <option>பரணி 4</option>
                             <option>கார்த்திகை</option>
                             <option>கார்த்திகை 1</option>
                             <option>கார்த்திகை 2</option>
                             <option>கார்த்திகை 3</option>
                             <option>ரோகிணி</option>
                             <option>ரோகிணி 1</option>
                             <option>ரோகிணி 2</option>
                             <option>ரோகிணி 3</option>
                             <option>ரோகிணி 4</option>
                             <option>மிருகசீரிடம்</option>
                             <option>மிருகசீரிடம் 1</option>
                             <option>மிருகசீரிடம் 2</option>
                             <option>மிருகசீரிடம் 3</option>
                             <option>மிருகசீரிடம் 4</option>
                             <option>திருவாதிரை</option>
                             <option>திருவாதிரை 1</option>
                             <option>திருவாதிரை 2</option>
                             <option>திருவாதிரை 3</option>
                             <option>திருவாதிரை 4</option>
                             <option>புனர்பூசம்</option>
                             <option>புனர்பூசம் 1</option>
                             <option>புனர்பூசம் 2</option>
                             <option>புனர்பூசம் 3</option>
                             <option>புனர்பூசம் 4</option>
                             <option>பூசம்</option>
                             <option>பூசம் 1</option>
                             <option>பூசம் 2</option>
                             <option>பூசம் 3</option>
                             <option>பூசம் 4</option>
                             <option>ஆயில்யம்</option>
                             <option>ஆயில்யம் 1</option>
                             <option>ஆயில்யம் 2</option>
                             <option>ஆயில்யம் 3</option>
                             <option>ஆயில்யம் 4</option>
                             <option>மகம்</option>
                             <option>மகம் 1</option>
                             <option>மகம் 2</option>
                             <option>மகம் 3</option>
                             <option>மகம் 4</option>
                             <option>பூரம்</option>
                             <option>பூரம் 1</option>
                             <option>பூரம் 2</option>
                             <option>பூரம் 3</option>
                             <option>பூரம் 4</option>
                             <option>உத்திரம்</option>
                             <option>உத்திரம் 1</option>
                             <option>உத்திரம் 2</option>
                             <option>உத்திரம் 3</option>
                             <option>உத்திரம் 4</option>
                             <option>அஸ்தம்</option>
                             <option>அஸ்தம் 1</option>
                             <option>அஸ்தம் 2</option>
                             <option>அஸ்தம் 3</option>
                             <option>அஸ்தம் 4</option>
                             <option>சித்திரை</option>
                             <option>சித்திரை 1</option>
                             <option>சித்திரை 2</option>
                             <option>சித்திரை 3</option>
                             <option>சித்திரை 4</option>
                             <option>சுவாதி</option>
                             <option>சுவாதி 1</option>
                             <option>சுவாதி 2</option>
                             <option>சுவாதி 3</option>
                             <option>சுவாதி 4</option>
                             <option>விசாகம்</option>
                             <option>விசாகம் 1</option>
                             <option>விசாகம் 2</option>
                             <option>விசாகம் 3</option>
                             <option>விசாகம் 4</option>
                             <option>அனுசம்</option>
                             <option>அனுசம் 1</option>
                             <option>அனுசம் 2</option>
                             <option>அனுசம் 3</option>
                             <option>அனுசம் 4</option>
                             <option>கேட்டை</option>
                             <option>கேட்டை 1</option>
                             <option>கேட்டை 2</option>
                             <option>கேட்டை 3</option>
                             <option>கேட்டை 4</option>
                             <option>மூலம்</option>
                             <option>மூலம் 1</option>
                             <option>மூலம் 2</option>
                             <option>மூலம் 3</option>
                             <option>மூலம் 4</option>
                             <option>பூராடம்</option>
                             <option>பூராடம் 1</option>
                             <option>பூராடம் 2</option>
                             <option>பூராடம் 3</option>
                             <option>பூராடம் 4</option>
                             <option>உத்திராடம்</option>
                             <option>உத்திராடம் 1</option>
                             <option>உத்திராடம் 2</option>
                             <option>உத்திராடம் 3</option>
                             <option>உத்திராடம் 4</option>
                             <option>திருவோணம்</option>
                             <option>திருவோணம் 1</option>
                             <option>திருவோணம் 2</option>
                             <option>திருவோணம் 3</option>
                             <option>திருவோணம் 4</option>
                             <option>அவிட்டம்</option>
                             <option>அவிட்டம் 1</option>
                             <option>அவிட்டம் 2</option>
                             <option>அவிட்டம் 3</option>
                             <option>அவிட்டம் 4</option>
                             <option>சதயம்</option>
                             <option>சதயம் 1</option>
                             <option>சதயம் 2</option>
                             <option>சதயம் 3</option>
                             <option>சதயம் 4</option>
                             <option>பூரட்டாதி</option>
                             <option>பூரட்டாதி 1</option>
                             <option>பூரட்டாதி 2</option>
                             <option>பூரட்டாதி 3</option>
                             <option>பூரட்டாதி 4</option>
                             <option>உத்திரட்டாதி</option>
                             <option>உத்திரட்டாதி 1</option>
                             <option>உத்திரட்டாதி 2</option>
                             <option>உத்திரட்டாதி 3</option>
                             <option>உத்திரட்டாதி 4</option>

                             <option>ரேவதி</option>
                             <option>ரேவதி 1</option>
                             <option>ரேவதி 2</option>
                             <option>ரேவதி 3</option>
                             <option>ரேவதி 4</option>
                             
                           </select>
                           
                         </div>
                       </div>
                     </div>
                   </div>
                   
                   <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">லக்னம்</label></div>
                   <div class="col-md-4 divborder1">
                    <div class="form-group">
                      <select name="lagnam" id="Lagnam" class="form-control input-sm">
                        
                       <option>தேர்ந்தெடு</option>     
                      <option>மேசம்</option>
                           <option>ரிசபம்</option>
                           <option>மிதுனம்</option>
                           <option>கடகம்</option>
                           <option>சிம்மம்</option>
                           <option>கன்னி</option>
                           <option>துலாம்</option>
                           <option>விருச்சிகம்</option>
                           <option>தனுசு</option>
                           <option>மகரம்</option>
                           <option>கும்பம்</option>
                           <option>மீனம்</option>
                       
                     </select>
                   </div>
                 </div>
                 
                 <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">திசை</label></div>
                 <div class="col-md-4 divborder1">
                  <div class="form-group">
                    <select name="thisai" id="Thesai" class="form-control input-sm">
                     
                     <option>தேர்ந்தெடு</option>     
                     
                     
                     <option>சந்திர மகா திசை</option>
                     <option>சூரிய மகா திசை</option>
                     <option>செவ்வாய் மகா திசை</option>
                     <option>ராகு மகா திசை</option>
                     <option>வியாழன் மகா திசை</option>
                     <option>சனி மகா திசை</option>
                     <option>புதன் மகா திசை</option>
                     <option>கேது மகா திசை</option>
                     <option>சுக்கிர மகா திசை</option>
                   </select>
                   
                 </div>
               </div>
               
               <div class="col-md-2 divborder1"><label class="control-label">பிறந்த நேரம்</label></div>
               <div class="col-md-4 divborder1">
                
                
                <div class="form-group">
                  <input type="time" name="dot" id="timepicker1"  style="color: black;">
                </div>            
              </div>
              
              <div class="col-md-2 divborder1"><label class="control-label">பிறந்த இடம்</label></div>
              <div class="col-md-4 divborder1">
                
                
                <div class="form-group">
                  <input type="text" name="bplace" id="bplace" style="color: black;">
                </div>            
              </div>
              
              
              <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">ஜாதகம்</label></div>
              <div class="col-md-4 divborder1">
                <div class="row">
                  <div class="col-md-6 divborder1">
                    <div class="form-group">
                      <input type="file" name="docs"
                      id="jathgam" size="48" accept="image/jpg,image/jpeg" onchange="loadFile(event)">
                    </div>
                  </div>
                  <div class="col-md-6 divborder1">
                    <font size="2">( Only jpg files allowed )</font>
                  </div>
                </div>
              </div>
              
            <!-- <div class="col-md-2 divborder1"><label class="control-label">Dhosam</label></div>
        <div class="col-md-4 divborder1">
              <div class="form-group">
                <input type="text" name="thosh" id="thosh" value="" style="color: black;">
              </div>            
            </div> -->
            
            <br><br>
            
            
            <div class="row">
             <div class="col-md-12">
              <div class="form-group">
               
                
                
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                  <tbody><tr>
                    <td width="45%"><table border="1" cellpadding="5" cellspacing="0" align="center" class="horobdr" style="border: 1px solid;">
                      <tbody><tr style="border: 1px solid;">
                        <td width="63" align="center" class="horobdr" style="border: 1px solid;">
                          <table cellpadding="0" cellspacing="0" border="0">
                            <tbody><tr>
                              <td valign="top"><table cellpadding="0" cellspacing="0" border="0" style="color:#000;">
                                <tbody style="color: beige;"><tr id="tr1rpu">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rpu" value="பு" onclick="return uncheck('rpu','1')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">பு</td>
                                </tr>
                                <tr id="tr1rsun">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rsun" value="சூ" onclick="return uncheck('rsun','1')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சூ</td>
                                </tr>
                                <tr id="tr1rragu">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rragu" value="ரா"  onclick=" return uncheck('rragu','1');">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ரா</td>
                                </tr>
                                <tr id="tr1rvij">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rvij" value="வி" onclick="return uncheck('rvij','1')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">வி</td>
                                </tr>
                                <tr id="tr1rchk">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rchk" value="சு" onclick="return uncheck('rchk','1')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சு</td>
                                </tr>
                                <tr id="tr1rguru">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rguru" value="கு௫" onclick="return uncheck('rguru','1')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கு</td>
                                </tr>
                              </tbody></table></td>
                              <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                                <tbody><tr id="tr1rsat">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rsat" value="சனி"  onclick="return uncheck('rsat','1')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ச</td>
                                </tr>
                                <tr id="tr1rchan">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rchan" value="சந்" onclick="return uncheck('rchan','1')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சந்</td>
                                </tr>
                                <tr id="tr1rkee">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rkee" value="கே" onclick="return uncheck('rkee','1')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கே</td>
                                </tr>
                                <tr id="tr1rsev">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rsev" value="செ" onclick="return uncheck('rsev','1')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">செ</td>
                                </tr>
                                <tr id="tr1rlac">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rlac" value="ல" onclick="return uncheck('rlac','1')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ல</td>

                                </tr>
                                
                              </tbody></table></td>
                            </tr>
                          </tbody></table>
                        </td>
                        <td width="63" align="center" class="horobdr" style="border: 1px solid;">
                          <table cellpadding="0" cellspacing="0" border="0">
                            <tbody><tr>
                              <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                                <tbody><tr id="tr2rpu">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rpu" value="பு" onclick="return uncheck('rpu','2')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">பு</td>
                                </tr>
                                <tr id="tr2rsun">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rsun" value="சூ" onclick="return uncheck('rsun','2')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சூ</td>
                                </tr>
                                <tr id="tr2rragu">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rragu" value="ரா" onclick="return uncheck('rragu','2')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ரா</td>
                                </tr>
                                <tr id="tr2rvij">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rvij" value="வி" onclick="return uncheck('rvij','2')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">வி</td>
                                </tr>
                                <tr id="tr2rchk">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rchk" value="சு" onclick="return uncheck('rchk','2')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சு</td>
                                </tr>
                                
                                <tr id="tr2rguru">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rguru" value="கு௫" onclick="return uncheck('rguru','2')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கு</td>
                                </tr>
                                
                                
                              </tbody></table></td>
                              <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                                <tbody><tr id="tr2rsat">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rsat" value="சனி" onclick="return uncheck('rsat','2')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ச</td>
                                </tr>
                                <tr id="tr2rchan">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rchan" value="சந்" onclick="return uncheck('rchan','2')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சந்</td>
                                </tr>
                                <tr id="tr2rkee">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rkee" value="கே" onclick="return uncheck('rkee','2')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கே</td>
                                </tr>
                                <tr id="tr2rsev">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rsev" value="செ" onclick="return uncheck('rsev','2')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">செ</td>
                                </tr>
                                <tr id="tr2rlac">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rlac" value="ல" onclick="return uncheck('rlac','2')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ல</td>
                                </tr>
                              </tbody></table></td>
                            </tr>
                          </tbody></table>
                        </td>
                        <td width="64" align="center" class="horobdr" style="border: 1px solid;">
                          <table cellpadding="0" cellspacing="0" border="0">
                            <tbody><tr>
                              <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                                <tbody><tr id="tr3rpu">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rpu" value="பு" onclick="return uncheck('rpu','3')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">பு</td>
                                </tr>
                                <tr id="tr3rsun">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rsun" value="சூ" onclick="return uncheck('rsun','3')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சூ</td>
                                </tr>
                                <tr id="tr3rragu">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rragu" value="ரா" onclick="return uncheck('rragu','3')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ரா</td>
                                </tr>
                                <tr id="tr3rvij">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rvij" value="வி" onclick="return uncheck('rvij','3')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">வி</td>
                                </tr>
                                <tr id="tr3rchk">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rchk" value="சு" onclick="return uncheck('rchk','3')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சு</td>
                                </tr>
                                <tr id="tr3rguru">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rguru" value="கு௫" onclick="return uncheck('rguru','3')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கு</td>
                                </tr>
                                
                              </tbody></table></td>
                              <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                                <tbody><tr id="tr3rsat">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rsat" value="சனி" onclick="return uncheck('rsat','3')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ச</td>
                                </tr>
                                <tr id="tr3rchan">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rchan" value="சந்" onclick="return uncheck('rchan','3')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சந்</td>
                                </tr>
                                <tr id="tr3rkee">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rkee" value="கே" onclick="return uncheck('rkee','3')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கே</td>
                                </tr>
                                <tr id="tr3rsev">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rsev" value="செ" onclick="return uncheck('rsev','3')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">செ</td>
                                </tr>
                                <tr id="tr3rlac">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rlac" value="ல" onclick="return uncheck('rlac','3')">
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ல</td>
                                </tr>
                              </tbody></table></td>
                            </tr>
                          </tbody></table>
                        </td>
                        <td width="64" align="center" class="horobdr" style="">
                          <table cellpadding="0" cellspacing="0" border="0">
                            <tbody><tr>
                              <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                                <tbody><tr id="tr4rpu">
                                 <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rpu" value="பு" onclick="return uncheck('rpu','4')">
                                 </td>
                                 <td style="font-size:13px;">&nbsp;</td>
                                 <td style="font-size:13px;">பு</td>
                               </tr>
                               <tr id="tr4rsun">
                                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rsun" value="சூ" onclick="return uncheck('rsun','4')">
                                </td>
                                <td style="font-size:13px;">&nbsp;</td>
                                <td style="font-size:13px;">சூ</td>
                              </tr>
                              <tr id="tr4rragu">
                                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rragu" value="ரா" onclick="return uncheck('rragu','4')">
                                </td>
                                <td style="font-size:13px;">&nbsp;</td>
                                <td style="font-size:13px;">ரா</td>
                              </tr>
                              <tr id="tr4rvij">
                                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rvij" value="வி" onclick="return uncheck('rvij','4')">
                                </td>
                                <td style="font-size:13px;">&nbsp;</td>
                                <td style="font-size:13px;">வி</td>
                              </tr>
                              <tr id="tr4rchk">
                               <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rchk" value="சு" onclick="return uncheck('rchk','4')">
                               </td>
                               <td style="font-size:13px;">&nbsp;</td>
                               <td style="font-size:13px;">சு</td>
                             </tr>
                             <tr id="tr4rguru">
                              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rguru" value="கு௫" onclick="return uncheck('rguru','4')">
                              </td>
                              <td style="font-size:13px;">&nbsp;</td>
                              <td style="font-size:13px;">கு</td>
                            </tr>
                            
                          </tbody></table></td>
                          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                            <tbody><tr id="tr4rsat">
                              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rsat" value="சனி" onclick="return uncheck('rsat','4')">
                              </td>
                              <td style="font-size:13px;">&nbsp;</td>
                              <td style="font-size:13px;">ச</td>
                            </tr>
                            <tr id="tr4rchan">
                              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rchan" value="சந்" onclick="return uncheck('rchan','4')">
                              </td>
                              <td style="font-size:13px;">&nbsp;</td>
                              <td style="font-size:13px;">சந்</td>
                            </tr>
                            <tr id="tr4rkee">
                              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rkee" value="கே" onclick="return uncheck('rkee','4')">
                              </td>
                              <td style="font-size:13px;">&nbsp;</td>
                              <td style="font-size:13px;">கே</td>
                            </tr>
                            <tr id="tr4rsev">
                             <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rsev" value="செ" onclick="return uncheck('rsev','4')">
                             </td>
                             <td style="font-size:13px;">&nbsp;</td>
                             <td style="font-size:13px;">செ</td>
                           </tr>
                           <tr id="tr4rlac">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rlac" value="ல" onclick="return uncheck('rlac','4')">
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">ல</td>
                          </tr>
                        </tbody></table></td>
                      </tr>
                    </tbody></table>
                  </td>
                </tr>
                <tr style="border: 1px solid;">
                  <td width="63" align="center" class="horobdr">
                    <table cellpadding="0" cellspacing="0" border="0">
                      <tbody><tr>
                        <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                          <tbody><tr id="tr12rpu">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rpu" value="பு" onclick="return uncheck('rpu','12')">
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">பு</td>
                          </tr>
                          <tr id="tr12rsun">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rsun" value="சூ" onclick="return uncheck('rsun','12')">
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">சூ</td>
                          </tr>
                          <tr id="tr12rragu">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rragu" value="ரா" onclick="return uncheck('rragu','12')">
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">ரா</td>
                          </tr>
                          <tr id="tr12rvij">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rvij" value="வி" onclick="return uncheck('rvij','12')">
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">வி</td>
                          </tr>
                          <tr id="tr12rchk">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rchk" value="சு" onclick="return uncheck('rchk','12')">
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">சு</td>
                          </tr>
                          <tr id="tr12rguru">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rguru" value="கு௫" onclick="return uncheck('rguru','12')">
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">கு</td>
                          </tr>
                        </tbody></table></td>
                        <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                          <tbody><tr id="tr12rsat">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rsat" value="சனி" onclick="return uncheck('rsat','12')">
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">ச</td>
                          </tr>
                          <tr id="tr12rchan">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rchan" value="சந்" onclick="return uncheck('rchan','12')">
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">சந்</td>
                          </tr>
                          <tr id="tr12rkee">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rkee" value="கே" onclick="return uncheck('rkee','12')">
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">கே</td>
                          </tr>
                          <tr id="tr12rsev">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rsev" value="செ" onclick="return uncheck('rsev','12')">
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">செ</td>
                          </tr>
                          <tr id="tr12rlac">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rlac" value="ல" onclick="return uncheck('rlac','12')">
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">ல</td>
                          </tr>
                        </tbody></table></td>
                      </tr>
                    </tbody></table>
                  </td>






                  <td colspan="2" rowspan="2" height="118" align="center" class="horobdr" style="border: 1px solid;"><p align="center"><b><span lang="ta"><br>ராசி</span></b></p></td>
                  <td width="64" align="center" class="horobdr">
                    <table cellpadding="0" cellspacing="0" border="0">
                      <tbody><tr>
                        <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                          <tbody><tr id="tr5rpu">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rpu" value="பு" onclick="return uncheck('rpu','5')">
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">பு</td>
                          </tr>
                          <tr id="tr5rsun">
                           <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rsun" value="சூ" onclick="return uncheck('rsun','5')">
                           </td>
                           <td style="font-size:13px;">&nbsp;</td>
                           <td style="font-size:13px;">சூ</td>
                         </tr>
                         <tr id="tr5rragu">
                          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rragu" value="ரா" onclick="return uncheck('rragu','5')">
                          </td>
                          <td style="font-size:13px;">&nbsp;</td>
                          <td style="font-size:13px;">ரா</td>
                        </tr>
                        <tr id="tr5rvij">
                          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rvij" value="வி" onclick="return uncheck('rvij','5')">
                          </td>
                          <td style="font-size:13px;">&nbsp;</td>
                          <td style="font-size:13px;">வி</td>
                        </tr>
                        <tr id="tr5rchk">
                         <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rchk" value="சு" onclick="return uncheck('rchk','5')">
                         </td>
                         <td style="font-size:13px;">&nbsp;</td>
                         <td style="font-size:13px;">சு</td>
                       </tr>
                       <tr id="tr5rguru">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rguru" value="கு௫" onclick="return uncheck('rguru','5')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">கு</td>
                      </tr>

                    </tbody></table></td>
                    <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                      <tbody><tr id="tr5rsat">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rsat" value="சனி" onclick="return uncheck('rsat','5')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">ச</td>
                      </tr>
                      <tr id="tr5rchan">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rchan" value="சந்" onclick="return uncheck('rchan','5')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">சந்</td>
                      </tr>
                      <tr id="tr5rkee">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rkee" value="கே" onclick="return uncheck('rkee','5')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">கே</td>
                      </tr>
                      <tr id="tr5rsev">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rsev" value="செ" onclick="return uncheck('rsev','5')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">செ</td>
                      </tr>
                      <tr id="tr5rlac">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rlac" value="ல" onclick="return uncheck('rlac','5')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">ல</td>
                      </tr>
                    </tbody></table></td>
                  </tr>
                </tbody></table>
              </td>
            </tr>
            <tr style="border: 1px solid;">
              <td width="63" align="center" class="horobdr" style="border: 1px solid;">
                <table cellpadding="0" cellspacing="0" border="0">
                  <tbody><tr>
                    <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                      <tbody><tr id="tr11rpu">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rpu" value="பு" onclick="return uncheck('rpu','11')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">பு</td>
                      </tr>
                      <tr id="tr11rsun">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rsun" value="சூ" onclick="return uncheck('rsun','11')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">சூ</td>
                      </tr>
                      <tr id="tr11rragu">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rragu" value="ரா" onclick="return uncheck('rragu','11')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">ரா</td>
                      </tr>
                      <tr id="tr11rvij">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rvij" value="வி" onclick="return uncheck('rvij','11')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">வி</td>

                      </tr>
                      <tr id="tr11rchk">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rchk" value="சு" onclick="return uncheck('rchk','11')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">சு</td>
                      </tr>
                      <tr id="tr11rguru">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rguru" value="கு௫" onclick="return uncheck('rguru','11')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">கு</td>
                      </tr>
                    </tbody></table></td>
                    <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                      <tbody><tr id="tr11rsat">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rsat" value="சனி" onclick="return uncheck('rsat','11')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">ச</td>
                      </tr>
                      <tr id="tr11rchan">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rchan" value="சந்" onclick="return uncheck('rchan','11')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">சந்</td>
                      </tr>
                      <tr id="tr11rkee">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rkee" value="கே" onclick="return uncheck('rkee','11')">

                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">கே</td>
                      </tr>
                      <tr id="tr11rsev">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rsev" value="செ" onclick="return uncheck('rsev','11')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">செ</td>
                      </tr>
                      <tr id="tr11rlac">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rlac" value="ல" onclick="return uncheck('rlac','11')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">ல</td>
                      </tr>
                    </tbody></table></td>
                  </tr>
                </tbody></table>
              </td>
              <td width="64" align="center" class="horobdr">
                <table cellpadding="0" cellspacing="0" border="0">
                  <tbody><tr>
                    <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                      <tbody><tr id="tr6rpu">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rpu" value="பு" onclick="return uncheck('rpu','6')">
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">பு</td>
                      </tr>
                      <tr id="tr6rsun">
                       <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rsun" value="சூ" onclick="return uncheck('rsun','6')">
                       </td>
                       <td style="font-size:13px;">&nbsp;</td>
                       <td style="font-size:13px;">சூ</td>
                     </tr>
                     <tr id="tr6rragu">
                       <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rragu" value="ரா" onclick="return uncheck('rragu','6')">
                       </td>
                       <td style="font-size:13px;">&nbsp;</td>
                       <td style="font-size:13px;">ரா</td>
                     </tr>
                     <tr id="tr6rvij">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rvij" value="வி" onclick="return uncheck('rvij','6')">
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">வி</td>
                    </tr>
                    <tr id="tr6rchk">
                     <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rchk" value="சு" onclick="return uncheck('rchk','6')">
                     </td>
                     <td style="font-size:13px;">&nbsp;</td>
                     <td style="font-size:13px;">சு</td>
                   </tr>
                   <tr id="tr6rguru">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rguru" value="கு௫" onclick="return uncheck('rguru','6')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">கு</td>
                  </tr>
                </tbody></table></td>
                <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                  <tbody><tr id="tr6rsat">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rsat" value="சனி" onclick="return uncheck('rsat','6')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">ச</td>
                  </tr>
                  <tr id="tr6rchan">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rchan" value="சந்" onclick="return uncheck('rchan','6')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">சந்</td>
                  </tr>
                  <tr id="tr6rkee">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rkee" value="கே" onclick="return uncheck('rkee','6')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">கே</td>
                  </tr>
                  <tr id="tr6rsev">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rsev" value="செ" onclick="return uncheck('rsev','6')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">செ</td>
                  </tr>
                  <tr id="tr6rlac">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rlac" value="ல" onclick="return uncheck('rlac','6')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">ல</td>
                  </tr>
                </tbody></table></td>
              </tr>
            </tbody></table>
          </td>
        </tr>
        <tr>
          <td width="63" align="center" class="horobdr" style="border: 1px solid;">
            <table cellpadding="0" cellspacing="0" border="0">
              <tbody><tr>
                <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                  <tbody><tr id="tr10rpu">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rpu" value="பு" onclick="return uncheck('rpu','10')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">பு</td>
                  </tr>
                  <tr id="tr10rsun">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rsun" value="சூ" onclick="return uncheck('rsun','10')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">சூ</td>
                  </tr>
                  <tr id="tr10rragu">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rragu" value="ரா" onclick="return uncheck('rragu','10')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">ரா</td>
                  </tr>
                  <tr id="tr10rvij">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rvij" value="வி" onclick="return uncheck('rvij','10')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">வி</td>
                  </tr>
                  <tr id="tr10rchk">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rchk" value="சு" onclick="return uncheck('rchk','10')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">சு</td>
                  </tr>
                  <tr id="tr10rguru">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rguru" value="கு௫" onclick="return uncheck('rguru','10')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">கு</td>
                  </tr>
                </tbody></table></td>
                <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                  <tbody><tr id="tr10rsat">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rsat" value="சனி" onclick="return uncheck('rsat','10')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">ச</td>
                  </tr>
                  <tr id="tr10rchan">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rchan" value="சந்" onclick="return uncheck('rchan','10')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">சந்</td>
                  </tr>
                  <tr id="tr10rkee">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rkee" value="கே" onclick="return uncheck('rkee','10')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">கே</td>
                  </tr>
                  <tr id="tr10rsev">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rsev" value="செ" onclick="return uncheck('rsev','10')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">செ</td>
                  </tr>
                  <tr id="tr10rlac">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rlac" value="ல" onclick="return uncheck('rlac','10')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">ல</td>
                  </tr>
                </tbody></table></td>
              </tr>
            </tbody></table>
          </td>
          <td width="63" align="center" class="horobdr" style="border: 1px solid;">
            <table cellpadding="0" cellspacing="0" border="0">
              <tbody><tr>
                <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                  <tbody><tr id="tr9rpu">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rpu" value="பு" onclick="return uncheck('rpu','9')">
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">பு</td>
                  </tr>
                  <tr id="tr9rsun">
                   <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rsun" value="சூ" onclick="return uncheck('rsun','9')">
                   </td>
                   <td style="font-size:13px;">&nbsp;</td>
                   <td style="font-size:13px;">சூ</td>
                 </tr>
                 <tr id="tr9rragu">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rragu" value="ரா" onclick="return uncheck('rragu','9')">
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">ரா</td>
                </tr>
                <tr id="tr9rvij">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rvij" value="வி" onclick="return uncheck('rvij','9')">
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">வி</td>
                </tr>
                <tr id="tr9rchk">
                 <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rchk" value="சு" onclick="return uncheck('rchk','9')">
                 </td>
                 <td style="font-size:13px;">&nbsp;</td>
                 <td style="font-size:13px;">சு</td>
               </tr>
               <tr id="tr9rguru">
                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rguru" value="கு௫" onclick="return uncheck('rguru','9')">
                </td>
                <td style="font-size:13px;">&nbsp;</td>
                <td style="font-size:13px;">கு</td>
              </tr>
            </tbody></table></td>
            <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
              <tbody><tr id="tr9rsat">
                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rsat" value="சனி" onclick="return uncheck('rsat','9')">
                </td>
                <td style="font-size:13px;">&nbsp;</td>
                <td style="font-size:13px;">ச</td>
              </tr>
              <tr id="tr9rchan">
                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rchan" value="சந்" onclick="return uncheck('rchan','9')">
                </td>
                <td style="font-size:13px;">&nbsp;</td>
                <td style="font-size:13px;">சந்</td>
              </tr>
              <tr id="tr9rkee">
                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rkee" value="கே" onclick="return uncheck('rkee','9')">
                </td>
                <td style="font-size:13px;">&nbsp;</td>
                <td style="font-size:13px;">கே</td>
              </tr>
              <tr id="tr9rsev">
                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rsev" value="செ" onclick="return uncheck('rsev','9')">
                </td>
                <td style="font-size:13px;">&nbsp;</td>
                <td style="font-size:13px;">செ</td>
              </tr>
              <tr id="tr9rlac">
                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rlac" value="ல" onclick="return uncheck('rlac','9')">
                </td>
                <td style="font-size:13px;">&nbsp;</td>
                <td style="font-size:13px;">ல</td>
              </tr>
            </tbody></table></td>
          </tr>
        </tbody></table>
      </td>
      <td width="64" height="64" align="center" class="horobdr" style="border: 1px solid;">
        <table cellpadding="0" cellspacing="0" border="0">
          <tbody><tr>
            <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
              <tbody><tr id="tr8rpu">
                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rpu" value="பு" onclick="return uncheck('rpu','8')">
                </td>
                <td style="font-size:13px;">&nbsp;</td>
                <td style="font-size:13px;">பு</td>
              </tr>
              <tr id="tr8rsun">
               <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rsun" value="சூ" onclick="return uncheck('rsun','8')">
               </td>
               <td style="font-size:13px;">&nbsp;</td>
               <td style="font-size:13px;">சூ</td>
             </tr>
             <tr id="tr8rragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rragu" value="ரா" onclick="return uncheck('rragu','8')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr8rvij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rvij" value="வி" onclick="return uncheck('rvij','8')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr8rchk">
             <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rchk" value="சு" onclick="return uncheck('rchk','8')">
             </td>
             <td style="font-size:13px;">&nbsp;</td>
             <td style="font-size:13px;">சு</td>
           </tr>
           <tr id="tr8rguru">
            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rguru" value="கு௫" onclick="return uncheck('rguru','8')">
            </td>
            <td style="font-size:13px;">&nbsp;</td>
            <td style="font-size:13px;">கு</td>
          </tr>
        </tbody></table></td>
        <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
          <tbody><tr id="tr8rsat">
            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rsat" value="சனி" onclick="return uncheck('rsat','8')">
            </td>
            <td style="font-size:13px;">&nbsp;</td>
            <td style="font-size:13px;">ச</td>
          </tr>
          <tr id="tr8rchan">
            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rchan" value="சந்" onclick="return uncheck('rchan','8')">
            </td>
            <td style="font-size:13px;">&nbsp;</td>
            <td style="font-size:13px;">சந்</td>
          </tr>
          <tr id="tr8rkee">
            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rkee" value="கே" onclick="return uncheck('rkee','8')">
            </td>
            <td style="font-size:13px;">&nbsp;</td>
            <td style="font-size:13px;">கே</td>
          </tr>
          <tr id="tr8rsev">
            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rsev" value="செ" onclick="return uncheck('rsev','8')">
            </td>
            <td style="font-size:13px;">&nbsp;</td>
            <td style="font-size:13px;">செ</td>
          </tr>
          <tr id="tr8rlac">
            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rlac" value="ல" onclick="return uncheck('rlac','8')">
            </td>
            <td style="font-size:13px;">&nbsp;</td>
            <td style="font-size:13px;">ல</td>
          </tr>
        </tbody></table></td>
      </tr>
    </tbody></table>
  </td>
  <td width="64" height="64" align="center" class="horobdr" style=" border:1px solid">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody><tr>
        <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
          <tbody><tr id="tr7rpu">
           <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rpu" value="பு" onclick="return uncheck('rpu','7')">
           </td>
           <td style="font-size:13px;">&nbsp;</td>
           <td style="font-size:13px;">பு</td>
         </tr>
         <tr id="tr7rsun">
           <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rsun" value="சூ" onclick="return uncheck('rsun','7')">
           </td>
           <td style="font-size:13px;">&nbsp;</td>
           <td style="font-size:13px;">சூ</td>
         </tr>
         <tr id="tr7rragu">
          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rragu" value="ரா" onclick="return uncheck('rragu','7')">
          </td>
          <td style="font-size:13px;">&nbsp;</td>
          <td style="font-size:13px;">ரா</td>
        </tr>
        <tr id="tr7rvij">
          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rvij" value="வி" onclick="return uncheck('rvij','7')">
          </td>
          <td style="font-size:13px;">&nbsp;</td>
          <td style="font-size:13px;">வி</td>
        </tr>
        <tr id="tr7rchk">
          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rchk" value="சு" onclick="return uncheck('rchk','7')">
          </td>
          <td style="font-size:13px;">&nbsp;</td>
          <td style="font-size:13px;">சு</td>
        </tr>
        <tr id="tr7rguru">
          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rguru" value="கு௫" onclick="return uncheck('rguru','7')">
          </td>
          <td style="font-size:13px;">&nbsp;</td>
          <td style="font-size:13px;">கு</td>
        </tr>
      </tbody></table></td>
      <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
        <tbody><tr id="tr7rsat">
         <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rsat" value="சனி" onclick="return uncheck('rsat','7')">
         </td>
         <td style="font-size:13px;">&nbsp;</td>
         <td style="font-size:13px;">ச</td>
       </tr>
       <tr id="tr7rchan">
        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rchan" value="சந்" onclick="return uncheck('rchan','7')">
        </td>
        <td style="font-size:13px;">&nbsp;</td>
        <td style="font-size:13px;">சந்</td>
      </tr>
      <tr id="tr7rkee">
        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rkee" value="கே" onclick="return uncheck('rkee','7')">
        </td>
        <td style="font-size:13px;">&nbsp;</td>
        <td style="font-size:13px;">கே</td>
      </tr>
      <tr id="tr7rsev">
        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rsev" value="செ" onclick="return uncheck('rsev','7')">
        </td>
        <td style="font-size:13px;">&nbsp;</td>
        <td style="font-size:13px;">செ</td>
      </tr>
      <tr id="tr7rlac">
        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rlac" value="ல" onclick="return uncheck('rlac','7')">
        </td>
        <td style="font-size:13px;">&nbsp;</td>
        <td style="font-size:13px;">ல</td>
      </tr>
    </tbody></table></td>
  </tr>
</tbody></table>
</td>
</tr>
</tbody></table></td>
<td width="10%">&nbsp;</td>
<td width="45%"><table border="1" cellpadding="5" cellspacing="0" align="center" class="horobdr" style=" border:1px solid #000;">
  <tbody><tr>
    <td width="63" height="63" align="center" class="horobdr" style="border: 1px solid;">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody><tr>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr1apu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1apu" value="பு" onclick="return uncheck('apu','1')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr1asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1asun" value="சூ" onclick="return uncheck('asun','1')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr1aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1aragu" value="ரா" onclick="return uncheck('aragu','1')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr1avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1avij" value="வி" onclick="return uncheck('avij','1')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr1achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1achk" value="சு" onclick="return uncheck('achk','1')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr1aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1aguru" value="கு௫" onclick="return uncheck('aguru','1')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr1asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1asat" value="சனி" onclick="return uncheck('asat','1')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr1achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1achan" value="சந்" onclick="return uncheck('achan','1')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr1akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1akee" value="கே" onclick="return uncheck('akee','1')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr1asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1asev" value="செ" onclick="return uncheck('asev','1')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr1alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1alac" value="ல" onclick="return uncheck('alac','1')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ல</td>
            </tr>
          </tbody></table></td>
        </tr>
      </tbody></table>
    </td>
    <td width="63" height="63" align="center" class="horobdr" style="border: 1px solid;">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody><tr>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr2apu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2apu" value="பு" onclick="return uncheck('apu','2')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr2asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2asun" value="சூ" onclick="return uncheck('asun','2')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr2aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2aragu" value="ரா" onclick="return uncheck('aragu','2')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr2avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2avij" value="வி" onclick="return uncheck('avij','2')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr2achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2achk" value="சு" onclick="return uncheck('achk','2')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr2aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2aguru" value="கு௫" onclick="return uncheck('aguru','2')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr2asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2asat" value="சனி" onclick="return uncheck('asat','2')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr2achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2achan" value="சந்" onclick="return uncheck('achan','2')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr2akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2akee" value="கே" onclick="return uncheck('akee','2')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr2asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2asev" value="செ" onclick="return uncheck('asev','2')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr2alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2alac" value="ல" onclick="return uncheck('alac','2')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ல</td>
            </tr>
          </tbody></table></td>
        </tr>
      </tbody></table>
    </td>
    <td width="64" height="63" align="center" class="horobdr" style=" border:1px solid;">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody><tr>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr3apu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3apu" value="பு" onclick="return uncheck('apu','3')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr3asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3asun" value="சூ" onclick="return uncheck('asun','3')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr3aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3aragu" value="ரா" onclick="return uncheck('aragu','3')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr3avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3avij" value="வி" onclick="return uncheck('avij','3')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>

            </tr>
            <tr id="tr3achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3achk" value="சு" onclick="return uncheck('achk','3')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr3aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3aguru" value="கு௫" onclick="return uncheck('aguru','3')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr3asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3asat" value="சனி" onclick="return uncheck('asat','3')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr3achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3achan" value="சந்" onclick="return uncheck('achan','3')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr3akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3akee" value="கே" onclick="return uncheck('akee','3')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr3asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3asev" value="செ" onclick="return uncheck('asev','3')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr3alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3alac" value="ல" onclick="return uncheck('alac','3')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ல</td>
            </tr>
          </tbody></table></td>
        </tr>
      </tbody></table>
    </td>
    <td width="64" height="63" align="center" class="horobdr" style="border:1px solid;">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody><tr>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr4apu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4apu" value="பு" onclick="return uncheck('apu','4')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr4asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4asun" value="சூ" onclick="return uncheck('asun','4')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr4aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4aragu" value="ரா" onclick="return uncheck('aragu','4')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr4avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4avij" value="வி" onclick="return uncheck('avij','4')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr4achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4achk" value="சு" onclick="return uncheck('achk','4')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr4aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4aguru" value="கு௫" onclick="return uncheck('aguru','4')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr4asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4asat" value="சனி" onclick="return uncheck('asat','4')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr4achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4achan" value="சந்" onclick="return uncheck('achan','4')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr4akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4akee" value="கே" onclick="return uncheck('akee','4')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr4asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4asev" value="செ" onclick="return uncheck('asev','4')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr4alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4alac" value="ல" onclick="return uncheck('alac','4')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ல</td>
            </tr>
          </tbody></table></td>
        </tr>
      </tbody></table>
    </td>
  </tr>
  <tr style="    border: 1px solid;">
    <td width="63" height="64" align="center" class="horobdr" style=" border:1px solid">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody><tr>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr12apu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12apu" value="பு" onclick="return uncheck('apu','12')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr12asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12asun" value="சூ" onclick="return uncheck('asun','12')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr12aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12aragu" value="ரா" onclick="return uncheck('aragu','12')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr12avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12avij" value="வி" onclick="return uncheck('avij','12')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>

              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr12achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12achk" value="சு" onclick="return uncheck('achk','12')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr12aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12aguru" value="கு௫" onclick="return uncheck('aguru','12')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr12asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12asat" value="சனி" onclick="return uncheck('asat','12')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr12achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12achan" value="சந்" onclick="return uncheck('achan','12')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr12akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12akee" value="கே" onclick="return uncheck('akee','12')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr12asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12asev" value="செ" onclick="return uncheck('asev','12')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr12alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12alac" value="ல" onclick="return uncheck('alac','12')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ல</td>
            </tr>
          </tbody></table></td>
        </tr>
      </tbody></table>
    </td>
    <td colspan="2" rowspan="2" height="118" align="center" class="horobdr"><p align="center"><b><span lang="ta"><br>அம்சம்</span></b></p></td>
    <td width="64" height="64" align="center" class="horobdr" style="border: 1px solid;">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody><tr>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr5apu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5apu" value="பு" onclick="return uncheck('apu','5')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr5asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5asun" value="சூ" onclick="return uncheck('asun','5')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr5aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5aragu" value="ரா" onclick="return uncheck('aragu','5')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr5avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5avij" value="வி" onclick="return uncheck('avij','5')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr5achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5achk" value="சு" onclick="return uncheck('achk','5')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr5aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5aguru" value="கு௫" onclick="return uncheck('aguru','5')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr5asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5asat" value="சனி" onclick="return uncheck('asat','5')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr5achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5achan" value="சந்" onclick="return uncheck('achan','5')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr5akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5akee" value="கே" onclick="return uncheck('akee','5')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr5asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5asev" value="செ" onclick="return uncheck('asev','5')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr5alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5alac" value="ல" onclick="return uncheck('alac','5')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ல</td>
            </tr>
          </tbody></table></td>
        </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="63" height="64" align="center" class="horobdr" style="border: 1px solid;">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody><tr>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr11apu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11apu" value="பு" onclick="return uncheck('apu','11')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr11asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11asun" value="சூ" onclick="return uncheck('asun','11')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr11aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11aragu" value="ரா" onclick="return uncheck('aragu','11')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr11avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11avij" value="வி" onclick="return uncheck('avij','11')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr11achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11achk" value="சு" onclick="return uncheck('achk','11')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr11aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11aguru" value="கு௫" onclick="return uncheck('aguru','11')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr11asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11asat" value="சனி" onclick="return uncheck('asat','11')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr11achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11achan" value="சந்" onclick="return uncheck('achan','11')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr11akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11akee" value="கே" onclick="return uncheck('akee','11')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr11asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11asev" value="செ" onclick="return uncheck('asev','11')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr11alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11alac" value="ல" onclick="return uncheck('alac','11')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ல</td>
            </tr>
          </tbody></table></td>
        </tr>
      </tbody></table>
    </td>
    <td width="64" height="64" align="center" class="horobdr" style="border: 1px solid;">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody><tr>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr6apu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6apu" value="பு" onclick="return uncheck('apu','6')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr6asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6asun" value="சூ" onclick="return uncheck('asun','6')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr6aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6aragu" value="ரா" onclick="return uncheck('aragu','6')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr6avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6avij" value="வி" onclick="return uncheck('avij','6')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr6achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6achk" value="சு" onclick="return uncheck('achk','6')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr6aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6aguru" value="கு௫" onclick="return uncheck('aguru','6')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr6asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6asat" value="சனி" onclick="return uncheck('asat','6')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr6achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6achan" value="சந்" onclick="return uncheck('achan','6')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr6akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6akee" value="கே" onclick="return uncheck('akee','6')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr6asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6asev" value="செ" onclick="return uncheck('asev','6')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr6alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6alac" value="ல" onclick="return uncheck('alac','6')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ல</td>
            </tr>
          </tbody></table></td>
        </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td width="63" height="64" align="center" class="horobdr" style="border: 1px solid;">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody><tr>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr10apu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10apu" value="பு" onclick="return uncheck('apu','10')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr10asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10asun" value="சூ" onclick="return uncheck('asun','10')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr10aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10aragu" value="ரா" onclick="return uncheck('aragu','10')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr10avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10avij" value="வி" onclick="return uncheck('avij','10')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr10achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10achk" value="சு" onclick="return uncheck('achk','10')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr10aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10aguru" value="கு௫" onclick="return uncheck('aguru','10')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr10asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10asat" value="சனி" onclick="return uncheck('asat','10')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr10achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10achan" value="சந்" onclick="return uncheck('achan','10')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr10akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10akee" value="கே" onclick="return uncheck('akee','10')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr10asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10asev" value="செ" onclick="return uncheck('asev','10')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr10alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10alac" value="ல" onclick="return uncheck('alac','10')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ல</td>
            </tr>
          </tbody></table></td>
        </tr>
      </tbody></table>
    </td>
    <td width="63" height="64" align="center" class="horobdr" style="border: 1px solid;">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody><tr>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr9apu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9apu" value="பு" onclick="return uncheck('apu','9')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr9asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9asun" value="சூ" onclick="return uncheck('asun','9')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr9aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9aragu" value="ரா" onclick="return uncheck('aragu','9')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr9avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9avij" value="வி" onclick="return uncheck('avij','9')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr9achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9achk" value="சு" onclick="return uncheck('achk','9')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr9aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9aguru" value="கு௫" onclick="return uncheck('aguru','9')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr9asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9asat" value="சனி" onclick="return uncheck('asat','9')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr9achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9achan" value="சந்" onclick="return uncheck('achan','9')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr9akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9akee" value="கே" onclick="return uncheck('akee','9')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr9asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9asev" value="செ" onclick="return uncheck('asev','9')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr9alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9alac" value="ல" onclick="return uncheck('alac','9')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ல</td>
            </tr>
          </tbody></table></td>
        </tr>
      </tbody></table>
    </td>
    <td width="64" height="64" align="center" class="horobdr" style="border: 1px solid;">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody><tr>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr8apu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8apu" value="பு" onclick="return uncheck('apu','8')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr8asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8asun" value="சூ" onclick="return uncheck('asun','8')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr8aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8aragu" value="ரா" onclick="return uncheck('aragu','8')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr8avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8avij" value="வி" onclick="return uncheck('avij','8')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr8achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8achk" value="சு" onclick="return uncheck('achk','8')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr8aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8aguru" value="கு௫" onclick="return uncheck('aguru','8')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr8asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8asat" value="சனி" onclick="return uncheck('asat','8')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr8achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8achan" value="சந்" onclick="return uncheck('achan','8')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr8akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8akee" value="கே" onclick="return uncheck('akee','8')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr8asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8asev" value="செ" onclick="return uncheck('asev','8')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr8alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8alac" value="ல" onclick="return uncheck('alac','8')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ல</td>
            </tr>
          </tbody></table></td>
        </tr>
      </tbody></table>
    </td>

    <td width="64" height="64" align="center" class="horobdr" style="border: 1px solid;">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody><tr>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr7apu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7apu" value="பு" onclick="return uncheck('apu','7')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr7asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7asun" value="சூ" onclick="return uncheck('asun','7')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr7aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7aragu" value="ரா" onclick="return uncheck('aragu','7')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr7avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7avij" value="வி" onclick="return uncheck('avij','7')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr7achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7achk" value="சு" onclick="return uncheck('achk','7')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr7aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7aguru" value="கு௫" onclick="return uncheck('aguru','7')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr7asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7asat" value="சனி" onclick="return uncheck('asat','7')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr7achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7achan" value="சந்" onclick="return uncheck('achan','7')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr7akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7akee" value="கே" onclick="return uncheck('akee','7')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr7asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7asev" value="செ" onclick="return uncheck('asev','7')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr7alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7alac" value="ல" onclick="return uncheck('alac','7')">
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ல</td>
            </tr>
          </tbody></table></td>
        </tr>
      </tbody></table>
    </td>
  </tr>
</tbody></table></td>
</tr></tbody></table>

</div>
</div>
</div>


            <!--<div class="col-xs-12 col-md-2 divborder1"><img id="output" width="150" height="150" class="img-responsive"></div>
            <div class="col-md-10 divborder1">
              <div class="form-group">
                <div class="checkbox">
                  <label class="control-label">
                    <input type="checkbox" name="terms" id="terms" value="Yes" style="transform: scale(1.5);" required> I Accept the <a href="#portfolioModal1" data-toggle="modal" data-target=".bd-example-modal-lg">  <button id="myBtn">term and Conditions</button></a>
                                        
                                      
<div id="myModal" class="modal">

  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h6>PLEASE READ THESE TERMS AND CONDITIONS BEFORE REGISTRATION.</h6>
    </div>
    <div class="modal-body" style="margin-top: -123px;">
      <p>Dear User, <br>
1.You are at least 18 years old for women and 21 years old for men.<br>
2.Any law from entering into a contract does not disable you.<br>
3.It is essential that all correspondence with other members should take place according to these guidelines and for the purposes of marriage only. Any individual found attempting to act outside of these boundaries would have their membership terminated.<br>
4.The member is responsible for maintaining the security of their password and any damages caused by others gaining access to the account or membership. 5.Our Matrimony shall not be responsible for any damages caused by loss of password, or others gaining access to the account or membership.<br>
6.The member shall not give any false or misleading information in the account or in communication with other members.<br>
7.Your membership will automatically be suspended if you send "abusive, obscene or sexually oriented" message's to other members.<br>
8.The member shall not share the account with another person or allow anyone else to use the account for any purpose.<br>
9.Our matrimony reserves the right to modify the Terms & Conditions at any time and without prior notice to its Users. We reserve the right to modify or discontinue our services or any User's account with or without notice to any User, without liability to any User or any third party. The service may be temporarily unavailable from time to time for maintenance or other reasons.<br>
10.As with any Internet based system there is always the possibility for the transmission of computer viruses. Members are strongly advised to keep their anti-virus software up to date. Matrimony cannot be held responsible in anyway for any transmission of computer viruses.<br>
11.This site or any portion of this site may not be reproduced, duplicated, copied, sold, resold, visited, or otherwise exploited for any commercial purpose without express written consent of Matrimony.<br>
12.Any unauthorized use terminates the permission or license granted by Our matrimony. You may not use any Our matrimony logo or other proprietary graphic or trademark as part of the link without express written permission.</p>
    </div>
   
  </div>

</div>



                  </label>
                </div>
              </div>
            </div>-->

            <div class="col-md-12 divborder1" style="margin-top: 1em;text-align:center">
              <button type="submit" id="registers" style="background-color: #bf0752;
              color: #fff;
              font-size: 21px;" onclick="return validate(document);" name="registers" class="btn">பதிவிடு</button>
            </div>
            <div class="col-md-12 divborder1" style="margin-top: 1em;text-align:center;font-size:0.8em;">
              
            </div>
            <div class="col-md-12 divborder1" style="background-color: #ff0068;border-bottom-left-radius: 12px;border-bottom-right-radius: 12px;font-weight: 700;color: #fff;;margin-top: 1em;">
              <marquee>&nbsp;--&nbsp;&nbsp;INAIKKUM KARANGAL&nbsp;&nbsp;--&nbsp;&nbsp;&nbsp;Free Registeration</marquee>
            </div>
            
          </div>
          
        </div>
        <input type="hidden" name="contt" id="contt" value="okok">
      </form>
    </div>
  </div>
</section>


<?php include('footer.php'); ?>
<!-- footer  style-->
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


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



</script>

</body>

</html>