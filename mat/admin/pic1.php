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
  </head>
  <body style="
    background: url('../images/staff.png');">
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
    <?php 
    //include('../header.php');
    include('config.php');
    if(isset($_GET['id']))
        {
          $mat_id=$_GET['id'];
          //echo $mat_id;
        }


           $sql1="SELECT * FROM registerfree WHERE matri_id = '$mat_id'";
          // echo $sql1;
 $res1 = mysql_query($sql1);
$row = mysql_fetch_assoc($res1);


     ?>
	
    <!-- Header  Slider style-->
	<section>
	<div class="container" style="margin-top:50px;">
		<div class="row">
		
				<h2 style="font-weight:700;text-align: center;">Your Profile</h2>
				
					<div class="col-md-4"></div>
				
					<div class="col-md-4 well" style="margin-bottom: 50px;padding: 42px;border-radius: 65px !important;">
						<img src="<?php echo '../'. $row['up_profile']; ?>" width="300px" height="300px">
					</div>
            <div class="col-md-4 well" style="margin-bottom: 50px;padding: 42px;background-color:transparent !important;border:none;">
            <form action="" method="post" enctype="multipart/form-data">

              <input type="file"   name="picture">
              <input class="btn btn-success" type="submit" name="sub" style="
    margin-top: 17px;
">
  
        </form> 
          </div>
          



         
				
					</div>
					<div class="col-md-4">

           
       
           
          </div>


			
			
		</div>
	
    </div>

     <?php
          

          if(isset($_POST['sub']))
          {
            $mat_id=$_GET['id'];
            //var_dump($_FILES['picture']);
             $file_get = $_FILES['picture']['tmp_name'];
             $fname = $_FILES['picture']['name'];
             //echo $fname;
             $file_to_saved = "photos/".$fname;
             //echo $file_to_saved;
             move_uploaded_file($fname, $file_to_saved);
           
          //$message = "";
          /*echo "<script type='text/javascript'>alert('$message');</script>";*/
         $sql2="UPDATE registerfree SET up_profile='$file_to_saved' WHERE matri_id='$mat_id' ";
            $res2 = mysql_query($sql2);
            if($sql2){
              echo "<script> confirm('Profile Picture Updated successfully...!');window.location.href='viewprofile.php?id=$mat_id';</script>";

            }
        
            

          }
          ?>

	</section>
    <!-- Welcome banner  style-->
    <!-- footer  style-->
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
  </body>

</html>