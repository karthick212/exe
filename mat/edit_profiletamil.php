<?php
include('conn.php');
// if($conn){
//   //echo "database connected";
// }
// else{
//   //echo "database connection failed";
// }
// if(isset($_POST['registers']))
// {


// extract ( $_POST );



  // $raasi1=isset($raasi1)?implode(',',$raasi1):'';
  // $raasi2=isset($raasi2)?implode(',',$raasi2):'';
  // $raasi3=isset($raasi3)?implode(',',$raasi3):'';
  // $raasi4=isset($raasi4)?implode(',',$raasi4):'';
  // $raasi5=isset($raasi5)?implode(',',$raasi5):'';
  // $raasi6=isset($raasi6)?implode(',',$raasi6):'';
  // $raasi7=isset($raasi7)?implode(',',$raasi7):'';
  // $raasi8=isset($raasi8)?implode(',',$raasi8):'';
  // $raasi9=isset($raasi9)?implode(',',$raasi9):'';
  // $raasi10=isset($raasi10)?implode(',',$raasi10):'';
  // $raasi11=isset($raasi11)?implode(',',$raasi11):'';
  // $raasi12=isset($raasi12)?implode(',',$raasi12):'';

  // $amsam1=isset($amsam1)?implode(',',$amsam1):'';
  // $amsam2=isset($amsam2)?implode(',',$amsam2):'';
  // $amsam3=isset($amsam3)?implode(',',$amsam3):'';
  // $amsam4=isset($amsam4)?implode(',',$amsam4):'';
  // $amsam5=isset($amsam5)?implode(',',$amsam5):'';
  // $amsam6=isset($amsam6)?implode(',',$amsam6):'';
  // $amsam7=isset($amsam7)?implode(',',$amsam7):'';
  // $amsam8=isset($amsam8)?implode(',',$amsam8):'';
  // $amsam9=isset($amsam9)?implode(',',$amsam9):'';
  // $amsam10=isset($amsam10)?implode(',',$amsam10):'';
  // $amsam11=isset($amsam11)?implode(',',$amsam11):'';
  // $amsam12=isset($amsam12)?implode(',',$amsam12):'';

// $new_image = $_FILES['photo']['name'];
//     $tmp_name = $_FILES['photo']['tmp_name'];
//     $target_dir = "photos/".basename($new_image);
//       if($new_image != "")
//       {
//         if(move_uploaded_file($tmp_name,$target_dir))
//         {
//           //$message = "";
//           /*echo "<script type='text/javascript'>alert('$message');</script>";*/
//         }
//         else
//         {
//           //echo "failed";
//         }
//       }
//       $new_image = $_FILES['docs']['name'];
//     $tmp_name = $_FILES['docs']['tmp_name'];
//     $target_dir1 = "jathagam/".basename($new_image);
//       if($new_image != "")
//       {
//         if(move_uploaded_file($tmp_name,$target_dir1))
//         {
//           //$message = "";
//           /*echo "<script type='text/javascript'>alert('$message');</script>";*/
//         }
//         else
//         {
//           //echo "failed";
//         }
//       }
// //echo "testttt";
//      // $sel=mysql_query("SELECT id FROM registerfree ORDER BY id DESC LIMIT 1;");
//      // //$t=mysql_num_rows($sel);
//      // $res1=mysql_fetch_assoc($sel);
//      // $id1= $res1['id'];
//      // $id3 =$id1+1;
//      // $id2="IK00".$id3;


// //echo $profiles;
// // $i="INSERT INTO `registerfree`( `name`,`matri_id`,`gender`,`caste`,`subcaste`,`dob`,`dot`,`age`,`height`,`color`,`edu`,`employed`,`working_place`,`monthlyincome`,`phy`,`mstatus`,`religion`,`god`,`weight`,`food`,`father_name`,`mother_name`,`father_occ`,`mother_occ`,`bro`,`sis`,`mbro`,`msis`,`language`,`hometown`,`expectation`,`f_status`,`family_bg`,`lagnam`,`star`,`rasi`,`gothram`,`thisai_year`,`thisai_month`,`thisai_date`,`jathagam`,
// //  `thisai`, `one`, `two`, `three`, `four`, `five`, `six`, 
// // `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `aone`, `atwo`, `athree`, `afour`,
// //  `afive`, `asix`, `aseven`, `aeight`, `anine`, `aten`, `aeleven`, `atwelve`, `up_profile`,
// //  `address`, `email`, `mobile`,`land`, `profile_for`,`detail`,`ybrother`,`ysister`,`birth_place`) VALUES
// //   ('$name','$id2','$sex','$caste','$sub_caste','$dob','$dot','$d2','$height','$colour','$qualification','$employee','$work_place','$income','$phy_status','$married','$religion','$bestgod','$weight','$food','$fa_name','$ma_name','$fa_occ','$mo_occ','$brothers','$sisters','$mbrother','$msister','$language','$native_place','$expect','$Family_Status','$Family_Background','$lagnam','$star','$rasi','$gothiram','$years','$months','$days',
// //   '$target_dir1',
// // '$thisai','$raasi1','$raasi2',
// // '$raasi3','$raasi4','$raasi5','$raasi6',
// // '$raasi7','$raasi8','$raasi9','$raasi10','$raasi11','$raasi12',
// // '$amsam1','$amsam2','$amsam3','$amsam4','$amsam5','$amsam6',
// // '$amsam7','$amsam8','$amsam9',
// // '$amsam10','$amsam11','$amsam12',
// // '$target_dir','$address','$mail','$mobile','$land','$profiles','$comments','$ybrothers','$ysisters','$bplace')";


// //echo $i;
// //exit;
// $res=mysql_query($i);
// if($res)
// {
// echo "<script> alert ('successfully inserted'); </script";
// }
// else{
//   //echo "Failed";
// }

// }
extract ( $_POST );

