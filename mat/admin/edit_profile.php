<?php
include('config.php');
// if($conn){
//   //echo "database connected";
// }
// else{
//   //echo "database connection failed";
// }
// if(isset($_POST['registers']))
// {
  
    
// extract ( $_POST );


// $raasi1=implode(',',$raasi1);
// $raasi2=implode(',',$raasi2);
// $raasi3=implode(',',$raasi3);
// $raasi4=implode(',',$raasi4);
// $raasi5=implode(',',$raasi5);
// $raasi6=implode(',',$raasi6);
// $raasi7=implode(',',$raasi7);
// $raasi8=implode(',',$raasi8);
// $raasi9=implode(',',$raasi9);
// $raasi10=implode(',',$raasi10);
// $raasi11=implode(',',$raasi11);
// $raasi12=implode(',',$raasi12);

    
//     //echo $raasi1;

// $amsam1=implode(',',$amsam1);
// $amsam2=implode(',',$amsam2);
// $amsam3=implode(',',$amsam3);
// $amsam4=implode(',',$amsam4);
// $amsam5=implode(',',$amsam5);
// $amsam6=implode(',',$amsam6);
// $amsam7=implode(',',$amsam7);
// $amsam8=implode(',',$amsam8);
// $amsam9=implode(',',$amsam9);
// $amsam10=implode(',',$amsam10);
// $amsam11=implode(',',$amsam11);
// $amsam12=implode(',',$amsam12); 

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
  $sql="UPDATE registerfree SET `name`='$name',`gender`='$sex',`caste`='$caste',`subcaste`='$subcaste',`dob`='$dob',`dot`='$dot',`age`='$d2',`height`='$height',`color`='$color',`edu`='$qualification',`working_place`='$work_place',`monthlyincome`='$income',`phy`='$phy',`mstatus`='$mstatus',`religion`='$religion',`god`='$god',`weight`='$weight',`food`='$food',`father_name`='$f_name',`mother_name`='$m_name',`father_occ`='$f_occ',`mother_occ`='$m_occ',`bro`='$bro',`sis`='$sis',`mbro`='$mbro',`msis`='$msis',`language`='$lang',`city`='$city',`expectation`='$expect',`f_status`='$f_status',`lagnam`='$lagnam',`star`='$star',`rasi`='$rasi',`gothram`='$gothram',`thisai`='$thisai',`address`='$address', `email`='$mail', `mobile`='$mobile',`land`='$land',`ybrother`='$ybro',`ysister`='$ysis',`birth_place`='$bplace',`god`='$bestgod',`one`='$raasi1', `two`='$raasi2', `three`='$raasi3', `four`='$raasi4', `five`='$raasi5', `six`='$raasi6', 
 `seven`='$raasi7', `eight`='$raasi8', `nine`='$raasi9', `ten`='$raasi10', `eleven`='$raasi11', `twelve`='$raasi12', `aone`='$amsam1', `atwo`='$amsam2', `athree`='$amsam3', `afour`='$amsam4',
 `afive`='$amsam5', `asix`='$amsam6', `aseven`='$amsam7', `aeight`='$amsam8', `anine`='$amsam9', `aten`='$amsam10', `aeleven`='$amsam11', `atwelve`='$amsam12' WHERE matri_id='$mat_id' ";
  // echo $sql;
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
    <meta charset="UTF-8">
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
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
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

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>




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
    <!-- <?php include('header.php'); ?> -->
    
    <section class="row final-inner-headerss">
      <div class="container">
        <h2 class="this-title">Free Registeration</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <!-- <li class="active">Free Registeration</li> -->
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
//echo  $row['gender'];

$dg=$row['name'];
echo "<script>alert('$dg');</script>";
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
          <div class="col-md-12 divborder1 pags">Personal Details</div>
          <div class="row"><div class="col-md-12 divborder1"><p>&nbsp;&nbsp;</p></div></div>
          <div class="form-group">
            <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Name</label></div>
            <div class="col-md-4 divborder1">
              <input type="text" class="form-control input-sm textbox1" name="name" id="name"  value="<?php echo  $row['name'];?> " data-title="Please valid Name">
            </div>
          </div>
          <div class="col-md-2 divborder1" style="margin-top: -11px;"><label class="control-label">Sex</label></div>
            <div class="col-md-4 divborder1">
              <div class="form-group" style="margin-top: -20px;">
                <label class="radio-inline" style="margin-left: -40px;">
                  <input type="radio" name="sex" id="optionsRadios3" class="form-control input-sm" value="Male" <?php if($row['gender']=='Male') echo 'checked'; ?> ><span class="regp">Male</span>
                </label>
                <label class="radio-inline"> 
                  <input type="radio" name="sex" id="optionsRadios4" class="form-control input-sm" value="Female" <?php if($row['gender']=='Female') echo 'checked'; ?>><span class="regp">Female</span>
                </label>
              </div>
            </div>
         <!--  <div class="col-md-2 divborder1" style="margin-top: -11px;"><label class="control-label">Sex</label></div>

   <div class="col-md-4 divborder1">
            <div class="form-group" style="margin-top: -20px;">
              <label class="radio-inline" style="margin-left: -30px;">
                <?php
$gender=$row['gender'];
if($gender=='Male')
{


  ?>
                <input type="radio" name="sex" class="form-control input-sm" value="Male" checked="checked" >
<?php } else { ?>

 <input type="radio" name="sex" class="form-control input-sm" value="Male" >
 <?php } ?><span class="regp" style="
    margin-left: 34px;
  ">Male</span>  
  <label class="radio-inline">
 <?php if($gender=='Female'){
  ?>

<input type="radio" name="sex"  class="form-control input-sm" value="Female" checked="checked">
<?php } else{?>
<input type="radio" name="sex"  class="form-control input-sm" value="Female" >


          <?php } ?>   <span class="regp">Female</span>   
              </label>
             
              </label>
            </div>
          </div> -->
          
   
          
          
        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Date Of Birth</label></div>
        <div class="col-md-4 divborder1">
          <div class="form-group">
            <input type="date" class="form-control" style="height: 30px;" id="exampleInputDOB1" name="dob"  value="<?php echo  $row['dob'];?>">
          </div>
        </div>
                
                
                        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Martial Status</label></div>
        <div class="col-md-4 divborder1">
          <div class="form-group">
          <select class="form-control required combo input-sm" name="mstatus" id="married">
            <option value="<?php echo  $row['mstatus'];?>"><?php echo  $row['mstatus'];?></option>
            <option value="Unmarried">Unmarried</option>
            <option value="Divorce">Divorce</option>
            <option value="Widow">Widow</option>
          </select>
          </div>
        </div>
                
                
        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Physical Status</label></div>
        <div class="col-md-4 divborder1">
          <div class="form-group">
            <select class="form-control required combo input-sm" name="phy" id="phy_status">
              <option value="<?php echo  $row['phy'];?>"><?php echo  $row['phy'];?></option>
              <option value="Normal">Normal</option>
              <option value="Disabled">Disabled</option>
            </select>
          </div>
        </div>
                
                <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Religion</label></div>
          <div class="col-md-4 divborder1">
            <div class="form-group">
              <select class="form-control required combo input-sm" name="religion" id="religion" data-title="Please select Complexion">
                

                <option value="<?php echo  $row['religion'];?>"><?php echo  $row['religion'];?></option>
                                <option value="">Select</option>
