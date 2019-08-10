<?php
//session_start();
?>
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

<style>
  * {
    box-sizing: border-box;
  }
  .open-button {
    font-size: 13px;
    line-height: 22px;
    color: #7F7F7F;
    font-family: 'Open Sans';
    font-weight: 600;
    background-color: #c410d0;
    color: white;
    padding: 2px 10px;
    border: none;
    cursor: pointer;
   /* position: fixed;*/
    /* bottom: 23px; */
    right: 253px;
    /*margin-top: -4px;*/
  }

  /* The popup form - hidden by default */
  .form-popup {
    display: none;
    position: fixed;
    bottom:20%;
    right: 35%;
    border: 3px solid #f1f1f1;
    z-index: 99;
  }

  /* Add styles to the form container */
  .form-container {
    max-width: 300px;
    padding: 10px;
    background-color: #e60937;
  }

  /* Full-width input fields */
  .form-container input[type=text],
  .form-container input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
  }
.sticky
{
  position: fixed;
  top: 0;
  width: 100%;
}
  /* When the inputs get focus, do something */
  .form-container input[type=text]:focus,
  .form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Set a style for the submit/login button */
  .form-container .btn {
    background-color: #f59f09;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom: 10px;
    /*opacity: 0.8;*/
  }

  /* Add a red background color to the cancel button */
  .form-container .cancel {
    background-color: #4a3e3e;
  }

  /* Add some hover effects to buttons */
  .form-container .btn:hover,
  .open-button:hover {
    opacity: 1;
  }

  .l-style {
    float:right;
  }
</style>

<script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>
<section class="top-bar dhomev header" id="myheader">
  <div class="container">
    <div class="pull-left left-infos contact-infos">
      <ul class="list-inline">
        <li class="sty">பதிவு கட்டணம் இலவசம்</li>&nbsp;&nbsp;
        <li><a ><i class="fa fa-phone"></i> (+91) 63841 66047 </a></li>&nbsp;&nbsp;
        <li><a ><i class="fa fa-envelope"></i> info@inaikkumkarangal.in</a></li>
      </ul>
    </div>
    <!-- /.pull-left left-infos-->
    <div class="pull-right right-infos link-list">
      <!-- <button class="open-button" onclick="openForm()">MEMBERSHIP LOGIN</button> -->
      <?php
      include('config.php');      
      if(isset($_POST['submit11']))
      {
        $mail=$_POST['email'];
        $password=$_POST['psw'];
        $sql="SELECT * FROM login WHERE username = '$mail'";
        $res = mysql_query($sql);
        $row = mysql_fetch_assoc($res);
        $_SESSION["matri_id"] = $row["username"];

        if($mail=='meena' && $password='meena')

        {

echo "<script>alert('login successfully'); window.location.href='profiless.php'</script>";

        }

        elseif($row["username"]==$mail && $row["password"]==$password)
        {
          echo "<script>alert('login successfully'); window.location.href='profiles.php'</script>";
        }
        else
        {
          echo "<script>alert('login failed');</script>";
        }
      }
      ?>

      <div class="form-popup" id="myForm">
        <form class="form-container" action="search_profiles.php" method="post">
          <h1 style="color:white;">LOGIN</h1>
          <label for="email"><b style="color:white;">USER ID</b></label>
          <input type="text" placeholder="Enter Your Email" name="email" required>

          <label for="psw"><b style="color:white;">PASSWORD</b></label>
          <input type="password" placeholder="Enter the Password" name="psw" required>

          <button type="submit" class="btn" name="submit11" style="color:white;font-weight: 700;">LOGIN</button>
          <button type="button" class="btn cancel" onclick="closeForm()">CLOSE</button>
        </form>
      </div>

      <!-- <ul class="list-inline">
        <li class="l-style">
          <button class="open-button" onclick="openForm()">MEMBERSHIP LOGIN</button>
        </li>
        <li class="l-style">
          <a class="pad open-button" href="freeregisteration.php">FREE REGISTRATION</a>
        </li> -->
      </ul>
    </div>
    <!-- /.pull-right right-infos link-list-->
  </div>
  <!-- /.container-->
</section>
<!-- /.top-bar-->
<nav id="main-navigation-wrapper" class="navbar navbar-default _fixed-header _light-header">
 <!--  <div class="container">
    <div class="navbar-header">
      <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span
          class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span  
          class="icon-bar"></span></button><a href="index.php" class="navbar-brand"><img style="margin-left: -30px;width:100%"
          alt="Awesome Image" src="images/LOGOss.png"></a>
    </div>
    <div id="main-navigation" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a> </li>
        <li><a href="search_profiles.php">Search Profiles</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="online_payment.php">Payment</a></li>
      </ul>
    </div>
  </div> -->
</nav>
<script>
window.onscroll = function() {myFunction()};
var header = document.getElementById("myheader");
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
} 
</script>