if(isset($_GET['id']))
{
  $mat_id=$_GET['id'];
  if(isset($_POST['registers']))
  {

    $raasi1=isset($raasi1)?implode(',',$raasi1):'';
    echo '<script>alert($raasi1)</script>';
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

    $dob1=$_POST['dob'];
    $from = new DateTime($dob);
    $to   = new DateTime('today');
    $d2=$from->diff($to)->y;
//echo $d2;
    $sql="UPDATE registerfree SET `name`='$name',`gender`='$sex',`caste`='$caste',`subcaste`='$subcaste',`dob`='$dob',`dot`='$dot',`age`='$d2',`height`='$height',`color`='$color',`edu`='$qualification',`working_place`='$work_place',`monthlyincome`='$income',`phy`='$phy',`mstatus`='$mstatus',`religion`='$religion',`father_name`='$f_name',`mother_name`='$m_name',`father_occ`='$f_occ',`mother_occ`='$m_occ',`bro`='$bro',`sis`='$sis',`mbro`='$mbro',`msis`='$msis',`city`='$city',`expectation`='$expect',`f_status`='$f_status',`lagnam`='$lagnam',`star`='$star',`rasi`='$rasi',`thisai`='$thisai',`ybrother`='$ybro',`ysister`='$ysis',`birth_place`='$bplace',`god`='$bestgod',`one`='$raasi1', `two`='$raasi2', `three`='$raasi3', `four`='$raasi4', `five`='$raasi5', `six`='$raasi6', 
    `seven`='$raasi7', `eight`='$raasi8', `nine`='$raasi9', `ten`='$raasi10', `eleven`='$raasi11', `twelve`='$raasi12', `aone`='$amsam1', `atwo`='$amsam2', `athree`='$amsam3', `afour`='$amsam4',
    `afive`='$amsam5', `asix`='$amsam6', `aseven`='$amsam7', `aeight`='$amsam8', `anine`='$amsam9', `aten`='$amsam10', `aeleven`='$amsam11', `atwelve`='$amsam12', ptype='1' WHERE matri_id='$mat_id' ";
  // echo $sql;
//   ,`one`='$raasi1', `two`='$raasi2', `three`='$raasi3', `four`='$raasi4', `five`='$raasi5', `six`='$raasi6', 
// `seven`='$raasi7', `eight`='$raasi8', `nine`='$raasi9', `ten`='$raasi10', `eleven`='$raasi11', `twelve`='$raasi12', `aone`='$amsam1', `atwo`='$amsam2', `athree`='$amsam3', `afour`='$amsam4',
//  `afive`='$amsam5', `asix`='$amsam6', `aseven`='$amsam7', `aeight`='$amsam8', `anine`='$amsam9', `aten`='$amsam10', `aeleven`='$amsam11', `atwelve`='$amsam12'

    $res=mysql_query($sql);
    if($res==true)
    {
     echo "<script>alert('updated successfully'); window.location.href='m_viewprofile.php?id=$mat_id'</script>";

   }
   else{
    echo "<script> alert ('failed...!'); </script>";
  }
}
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title></title>
  <!-- reponsive meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
      float: right;
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

  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


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
  <?php include('header1.php'); ?>

  <section class="row final-inner-headerss">
    <div class="container">
      <h2 class="this-title">சுயவிவர திருத்தம்</h2>
    </div>
  </section>
  <section class="row final-breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
       <!-- <li><a href="index.php">Home</a></li>-->
       <li class="active">சுயவிவர திருத்தம்</li>
     </ol>
   </div>
 </section>



 <section style="background:url(images/regbac.jpg);">
  <div class="container">
    <?php

            //echo "test123";
            //$mat_id= $_SESSION['matri_id'];
    if(isset($_GET['id']))
    {
      $mat_id=$_GET['id'];
    }


    $sql1="SELECT * FROM registerfree WHERE matri_id = '$mat_id'";
    $res1 = mysql_query($sql1);
    $row = mysql_fetch_assoc($res1);
//  echo  $row['gender'];

    $dg=$row['name'];
    //echo "<script>alert('$dg');</script>";

    $rone=explode(",", $row['one']);
    $rtwo=explode(",", $row['two']);
    $rthree=explode(",", $row['three']);
    $rfour=explode(",", $row['four']);
    $rfive=explode(",", $row['five']);
    $rsix=explode(",", $row['six']);
    $rseven=explode(",", $row['seven']);
    $reight=explode(",", $row['eight']);
    $rnine=explode(",", $row['nine']);
    $rten=explode(",", $row['ten']);
    $releven=explode(",", $row['eleven']);
    $rtwelve=explode(",", $row['twelve']);

    $aone=explode(",", $row['aone']);
    $atwo=explode(",", $row['atwo']);
    $athree=explode(",", $row['athree']);
    $afour=explode(",", $row['afour']);
    $afive=explode(",", $row['afive']);
    $asix=explode(",", $row['asix']);
    $aseven=explode(",", $row['aseven']);
    $aeight=explode(",", $row['aeight']);
    $anine=explode(",", $row['anine']);
    $aten=explode(",", $row['aten']);
    $aeleven=explode(",", $row['aeleven']);
    $atwelve=explode(",", $row['atwelve']);

    ?>


    <div class="row fadeInUp animated">
      <form name="freesearch" method="post" action="#" enctype="multipart/form-data" autocomplete="off">
        <div class="col-md-12 col-sm-12 divborder1" style="background: #ff8300;
        color: white;">
        <div class="row divborder pag">
          <div class="col-md-12 divborder1 pags">சொந்த விவரங்கள்</div>
          <div class="row"><div class="col-md-12 divborder1"><p>&nbsp;&nbsp;</p></div></div>
          <div class="form-group">
            <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">பெயர்</label></div>
            <div class="col-md-4 divborder1">
              <input type="text" class="form-control input-sm textbox1" name="name" id="name"  value="<?php echo  $row['name'];?> " data-title="Please valid Name">
            </div>
          </div>

          <div class="col-md-2 divborder1" style="margin-top: -11px;"><label class="control-label">பாலினம்</label></div>
          <div class="col-md-4 divborder1">
            <div class="form-group" style="margin-top: -20px;">
              <label class="radio-inline" style="margin-left: -40px;">
                <input type="radio" name="sex" id="optionsRadios3" class="form-control input-sm" value="ஆண்" <?php if($row['gender']=='ஆண்') echo 'checked'; ?> ><span class="regp">ஆண்</span>
              </label>
              <label class="radio-inline"> 
                <input type="radio" name="sex" id="optionsRadios4" class="form-control input-sm" value="பெண்" <?php if($row['gender']=='பெண்') echo 'checked'; ?>><span class="regp">பெண்</span>
              </label>
            </div>
          </div>
          
          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">பிறந்த தேதி</label></div>
          <div class="col-md-4 divborder1">
            <div class="form-group">
              <input type="date" class="form-control" style="height: 30px;" id="myDatepicker2" name="dob" max="2999-12-31" value="<?php echo  $row['dob'];?>">
            </div>
          </div>


          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">திருமண நிலை</label></div>
          <div class="col-md-4 divborder1">
            <div class="form-group">
              <select class="form-control required combo input-sm" name="mstatus" id="married">
                <option value="<?php echo  $row['mstatus'];?>"><?php echo  $row['mstatus'];?></option>
                <option value="திருமணமாகாதவர்">திருமணமாகாதவர்</option>
                  <option value="விவாகரத்தானவர்">விவாகரத்தானவர்</option>
                  <option value="விதவை">விதவை</option>
              </select>
            </div>
          </div>


          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">உடல் நிலை</label></div>
          <div class="col-md-4 divborder1">
            <div class="form-group">
              <select class="form-control required combo input-sm" name="phy" id="phy_status">
                <option value="<?php echo  $row['phy'];?>"><?php echo  $row['phy'];?></option>
                <option value="சாதாரண">சாதாரண</option>
                  <option value="ஊனமுற்றவர்">ஊனமுற்றவர்</option>
              </select>
            </div>
          </div>

          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">மதம்</label></div>
          <div class="col-md-4 divborder1">
            <div class="form-group">
              <select class="form-control required combo input-sm" name="religion" id="religion" data-title="Please select Complexion">


                <option value="<?php echo  $row['religion'];?>"><?php echo  $row['religion'];?></option>
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


                <option value="<?php echo  $row['caste'];?>"><?php echo  $row['caste'];?></option>                 
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
              <input type="text" class="form-control input-sm textbox1" name="subcaste" id="subcaste" value="<?php echo  $row['subcaste'];?>" data-title="Please valid sub Caste">
            </div>
          </div>

          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">குலதெய்வம்</label></div>
          <div class="col-md-4 divborder1">
            <div class="form-group">
              <input type="text" class="form-control input-sm textbox1" name="bestgod" id="bestgod" value="<?php echo  $row['god'];?>" data-title="Please Fill God">
            </div>
          </div>

          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">உயரம்</label></div>
          <div class="col-md-4 divborder1">
            <div class="form-group">
              <select class="form-control required combo input-sm" id="ddlheightno" name="height" data-title="Please select Height">
               <option value="<?php echo  $row['height'];?>"><?php echo  $row['height'];?></option>   
               <option value="105">3ft.5in-105cm</option><option value="107">3ft.6in-107cm</option><option value="110">3ft.7in-110cm</option><option value="112">3ft.8in-112cm</option><option value="115">3ft.9in-115cm</option><option value="117">3ft.10in-117cm</option><option value="120">3ft.11in-120cm</option><option value="122">4ft-122cm</option><option value="125">4ft.1in-125cm</option><option value="127">4ft.2in-127cm</option><option value="130">4ft.3in-130cm</option><option value="132">4ft.4in-132cm</option><option value="135">4ft.5in-135cm</option><option value="137">4ft.6in-137cm</option><option value="140">4ft.7in-140cm</option><option value="142">4ft.8in-142cm</option><option value="145">4ft.9in-145cm</option><option value="147">4ft.10in-147cm</option><option value="150">4ft.11in-150cm</option><option value="152">5ft-152cm</option><option value="155">5ft.1in-155cm</option><option value="157">5ft.2in-157cm</option><option value="160">5ft.3in-160cm</option><option value="162">5ft.4in-162cm</option><option value="165">5ft.5in-165cm</option><option value="167">5ft.6in-167cm</option><option value="170">5ft.7in-170cm</option><option value="172">5ft.8in-172cm</option><option value="175">5ft.9in-175cm</option><option value="177">5ft.10in-177cm</option><option value="180">5ft.11in-180cm</option><option value="182">6ft-182cm</option><option value="185">6ft.1in-185cm</option><option value="187">6ft.2in-187cm</option><option value="190">6ft.3in-190cm</option><option value="192">6ft.4in-192cm</option><option value="195">6ft.5in-195cm</option><option value="197">6ft.6in-197cm</option><option value="200">6ft.7in-200cm</option><option value="202">6ft.8in-202cm</option><option value="205">6ft.9in-205cm</option><option value="207">6ft.10in-207cm</option><option value="210">6ft.11in-210cm</option>            </select>
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
            <select class="form-control required combo input-sm" name="color" id="complexion" data-title="Please select Complexion">
             <option value="<?php echo  $row['color'];?>"><?php echo  $row['color'];?></option>
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
          <input type="text" class="form-control" style="height: 30px;" id="exampleInputDOB1" name="qualification"  value="<?php echo  $row['edu'];?>">
        </div>
      </div>



      <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">தொழில்</label></div>
      <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" 
        name="work_place" id="work_place" value="<?php echo  $row['working_place'];?>"></div></div>


        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">மாத வருமானம்</label></div>
        <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" name="income" id="income" value="<?php echo  $row['monthlyincome'];?>" ></div></div>



<!--<div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Address</label></div>
        <div class="col-md-4 divborder1">
          <div class="form-group">
            <textarea class="form-control" style="height: 68px;"  id="address" name="address" value="<?php echo  $row['address'];?>" ><?php echo  $row['address'];?></textarea>
          </div>
        </div>-->

        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">ஊர்</label></div>
        <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" 
          name="city" id="city" value="<?php echo  $row['city'];?>" ></div></div>

       <!--  <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Your Photo</label></div>
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
            </div> -->





            <div class="col-md-12 divborder1 pags" style="margin-bottom:1em;">குடும்ப விவரங்கள்</div>

            <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">தந்தை பெயர்</label></div>
            <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" name="f_name" id="fa_name" value="<?php echo  $row['father_name'];?>" ></div></div>


            <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">தந்தை தொழில்</label></div>
            <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" name="f_occ" id="fa_occ" value="<?php echo  $row['father_occ'];?>" ></div></div>
            <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">தாயார் பெயர்</label></div>
            <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" id="mo_name" name="m_name" value="<?php echo  $row['mother_name'];?>"></div></div>     
            <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">தாயார் தொழில்</label></div>
            <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" id="mo_occ" name="m_occ" value="<?php echo  $row['mother_occ'];?>"></div></div>


            <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">உடன்பிறப்புகள்</label><span style="font-size:0.8em"></span></div>
            <div class="col-md-4 divborder1">
              <div class="row">
                <div class="col-xs-3 col-md-3 divborder1"  style="margin-top: 5px"><label class="control-label" style="font-size: 12px;">அண்ணன்</label></div>
                <div class="col-xs-3 col-md-3 divborder1">
                  <div class="form-group">
                    <select name="bro" id="brothers" class="form-control input-sm" style="width:75px;">
                      <option value="<?php echo  $row['bro'];?>"><?php echo  $row['bro'];?></option>
                      <option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>                </select>
                    </div>
                  </div>
                  <div class="col-xs-3 col-md-3 divborder1"  style="margin-top: 5px"><label class="control-label" style="font-size: 12px;">அக்கா</label></div>
                  <div class="col-xs-3 col-md-3 divborder1">
                    <div class="form-group">
                      <select name="sis" id="sisters" class="form-control input-sm" style="width:75px;">
                       <option value="<?php echo  $row['sis'];?>"><?php echo  $row['sis'];?></option>
                       <option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>              </select>
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
                      <select name="ybro" id="brothers" class="form-control input-sm" style="width:75px;">
                        <option value="<?php echo  $row['ybrother'];?>"><?php echo  $row['ybrother'];?></option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>                </select>
                      </div>
                    </div>
                    <div class="col-xs-3 col-md-3 divborder1" style="margin-right: -25px;margin-top: 5px"><label class="control-label" style="font-size: 12px;">தங்கை</label></div>
                    <div class="col-xs-3 col-md-3 divborder1">
                      <div class="form-group">
                        <select name="ysis" id="sisters" class="form-control input-sm" style="width:75px;">
                         <option value="<?php echo  $row['ysister'];?>"><?php echo  $row['ysister'];?></option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>              </select>
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
                        <select name="mbro" id="brother" class="form-control input-sm" style="width:75px;">
                          <option value="<?php echo  $row['mbro'];?>"><?php echo  $row['mbro'];?></option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>                  </select>
                        </div>
                      </div>
                      <div class="col-xs-3 col-md-3 divborder1" style="margin-top: 5px"><label class="control-label" style="font-size: 12px;">பெண்</label></div>
                      <div class="col-xs-3 col-md-3 divborder1">
                        <div class="form-group">
                          <select name="msis" id="sister" class="form-control input-sm" style="width:75px;">
                            <<option value="<?php echo  $row['msis'];?>"><?php echo  $row['msis'];?></option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>              </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">எதிர்பார்ப்பு</label></div>
                    <div class="col-md-4 divborder1"><div class="form-group">


                      <input type="text" class="form-control input-sm required textbox1" name="expect"  value="<?php echo  $row['expectation'];?>" >



                    </div></div>






                    <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">குடும்ப நிலை</label></div>
                    <div class="col-md-4 divborder1"><div class="form-group">


                      <input type="text" class="form-control input-sm required textbox1" name="f_status" id="Family_Status" value="<?php echo  $row['f_status'];?>">



                    </div></div>






                    <div class="col-xs-12 col-md-12 divborder1 pags" style="margin-bottom: 1em;">ஜாதக குறிப்புகள்</div>





                    <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">ராசி</label></div>
                    <div class="col-md-4 divborder1">
                      <div class="form-group">
                        <select name="rasi" id="Rasi" class="form-control input-sm">

                         <option value="<?php echo  $row['rasi'];?>"><?php echo  $row['rasi'];?></option>     
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



                           <option value="<?php echo  $row['star'];?>" selected><?php echo  $row['star'];?>  </option>


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

                     <option value="<?php echo  $row['lagnam'];?>"><?php echo  $row['lagnam'];?></option>     
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

                   <option value="<?php echo  $row['thisai'];?>"><?php echo  $row['thisai'];?></option>     
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
                <input type="time" name="dot" id="timepicker1" value="<?php echo  $row['dot'];?>" style="color: black;">
              </div>            
            </div>

            <div class="col-md-2 divborder1"><label class="control-label">பிறந்த இடம்</label></div>
            <div class="col-md-4 divborder1">

              <div class="form-group">
                <input type="text" name="bplace" id="bplace" value="<?php echo  $row['birth_place'];?>" style="color: black;">
              </div>            
            </div>
            
            <!-- <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Jathagam</label></div>
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
                                  <td style="padding-left:3px; font-size:12px;">
                                    <input type="checkbox" name="raasi1[]" id="1rpu" value="பு" onclick="return uncheck('rpu','1')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $rone)){ echo "checked"; } else if(in_array("பு", $rone)){ echo "checked"; }  ?>
                                    >
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">பு</td>

                                </tr>
                                <tr id="tr1rsun">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rsun" value="சூ" onclick="return uncheck('rsun','1')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rone)){ echo "checked"; } else if(in_array("சூ", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சூ</td>
                                </tr>
                                <tr id="tr1rragu">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rragu" value="ரா" onclick="return uncheck('rragu','1')" <?php if(in_array("à®°à®¾à®•à¯", $rone)){ echo "checked"; } else if(in_array("ரா", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ரா</td>
                                </tr>
                                <tr id="tr1rvij">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rvij" value="வி" onclick="return uncheck('rvij','1')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rone)){ echo "checked"; } else if(in_array("வி", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">வி</td>
                                </tr>
                                <tr id="tr1rchk">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rchk" value="சு" onclick="return uncheck('rchk','1')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rone)){ echo "checked"; } else if(in_array("சு", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சு</td>
                                </tr>
                                <tr id="tr1rguru">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rguru" value="கு௫" onclick="return uncheck('rguru','1')" <?php if(in_array("à®•à¯à¯«", $rone)){ echo "checked"; } else if(in_array("கு௫", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கு</td>
                                </tr>
                              </tbody></table></td>
                              <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                                <tbody><tr id="tr1rsat">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rsat" value="சனி" onclick="return uncheck('rsat','1')" <?php if(in_array("à®šà®©à®¿", $rone)){ echo "checked"; } else if(in_array("சனி", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ச</td>
                                </tr>
                                <tr id="tr1rchan">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rchan" value="சந்" onclick="return uncheck('rchan','1')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rone)){ echo "checked"; } else if(in_array("சந்", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சந்</td>
                                </tr>
                                <tr id="tr1rkee">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rkee" value="கே" onclick="return uncheck('rkee','1')" <?php if(in_array("à®•à¯‡à®¤à¯", $rone)){ echo "checked"; } else if(in_array("கே", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கே</td>
                                </tr>
                                <tr id="tr1rsev">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rsev" value="செ" onclick="return uncheck('rsev','1')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rone)){ echo "checked"; } else if(in_array("செ", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">செ</td>
                                </tr>
                                <tr id="tr1rlac">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rlac" value="ல" onclick="return uncheck('rlac','1')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rone)){ echo "checked"; } else if(in_array("ல", $rone)){ echo "checked"; } ?>>
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
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rpu" value="பு" onclick="return uncheck('rpu','2')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $rtwo)){ echo "checked"; } else if(in_array("பு", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">பு</td>
                                </tr>
                                <tr id="tr2rsun">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rsun" value="சூ" onclick="return uncheck('rsun','2')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rtwo)){ echo "checked"; } else if(in_array("சூ", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சூ</td>
                                </tr>
                                <tr id="tr2rragu">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rragu" value="ரா" onclick="return uncheck('rragu','2')" <?php if(in_array("à®°à®¾à®•à¯", $rtwo)){ echo "checked"; } else if(in_array("ரா", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ரா</td>
                                </tr>
                                <tr id="tr2rvij">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rvij" value="வி" onclick="return uncheck('rvij','2')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rtwo)){ echo "checked"; } else if(in_array("வி", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">வி</td>
                                </tr>
                                <tr id="tr2rchk">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rchk" value="சு" onclick="return uncheck('rchk','2')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rtwo)){ echo "checked"; } else if(in_array("சு", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சு</td>
                                </tr>

                                <tr id="tr2rguru">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rguru" value="கு௫" onclick="return uncheck('rguru','2')" <?php if(in_array("à®•à¯à¯«", $rtwo)){ echo "checked"; } else if(in_array("கு௫", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கு</td>
                                </tr>


                              </tbody></table></td>
                              <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                                <tbody><tr id="tr2rsat">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rsat" value="சனி" onclick="return uncheck('rsat','2')" <?php if(in_array("à®šà®©à®¿", $rtwo)){ echo "checked"; } else if(in_array("சனி", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ச</td>
                                </tr>
                                <tr id="tr2rchan">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rchan" value="சந்" onclick="return uncheck('rchan','2')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rtwo)){ echo "checked"; } else if(in_array("சந்", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சந்</td>
                                </tr>
                                <tr id="tr2rkee">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rkee" value="கே" onclick="return uncheck('rkee','2')" <?php if(in_array("à®•à¯‡à®¤à¯", $rtwo)){ echo "checked"; } else if(in_array("கே", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கே</td>
                                </tr>
                                <tr id="tr2rsev">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rsev" value="செ" onclick="return uncheck('rsev','2')"  <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rtwo)){ echo "checked"; } else if(in_array("செ", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">செ</td>
                                </tr>
                                <tr id="tr2rlac">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rlac" value="ல" onclick="return uncheck('rlac','2')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rtwo)){ echo "checked"; } else if(in_array("ல", $rtwo)){ echo "checked"; } ?>>
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
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rpu" value="பு" onclick="return uncheck('rpu','3')"  <?php if(in_array("à®ªà¯à®¤à®©à¯", $rthree)){ echo "checked"; } else if(in_array("பு", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">பு</td>
                                </tr>
                                <tr id="tr3rsun">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rsun" value="சூ" onclick="return uncheck('rsun','3')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rthree)){ echo "checked"; } else if(in_array("சூ", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சூ</td>
                                </tr>
                                <tr id="tr3rragu">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rragu" value="ரா" onclick="return uncheck('rragu','3')" <?php if(in_array("à®°à®¾à®•à¯", $rthree)){ echo "checked"; } else if(in_array("ரா", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ரா</td>
                                </tr>
                                <tr id="tr3rvij">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rvij" value="வி" onclick="return uncheck('rvij','3')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rthree)){ echo "checked"; } else if(in_array("வி", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">வி</td>
                                </tr>
                                <tr id="tr3rchk">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rchk" value="சு" onclick="return uncheck('rchk','3')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rthree)){ echo "checked"; } else if(in_array("சு", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சு</td>
                                </tr>
                                <tr id="tr3rguru">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rguru" value="கு௫" onclick="return uncheck('rguru','3')" <?php if(in_array("à®•à¯à¯«", $rthree)){ echo "checked"; } else if(in_array("கு௫", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கு</td>
                                </tr>

                              </tbody></table></td>
                              <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                                <tbody><tr id="tr3rsat">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rsat" value="சனி" onclick="return uncheck('rsat','3')" <?php if(in_array("à®šà®©à®¿", $rthree)){ echo "checked"; } else if(in_array("சனி", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ச</td>
                                </tr>
                                <tr id="tr3rchan">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rchan" value="சந்" onclick="return uncheck('rchan','3')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rthree)){ echo "checked"; } else if(in_array("சந்", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சந்</td>
                                </tr>
                                <tr id="tr3rkee">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rkee" value="கே" onclick="return uncheck('rkee','3')" <?php if(in_array("à®•à¯‡à®¤à¯", $rthree)){ echo "checked"; } else if(in_array("கே", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கே</td>
                                </tr>
                                <tr id="tr3rsev">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rsev" value="செ" onclick="return uncheck('rsev','3')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rthree)){ echo "checked"; } else if(in_array("செ", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">செ</td>
                                </tr>
                                <tr id="tr3rlac">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rlac" value="ல" onclick="return uncheck('rlac','3')"  <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rthree)){ echo "checked"; } else if(in_array("ல", $rthree)){ echo "checked"; } ?>>
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
                                 <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rpu" value="பு" onclick="return uncheck('rpu','4')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rfour)){ echo "checked"; } else if(in_array("ல", $rfour)){ echo "checked"; } ?>>
                                 </td>
                                 <td style="font-size:13px;">&nbsp;</td>
                                 <td style="font-size:13px;">பு</td>
                               </tr>
                               <tr id="tr4rsun">
                                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rsun" value="சூ" onclick="return uncheck('rsun','4')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rfour)){ echo "checked"; } else if(in_array("சூ", $rfour)){ echo "checked"; } ?>>
                                </td>
                                <td style="font-size:13px;">&nbsp;</td>
                                <td style="font-size:13px;">சூ</td>
                              </tr>
                              <tr id="tr4rragu">
                                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rragu" value="ரா" onclick="return uncheck('rragu','4')" <?php if(in_array("à®°à®¾à®•à¯", $rfour)){ echo "checked"; } else if(in_array("ரா", $rfour)){ echo "checked"; } ?>>
                                </td>
                                <td style="font-size:13px;">&nbsp;</td>
                                <td style="font-size:13px;">ரா</td>
                              </tr>
                              <tr id="tr4rvij">
                                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rvij" value="வி" onclick="return uncheck('rvij','4')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rfour)){ echo "checked"; } else if(in_array("வி", $rfour)){ echo "checked"; } ?>>
                                </td>
                                <td style="font-size:13px;">&nbsp;</td>
                                <td style="font-size:13px;">வி</td>
                              </tr>
                              <tr id="tr4rchk">
                               <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rchk" value="சு" onclick="return uncheck('rchk','4')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rfour)){ echo "checked"; } else if(in_array("சு", $rfour)){ echo "checked"; } ?>>
                               </td>
                               <td style="font-size:13px;">&nbsp;</td>
                               <td style="font-size:13px;">சு</td>
                             </tr>
                             <tr id="tr4rguru">
                              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rguru" value="கு௫" onclick="return uncheck('rguru','4')" <?php if(in_array("à®•à¯à¯«", $rfour)){ echo "checked"; } else if(in_array("கு௫", $rfour)){ echo "checked"; } ?>>
                              </td>
                              <td style="font-size:13px;">&nbsp;</td>
                              <td style="font-size:13px;">கு</td>
                            </tr>

                          </tbody></table></td>
                          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                            <tbody><tr id="tr4rsat">
                              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rsat" value="சனி" onclick="return uncheck('rsat','4')" <?php if(in_array("à®šà®©à®¿", $rfour)){ echo "checked"; } else if(in_array("சனி", $rfour)){ echo "checked"; } ?>>
                              </td>
                              <td style="font-size:13px;">&nbsp;</td>
                              <td style="font-size:13px;">ச</td>
                            </tr>
                            <tr id="tr4rchan">
                              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rchan" value="சந்" onclick="return uncheck('rchan','4')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rfour)){ echo "checked"; } else if(in_array("சந்", $rfour)){ echo "checked"; } ?>>
                              </td>
                              <td style="font-size:13px;">&nbsp;</td>
                              <td style="font-size:13px;">சந்</td>
                            </tr>
                            <tr id="tr4rkee">
                              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rkee" value="கே" onclick="return uncheck('rkee','4')" <?php if(in_array("à®•à¯‡à®¤à¯", $rfour)){ echo "checked"; } else if(in_array("கே", $rfour)){ echo "checked"; } ?>>
                              </td>
                              <td style="font-size:13px;">&nbsp;</td>
                              <td style="font-size:13px;">கே</td>
                            </tr>
                            <tr id="tr4rsev">
                             <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rsev" value="செ" onclick="return uncheck('rsev','4')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rfour)){ echo "checked"; } else if(in_array("செ", $rfour)){ echo "checked"; } ?>>
                             </td>
                             <td style="font-size:13px;">&nbsp;</td>
                             <td style="font-size:13px;">செ</td>
                           </tr>
                           <tr id="tr4rlac">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rlac" value="ல" onclick="return uncheck('rlac','4')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rfour)){ echo "checked"; } else if(in_array("ல", $rfour)){ echo "checked"; } ?>>
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
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rpu" value="பு" onclick="return uncheck('rpu','12')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $rtwelve)){ echo "checked"; } else if(in_array("பு", $rtwelve)){ echo "checked"; } ?>>
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">பு</td>
                          </tr>
                          <tr id="tr12rsun">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rsun" value="சூ" onclick="return uncheck('rsun','12')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rtwelve)){ echo "checked"; } else if(in_array("சூ", $rtwelve)){ echo "checked"; } ?>>
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">சூ</td>
                          </tr>
                          <tr id="tr12rragu">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rragu" value="ரா" onclick="return uncheck('rragu','12')" <?php if(in_array("à®°à®¾à®•à¯", $rtwelve)){ echo "checked"; } else if(in_array("ரா", $rtwelve)){ echo "checked"; } ?>>
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">ரா</td>
                          </tr>
                          <tr id="tr12rvij">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rvij" value="வி" onclick="return uncheck('rvij','12')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rtwelve)){ echo "checked"; } else if(in_array("வி", $rtwelve)){ echo "checked"; } ?>>
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">வி</td>
                          </tr>
                          <tr id="tr12rchk">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rchk" value="சு" onclick="return uncheck('rchk','12')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rtwelve)){ echo "checked"; } else if(in_array("சு", $rtwelve)){ echo "checked"; } ?>>
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">சு</td>
                          </tr>
                          <tr id="tr12rguru">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rguru" value="கு௫" onclick="return uncheck('rguru','12')" <?php if(in_array("à®•à¯à¯«", $rtwelve)){ echo "checked"; } else if(in_array("கு௫", $rtwelve)){ echo "checked"; } ?>>
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">கு</td>
                          </tr>
                        </tbody></table></td>
                        <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                          <tbody><tr id="tr12rsat">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rsat" value="சனி" onclick="return uncheck('rsat','12')" <?php if(in_array("à®šà®©à®¿", $rtwelve)){ echo "checked"; } else if(in_array("சனி", $rtwelve)){ echo "checked"; } ?>>
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">ச</td>
                          </tr>
                          <tr id="tr12rchan">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rchan" value="சந்" onclick="return uncheck('rchan','12')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rtwelve)){ echo "checked"; } else if(in_array("சந்", $rtwelve)){ echo "checked"; } ?>>
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">சந்</td>
                          </tr>
                          <tr id="tr12rkee">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rkee" value="கே" onclick="return uncheck('rkee','12')" <?php if(in_array("à®•à¯‡à®¤à¯", $rtwelve)){ echo "checked"; } else if(in_array("கே", $rtwelve)){ echo "checked"; } ?>>
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">கே</td>
                          </tr>
                          <tr id="tr12rsev">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rsev" value="செ" onclick="return uncheck('rsev','12')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rtwelve)){ echo "checked"; } else if(in_array("செ", $rtwelve)){ echo "checked"; } ?>>
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">செ</td>
                          </tr>
                          <tr id="tr12rlac">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rlac" value="ல" onclick="return uncheck('rlac','12')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rtwelve)){ echo "checked"; } else if(in_array("ல", $rtwelve)){ echo "checked"; } ?>>
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
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rpu" value="பு" onclick="return uncheck('rpu','5')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $rfive)){ echo "checked"; } else if(in_array("பு", $rfive)){ echo "checked"; } ?>>
                            </td>
                            <td style="font-size:13px;">&nbsp;</td>
                            <td style="font-size:13px;">பு</td>
                          </tr>
                          <tr id="tr5rsun">
                           <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rsun" value="சூ" onclick="return uncheck('rsun','5')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rfive)){ echo "checked"; } else if(in_array("சூ", $rfive)){ echo "checked"; } ?>>
                           </td>
                           <td style="font-size:13px;">&nbsp;</td>
                           <td style="font-size:13px;">சூ</td>
                         </tr>
                         <tr id="tr5rragu">
                          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rragu" value="ரா" onclick="return uncheck('rragu','5')" <?php if(in_array("à®°à®¾à®•à¯", $rfive)){ echo "checked"; } else if(in_array("ரா", $rfive)){ echo "checked"; } ?>>
                          </td>
                          <td style="font-size:13px;">&nbsp;</td>
                          <td style="font-size:13px;">ரா</td>
                        </tr>
                        <tr id="tr5rvij">
                          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rvij" value="வி" onclick="return uncheck('rvij','5')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rfive)){ echo "checked"; } else if(in_array("வி", $rfive)){ echo "checked"; } ?>>
                          </td>
                          <td style="font-size:13px;">&nbsp;</td>
                          <td style="font-size:13px;">வி</td>
                        </tr>
                        <tr id="tr5rchk">
                         <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rchk" value="சு" onclick="return uncheck('rchk','5')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rfive)){ echo "checked"; } else if(in_array("சு", $rfive)){ echo "checked"; } ?>>
                         </td>
                         <td style="font-size:13px;">&nbsp;</td>
                         <td style="font-size:13px;">சு</td>
                       </tr>
                       <tr id="tr5rguru">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rguru" value="கு௫" onclick="return uncheck('rguru','5')" <?php if(in_array("à®•à¯à¯«", $rfive)){ echo "checked"; } else if(in_array("கு௫", $rfive)){ echo "checked"; } ?>>
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">கு</td>
                      </tr>
                    </tbody></table></td>
                    <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                      <tbody><tr id="tr5rsat">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rsat" value="சனி" onclick="return uncheck('rsat','5')" <?php if(in_array("à®šà®©à®¿", $rfive)){ echo "checked"; } else if(in_array("சனி", $rfive)){ echo "checked"; } ?>>
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">ச</td>
                      </tr>
                      <tr id="tr5rchan">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rchan" value="சந்" onclick="return uncheck('rchan','5')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rfive)){ echo "checked"; } else if(in_array("சந்", $rfive)){ echo "checked"; } ?>>
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">சந்</td>
                      </tr>
                      <tr id="tr5rkee">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rkee" value="கே" onclick="return uncheck('rkee','5')" <?php if(in_array("à®•à¯‡à®¤à¯", $rfive)){ echo "checked"; } else if(in_array("கே", $rfive)){ echo "checked"; } ?>>
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">கே</td>
                      </tr>
                      <tr id="tr5rsev">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rsev" value="செ" onclick="return uncheck('rsev','5')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rfive)){ echo "checked"; } else if(in_array("செ", $rfive)){ echo "checked"; } ?>>
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">செ</td>
                      </tr>
                      <tr id="tr5rlac">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rlac" value="ல" onclick="return uncheck('rlac','5')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rfive)){ echo "checked"; } else if(in_array("ல", $rfive)){ echo "checked"; } ?>>
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
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rpu" value="பு" onclick="return uncheck('rpu','11')"  <?php if(in_array("à®ªà¯à®¤à®©à¯", $releven)){ echo "checked"; } else if(in_array("பு", $releven)){ echo "checked"; } ?>>
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">பு</td>
                      </tr>
                      <tr id="tr11rsun">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rsun" value="சூ" onclick="return uncheck('rsun','11')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $releven)){ echo "checked"; } else if(in_array("சூ", $releven)){ echo "checked"; } ?>>   
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">சூ</td>
                      </tr>
                      <tr id="tr11rragu">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rragu" value="ரா" onclick="return uncheck('rragu','11')" <?php if(in_array("à®°à®¾à®•à¯", $releven)){ echo "checked"; } else if(in_array("ரா", $releven)){ echo "checked"; } ?>>
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">ரா</td>
                      </tr>
                      <tr id="tr11rvij">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rvij" value="வி" onclick="return uncheck('rvij','11')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $releven)){ echo "checked"; } else if(in_array("வி", $releven)){ echo "checked"; } ?>>
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">வி</td>

                      </tr>
                      <tr id="tr11rchk">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rchk" value="சு" onclick="return uncheck('rchk','11')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $releven)){ echo "checked"; } else if(in_array("சு", $releven)){ echo "checked"; } ?>>
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">சு</td>
                      </tr>
                      <tr id="tr11rguru">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rguru" value="கு௫" onclick="return uncheck('rguru','11')" <?php if(in_array("à®•à¯à¯«", $releven)){ echo "checked"; } else if(in_array("கு௫", $releven)){ echo "checked"; } ?>>
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">கு</td>
                      </tr>
                    </tbody></table></td>
                    <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                      <tbody><tr id="tr11rsat">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rsat" value="சனி" onclick="return uncheck('rsat','11')" <?php if(in_array("à®šà®©à®¿", $releven)){ echo "checked"; } else if(in_array("சனி", $releven)){ echo "checked"; } ?>>
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">ச</td>
                      </tr>
                      <tr id="tr11rchan">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rchan" value="சந்" onclick="return uncheck('rchan','11')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $releven)){ echo "checked"; } else if(in_array("சந்", $releven)){ echo "checked"; } ?>>
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">சந்</td>
                      </tr>
                      <tr id="tr11rkee">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rkee" value="கே" onclick="return uncheck('rkee','11')" <?php if(in_array("à®•à¯‡à®¤à¯", $releven)){ echo "checked"; } else if(in_array("கே", $releven)){ echo "checked"; } ?>>

                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">கே</td>
                      </tr>
                      <tr id="tr11rsev">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rsev" value="செ" onclick="return uncheck('rsev','11')"  <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $releven)){ echo "checked"; } else if(in_array("செ", $releven)){ echo "checked"; } ?>>
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">செ</td>
                      </tr>
                      <tr id="tr11rlac">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rlac" value="ல" onclick="return uncheck('rlac','11')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $releven)){ echo "checked"; } else if(in_array("ல", $releven)){ echo "checked"; } ?>>
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
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rpu" value="பு" onclick="return uncheck('rpu','6')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $rsix)){ echo "checked"; } else if(in_array("பு", $rsix)){ echo "checked"; } ?>>
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">பு</td>
                      </tr>
                      <tr id="tr6rsun">
                       <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rsun" value="சூ" onclick="return uncheck('rsun','6')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rsix)){ echo "checked"; } else if(in_array("சூ", $rsix)){ echo "checked"; } ?>>
                       </td>
                       <td style="font-size:13px;">&nbsp;</td>
                       <td style="font-size:13px;">சூ</td>
                     </tr>
                     <tr id="tr6rragu">
                       <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rragu" value="ரா" onclick="return uncheck('rragu','6')" <?php if(in_array("à®°à®¾à®•à¯", $rsix)){ echo "checked"; } else if(in_array("ரா", $rsix)){ echo "checked"; } ?>>
                       </td>
                       <td style="font-size:13px;">&nbsp;</td>
                       <td style="font-size:13px;">ரா</td>
                     </tr>
                     <tr id="tr6rvij">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rvij" value="வி" onclick="return uncheck('rvij','6')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rsix)){ echo "checked"; } else if(in_array("வி", $rsix)){ echo "checked"; } ?>>
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">வி</td>
                    </tr>
                    <tr id="tr6rchk">
                     <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rchk" value="சு" onclick="return uncheck('rchk','6')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rsix)){ echo "checked"; } else if(in_array("சு", $rsix)){ echo "checked"; } ?>>
                     </td>
                     <td style="font-size:13px;">&nbsp;</td>
                     <td style="font-size:13px;">சு</td>
                   </tr>
                   <tr id="tr6rguru">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rguru" value="கு௫" onclick="return uncheck('rguru','6')" <?php if(in_array("à®•à¯à¯«", $rsix)){ echo "checked"; } else if(in_array("கு௫", $rsix)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">கு</td>
                  </tr>
                </tbody></table></td>
                <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                  <tbody><tr id="tr6rsat">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rsat" value="சனி" onclick="return uncheck('rsat','6')" <?php if(in_array("à®šà®©à®¿", $rsix)){ echo "checked"; } else if(in_array("சனி", $rsix)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">ச</td>
                  </tr>
                  <tr id="tr6rchan">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rchan" value="சந்" onclick="return uncheck('rchan','6')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rsix)){ echo "checked"; } else if(in_array("சந்", $rsix)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">சந்</td>
                  </tr>
                  <tr id="tr6rkee">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rkee" value="கே" onclick="return uncheck('rkee','6')" <?php if(in_array("à®•à¯‡à®¤à¯", $rsix)){ echo "checked"; } else if(in_array("கே", $rsix)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">கே</td>
                  </tr>
                  <tr id="tr6rsev">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rsev" value="செ" onclick="return uncheck('rsev','6')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rsix)){ echo "checked"; } else if(in_array("செ", $rsix)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">செ</td>
                  </tr>
                  <tr id="tr6rlac">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rlac" value="ல" onclick="return uncheck('rlac','6')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rsix)){ echo "checked"; } else if(in_array("ல", $rsix)){ echo "checked"; } ?>>
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
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rpu" value="பு" onclick="return uncheck('rpu','10')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $rten)){ echo "checked"; } else if(in_array("பு", $rten)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">பு</td>
                  </tr>
                  <tr id="tr10rsun">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rsun" value="சூ" onclick="return uncheck('rsun','10')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rten)){ echo "checked"; } else if(in_array("சூ", $rten)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">சூ</td>
                  </tr>
                  <tr id="tr10rragu">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rragu" value="ரா" onclick="return uncheck('rragu','10')" <?php if(in_array("à®°à®¾à®•à¯", $rten)){ echo "checked"; } else if(in_array("ரா", $rten)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">ரா</td>
                  </tr>
                  <tr id="tr10rvij">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rvij" value="வி" onclick="return uncheck('rvij','10')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rten)){ echo "checked"; } else if(in_array("வி", $rten)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">வி</td>
                  </tr>
                  <tr id="tr10rchk">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rchk" value="சு" onclick="return uncheck('rchk','10')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rten)){ echo "checked"; } else if(in_array("சு", $rten)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">சு</td>
                  </tr>
                  <tr id="tr10rguru">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rguru" value="கு௫" onclick="return uncheck('rguru','10')" <?php if(in_array("à®•à¯à¯«", $rten)){ echo "checked"; } else if(in_array("கு௫", $rten)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">கு</td>
                  </tr>
                </tbody></table></td>
                <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                  <tbody><tr id="tr10rsat">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rsat" value="சனி" onclick="return uncheck('rsat','10')" <?php if(in_array("à®šà®©à®¿", $rten)){ echo "checked"; } else if(in_array("சனி", $rten)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">ச</td>
                  </tr>
                  <tr id="tr10rchan">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rchan" value="சந்" onclick="return uncheck('rchan','10')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rten)){ echo "checked"; } else if(in_array("சந்", $rten)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">சந்</td>
                  </tr>
                  <tr id="tr10rkee">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rkee" value="கே" onclick="return uncheck('rkee','10')" <?php if(in_array("à®•à¯‡à®¤à¯", $rten)){ echo "checked"; } else if(in_array("கே", $rten)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">கே</td>
                  </tr>
                  <tr id="tr10rsev">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rsev" value="செ" onclick="return uncheck('rsev','10')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rten)){ echo "checked"; } else if(in_array("செ", $rten)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">செ</td>
                  </tr>
                  <tr id="tr10rlac">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rlac" value="ல" onclick="return uncheck('rlac','10')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rten)){ echo "checked"; } else if(in_array("ல", $rten)){ echo "checked"; } ?>>
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
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rpu" value="பு" onclick="return uncheck('rpu','9')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $rnine)){ echo "checked"; } else if(in_array("பு", $rnine)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">பு</td>
                  </tr>
                  <tr id="tr9rsun">
                   <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rsun" value="சூ" onclick="return uncheck('rsun','9')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rnine)){ echo "checked"; } else if(in_array("சூ", $rnine)){ echo "checked"; } ?>>
                   </td>
                   <td style="font-size:13px;">&nbsp;</td>
                   <td style="font-size:13px;">சூ</td>
                 </tr>
                 <tr id="tr9rragu">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rragu" value="ரா" onclick="return uncheck('rragu','9')" <?php if(in_array("à®°à®¾à®•à¯", $rnine)){ echo "checked"; } else if(in_array("ரா", $rnine)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">ரா</td>
                </tr>
                <tr id="tr9rvij">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rvij" value="வி" onclick="return uncheck('rvij','9')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rnine)){ echo "checked"; } else if(in_array("வி", $rnine)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">வி</td>
                </tr>
                <tr id="tr9rchk">
                 <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rchk" value="சு" onclick="return uncheck('rchk','9')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rnine)){ echo "checked"; } else if(in_array("சு", $rnine)){ echo "checked"; } ?>>
                 </td>
                 <td style="font-size:13px;">&nbsp;</td>
                 <td style="font-size:13px;">சு</td>
               </tr>
               <tr id="tr9rguru">
                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rguru" value="கு௫" onclick="return uncheck('rguru','9')" <?php if(in_array("à®•à¯à¯«", $rnine)){ echo "checked"; } else if(in_array("கு௫", $rnine)){ echo "checked"; } ?>>
                </td>
                <td style="font-size:13px;">&nbsp;</td>
                <td style="font-size:13px;">கு</td>
              </tr>
            </tbody></table></td>
            <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
              <tbody><tr id="tr9rsat">
                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rsat" value="சனி" onclick="return uncheck('rsat','9')" <?php if(in_array("à®šà®©à®¿", $rnine)){ echo "checked"; } else if(in_array("சனி", $rnine)){ echo "checked"; } ?>>
                </td>
                <td style="font-size:13px;">&nbsp;</td>
                <td style="font-size:13px;">ச</td>
              </tr>
              <tr id="tr9rchan">
                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rchan" value="சந்" onclick="return uncheck('rchan','9')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rnine)){ echo "checked"; } else if(in_array("சந்", $rnine)){ echo "checked"; } ?>>
                </td>
                <td style="font-size:13px;">&nbsp;</td>
                <td style="font-size:13px;">சந்</td>
              </tr>
              <tr id="tr9rkee">
                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rkee" value="கே" onclick="return uncheck('rkee','9')" <?php if(in_array("à®•à¯‡à®¤à¯", $rnine)){ echo "checked"; } else if(in_array("கே", $rnine)){ echo "checked"; } ?>>
                </td>
                <td style="font-size:13px;">&nbsp;</td>
                <td style="font-size:13px;">கே</td>
              </tr>
              <tr id="tr9rsev">
                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rsev" value="செ" onclick="return uncheck('rsev','9')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rnine)){ echo "checked"; } else if(in_array("செ", $rnine)){ echo "checked"; } ?>>
                </td>
                <td style="font-size:13px;">&nbsp;</td>
                <td style="font-size:13px;">செ</td>
              </tr>
              <tr id="tr9rlac">
                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rlac" value="ல" onclick="return uncheck('rlac','9')"  <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rnine)){ echo "checked"; } else if(in_array("ல", $rnine)){ echo "checked"; } ?>>
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
                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rpu" value="பு" onclick="return uncheck('rpu','8')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $reight)){ echo "checked"; }else if(in_array("பு", $reight)){ echo "checked"; } ?>>
                </td>
                <td style="font-size:13px;">&nbsp;</td>
                <td style="font-size:13px;">பு</td>
              </tr>
              <tr id="tr8rsun">
               <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rsun" value="சூ" onclick="return uncheck('rsun','8')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $reight)){ echo "checked"; } else if(in_array("சூ", $reight)){ echo "checked"; } ?>>
               </td>
               <td style="font-size:13px;">&nbsp;</td>
               <td style="font-size:13px;">சூ</td>
             </tr>
             <tr id="tr8rragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rragu" value="ரா" onclick="return uncheck('rragu','8')" <?php if(in_array("à®°à®¾à®•à¯", $reight)){ echo "checked"; } else if(in_array("ரா", $reight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr8rvij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rvij" value="வி" onclick="return uncheck('rvij','8')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $reight)){ echo "checked"; } else if(in_array("வி", $reight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr8rchk">
             <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rchk" value="சு" onclick="return uncheck('rchk','8')"  <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $reight)){ echo "checked"; } else if(in_array("சு", $reight)){ echo "checked"; } ?>>
             </td>
             <td style="font-size:13px;">&nbsp;</td>
             <td style="font-size:13px;">சு</td>
           </tr>
           <tr id="tr8rguru">
            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rguru" value="கு௫" onclick="return uncheck('rguru','8')" <?php if(in_array("à®•à¯à¯«", $reight)){ echo "checked"; } else if(in_array("கு௫", $reight)){ echo "checked"; } ?>>
            </td>
            <td style="font-size:13px;">&nbsp;</td>
            <td style="font-size:13px;">கு</td>
          </tr>
        </tbody></table></td>
        <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
          <tbody><tr id="tr8rsat">
            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rsat" value="சனி" onclick="return uncheck('rsat','8')" <?php if(in_array("à®šà®©à®¿", $reight)){ echo "checked"; } else if(in_array("சனி", $reight)){ echo "checked"; } ?>>
            </td>
            <td style="font-size:13px;">&nbsp;</td>
            <td style="font-size:13px;">ச</td>
          </tr>
          <tr id="tr8rchan">
            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rchan" value="சந்" onclick="return uncheck('rchan','8')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $reight)){ echo "checked"; } else if(in_array("சந்", $reight)){ echo "checked"; } ?>>
            </td>
            <td style="font-size:13px;">&nbsp;</td>
            <td style="font-size:13px;">சந்</td>
          </tr>
          <tr id="tr8rkee">
            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rkee" value="கே" onclick="return uncheck('rkee','8')"  <?php if(in_array("à®•à¯‡à®¤à¯", $reight)){ echo "checked"; } else if(in_array("கே", $reight)){ echo "checked"; } ?>>
            </td>
            <td style="font-size:13px;">&nbsp;</td>
            <td style="font-size:13px;">கே</td>
          </tr>
          <tr id="tr8rsev">
            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rsev" value="செ" onclick="return uncheck('rsev','8')"  <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $reight)){ echo "checked"; } else if(in_array("செ", $reight)){ echo "checked"; } ?>>
            </td>
            <td style="font-size:13px;">&nbsp;</td>
            <td style="font-size:13px;">செ</td>
          </tr>
          <tr id="tr8rlac">
            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rlac" value="ல" onclick="return uncheck('rlac','8')"  <?php if(in_array("à®²à®•à¯à®©à®®à¯", $reight)){ echo "checked"; } else if(in_array("ல", $reight)){ echo "checked"; } ?>>
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
           <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rpu" value="பு" onclick="return uncheck('rpu','7')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $rseven)){ echo "checked"; } else if(in_array("பு", $rseven)){ echo "checked"; } ?>>
           </td>
           <td style="font-size:13px;">&nbsp;</td>
           <td style="font-size:13px;">பு</td>
         </tr>
         <tr id="tr7rsun">
           <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rsun" value="சூ" onclick="return uncheck('rsun','7')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rseven)){ echo "checked"; } else if(in_array("சூ", $rseven)){ echo "checked"; } ?>>
           </td>
           <td style="font-size:13px;">&nbsp;</td>
           <td style="font-size:13px;">சூ</td>
         </tr>
         <tr id="tr7rragu">
          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rragu" value="ரா" onclick="return uncheck('rragu','7')"  <?php if(in_array("à®°à®¾à®•à¯", $rseven)){ echo "checked"; } else if(in_array("ரா", $rseven)){ echo "checked"; } ?>>
          </td>
          <td style="font-size:13px;">&nbsp;</td>
          <td style="font-size:13px;">ரா</td>
        </tr>
        <tr id="tr7rvij">
          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rvij" value="வி" onclick="return uncheck('rvij','7')"  <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rseven)){ echo "checked"; } else if(in_array("வி", $rseven)){ echo "checked"; } ?>>
          </td>
          <td style="font-size:13px;">&nbsp;</td>
          <td style="font-size:13px;">வி</td>
        </tr>
        <tr id="tr7rchk">
          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rchk" value="சு" onclick="return uncheck('rchk','7')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rseven)){ echo "checked"; } else if(in_array("சு", $rseven)){ echo "checked"; } ?>>
          </td>
          <td style="font-size:13px;">&nbsp;</td>
          <td style="font-size:13px;">சு</td>
        </tr>
        <tr id="tr7rguru">
          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rguru" value="கு௫" onclick="return uncheck('rguru','7')"  <?php if(in_array("à®•à¯à¯«", $rseven)){ echo "checked"; } else if(in_array("கு௫", $rseven)){ echo "checked"; } ?>>
          </td>
          <td style="font-size:13px;">&nbsp;</td>
          <td style="font-size:13px;">கு</td>
        </tr>
      </tbody></table></td>
      <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
        <tbody><tr id="tr7rsat">
         <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rsat" value="சனி" onclick="return uncheck('rsat','7')" <?php if(in_array("à®šà®©à®¿", $rseven)){ echo "checked"; } else if(in_array("சனி", $rseven)){ echo "checked"; } ?>>
         </td>
         <td style="font-size:13px;">&nbsp;</td>
         <td style="font-size:13px;">ச</td>
       </tr>
       <tr id="tr7rchan">
        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rchan" value="சந்" onclick="return uncheck('rchan','7')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rseven)){ echo "checked"; } else if(in_array("சந்", $rseven)){ echo "checked"; } ?>>
        </td>
        <td style="font-size:13px;">&nbsp;</td>
        <td style="font-size:13px;">சந்</td>
      </tr>
      <tr id="tr7rkee">
        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rkee" value="கே" onclick="return uncheck('rkee','7')" <?php if(in_array("à®•à¯‡à®¤à¯", $rseven)){ echo "checked"; } else if(in_array("கே", $rseven)){ echo "checked"; } ?>>
        </td>
        <td style="font-size:13px;">&nbsp;</td>
        <td style="font-size:13px;">கே</td>
      </tr>
      <tr id="tr7rsev">
        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rsev" value="செ" onclick="return uncheck('rsev','7')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rseven)){ echo "checked"; } else if(in_array("செ", $rseven)){ echo "checked"; } ?>>
        </td>
        <td style="font-size:13px;">&nbsp;</td>
        <td style="font-size:13px;">செ</td>
      </tr>
      <tr id="tr7rlac">
        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rlac" value="ல" onclick="return uncheck('rlac','7')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rseven)){ echo "checked"; } else if(in_array("ல", $rseven)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1apu" value="பு" onclick="return uncheck('apu','1')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $aone)){ echo "checked"; } else if(in_array("பு", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr1asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1asun" value="சூ" onclick="return uncheck('asun','1')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $aone)){ echo "checked"; } else if(in_array("சூ", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr1aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1aragu" value="ரா" onclick="return uncheck('aragu','1')"  <?php if(in_array("à®°à®¾à®•à¯", $aone)){ echo "checked"; } else if(in_array("ரா", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr1avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1avij" value="வி" onclick="return uncheck('avij','1')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $aone)){ echo "checked"; } else if(in_array("வி", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr1achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1achk" value="சு" onclick="return uncheck('achk','1')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $aone)){ echo "checked"; } else if(in_array("சு", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr1aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1aguru" value="கு௫" onclick="return uncheck('aguru','1')" <?php if(in_array("à®•à¯à¯«", $aone)){ echo "checked"; } else if(in_array("கு௫", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr1asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1asat" value="சனி" onclick="return uncheck('asat','1')" <?php if(in_array("à®šà®©à®¿", $aone)){ echo "checked"; } else if(in_array("சனி", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr1achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1achan" value="சந்" onclick="return uncheck('achan','1')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $aone)){ echo "checked"; } else if(in_array("சந்", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr1akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1akee" value="கே" onclick="return uncheck('akee','1')" <?php if(in_array("à®•à¯‡à®¤à¯", $aone)){ echo "checked"; } else if(in_array("கே", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr1asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1asev" value="செ" onclick="return uncheck('asev','1')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $aone)){ echo "checked"; } else if(in_array("செ", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr1alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1alac" value="ல" onclick="return uncheck('alac','1')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $aone)){ echo "checked"; } else if(in_array("ல", $aone)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2apu" value="பு" onclick="return uncheck('apu','2')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $atwo)){ echo "checked"; } else if(in_array("பு", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr2asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2asun" value="சூ" onclick="return uncheck('asun','2')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $atwo)){ echo "checked"; } else if(in_array("சூ", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr2aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2aragu" value="ரா" onclick="return uncheck('aragu','2')" <?php if(in_array("à®°à®¾à®•à¯", $atwo)){ echo "checked"; } else if(in_array("ரா", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr2avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2avij" value="வி" onclick="return uncheck('avij','2')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $atwo)){ echo "checked"; } else if(in_array("வி", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr2achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2achk" value="சு" onclick="return uncheck('achk','2')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $atwo)){ echo "checked"; } else if(in_array("சு", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr2aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2aguru" value="கு௫" onclick="return uncheck('aguru','2')" <?php if(in_array("à®•à¯à¯«", $atwo)){ echo "checked"; } else if(in_array("கு௫", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr2asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2asat" value="சனி" onclick="return uncheck('asat','2')" <?php if(in_array("à®šà®©à®¿", $atwo)){ echo "checked"; } else if(in_array("சனி", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr2achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2achan" value="சந்" onclick="return uncheck('achan','2')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $atwo)){ echo "checked"; } else if(in_array("சந்", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr2akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2akee" value="கே" onclick="return uncheck('akee','2')" <?php if(in_array("à®•à¯‡à®¤à¯", $atwo)){ echo "checked"; } else if(in_array("கே", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr2asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2asev" value="செ" onclick="return uncheck('asev','2')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $atwo)){ echo "checked"; } else if(in_array("செ", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr2alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2alac" value="ல" onclick="return uncheck('alac','2')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $atwo)){ echo "checked"; } else if(in_array("ல", $atwo)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3apu" value="பு" onclick="return uncheck('apu','3')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $athree)){ echo "checked"; } else if(in_array("பு", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr3asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3asun" value="சூ" onclick="return uncheck('asun','3')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $athree)){ echo "checked"; } else if(in_array("சூ", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr3aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3aragu" value="ரா" onclick="return uncheck('aragu','3')" <?php if(in_array("à®°à®¾à®•à¯", $athree)){ echo "checked"; } else if(in_array("ரா", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr3avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3avij" value="வி" onclick="return uncheck('avij','3')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $athree)){ echo "checked"; } else if(in_array("வி", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>

            </tr>
            <tr id="tr3achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3achk" value="சு" onclick="return uncheck('achk','3')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $athree)){ echo "checked"; } else if(in_array("சு", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr3aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3aguru" value="கு௫" onclick="return uncheck('aguru','3')" <?php if(in_array("à®•à¯à¯«", $athree)){ echo "checked"; } else if(in_array("கு௫", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr3asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3asat" value="சனி" onclick="return uncheck('asat','3')" <?php if(in_array("à®šà®©à®¿", $athree)){ echo "checked"; } else if(in_array("சனி", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr3achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3achan" value="சந்" onclick="return uncheck('achan','3')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $athree)){ echo "checked"; } else if(in_array("சந்", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr3akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3akee" value="கே" onclick="return uncheck('akee','3')" <?php if(in_array("à®•à¯‡à®¤à¯", $athree)){ echo "checked"; } else if(in_array("கே", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr3asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3asev" value="செ" onclick="return uncheck('asev','3')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $athree)){ echo "checked"; } else if(in_array("செ", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr3alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3alac" value="ல" onclick="return uncheck('alac','3')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $athree)){ echo "checked"; } else if(in_array("ல", $athree)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4apu" value="பு" onclick="return uncheck('apu','4')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $afour)){ echo "checked"; } else if(in_array("பு", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr4asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4asun" value="சூ" onclick="return uncheck('asun','4')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $afour)){ echo "checked"; } else if(in_array("சூ", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr4aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4aragu" value="ரா" onclick="return uncheck('aragu','4')" <?php if(in_array("à®°à®¾à®•à¯", $afour)){ echo "checked"; } else if(in_array("ரா", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr4avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4avij" value="வி" onclick="return uncheck('avij','4')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $afour)){ echo "checked"; } else if(in_array("வி", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr4achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4achk" value="சு" onclick="return uncheck('achk','4')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $afour)){ echo "checked"; } else if(in_array("சு", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr4aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4aguru" value="கு௫" onclick="return uncheck('aguru','4')" <?php if(in_array("à®•à¯à¯«", $afour)){ echo "checked"; } else if(in_array("கு௫", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr4asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4asat" value="சனி" onclick="return uncheck('asat','4')" <?php if(in_array("à®šà®©à®¿", $afour)){ echo "checked"; } else if(in_array("சனி", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr4achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4achan" value="சந்" onclick="return uncheck('achan','4')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $afour)){ echo "checked"; } else if(in_array("சந்", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr4akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4akee" value="கே" onclick="return uncheck('akee','4')" <?php if(in_array("à®•à¯‡à®¤à¯", $afour)){ echo "checked"; } else if(in_array("கே", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr4asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4asev" value="செ" onclick="return uncheck('asev','4')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $afour)){ echo "checked"; } else if(in_array("செ", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr4alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4alac" value="ல" onclick="return uncheck('alac','4')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $afour)){ echo "checked"; } else if(in_array("ல", $afour)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12apu" value="பு" onclick="return uncheck('apu','12')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $atwelve)){ echo "checked"; } else if(in_array("பு", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr12asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12asun" value="சூ" onclick="return uncheck('asun','12')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $atwelve)){ echo "checked"; } else if(in_array("சூ", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr12aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12aragu" value="ரா" onclick="return uncheck('aragu','12')" <?php if(in_array("à®°à®¾à®•à¯", $atwelve)){ echo "checked"; } else if(in_array("ரா", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr12avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12avij" value="வி" onclick="return uncheck('avij','12')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $atwelve)){ echo "checked"; } else if(in_array("வி", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>

              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr12achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12achk" value="சு" onclick="return uncheck('achk','12')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $atwelve)){ echo "checked"; } else if(in_array("சு", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr12aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12aguru" value="கு௫" onclick="return uncheck('aguru','12')" <?php if(in_array("à®•à¯à¯«", $atwelve)){ echo "checked"; } else if(in_array("கு௫", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr12asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12asat" value="சனி" onclick="return uncheck('asat','12')" <?php if(in_array("à®šà®©à®¿", $atwelve)){ echo "checked"; } else if(in_array("கு௫", $atwelve)){ echo "checked"; }?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr12achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12achan" value="சந்" onclick="return uncheck('achan','12')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $atwelve)){ echo "checked"; } else if(in_array("சந்", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr12akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12akee" value="கே" onclick="return uncheck('akee','12')" <?php if(in_array("à®•à¯‡à®¤à¯", $atwelve)){ echo "checked"; } else if(in_array("கே", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr12asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12asev" value="செ" onclick="return uncheck('asev','12')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $atwelve)){ echo "checked"; } else if(in_array("செ", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr12alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12alac" value="ல" onclick="return uncheck('alac','12')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rone)){ echo "checked"; } else if(in_array("ல", $rone)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5apu" value="பு" onclick="return uncheck('apu','5')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $afive)){ echo "checked"; } else if(in_array("பு", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr5asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5asun" value="சூ" onclick="return uncheck('asun','5')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $afive)){ echo "checked"; } else if(in_array("சூ", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr5aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5aragu" value="ரா" onclick="return uncheck('aragu','5')" <?php if(in_array("à®°à®¾à®•à¯", $afive)){ echo "checked"; } else if(in_array("ரா", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr5avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5avij" value="வி" onclick="return uncheck('avij','5')"  <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $afive)){ echo "checked"; } else if(in_array("வி", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr5achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5achk" value="சு" onclick="return uncheck('achk','5')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $afive)){ echo "checked"; } else if(in_array("சு", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr5aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5aguru" value="கு௫" onclick="return uncheck('aguru','5')" <?php if(in_array("à®•à¯à¯«", $afive)){ echo "checked"; } else if(in_array("கு௫", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr5asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5asat" value="சனி" onclick="return uncheck('asat','5')" <?php if(in_array("à®šà®©à®¿", $afive)){ echo "checked"; }else if(in_array("சனி", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr5achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5achan" value="சந்" onclick="return uncheck('achan','5')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $afive)){ echo "checked"; } else if(in_array("சந்", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr5akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5akee" value="கே" onclick="return uncheck('akee','5')" <?php if(in_array("à®•à¯‡à®¤à¯", $afive)){ echo "checked"; } else if(in_array("கே", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr5asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5asev" value="செ" onclick="return uncheck('asev','5')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $afive)){ echo "checked"; }else if(in_array("செ", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr5alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5alac" value="ல" onclick="return uncheck('alac','5')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $afive)){ echo "checked"; } else if(in_array("ல", $afive)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11apu" value="பு" onclick="return uncheck('apu','11')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $aeleven)){ echo "checked"; } else if(in_array("பு", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr11asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11asun" value="சூ" onclick="return uncheck('asun','11')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $aeleven)){ echo "checked"; } else if(in_array("சூ", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr11aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11aragu" value="ரா" onclick="return uncheck('aragu','11')" <?php if(in_array("à®°à®¾à®•à¯", $aeleven)){ echo "checked"; } else if(in_array("ரா", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr11avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11avij" value="வி" onclick="return uncheck('avij','11')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $afive)){ echo "checked"; } else if(in_array("வி", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr11achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11achk" value="சு" onclick="return uncheck('achk','11')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $aeleven)){ echo "checked"; } else if(in_array("சு", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr11aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11aguru" value="கு௫" onclick="return uncheck('aguru','11')" <?php if(in_array("à®•à¯à¯«", $aeleven)){ echo "checked"; } else if(in_array("கு௫", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr11asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11asat" value="சனி" onclick="return uncheck('asat','11')" <?php if(in_array("à®šà®©à®¿", $aeleven)){ echo "checked"; } else if(in_array("சனி", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr11achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11achan" value="சந்" onclick="return uncheck('achan','11')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $aeleven)){ echo "checked"; } else if(in_array("சந்", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr11akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11akee" value="கே" onclick="return uncheck('akee','11')" <?php if(in_array("à®•à¯‡à®¤à¯", $aeleven)){ echo "checked"; } else if(in_array("கே", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr11asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11asev" value="செ" onclick="return uncheck('asev','11')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $aeleven)){ echo "checked"; } else if(in_array("செ", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr11alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11alac" value="ல" onclick="return uncheck('alac','11')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $aeleven)){ echo "checked"; } else if(in_array("ல", $aeleven)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6apu" value="பு" onclick="return uncheck('apu','6')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $asix)){ echo "checked"; } else if(in_array("பு", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr6asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6asun" value="சூ" onclick="return uncheck('asun','6')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $asix)){ echo "checked"; } else if(in_array("சூ", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr6aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6aragu" value="ரா" onclick="return uncheck('aragu','6')" <?php if(in_array("à®°à®¾à®•à¯", $asix)){ echo "checked"; } else if(in_array("ரா", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr6avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6avij" value="வி" onclick="return uncheck('avij','6')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $asix)){ echo "checked"; } else if(in_array("வி", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr6achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6achk" value="சு" onclick="return uncheck('achk','6')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $asix)){ echo "checked"; } else if(in_array("சு", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr6aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6aguru" value="கு௫" onclick="return uncheck('aguru','6')" <?php if(in_array("à®•à¯à¯«", $asix)){ echo "checked"; } else if(in_array("கு௫", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr6asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6asat" value="சனி" onclick="return uncheck('asat','6')" <?php if(in_array("à®šà®©à®¿", $asix)){ echo "checked"; } else if(in_array("சனி", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr6achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6achan" value="சந்" onclick="return uncheck('achan','6')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $asix)){ echo "checked"; } else if(in_array("சந்", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr6akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6akee" value="கே" onclick="return uncheck('akee','6')" <?php if(in_array("à®•à¯‡à®¤à¯", $asix)){ echo "checked"; } else if(in_array("கே", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr6asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6asev" value="செ" onclick="return uncheck('asev','6')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $asix)){ echo "checked"; } else if(in_array("செ", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr6alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6alac" value="ல" onclick="return uncheck('alac','6')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $asix)){ echo "checked"; } else if(in_array("ல", $asix)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10apu" value="பு" onclick="return uncheck('apu','10')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $aten)){ echo "checked"; } else if(in_array("பு", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr10asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10asun" value="சூ" onclick="return uncheck('asun','10')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $aten)){ echo "checked"; } else if(in_array("சூ", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr10aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10aragu" value="ரா" onclick="return uncheck('aragu','10')" <?php if(in_array("à®°à®¾à®•à¯", $aten)){ echo "checked"; } else if(in_array("ரா", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr10avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10avij" value="வி" onclick="return uncheck('avij','10')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $aten)){ echo "checked"; } else if(in_array("வி", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr10achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10achk" value="சு" onclick="return uncheck('achk','10')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $aten)){ echo "checked"; } else if(in_array("சு", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr10aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10aguru" value="கு௫" onclick="return uncheck('aguru','10')" <?php if(in_array("à®•à¯à¯«", $aten)){ echo "checked"; } else if(in_array("கு௫", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr10asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10asat" value="சனி" onclick="return uncheck('asat','10')" <?php if(in_array("à®šà®©à®¿", $aten)){ echo "checked"; } else if(in_array("சனி", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr10achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10achan" value="சந்" onclick="return uncheck('achan','10')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $aten)){ echo "checked"; } else if(in_array("சந்", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr10akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10akee" value="கே" onclick="return uncheck('akee','10')" <?php if(in_array("à®•à¯‡à®¤à¯", $aten)){ echo "checked"; } else if(in_array("கே", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr10asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10asev" value="செ" onclick="return uncheck('asev','10')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $aten)){ echo "checked"; } else if(in_array("செ", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr10alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10alac" value="ல" onclick="return uncheck('alac','10')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $aten)){ echo "checked"; } else if(in_array("ல", $aten)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9apu" value="பு" onclick="return uncheck('apu','9')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $anine)){ echo "checked"; } else if(in_array("பு", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr9asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9asun" value="சூ" onclick="return uncheck('asun','9')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $anine)){ echo "checked"; } else if(in_array("சூ", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr9aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9aragu" value="ரா" onclick="return uncheck('aragu','9')" <?php if(in_array("à®°à®¾à®•à¯", $anine)){ echo "checked"; } else if(in_array("ரா", $anine)){ echo "checked"; } ?>a>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr9avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9avij" value="வி" onclick="return uncheck('avij','9')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $anine)){ echo "checked"; } else if(in_array("வி", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr9achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9achk" value="சு" onclick="return uncheck('achk','9')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $anine)){ echo "checked"; } else if(in_array("சு", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr9aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9aguru" value="கு௫" onclick="return uncheck('aguru','9')" <?php if(in_array("à®•à¯à¯«", $anine)){ echo "checked"; } else if(in_array("கு௫", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr9asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9asat" value="சனி" onclick="return uncheck('asat','9')" <?php if(in_array("à®šà®©à®¿", $anine)){ echo "checked"; } else if(in_array("சனி", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr9achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9achan" value="சந்" onclick="return uncheck('achan','9')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $anine)){ echo "checked"; } else if(in_array("சந்", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr9akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9akee" value="கே" onclick="return uncheck('akee','9')" <?php if(in_array("à®•à¯‡à®¤à¯", $anine)){ echo "checked"; } else if(in_array("கே", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr9asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9asev" value="செ" onclick="return uncheck('asev','9')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $anine)){ echo "checked"; } else if(in_array("செ", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr9alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9alac" value="ல" onclick="return uncheck('alac','9')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $anine)){ echo "checked"; } else if(in_array("ல", $anine)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8apu" value="பு" onclick="return uncheck('apu','8')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $aeight)){ echo "checked"; } else if(in_array("பு", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr8asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8asun" value="சூ" onclick="return uncheck('asun','8')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $aeight)){ echo "checked"; } else if(in_array("சூ", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr8aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8aragu" value="ரா" onclick="return uncheck('aragu','8')" <?php if(in_array("à®°à®¾à®•à¯", $aeight)){ echo "checked"; } else if(in_array("ரா", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr8avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8avij" value="வி" onclick="return uncheck('avij','8')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $aeight)){ echo "checked"; } else if(in_array("வி", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr8achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8achk" value="சு" onclick="return uncheck('achk','8')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $aeight)){ echo "checked"; } else if(in_array("சு", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr8aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8aguru" value="கு௫" onclick="return uncheck('aguru','8')" <?php if(in_array("à®•à¯à¯«", $aeight)){ echo "checked"; } else if(in_array("கு௫", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr8asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8asat" value="சனி" onclick="return uncheck('asat','8')" <?php if(in_array("à®šà®©à®¿", $aeight)){ echo "checked"; } else if(in_array("சனி", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr8achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8achan" value="சந்" onclick="return uncheck('achan','8')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $aeight)){ echo "checked"; } else if(in_array("சந்", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr8akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8akee" value="கே" onclick="return uncheck('akee','8')" <?php if(in_array("à®•à¯‡à®¤à¯", $aeight)){ echo "checked"; } else if(in_array("கே", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr8asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8asev" value="செ" onclick="return uncheck('asev','8')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $aeight)){ echo "checked"; } else if(in_array("செ", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr8alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8alac" value="ல" onclick="return uncheck('alac','8')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $aeight)){ echo "checked"; } else if(in_array("ல", $aeight)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7apu" value="பு" onclick="return uncheck('apu','7')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $aseven)){ echo "checked"; } else if(in_array("பு", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr7asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7asun" value="சூ" onclick="return uncheck('asun','7')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $aseven)){ echo "checked"; } else if(in_array("சூ", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr7aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7aragu" value="ரா" onclick="return uncheck('aragu','7')" <?php if(in_array("à®°à®¾à®•à¯", $aseven)){ echo "checked"; } else if(in_array("ரா", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr7avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7avij" value="வி" onclick="return uncheck('avij','7')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $aseven)){ echo "checked"; } else if(in_array("வி", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr7achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7achk" value="சு" onclick="return uncheck('achk','7')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $aseven)){ echo "checked"; } else if(in_array("சு", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr7aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7aguru" value="கு௫" onclick="return uncheck('aguru','7')" <?php if(in_array("à®•à¯à¯«", $aseven)){ echo "checked"; } else if(in_array("கு௫", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr7asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7asat" value="சனி" onclick="return uncheck('asat','7')" <?php if(in_array("à®šà®©à®¿", $aseven)){ echo "checked"; } else if(in_array("சனி", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr7achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7achan" value="சந்" onclick="return uncheck('achan','7')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $aseven)){ echo "checked"; } else if(in_array("சந்", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr7akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7akee" value="கே" onclick="return uncheck('akee','7')" <?php if(in_array("à®•à¯‡à®¤à¯", $aseven)){ echo "checked"; } else if(in_array("கே", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr7asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7asev" value="செ" onclick="return uncheck('asev','7')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $aseven)){ echo "checked"; } else if(in_array("செ", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr7alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7alac" value="ல" onclick="return uncheck('alac','7')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $aseven)){ echo "checked"; } else if(in_array("ல", $aseven)){ echo "checked"; } ?>>
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




       <!-- <div class="col-md-12 divborder1 pags" style="margin-bottom: 1em;">Contact Details</div>
        
        
                <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Mail-ID</label></div>
        <div class="col-md-4 divborder1"><div class="form-group">
          <input type="text" class="form-control input-sm required textbox1" name="mail" id="mail" value="<?php echo  $row['email'];?>">
        </div>
        </div>
        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Mobile no</label></div>
        <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" id="mobile" name="land" value="<?php echo  $row['land'];?>" data-title="Please enter Contact No 1" ></div></div>
        

        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Phone No</label></div>
        <div class="col-md-4 divborder1">
          <div class="form-group"><input type="text" class="form-control input-sm required textbox1" id="mobile2" name="mobile" value="<?php echo  $row['mobile'];?>"></div>
        </div>
      -->




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
              font-size: 21px;" onclick="return validate(document);" name="registers" class="btn">UPDATE</button>
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
  $('#myDatepicker2').datetimepicker({
    format: 'DD/MM/YYYY'
  });

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

<script>

  $(document).ready(function () {
    var i;
    for(i=1;i<=12;i++)
    {
      uncheck1('apu',i);
      uncheck1('asun',i);
      uncheck1('aragu',i);
      uncheck1('avij',i);
      uncheck1('achk',i);
      uncheck1('aguru',i);
      uncheck1('asat',i);
      uncheck1('achan',i);
      uncheck1('akee',i);
      uncheck1('asev',i);
      uncheck1('alac',i);

      uncheck1('rpu',i);
      uncheck1('rsun',i);
      uncheck1('rragu',i);
      uncheck1('rvij',i);
      uncheck1('rchk',i);
      uncheck1('rguru',i);
      uncheck1('rsat',i);
      uncheck1('rchan',i);
      uncheck1('rkee',i);
      uncheck1('rsev',i);
      uncheck1('rlac',i);
    }
  });
  function uncheck1(hname,cnt)
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
      // if(cnt!=1) { document.getElementById('1'+hname).disabled=false; $('#tr1'+hname).show(); }
      // if(cnt!=2) { document.getElementById('2'+hname).disabled=false; $('#tr2'+hname).show(); }
      // if(cnt!=3) { document.getElementById('3'+hname).disabled=false; $('#tr3'+hname).show(); }
      // if(cnt!=4) { document.getElementById('4'+hname).disabled=false; $('#tr4'+hname).show(); }
      // if(cnt!=5) { document.getElementById('5'+hname).disabled=false; $('#tr5'+hname).show(); }
      // if(cnt!=6) { document.getElementById('6'+hname).disabled=false; $('#tr6'+hname).show(); }
      // if(cnt!=7) { document.getElementById('7'+hname).disabled=false; $('#tr7'+hname).show(); }
      // if(cnt!=8) { document.getElementById('8'+hname).disabled=false; $('#tr8'+hname).show(); }
      // if(cnt!=9) { document.getElementById('9'+hname).disabled=false; $('#tr9'+hname).show(); }
      // if(cnt!=10) { document.getElementById('10'+hname).disabled=false; $('#tr10'+hname).show(); }
      // if(cnt!=11) { document.getElementById('11'+hname).disabled=false; $('#tr11'+hname).show(); }
      // if(cnt!=12) { document.getElementById('12'+hname).disabled=false; $('#tr12'+hname).show(); }
    }
  }
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

</body>

</html>