<option value="Hindu">Hindu</option>
<option value="Muslim">Muslim</option>
<option value="Christian">Christian</option>
              </select>
            </div>
          </div>
        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Caste</label></div>
        <div class="col-md-4 divborder1">
          <div class="form-group">
            <select class="form-control required combo input-sm" name="caste" id="caste" data-title="Please select Caste">
                
                                
              <option value="<?php echo  $row['caste'];?>"><?php echo  $row['caste'];?></option>                 
             
                   <option value="Nadar">Nadar</option>
            <option value="Yadhavar">Yadhavar</option>
            <option value="Telugu Yadhavar">Telugu Yadhavar</option>
            <option value="Tamil Viswakarma">Tamil Viswakarma</option>
            <option value="Telugu Viswakarma">Telugu Viswakarma</option>
            <option value="Agamudiyar Mudhaliyar">Agamudiyar Mudhaliyar</option>
            <option value="Mudhaliyar">Mudhaliyar</option>
            <option value="Devar">Devar</option>
            <option value="Kallar">Kallar</option>
            <option value="Maravar">Maravar</option>
             <option value="Agamudaiya Devar">Agamudaiya Devar</option>
            <option value="Chettiyar">Chettiyar</option>
            <option value="RC Christian">RC Christian</option>
            <option value="CSI Christian">CSI Christian</option>
            <option value="Bondili">Bondili</option>
            <option value="AC Christian">AC Christian</option>
            <option value="Pillaimar">Pillaimar</option>
            <option value="Saiva Pillai">Saiva Pillai</option>
            <option value="Rettiyar">Rettiyar</option>
            <option value="Adhi Drividar - Paraiyar">Adhi Drividar - Paraiyar</option>
            <option value="Thevaendhira Kulam - Pallar">Thevaendhira Kulam - Pallar</option>
            <option value="Brahmin">Brahmin</option>
            <option value="Gounder">Gounder</option>
            <option value="Muslim - Tamil">Muslim - Tamil</option>
            <option value="Naidu">Naidu</option>
            <option value="Kavura Naidu">Kavura Naidu</option>
            <option value="Kammaavar Naidu">Kammaavar Naidu</option>
            <option value="Balija Naidu">Balija Naidu</option>
            <option value="Nayar">Nayar</option>
            <option value="Arunthathiyar">Arunthathiyar</option>
            <option value="Muppanar">Muppanar</option>
            <option value="Maruthuvar">Maruthuvar</option>
            <option value="Veera Saivam">Veera Saivam</option>
            <option value="Vannaar">Vannaar</option>
            <option value="Sourastra">Sourastra</option>
            <option value="Nayakkar">Nayakkar</option>
            <option value="Vellar">Vellar</option>
            <option value="Udaiyaar">Udaiyaar</option>
            <option value="Saaliyar">Saaliyar</option>
           
            <option value="Jangam">Jangam</option>
            <option value="Pandaaram">Pandaaram</option>
            <option value="Pandiya vellalar">Pandiya vellalar</option>
            <option value="Bhoyar">Bhoyar</option>
            <option value="Okkalikka Gaudar">Okkalikka Gaudar</option>
            <option value="Muththaraiyar">Muththaraiyar</option>
            <option value="Muthu Raja">Muthu Raja</option>
            <option value="Valluvan">Valluvan</option>
            <option value="Ambalakkarar">Ambalakkarar</option>
            <option value="Meenavar Parvatha Rajakulam">Meenavar Parvatha Rajakulam</option>
            <option value="Kulaalar">Kulaalar</option>
            <option value="kuravar">kuravar</option>
            <option value="Vanniyar">Vanniyar</option>
             <option value="Inter Caste Marriage">Inter Caste Marriage</option>
            <option value="Caste No Bar">Caste No Bar</option>
            <option value="Others">Others</option>
                            </select>
          </div>
        </div>
        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Sub Caste</label></div>
        <div class="col-md-4 divborder1">
          <div class="form-group">
            <input type="text" class="form-control input-sm textbox1" name="subcaste" id="subcaste" value="<?php echo  $row['subcaste'];?>" data-title="Please valid sub Caste">
          </div>
        </div>
                
               <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">God</label></div>
          <div class="col-md-4 divborder1">
            <div class="form-group">
              <input type="text" class="form-control input-sm textbox1" name="bestgod" id="bestgod" value="<?php echo  $row['god'];?>" data-title="Please Fill God">
            </div>
          </div>

                <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Height</label></div>
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
        
        
        
        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Colour</label></div>
        <div class="col-md-4 divborder1">
          <div class="form-group">
            <select class="form-control required combo input-sm" name="color" id="complexion" data-title="Please select Complexion">
               <option value="<?php echo  $row['color'];?>"><?php echo  $row['color'];?></option>
                <option value="Very Fair">Very Fair</option>
                <option value="Fair">Fair</option>
                <option value="Medium">Medium</option>
                <option value="Dark">Dark</option>
            </select>
          </div>
        </div>
        
        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Qualification</label></div>
        <div class="col-md-4 divborder1">
          <div class="form-group">
            <input type="text" class="form-control" style="height: 30px;" id="exampleInputDOB1" name="qualification"  value="<?php echo  $row['edu'];?>">
          </div>
        </div>
                
                
        
        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Job/Business</label></div>
          <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" 
                    name="work_place" id="work_place" value="<?php echo  $row['working_place'];?>"></div></div>
                    
                    
        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Monthly Income</label></div>
          <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" name="income" id="income" value="<?php echo  $row['monthlyincome'];?>" ></div></div>
                    
                    

        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Address</label></div>
        <div class="col-md-4 divborder1">
          <div class="form-group">
            <textarea class="form-control" style="height: 68px;"  id="address" name="address" value="<?php echo  $row['address'];?>" ><?php echo  $row['address'];?></textarea>
          </div>
        </div>
                
                <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">City</label></div>
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
        
        
        
      
          
        <div class="col-md-12 divborder1 pags" style="margin-bottom:1em;">Family Details</div>
        
        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Father's Name</label></div>
          <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" name="f_name" id="fa_name" value="<?php echo  $row['father_name'];?>" ></div></div>
        
        
        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Father's Occupation</label></div>
          <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" name="f_occ" id="fa_occ" value="<?php echo  $row['father_occ'];?>" ></div></div>
          <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Mother's Name</label></div>
        <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" id="mo_name" name="m_name" value="<?php echo  $row['mother_name'];?>"></div></div>     
        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Mother's Occupation</label></div>
        <div class="col-md-4 divborder1"><div class="form-group"><input type="text" class="form-control input-sm required textbox1" id="mo_occ" name="m_occ" value="<?php echo  $row['mother_occ'];?>"></div></div>

        
        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Siblings</label><span style="font-size:0.8em"></span></div>
        <div class="col-md-4 divborder1">
          <div class="row">
            <div class="col-xs-2 col-md-2 divborder1"><label class="control-label" style="font-size: 12px;">Elder Brother's</label></div>
            <div class="col-xs-3 col-md-3 divborder1">
              <div class="form-group">
                <select name="bro" id="brothers" class="form-control input-sm" style="width:75px;">
                <option value="<?php echo  $row['bro'];?>"><?php echo  $row['bro'];?></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>                </select>
              </div>
            </div>
            <div class="col-xs-2 col-md-3 divborder1"><label class="control-label" style="font-size: 12px;">Elder Sister's</label></div>
            <div class="col-xs-3 col-md-3 divborder1">
              <div class="form-group">
              <select name="sis" id="sisters" class="form-control input-sm" style="width:75px;">
             <option value="<?php echo  $row['sis'];?>"><?php echo  $row['sis'];?></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>              </select>
              </div>
            </div>
          </div>
        </div>
        
                
                <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Siblings</label><span style="font-size:0.8em"></span></div>
        <div class="col-md-4 divborder1">
          <div class="row">
            <div class="col-xs-2 col-md-2 divborder1"><label class="control-label" style="font-size: 12px;">Younger Brother's</label></div>
            <div class="col-xs-3 col-md-3 divborder1">
              <div class="form-group">
                <select name="ybro" id="brothers" class="form-control input-sm" style="width:75px;">
                <option value="<?php echo  $row['ybrother'];?>"><?php echo  $row['ybrother'];?></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>                </select>
              </div>
            </div>
            <div class="col-xs-2 col-md-3 divborder1"><label class="control-label" style="font-size: 12px;">Younger Sister's</label></div>
            <div class="col-xs-3 col-md-3 divborder1">
              <div class="form-group">
              <select name="ysis" id="sisters" class="form-control input-sm" style="width:75px;">
             <option value="<?php echo  $row['ysister'];?>"><?php echo  $row['ysister'];?></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>              </select>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Married Sibling's</label></div>
        <div class="col-md-4 divborder1">
          <div class="row">
            <div class="col-xs-2 col-md-2 divborder1"><label class="control-label" style="font-size: 12px;">Brother's</label></div>
              <div class="col-xs-3 col-md-3 divborder1">
                <div class="form-group">
                  <select name="mbro" id="brother" class="form-control input-sm" style="width:75px;">
                  <option value="<?php echo  $row['mbro'];?>"><?php echo  $row['mbro'];?></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>                  </select>
                </div>
              </div>
            <div class="col-xs-2 col-md-3 divborder1"><label class="control-label" style="font-size: 12px;">Sister's</label></div>
            <div class="col-xs-3 col-md-3 divborder1">
              <div class="form-group">
              <select name="msis" id="sister" class="form-control input-sm" style="width:75px;">
              <<option value="<?php echo  $row['msis'];?>"><?php echo  $row['msis'];?></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>              </select>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Expectation</label></div>
        <div class="col-md-4 divborder1"><div class="form-group">
                
                
                <input type="text" class="form-control input-sm required textbox1" name="expect"  value="<?php echo  $row['expectation'];?>" >
                
                 
                 
                 </div></div>
                
                
                
        
      

        <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Family Status</label></div>
        <div class="col-md-4 divborder1"><div class="form-group">
                
                
                <input type="text" class="form-control input-sm required textbox1" name="f_status" id="Family_Status" value="<?php echo  $row['f_status'];?>">
                
                 
                 
                 </div></div>
                 
                 
                 
                 
      
              
        <div class="col-xs-12 col-md-12 divborder1 pags" style="margin-bottom: 1em;">Horoscope Details</div>
                
                
                
                
                
                  <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Rasi</label></div>
        <div class="col-md-4 divborder1">
              <div class="form-group">
              <select name="rasi" id="Rasi" class="form-control input-sm">
                                   
                   <option value="<?php echo  $row['rasi'];?>"><?php echo  $row['rasi'];?></option>     
                    <option>Mesham</option>
<option>Rishabam</option>
<option>Midhunam</option>
<option>Kadakam</option>
<option>Simmam</option>
<option>Kanni</option>
<option>Dhulam</option>
<option>Viruchikam</option>
<option>Dhanush</option>
<option>Makaram</option>
<option>Kumbam</option>
<option>Meenam</option>
</select>
                
              </div>
        </div>
                
                <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Star</label></div>
        <div class="col-md-4 divborder1">
          <div class="row">
            <div class="col-md-5 divborder1">
              <div class="form-group">
                <select name="star" id="star" class="form-control input-sm">
                                
                              
                        
                       <option value="<?php echo  $row['star'];?>"><?php echo  $row['star'];?>  </option>
                       
                       
     
           
                      <option>Ashwini</option>
<option>Ashwini1</option>
<option>Ashwini2</option>
<option>Ashwini3</option>
<option>Ashwini4</option>
<option>Bharani</option>
<option>Bharani1</option>
<option>Bharani2</option>
<option>Bharani3</option>
<option>Bharani4</option>
<option>Karthigai</option>
<option>Karthigai1</option>
<option>Karthigai2</option>
<option>Karthigai3</option>
<option>Karthigai4</option>
<option>Rokini</option>
<option>Rokini1</option>
<option>Rokini2</option>
<option>Rokini3</option>
<option>Rokini4</option>
<option>Mirukaseeridam</option>
<option>Mirukaseeridam1</option>
<option>Mirukaseeridam2</option>
<option>Mirukaseeridam3</option>
<option>Mirukaseeridam4</option>
<option>Thiruvathirai</option>
<option>Thiruvathirai1</option>
<option>Thiruvathirai2</option>
<option>Thiruvathirai3</option>
<option>Thiruvathirai4</option>
<option>Punar poosam</option>
<option>Punar poosam1</option>
<option>Punar poosam2</option>
<option>Punar poosam3</option>
<option>Punar poosam4</option>
<option>Poosam</option>
<option>Poosam1</option>
<option>Poosam2</option>
<option>Poosam3</option>
<option>Poosam4</option>
<option>Aayilyam</option>
<option>Aayilyam1</option>
<option>Aayilyam2</option>
<option>Aayilyam3</option>
<option>Aayilyam4</option>
<option>Magam</option>
<option>Magam1</option>
<option>Magam2</option>
<option>Magam3</option>
<option>Magam4</option>
<option>Pooram</option>
<option>Pooram1</option>
<option>Pooram2</option>
<option>Pooram3</option>
<option>Pooram4</option>
<option>Uthiram</option>
<option>Uthiram1</option>
<option>Uthiram2</option>
<option>Uthiram3</option>
<option>Uthiram4</option>
<option>Astham</option>
<option>Astham1</option>
<option>Astham2</option>
<option>Astham3</option>
<option>Astham4</option>
<option>sithirai</option>
<option>sithirai1</option>
<option>sithirai2</option>
<option>sithirai3</option>
<option>sithirai4</option>
<option>swathi</option>
<option>swathi1</option>
<option>swathi2</option>
<option>swathi3</option>
<option>swathi4</option>
<option>vishakam</option>
<option>vishakam1</option>
<option>vishakam2</option>
<option>vishakam3</option>
<option>vishakam4</option>
<option>Anusham</option>
<option>Anusham1</option>
<option>Anusham2</option>
<option>Anusham3</option>
<option>Anusham4</option>
<option>Kettai</option>
<option>Kettai1</option>
<option>Kettai2</option>
<option>Kettai3</option>
<option>Kettai4</option>
<option>Moolam</option>
<option>Moolam1</option>
<option>Moolam2</option>
<option>Moolam3</option>
<option>Moolam4</option>
<option>Pooradam</option>
<option>Pooradam1</option>
<option>Pooradam2</option>
<option>Pooradam3</option>
<option>Pooradam4</option>
<option>Uthiradam</option>
<option>Uthiradam1</option>
<option>Uthiradam2</option>
<option>Uthiradam3</option>
<option>Uthiradam4</option>
<option>Thiruvonam</option>
<option>Thiruvonam1</option>
<option>Thiruvonam2</option>
<option>Thiruvonam3</option>
<option>Thiruvonam4</option>
<option>Avittam</option>
<option>Avittam1</option>
<option>Avittam2</option>
<option>Avittam3</option>
<option>Avittam4</option>
<option>Sathayam</option>
<option>Sathayam1</option>
<option>Sathayam2</option>
<option>Sathayam3</option>
<option>Sathayam4</option>
<option>poorattathi</option>
<option>poorattathi1</option>
<option>poorattathi2</option>
<option>poorattathi3</option>
<option>poorattathi4</option>
<option>Uthirattathi</option>
<option>Uthirattathi1</option>
<option>Uthirattathi2</option>
<option>Uthirattathi3</option>
<option>Uthirattathi4</option>

<option>Revathi</option>
<option>Revathi1</option>
<option>Revathi2</option>
<option>Revathi3</option>
<option>Revathi4</option>
                          
                        </select>
                              
              </div>
            </div>
          </div>
        </div>
        
                <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Lagnam</label></div>
        <div class="col-md-4 divborder1">
          <div class="form-group">
            <select name="lagnam" id="Lagnam" class="form-control input-sm">
                        
                   <option value="<?php echo  $row['lagnam'];?>"><?php echo  $row['lagnam'];?></option>     
                    <option>Mesham</option>
<option>Rishabam</option>
<option>Midhunam</option>
<option>Kadakam</option>
<option>Simmam</option>
<option>Kanni</option>
<option>Dhulam</option>
<option>Viruchikam</option>
<option>Dhanush</option>
<option>Makaram</option>
<option>Kumbam</option>
<option>Meenam</option>
             
                          </select>
          </div>
        </div>
        
      
                
             
                    
                    
                    <div class="col-xs-12 col-md-2 divborder1"><label class="control-label">Thesai</label></div>
        <div class="col-md-4 divborder1">
              <div class="form-group">
              <select name="thisai" id="Thesai" class="form-control input-sm">
                                   
                   <option value="<?php echo  $row['thisai'];?>"><?php echo  $row['thisai'];?></option>     
                   
 
                     <option>Chandra maga thesai</option>
                       <option>Suriya maga thesai</option>
<option>Sevvai maga thesai</option>
<option>Raagu maga thesai</option>
<option>Viyala maga thesai</option>
<option>sani maga thesai</option>
<option>Buthan maga thesai</option>
<option>Kethu maga thesai</option>
<option>Chukkira maga thesai</option>
</select>
                
              </div>
        </div>
                    
        <div class="col-md-2 divborder1"><label class="control-label">Birth Time</label></div>
        <div class="col-md-4 divborder1">
          
            
              <div class="form-group">
                <input type="time" name="dot" id="timepicker1" value="<?php echo  $row['dot'];?>" style="color: black;">
              </div>            
            </div>
                        
                        <div class="col-md-2 divborder1"><label class="control-label">Birth Place</label></div>
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
              
              
        
            
        <div class="col-md-12 divborder1 pags" style="margin-bottom: 1em;">Contact Details</div>
        
        
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
                                    <input type="checkbox" name="raasi1[]" id="1rpu" value="புதன்" onclick="return uncheck('rpu','1')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $rone)){ echo "checked"; } ?>
                                    >
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">பு</td>

                                </tr>
                                <tr id="tr1rsun">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rsun" value="சூரியன்" onclick="return uncheck('rsun','1')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சூ</td>
                                </tr>
                                <tr id="tr1rragu">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rragu" value="ராகு" onclick="return uncheck('rragu','1')" <?php if(in_array("à®°à®¾à®•à¯", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ரா</td>
                                </tr>
                                <tr id="tr1rvij">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rvij" value="வியாழன்" onclick="return uncheck('rvij','1')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">வி</td>
                                </tr>
                                <tr id="tr1rchk">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rchk" value="சுக்கிரன்" onclick="return uncheck('rchk','1')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சு</td>
                                </tr>
                                <tr id="tr1rguru">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rguru" value="கு௫" onclick="return uncheck('rguru','1')" <?php if(in_array("à®•à¯à¯«", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கு</td>
                                </tr>
                              </tbody></table></td>
                              <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                                <tbody><tr id="tr1rsat">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rsat" value="சனி" onclick="return uncheck('rsat','1')" <?php if(in_array("à®šà®©à®¿", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ச</td>
                                </tr>
                                <tr id="tr1rchan">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rchan" value="சந்திரன்" onclick="return uncheck('rchan','1')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சந்</td>
                                </tr>
                                <tr id="tr1rkee">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rkee" value="கேது" onclick="return uncheck('rkee','1')" <?php if(in_array("à®•à¯‡à®¤à¯", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கே</td>
                                </tr>
                                <tr id="tr1rsev">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rsev" value="செவ்வாய்" onclick="return uncheck('rsev','1')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rone)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">செ</td>
                                </tr>
                                <tr id="tr1rlac">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi1[]" id="1rlac" value="லக்னம்" onclick="return uncheck('rlac','1')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rone)){ echo "checked"; } ?>>
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
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rpu" value="புதன்" onclick="return uncheck('rpu','2')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">பு</td>
                                </tr>
                                <tr id="tr2rsun">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rsun" value="சூரியன்" onclick="return uncheck('rsun','2')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சூ</td>
                                </tr>
                                <tr id="tr2rragu">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rragu" value="ராகு" onclick="return uncheck('rragu','2')" <?php if(in_array("à®°à®¾à®•à¯", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ரா</td>
                                </tr>
                                <tr id="tr2rvij">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rvij" value="வியாழன்" onclick="return uncheck('rvij','2')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">வி</td>
                                </tr>
                                <tr id="tr2rchk">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rchk" value="சுக்கிரன்" onclick="return uncheck('rchk','2')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சு</td>
                                </tr>

                                <tr id="tr2rguru">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rguru" value="கு௫" onclick="return uncheck('rguru','2')" <?php if(in_array("à®•à¯à¯«", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கு</td>
                                </tr>


                              </tbody></table></td>
                              <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                                <tbody><tr id="tr2rsat">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rsat" value="சனி" onclick="return uncheck('rsat','2')" <?php if(in_array("à®šà®©à®¿", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ச</td>
                                </tr>
                                <tr id="tr2rchan">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rchan" value="சந்திரன்" onclick="return uncheck('rchan','2')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சந்</td>
                                </tr>
                                <tr id="tr2rkee">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rkee" value="கேது" onclick="return uncheck('rkee','2')" <?php if(in_array("à®•à¯‡à®¤à¯", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கே</td>
                                </tr>
                                <tr id="tr2rsev">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rsev" value="செவ்வாய்" onclick="return uncheck('rsev','2')"  <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rtwo)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">செ</td>
                                </tr>
                                <tr id="tr2rlac">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi2[]" id="2rlac" value="லக்னம்" onclick="return uncheck('rlac','2')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rtwo)){ echo "checked"; } ?>>
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
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rpu" value="புதன்" onclick="return uncheck('rpu','3')"  <?php if(in_array("à®ªà¯à®¤à®©à¯", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">பு</td>
                                </tr>
                                <tr id="tr3rsun">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rsun" value="சூரியன்" onclick="return uncheck('rsun','3')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சூ</td>
                                </tr>
                                <tr id="tr3rragu">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rragu" value="ராகு" onclick="return uncheck('rragu','3')" <?php if(in_array("à®°à®¾à®•à¯", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ரா</td>
                                </tr>
                                <tr id="tr3rvij">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rvij" value="வியாழன்" onclick="return uncheck('rvij','3')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">வி</td>
                                </tr>
                                <tr id="tr3rchk">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rchk" value="சுக்கிரன்" onclick="return uncheck('rchk','3')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சு</td>
                                </tr>
                                <tr id="tr3rguru">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rguru" value="கு௫" onclick="return uncheck('rguru','3')" <?php if(in_array("à®•à¯à¯«", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கு</td>
                                </tr>

                              </tbody></table></td>
                              <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                              <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                                <tbody><tr id="tr3rsat">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rsat" value="சனி" onclick="return uncheck('rsat','3')" <?php if(in_array("à®šà®©à®¿", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">ச</td>
                                </tr>
                                <tr id="tr3rchan">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rchan" value="சந்திரன்" onclick="return uncheck('rchan','3')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">சந்</td>
                                </tr>
                                <tr id="tr3rkee">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rkee" value="கேது" onclick="return uncheck('rkee','3')" <?php if(in_array("à®•à¯‡à®¤à¯", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">கே</td>
                                </tr>
                                <tr id="tr3rsev">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rsev" value="செவ்வாய்" onclick="return uncheck('rsev','3')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rthree)){ echo "checked"; } ?>>
                                  </td>
                                  <td style="font-size:13px;">&nbsp;</td>
                                  <td style="font-size:13px;">செ</td>
                                </tr>
                                <tr id="tr3rlac">
                                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi3[]" id="3rlac" value="லக்னம்" onclick="return uncheck('rlac','3')"  <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rthree)){ echo "checked"; } ?>>
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
                                 <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rpu" value="புதன்" onclick="return uncheck('rpu','4')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rfour)){ echo "checked"; } ?>>
                                 </td>
                                 <td style="font-size:13px;">&nbsp;</td>
                                 <td style="font-size:13px;">பு</td>
                               </tr>
                               <tr id="tr4rsun">
                                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rsun" value="சூரியன்" onclick="return uncheck('rsun','4')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rfour)){ echo "checked"; } ?>>
                                </td>
                                <td style="font-size:13px;">&nbsp;</td>
                                <td style="font-size:13px;">சூ</td>
                              </tr>
                              <tr id="tr4rragu">
                                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rragu" value="ராகு" onclick="return uncheck('rragu','4')" <?php if(in_array("à®°à®¾à®•à¯", $rfour)){ echo "checked"; } ?>>
                                </td>
                                <td style="font-size:13px;">&nbsp;</td>
                                <td style="font-size:13px;">ரா</td>
                              </tr>
                              <tr id="tr4rvij">
                                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rvij" value="வியாழன்" onclick="return uncheck('rvij','4')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rfour)){ echo "checked"; } ?>>
                                </td>
                                <td style="font-size:13px;">&nbsp;</td>
                                <td style="font-size:13px;">வி</td>
                              </tr>
                              <tr id="tr4rchk">
                               <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rchk" value="சுக்கிரன்" onclick="return uncheck('rchk','4')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rfour)){ echo "checked"; } ?>>
                               </td>
                               <td style="font-size:13px;">&nbsp;</td>
                               <td style="font-size:13px;">சு</td>
                             </tr>
                             <tr id="tr4rguru">
                              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rguru" value="கு௫" onclick="return uncheck('rguru','4')" <?php if(in_array("à®•à¯à¯«", $rfour)){ echo "checked"; } ?>>
                              </td>
                              <td style="font-size:13px;">&nbsp;</td>
                              <td style="font-size:13px;">கு</td>
                            </tr>

                          </tbody></table></td>
                          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                            <tbody><tr id="tr4rsat">
                              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rsat" value="சனி" onclick="return uncheck('rsat','4')" <?php if(in_array("à®šà®©à®¿", $rfour)){ echo "checked"; } ?>>
                              </td>
                              <td style="font-size:13px;">&nbsp;</td>
                              <td style="font-size:13px;">ச</td>
                            </tr>
                            <tr id="tr4rchan">
                              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rchan" value="சந்திரன்" onclick="return uncheck('rchan','4')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rfour)){ echo "checked"; } ?>>
                              </td>
                              <td style="font-size:13px;">&nbsp;</td>
                              <td style="font-size:13px;">சந்</td>
                            </tr>
                            <tr id="tr4rkee">
                              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rkee" value="கேது" onclick="return uncheck('rkee','4')" <?php if(in_array("à®•à¯‡à®¤à¯", $rfour)){ echo "checked"; } ?>>
                              </td>
                              <td style="font-size:13px;">&nbsp;</td>
                              <td style="font-size:13px;">கே</td>
                            </tr>
                            <tr id="tr4rsev">
                             <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rsev" value="செவ்வாய்" onclick="return uncheck('rsev','4')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rfour)){ echo "checked"; } ?>>
                             </td>
                             <td style="font-size:13px;">&nbsp;</td>
                             <td style="font-size:13px;">செ</td>
                           </tr>
                           <tr id="tr4rlac">
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi4[]" id="4rlac" value="லக்னம்" onclick="return uncheck('rlac','4')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rfour)){ echo "checked"; } ?>>
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
                            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rpu" value="புதன்" onclick="return uncheck('rpu','12')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $rtwelve)){ echo "checked"; } ?>
                          </td>
                          <td style="font-size:13px;">&nbsp;</td>
                          <td style="font-size:13px;">பு</td>
                        </tr>
                        <tr id="tr12rsun">
                          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rsun" value="சூரியன்" onclick="return uncheck('rsun','12')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rtwelve)){ echo "checked"; } ?>>
                          </td>
                          <td style="font-size:13px;">&nbsp;</td>
                          <td style="font-size:13px;">சூ</td>
                        </tr>
                        <tr id="tr12rragu">
                          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rragu" value="ராகு" onclick="return uncheck('rragu','12')" <?php if(in_array("à®°à®¾à®•à¯", $rtwelve)){ echo "checked"; } ?>>
                          </td>
                          <td style="font-size:13px;">&nbsp;</td>
                          <td style="font-size:13px;">ரா</td>
                        </tr>
                        <tr id="tr12rvij">
                          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rvij" value="வியாழன்" onclick="return uncheck('rvij','12')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rtwelve)){ echo "checked"; } ?>>
                          </td>
                          <td style="font-size:13px;">&nbsp;</td>
                          <td style="font-size:13px;">வி</td>
                        </tr>
                        <tr id="tr12rchk">
                          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rchk" value="சுக்கிரன்" onclick="return uncheck('rchk','12')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rtwelve)){ echo "checked"; } ?>>
                          </td>
                          <td style="font-size:13px;">&nbsp;</td>
                          <td style="font-size:13px;">சு</td>
                        </tr>
                        <tr id="tr12rguru">
                          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rguru" value="கு௫" onclick="return uncheck('rguru','12')" <?php if(in_array("à®•à¯à¯«", $rtwelve)){ echo "checked"; } ?>>
                          </td>
                          <td style="font-size:13px;">&nbsp;</td>
                          <td style="font-size:13px;">கு</td>
                        </tr>
                      </tbody></table></td>
                      <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                      <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                        <tbody><tr id="tr12rsat">
                          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rsat" value="சனி" onclick="return uncheck('rsat','12')" <?php if(in_array("à®šà®©à®¿", $rtwelve)){ echo "checked"; } ?>>
                          </td>
                          <td style="font-size:13px;">&nbsp;</td>
                          <td style="font-size:13px;">ச</td>
                        </tr>
                        <tr id="tr12rchan">
                          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rchan" value="சந்திரன்" onclick="return uncheck('rchan','12')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rtwelve)){ echo "checked"; } ?>>
                          </td>
                          <td style="font-size:13px;">&nbsp;</td>
                          <td style="font-size:13px;">சந்</td>
                        </tr>
                        <tr id="tr12rkee">
                          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rkee" value="கேது" onclick="return uncheck('rkee','12')" <?php if(in_array("à®•à¯‡à®¤à¯", $rtwelve)){ echo "checked"; } ?>>
                          </td>
                          <td style="font-size:13px;">&nbsp;</td>
                          <td style="font-size:13px;">கே</td>
                        </tr>
                        <tr id="tr12rsev">
                          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rsev" value="செவ்வாய்" onclick="return uncheck('rsev','12')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rtwelve)){ echo "checked"; } ?>>
                          </td>
                          <td style="font-size:13px;">&nbsp;</td>
                          <td style="font-size:13px;">செ</td>
                        </tr>
                        <tr id="tr12rlac">
                          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi12[]" id="12rlac" value="லக்னம்" onclick="return uncheck('rlac','12')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rtwelve)){ echo "checked"; } ?>>
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
                          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rpu" value="புதன்" onclick="return uncheck('rpu','5')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $rfive)){ echo "checked"; } ?>>
                          </td>
                          <td style="font-size:13px;">&nbsp;</td>
                          <td style="font-size:13px;">பு</td>
                        </tr>
                        <tr id="tr5rsun">
                         <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rsun" value="சூரியன்" onclick="return uncheck('rsun','5')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rfive)){ echo "checked"; } ?>>
                         </td>
                         <td style="font-size:13px;">&nbsp;</td>
                         <td style="font-size:13px;">சூ</td>
                       </tr>
                       <tr id="tr5rragu">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rragu" value="ராகு" onclick="return uncheck('rragu','5')" <?php if(in_array("à®°à®¾à®•à¯", $rfive)){ echo "checked"; } ?>>
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">ரா</td>
                      </tr>
                      <tr id="tr5rvij">
                        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rvij" value="வியாழன்" onclick="return uncheck('rvij','5')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rfive)){ echo "checked"; } ?>>
                        </td>
                        <td style="font-size:13px;">&nbsp;</td>
                        <td style="font-size:13px;">வி</td>
                      </tr>
                      <tr id="tr5rchk">
                       <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rchk" value="சுக்கிரன்" onclick="return uncheck('rchk','5')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rfive)){ echo "checked"; } ?>>
                       </td>
                       <td style="font-size:13px;">&nbsp;</td>
                       <td style="font-size:13px;">சு</td>
                     </tr>
                     <tr id="tr5rguru">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rguru" value="கு௫" onclick="return uncheck('rguru','5')" <?php if(in_array("à®•à¯à¯«", $rfive)){ echo "checked"; } ?>>
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">கு</td>
                    </tr>
                  </tbody></table></td>
                  <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                    <tbody><tr id="tr5rsat">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rsat" value="சனி" onclick="return uncheck('rsat','5')" <?php if(in_array("à®šà®©à®¿", $rfive)){ echo "checked"; } ?>>
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">ச</td>
                    </tr>
                    <tr id="tr5rchan">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rchan" value="சந்திரன்" onclick="return uncheck('rchan','5')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rfive)){ echo "checked"; } ?>>
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">சந்</td>
                    </tr>
                    <tr id="tr5rkee">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rkee" value="கேது" onclick="return uncheck('rkee','5')" <?php if(in_array("à®•à¯‡à®¤à¯", $rfive)){ echo "checked"; } ?>>
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">கே</td>
                    </tr>
                    <tr id="tr5rsev">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rsev" value="செவ்வாய்" onclick="return uncheck('rsev','5')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rfive)){ echo "checked"; } ?>>
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">செ</td>
                    </tr>
                    <tr id="tr5rlac">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi5[]" id="5rlac" value="லக்னம்" onclick="return uncheck('rlac','5')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rfive)){ echo "checked"; } ?>>
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
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rpu" value="புதன்" onclick="return uncheck('rpu','11')"  <?php if(in_array("à®ªà¯à®¤à®©à¯", $releven)){ echo "checked"; } ?>>
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">பு</td>
                    </tr>
                    <tr id="tr11rsun">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rsun" value="சூரியன்" onclick="return uncheck('rsun','11')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $releven)){ echo "checked"; } ?>>   
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">சூ</td>
                    </tr>
                    <tr id="tr11rragu">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rragu" value="ராகு" onclick="return uncheck('rragu','11')" <?php if(in_array("à®°à®¾à®•à¯", $releven)){ echo "checked"; } ?>>
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">ரா</td>
                    </tr>
                    <tr id="tr11rvij">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rvij" value="வியாழன்" onclick="return uncheck('rvij','11')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $releven)){ echo "checked"; } ?>>
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">வி</td>

                    </tr>
                    <tr id="tr11rchk">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rchk" value="சுக்கிரன்" onclick="return uncheck('rchk','11')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $releven)){ echo "checked"; } ?>>
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">சு</td>
                    </tr>
                    <tr id="tr11rguru">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rguru" value="கு௫" onclick="return uncheck('rguru','11')" <?php if(in_array("à®•à¯à¯«", $releven)){ echo "checked"; } ?>>
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">கு</td>
                    </tr>
                  </tbody></table></td>
                  <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                    <tbody><tr id="tr11rsat">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rsat" value="சனி" onclick="return uncheck('rsat','11')" <?php if(in_array("à®šà®©à®¿", $releven)){ echo "checked"; } ?>>
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">ச</td>
                    </tr>
                    <tr id="tr11rchan">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rchan" value="சந்திரன்" onclick="return uncheck('rchan','11')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $releven)){ echo "checked"; } ?>>
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">சந்</td>
                    </tr>
                    <tr id="tr11rkee">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rkee" value="கேது" onclick="return uncheck('rkee','11')" <?php if(in_array("à®•à¯‡à®¤à¯", $releven)){ echo "checked"; } ?>>

                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">கே</td>
                    </tr>
                    <tr id="tr11rsev">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rsev" value="செவ்வாய்" onclick="return uncheck('rsev','11')"  <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $releven)){ echo "checked"; } ?>>
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">செ</td>
                    </tr>
                    <tr id="tr11rlac">
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi11[]" id="11rlac" value="லக்னம்" onclick="return uncheck('rlac','11')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $releven)){ echo "checked"; } ?>>
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
                      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rpu" value="புதன்" onclick="return uncheck('rpu','6')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $rsix)){ echo "checked"; } ?>>
                      </td>
                      <td style="font-size:13px;">&nbsp;</td>
                      <td style="font-size:13px;">பு</td>
                    </tr>
                    <tr id="tr6rsun">
                     <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rsun" value="சூரியன்" onclick="return uncheck('rsun','6')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rsix)){ echo "checked"; } ?>>
                     </td>
                     <td style="font-size:13px;">&nbsp;</td>
                     <td style="font-size:13px;">சூ</td>
                   </tr>
                   <tr id="tr6rragu">
                     <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rragu" value="ராகு" onclick="return uncheck('rragu','6')" <?php if(in_array("à®°à®¾à®•à¯", $rsix)){ echo "checked"; } ?>>
                     </td>
                     <td style="font-size:13px;">&nbsp;</td>
                     <td style="font-size:13px;">ரா</td>
                   </tr>
                   <tr id="tr6rvij">
                    <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rvij" value="வியாழன்" onclick="return uncheck('rvij','6')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rsix)){ echo "checked"; } ?>>
                    </td>
                    <td style="font-size:13px;">&nbsp;</td>
                    <td style="font-size:13px;">வி</td>
                  </tr>
                  <tr id="tr6rchk">
                   <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rchk" value="சுக்கிரன்" onclick="return uncheck('rchk','6')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rsix)){ echo "checked"; } ?>>
                   </td>
                   <td style="font-size:13px;">&nbsp;</td>
                   <td style="font-size:13px;">சு</td>
                 </tr>
                 <tr id="tr6rguru">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rguru" value="கு௫" onclick="return uncheck('rguru','6')" <?php if(in_array("à®•à¯à¯«", $rsix)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">கு</td>
                </tr>
              </tbody></table></td>
              <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                <tbody><tr id="tr6rsat">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rsat" value="சனி" onclick="return uncheck('rsat','6')" <?php if(in_array("à®šà®©à®¿", $rsix)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">ச</td>
                </tr>
                <tr id="tr6rchan">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rchan" value="சந்திரன்" onclick="return uncheck('rchan','6')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rsix)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">சந்</td>
                </tr>
                <tr id="tr6rkee">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rkee" value="கேது" onclick="return uncheck('rkee','6')" <?php if(in_array("à®•à¯‡à®¤à¯", $rsix)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">கே</td>
                </tr>
                <tr id="tr6rsev">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rsev" value="செவ்வாய்" onclick="return uncheck('rsev','6')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rsix)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">செ</td>
                </tr>
                <tr id="tr6rlac">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi6[]" id="6rlac" value="லக்னம்" onclick="return uncheck('rlac','6')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rsix)){ echo "checked"; } ?>>
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
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rpu" value="புதன்" onclick="return uncheck('rpu','10')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $rten)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">பு</td>
                </tr>
                <tr id="tr10rsun">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rsun" value="சூரியன்" onclick="return uncheck('rsun','10')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rten)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">சூ</td>
                </tr>
                <tr id="tr10rragu">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rragu" value="ராகு" onclick="return uncheck('rragu','10')" <?php if(in_array("à®°à®¾à®•à¯", $rten)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">ரா</td>
                </tr>
                <tr id="tr10rvij">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rvij" value="வியாழன்" onclick="return uncheck('rvij','10')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rten)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">வி</td>
                </tr>
                <tr id="tr10rchk">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rchk" value="சுக்கிரன்" onclick="return uncheck('rchk','10')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rten)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">சு</td>
                </tr>
                <tr id="tr10rguru">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rguru" value="கு௫" onclick="return uncheck('rguru','10')" <?php if(in_array("à®•à¯à¯«", $rten)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">கு</td>
                </tr>
              </tbody></table></td>
              <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
                <tbody><tr id="tr10rsat">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rsat" value="சனி" onclick="return uncheck('rsat','10')" <?php if(in_array("à®šà®©à®¿", $rten)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">ச</td>
                </tr>
                <tr id="tr10rchan">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rchan" value="சந்திரன்" onclick="return uncheck('rchan','10')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rten)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">சந்</td>
                </tr>
                <tr id="tr10rkee">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rkee" value="கேது" onclick="return uncheck('rkee','10')" <?php if(in_array("à®•à¯‡à®¤à¯", $rten)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">கே</td>
                </tr>
                <tr id="tr10rsev">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rsev" value="செவ்வாய்" onclick="return uncheck('rsev','10')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rten)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">செ</td>
                </tr>
                <tr id="tr10rlac">
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi10[]" id="10rlac" value="லக்னம்" onclick="return uncheck('rlac','10')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rten)){ echo "checked"; } ?>>
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
                  <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rpu" value="புதன்" onclick="return uncheck('rpu','9')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $rnine)){ echo "checked"; } ?>>
                  </td>
                  <td style="font-size:13px;">&nbsp;</td>
                  <td style="font-size:13px;">பு</td>
                </tr>
                <tr id="tr9rsun">
                 <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rsun" value="சூரியன்" onclick="return uncheck('rsun','9')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rnine)){ echo "checked"; } ?>>
                 </td>
                 <td style="font-size:13px;">&nbsp;</td>
                 <td style="font-size:13px;">சூ</td>
               </tr>
               <tr id="tr9rragu">
                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rragu" value="ராகு" onclick="return uncheck('rragu','9')" <?php if(in_array("à®°à®¾à®•à¯", $rnine)){ echo "checked"; } ?>>
                </td>
                <td style="font-size:13px;">&nbsp;</td>
                <td style="font-size:13px;">ரா</td>
              </tr>
              <tr id="tr9rvij">
                <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rvij" value="வியாழன்" onclick="return uncheck('rvij','9')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rnine)){ echo "checked"; } ?>>
                </td>
                <td style="font-size:13px;">&nbsp;</td>
                <td style="font-size:13px;">வி</td>
              </tr>
              <tr id="tr9rchk">
               <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rchk" value="சுக்கிரன்" onclick="return uncheck('rchk','9')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rnine)){ echo "checked"; } ?>>
               </td>
               <td style="font-size:13px;">&nbsp;</td>
               <td style="font-size:13px;">சு</td>
             </tr>
             <tr id="tr9rguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rguru" value="கு௫" onclick="return uncheck('rguru','9')" <?php if(in_array("à®•à¯à¯«", $rnine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr9rsat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rsat" value="சனி" onclick="return uncheck('rsat','9')" <?php if(in_array("à®šà®©à®¿", $rnine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr9rchan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rchan" value="சந்திரன்" onclick="return uncheck('rchan','9')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rnine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr9rkee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rkee" value="கேது" onclick="return uncheck('rkee','9')" <?php if(in_array("à®•à¯‡à®¤à¯", $rnine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr9rsev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rsev" value="செவ்வாய்" onclick="return uncheck('rsev','9')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rnine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr9rlac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi9[]" id="9rlac" value="லக்னம்" onclick="return uncheck('rlac','9')"  <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rnine)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rpu" value="புதன்" onclick="return uncheck('rpu','8')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $reight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr8rsun">
             <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rsun" value="சூரியன்" onclick="return uncheck('rsun','8')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $reight)){ echo "checked"; } ?>>
             </td>
             <td style="font-size:13px;">&nbsp;</td>
             <td style="font-size:13px;">சூ</td>
           </tr>
           <tr id="tr8rragu">
            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rragu" value="ராகு" onclick="return uncheck('rragu','8')" <?php if(in_array("à®°à®¾à®•à¯", $reight)){ echo "checked"; } ?>>
            </td>
            <td style="font-size:13px;">&nbsp;</td>
            <td style="font-size:13px;">ரா</td>
          </tr>
          <tr id="tr8rvij">
            <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rvij" value="வியாழன்" onclick="return uncheck('rvij','8')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $reight)){ echo "checked"; } ?>>
            </td>
            <td style="font-size:13px;">&nbsp;</td>
            <td style="font-size:13px;">வி</td>
          </tr>
          <tr id="tr8rchk">
           <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rchk" value="சுக்கிரன்" onclick="return uncheck('rchk','8')"  <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $reight)){ echo "checked"; } ?>>
           </td>
           <td style="font-size:13px;">&nbsp;</td>
           <td style="font-size:13px;">சு</td>
         </tr>
         <tr id="tr8rguru">
          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rguru" value="கு௫" onclick="return uncheck('rguru','8')" <?php if(in_array("à®•à¯à¯«", $reight)){ echo "checked"; } ?>>
          </td>
          <td style="font-size:13px;">&nbsp;</td>
          <td style="font-size:13px;">கு</td>
        </tr>
      </tbody></table></td>
      <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
        <tbody><tr id="tr8rsat">
          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rsat" value="சனி" onclick="return uncheck('rsat','8')" <?php if(in_array("à®šà®©à®¿", $reight)){ echo "checked"; } ?>>
          </td>
          <td style="font-size:13px;">&nbsp;</td>
          <td style="font-size:13px;">ச</td>
        </tr>
        <tr id="tr8rchan">
          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rchan" value="சந்திரன்" onclick="return uncheck('rchan','8')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $reight)){ echo "checked"; } ?>>
          </td>
          <td style="font-size:13px;">&nbsp;</td>
          <td style="font-size:13px;">சந்</td>
        </tr>
        <tr id="tr8rkee">
          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rkee" value="கேது" onclick="return uncheck('rkee','8')"  <?php if(in_array("à®•à¯‡à®¤à¯", $reight)){ echo "checked"; } ?>>
          </td>
          <td style="font-size:13px;">&nbsp;</td>
          <td style="font-size:13px;">கே</td>
        </tr>
        <tr id="tr8rsev">
          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rsev" value="செவ்வாய்" onclick="return uncheck('rsev','8')"  <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $reight)){ echo "checked"; } ?>>
          </td>
          <td style="font-size:13px;">&nbsp;</td>
          <td style="font-size:13px;">செ</td>
        </tr>
        <tr id="tr8rlac">
          <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi8[]" id="8rlac" value="லக்னம்" onclick="return uncheck('rlac','8')"  <?php if(in_array("à®²à®•à¯à®©à®®à¯", $reight)){ echo "checked"; } ?>>
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
         <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rpu" value="புதன்" onclick="return uncheck('rpu','7')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $rseven)){ echo "checked"; } ?>>
         </td>
         <td style="font-size:13px;">&nbsp;</td>
         <td style="font-size:13px;">பு</td>
       </tr>
       <tr id="tr7rsun">
         <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rsun" value="சூரியன்" onclick="return uncheck('rsun','7')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $rseven)){ echo "checked"; } ?>>
         </td>
         <td style="font-size:13px;">&nbsp;</td>
         <td style="font-size:13px;">சூ</td>
       </tr>
       <tr id="tr7rragu">
        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rragu" value="ராகு" onclick="return uncheck('rragu','7')"  <?php if(in_array("à®°à®¾à®•à¯", $rseven)){ echo "checked"; } ?>>
        </td>
        <td style="font-size:13px;">&nbsp;</td>
        <td style="font-size:13px;">ரா</td>
      </tr>
      <tr id="tr7rvij">
        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rvij" value="வியாழன்" onclick="return uncheck('rvij','7')"  <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $rseven)){ echo "checked"; } ?>>
        </td>
        <td style="font-size:13px;">&nbsp;</td>
        <td style="font-size:13px;">வி</td>
      </tr>
      <tr id="tr7rchk">
        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rchk" value="சுக்கிரன்" onclick="return uncheck('rchk','7')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $rseven)){ echo "checked"; } ?>>
        </td>
        <td style="font-size:13px;">&nbsp;</td>
        <td style="font-size:13px;">சு</td>
      </tr>
      <tr id="tr7rguru">
        <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rguru" value="கு௫" onclick="return uncheck('rguru','7')"  <?php if(in_array("à®•à¯à¯«", $rseven)){ echo "checked"; } ?>>
        </td>
        <td style="font-size:13px;">&nbsp;</td>
        <td style="font-size:13px;">கு</td>
      </tr>
    </tbody></table></td>
    <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
      <tbody><tr id="tr7rsat">
       <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rsat" value="சனி" onclick="return uncheck('rsat','7')" <?php if(in_array("à®šà®©à®¿", $rseven)){ echo "checked"; } ?>>
       </td>
       <td style="font-size:13px;">&nbsp;</td>
       <td style="font-size:13px;">ச</td>
     </tr>
     <tr id="tr7rchan">
      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rchan" value="சந்திரன்" onclick="return uncheck('rchan','7')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $rseven)){ echo "checked"; } ?>>
      </td>
      <td style="font-size:13px;">&nbsp;</td>
      <td style="font-size:13px;">சந்</td>
    </tr>
    <tr id="tr7rkee">
      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rkee" value="கேது" onclick="return uncheck('rkee','7')" <?php if(in_array("à®•à¯‡à®¤à¯", $rseven)){ echo "checked"; } ?>>
      </td>
      <td style="font-size:13px;">&nbsp;</td>
      <td style="font-size:13px;">கே</td>
    </tr>
    <tr id="tr7rsev">
      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rsev" value="செவ்வாய்" onclick="return uncheck('rsev','7')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $rseven)){ echo "checked"; } ?>>
      </td>
      <td style="font-size:13px;">&nbsp;</td>
      <td style="font-size:13px;">செ</td>
    </tr>
    <tr id="tr7rlac">
      <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="raasi7[]" id="7rlac" value="லக்னம்" onclick="return uncheck('rlac','7')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rseven)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1apu" value="புதன்" onclick="return uncheck('apu','1')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr1asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1asun" value="சூரியன்" onclick="return uncheck('asun','1')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr1aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1aragu" value="ராகு" onclick="return uncheck('aragu','1')"  <?php if(in_array("à®°à®¾à®•à¯", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr1avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1avij" value="வியாழன்" onclick="return uncheck('avij','1')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr1achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1achk" value="சுக்கிரன்" onclick="return uncheck('achk','1')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr1aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1aguru" value="கு௫" onclick="return uncheck('aguru','1')" <?php if(in_array("à®•à¯à¯«", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr1asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1asat" value="சனி" onclick="return uncheck('asat','1')" <?php if(in_array("à®šà®©à®¿", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr1achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1achan" value="சந்திரன்" onclick="return uncheck('achan','1')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr1akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1akee" value="கேது" onclick="return uncheck('akee','1')" <?php if(in_array("à®•à¯‡à®¤à¯", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr1asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1asev" value="செவ்வாய்" onclick="return uncheck('asev','1')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $aone)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr1alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam1[]" id="1alac" value="லக்னம்" onclick="return uncheck('alac','1')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $aone)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2apu" value="புதன்" onclick="return uncheck('apu','2')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr2asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2asun" value="சூரியன்" onclick="return uncheck('asun','2')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr2aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2aragu" value="ராகு" onclick="return uncheck('aragu','2')" <?php if(in_array("à®°à®¾à®•à¯", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr2avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2avij" value="வியாழன்" onclick="return uncheck('avij','2')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr2achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2achk" value="சுக்கிரன்" onclick="return uncheck('achk','2')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr2aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2aguru" value="கு௫" onclick="return uncheck('aguru','2')" <?php if(in_array("à®•à¯à¯«", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr2asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2asat" value="சனி" onclick="return uncheck('asat','2')" <?php if(in_array("à®šà®©à®¿", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr2achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2achan" value="சந்திரன்" onclick="return uncheck('achan','2')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr2akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2akee" value="கேது" onclick="return uncheck('akee','2')" <?php if(in_array("à®•à¯‡à®¤à¯", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr2asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2asev" value="செவ்வாய்" onclick="return uncheck('asev','2')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $atwo)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr2alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam2[]" id="2alac" value="லக்னம்" onclick="return uncheck('alac','2')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $atwo)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3apu" value="புதன்" onclick="return uncheck('apu','3')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr3asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3asun" value="சூரியன்" onclick="return uncheck('asun','3')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr3aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3aragu" value="ராகு" onclick="return uncheck('aragu','3')" <?php if(in_array("à®°à®¾à®•à¯", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr3avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3avij" value="வியாழன்" onclick="return uncheck('avij','3')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>

            </tr>
            <tr id="tr3achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3achk" value="சுக்கிரன்" onclick="return uncheck('achk','3')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr3aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3aguru" value="கு௫" onclick="return uncheck('aguru','3')" <?php if(in_array("à®•à¯à¯«", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr3asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3asat" value="சனி" onclick="return uncheck('asat','3')" <?php if(in_array("à®šà®©à®¿", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr3achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3achan" value="சந்திரன்" onclick="return uncheck('achan','3')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr3akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3akee" value="கேது" onclick="return uncheck('akee','3')" <?php if(in_array("à®•à¯‡à®¤à¯", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr3asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3asev" value="செவ்வாய்" onclick="return uncheck('asev','3')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $athree)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr3alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam3[]" id="3alac" value="லக்னம்" onclick="return uncheck('alac','3')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $athree)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4apu" value="புதன்" onclick="return uncheck('apu','4')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr4asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4asun" value="சூரியன்" onclick="return uncheck('asun','4')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr4aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4aragu" value="ராகு" onclick="return uncheck('aragu','4')" <?php if(in_array("à®°à®¾à®•à¯", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr4avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4avij" value="வியாழன்" onclick="return uncheck('avij','4')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr4achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4achk" value="சுக்கிரன்" onclick="return uncheck('achk','4')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr4aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4aguru" value="கு௫" onclick="return uncheck('aguru','4')" <?php if(in_array("à®•à¯à¯«", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr4asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4asat" value="சனி" onclick="return uncheck('asat','4')" <?php if(in_array("à®šà®©à®¿", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr4achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4achan" value="சந்திரன்" onclick="return uncheck('achan','4')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr4akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4akee" value="கேது" onclick="return uncheck('akee','4')" <?php if(in_array("à®•à¯‡à®¤à¯", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr4asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4asev" value="செவ்வாய்" onclick="return uncheck('asev','4')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $afour)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr4alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam4[]" id="4alac" value="லக்னம்" onclick="return uncheck('alac','4')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $afour)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12apu" value="புதன்" onclick="return uncheck('apu','12')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr12asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12asun" value="சூரியன்" onclick="return uncheck('asun','12')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr12aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12aragu" value="ராகு" onclick="return uncheck('aragu','12')" <?php if(in_array("à®°à®¾à®•à¯", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr12avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12avij" value="வியாழன்" onclick="return uncheck('avij','12')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>

              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr12achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12achk" value="சுக்கிரன்" onclick="return uncheck('achk','12')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr12aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12aguru" value="கு௫" onclick="return uncheck('aguru','12')" <?php if(in_array("à®•à¯à¯«", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr12asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12asat" value="சனி" onclick="return uncheck('asat','12')" <?php if(in_array("à®šà®©à®¿", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr12achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12achan" value="சந்திரன்" onclick="return uncheck('achan','12')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr12akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12akee" value="கேது" onclick="return uncheck('akee','12')" <?php if(in_array("à®•à¯‡à®¤à¯", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr12asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12asev" value="செவ்வாய்" onclick="return uncheck('asev','12')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $atwelve)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr12alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam12[]" id="12alac" value="லக்னம்" onclick="return uncheck('alac','12')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $rone)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5apu" value="புதன்" onclick="return uncheck('apu','5')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr5asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5asun" value="சூரியன்" onclick="return uncheck('asun','5')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr5aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5aragu" value="ராகு" onclick="return uncheck('aragu','5')" <?php if(in_array("à®°à®¾à®•à¯", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr5avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5avij" value="வியாழன்" onclick="return uncheck('avij','5')"  <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr5achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5achk" value="சுக்கிரன்" onclick="return uncheck('achk','5')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr5aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5aguru" value="கு௫" onclick="return uncheck('aguru','5')" <?php if(in_array("à®•à¯à¯«", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr5asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5asat" value="சனி" onclick="return uncheck('asat','5')" <?php if(in_array("à®šà®©à®¿", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr5achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5achan" value="சந்திரன்" onclick="return uncheck('achan','5')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr5akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5akee" value="கேது" onclick="return uncheck('akee','5')" <?php if(in_array("à®•à¯‡à®¤à¯", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr5asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5asev" value="செவ்வாய்" onclick="return uncheck('asev','5')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr5alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam5[]" id="5alac" value="லக்னம்" onclick="return uncheck('alac','5')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $afive)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11apu" value="புதன்" onclick="return uncheck('apu','11')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr11asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11asun" value="சூரியன்" onclick="return uncheck('asun','11')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr11aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11aragu" value="ராகு" onclick="return uncheck('aragu','11')" <?php if(in_array("à®°à®¾à®•à¯", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr11avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11avij" value="வியாழன்" onclick="return uncheck('avij','11')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $afive)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr11achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11achk" value="சுக்கிரன்" onclick="return uncheck('achk','11')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr11aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11aguru" value="கு௫" onclick="return uncheck('aguru','11')" <?php if(in_array("à®•à¯à¯«", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr11asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11asat" value="சனி" onclick="return uncheck('asat','11')" <?php if(in_array("à®šà®©à®¿", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr11achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11achan" value="சந்திரன்" onclick="return uncheck('achan','11')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr11akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11akee" value="கேது" onclick="return uncheck('akee','11')" <?php if(in_array("à®•à¯‡à®¤à¯", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr11asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11asev" value="செவ்வாய்" onclick="return uncheck('asev','11')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $aeleven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr11alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam11[]" id="11alac" value="லக்னம்" onclick="return uncheck('alac','11')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $aeleven)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6apu" value="புதன்" onclick="return uncheck('apu','6')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr6asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6asun" value="சூரியன்" onclick="return uncheck('asun','6')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr6aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6aragu" value="ராகு" onclick="return uncheck('aragu','6')" <?php if(in_array("à®°à®¾à®•à¯", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr6avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6avij" value="வியாழன்" onclick="return uncheck('avij','6')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr6achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6achk" value="சுக்கிரன்" onclick="return uncheck('achk','6')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr6aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6aguru" value="கு௫" onclick="return uncheck('aguru','6')" <?php if(in_array("à®•à¯à¯«", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr6asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6asat" value="சனி" onclick="return uncheck('asat','6')" <?php if(in_array("à®šà®©à®¿", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr6achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6achan" value="சந்திரன்" onclick="return uncheck('achan','6')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr6akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6akee" value="கேது" onclick="return uncheck('akee','6')" <?php if(in_array("à®•à¯‡à®¤à¯", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr6asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6asev" value="செவ்வாய்" onclick="return uncheck('asev','6')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $asix)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr6alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam6[]" id="6alac" value="லக்னம்" onclick="return uncheck('alac','6')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $asix)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10apu" value="புதன்" onclick="return uncheck('apu','10')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr10asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10asun" value="சூரியன்" onclick="return uncheck('asun','10')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr10aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10aragu" value="ராகு" onclick="return uncheck('aragu','10')" <?php if(in_array("à®°à®¾à®•à¯", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr10avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10avij" value="வியாழன்" onclick="return uncheck('avij','10')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr10achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10achk" value="சுக்கிரன்" onclick="return uncheck('achk','10')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr10aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10aguru" value="கு௫" onclick="return uncheck('aguru','10')" <?php if(in_array("à®•à¯à¯«", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr10asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10asat" value="சனி" onclick="return uncheck('asat','10')" <?php if(in_array("à®šà®©à®¿", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr10achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10achan" value="சந்திரன்" onclick="return uncheck('achan','10')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr10akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10akee" value="கேது" onclick="return uncheck('akee','10')" <?php if(in_array("à®•à¯‡à®¤à¯", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr10asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10asev" value="செவ்வாய்" onclick="return uncheck('asev','10')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $aten)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr10alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam10[]" id="10alac" value="லக்னம்" onclick="return uncheck('alac','10')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $aten)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9apu" value="புதன்" onclick="return uncheck('apu','9')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr9asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9asun" value="சூரியன்" onclick="return uncheck('asun','9')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr9aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9aragu" value="ராகு" onclick="return uncheck('aragu','9')" <?php if(in_array("à®°à®¾à®•à¯", $anine)){ echo "checked"; } ?>a>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr9avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9avij" value="வியாழன்" onclick="return uncheck('avij','9')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr9achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9achk" value="சுக்கிரன்" onclick="return uncheck('achk','9')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr9aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9aguru" value="கு௫" onclick="return uncheck('aguru','9')" <?php if(in_array("à®•à¯à¯«", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr9asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9asat" value="சனி" onclick="return uncheck('asat','9')" <?php if(in_array("à®šà®©à®¿", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr9achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9achan" value="சந்திரன்" onclick="return uncheck('achan','9')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr9akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9akee" value="கேது" onclick="return uncheck('akee','9')" <?php if(in_array("à®•à¯‡à®¤à¯", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr9asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9asev" value="செவ்வாய்" onclick="return uncheck('asev','9')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $anine)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr9alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam9[]" id="9alac" value="லக்னம்" onclick="return uncheck('alac','9')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $anine)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8apu" value="புதன்" onclick="return uncheck('apu','8')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr8asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8asun" value="சூரியன்" onclick="return uncheck('asun','8')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr8aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8aragu" value="ராகு" onclick="return uncheck('aragu','8')" <?php if(in_array("à®°à®¾à®•à¯", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr8avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8avij" value="வியாழன்" onclick="return uncheck('avij','8')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr8achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8achk" value="சுக்கிரன்" onclick="return uncheck('achk','8')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr8aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8aguru" value="கு௫" onclick="return uncheck('aguru','8')" <?php if(in_array("à®•à¯à¯«", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr8asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8asat" value="சனி" onclick="return uncheck('asat','8')" <?php if(in_array("à®šà®©à®¿", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr8achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8achan" value="சந்திரன்" onclick="return uncheck('achan','8')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr8akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8akee" value="கேது" onclick="return uncheck('akee','8')" <?php if(in_array("à®•à¯‡à®¤à¯", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr8asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8asev" value="செவ்வாய்" onclick="return uncheck('asev','8')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $aeight)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr8alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam8[]" id="8alac" value="லக்னம்" onclick="return uncheck('alac','8')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $aeight)){ echo "checked"; } ?>>
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
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7apu" value="புதன்" onclick="return uncheck('apu','7')" <?php if(in_array("à®ªà¯à®¤à®©à¯", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">பு</td>
            </tr>
            <tr id="tr7asun">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7asun" value="சூரியன்" onclick="return uncheck('asun','7')" <?php if(in_array("à®šà¯‚à®°à®¿à®¯à®©à¯", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சூ</td>
            </tr>
            <tr id="tr7aragu">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7aragu" value="ராகு" onclick="return uncheck('aragu','7')" <?php if(in_array("à®°à®¾à®•à¯", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ரா</td>
            </tr>
            <tr id="tr7avij">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7avij" value="வியாழன்" onclick="return uncheck('avij','7')" <?php if(in_array("à®µà®¿à®¯à®¾à®´à®©à¯", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">வி</td>
            </tr>
            <tr id="tr7achk">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7achk" value="சுக்கிரன்" onclick="return uncheck('achk','7')" <?php if(in_array("à®šà¯à®•à¯à®•à®¿à®°à®©à¯", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சு</td>
            </tr>
            <tr id="tr7aguru">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7aguru" value="கு௫" onclick="return uncheck('aguru','7')" <?php if(in_array("à®•à¯à¯«", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கு</td>
            </tr>
          </tbody></table></td>
          <td style="font-size:13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td valign="top"><table cellpadding="0" cellspacing="0" border="0">
            <tbody><tr id="tr7asat">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7asat" value="சனி" onclick="return uncheck('asat','7')" <?php if(in_array("à®šà®©à®¿", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">ச</td>
            </tr>
            <tr id="tr7achan">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7achan" value="சந்திரன்" onclick="return uncheck('achan','7')" <?php if(in_array("à®šà®¨à¯à®¤à®¿à®°à®©à¯", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">சந்</td>
            </tr>
            <tr id="tr7akee">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7akee" value="கேது" onclick="return uncheck('akee','7')" <?php if(in_array("à®•à¯‡à®¤à¯", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">கே</td>
            </tr>
            <tr id="tr7asev">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7asev" value="செவ்வாய்" onclick="return uncheck('asev','7')" <?php if(in_array("à®šà¯†à®µà¯à®µà®¾à®¯à¯", $aseven)){ echo "checked"; } ?>>
              </td>
              <td style="font-size:13px;">&nbsp;</td>
              <td style="font-size:13px;">செ</td>
            </tr>
            <tr id="tr7alac">
              <td style="padding-left:3px; font-size:12px;"><input type="checkbox" name="amsam7[]" id="7alac" value="லக்னம்" onclick="return uncheck('alac','7')" <?php if(in_array("à®²à®•à¯à®©à®®à¯", $aseven)){ echo "checked"; } ?>>
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
            
           
     <!-- <?php include('footer.php'); ?> -->
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
<script>
  $(document).ready(function () {
    alert('dg');
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