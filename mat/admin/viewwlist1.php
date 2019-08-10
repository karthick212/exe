 






<html class=""><head>
    <meta charset="UTF-8">
    <title></title>
    <!-- reponsive meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap-->

    <link rel="stylesheet" href="css/lightbox.min.css">
    
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
    
    <style>
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
    /* opacity: 0.8;
    position: fixed; */
    /* bottom: 23px; */
    /* right: 253px; */
    width: 152px;
    margin-top: -4px;
    margin-right: -401px;
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
    /* opacity: 0.8; */
    /* position: fixed; */
    width: 113px;
    margin-top: -4px;
    margin-right: 44px;
    /*margin-left: -390px;*/
}
</style>

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
.foss{color: #040404;
    font-size: 21px;
    font-weight: 600;}
</style>

<style>
.zoom {
  /*  padding: 50px;
    background-color: green;*/
    transition: transform .2s; /* Animation */
   /* width: 200px;
    height: 200px;*/
    margin: 0 auto;
}

.zoom:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>


<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

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
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>


    
    <body style="background-image:linear-gradient(to right,#a0a0f9a6,#f0daff,#fb7ea86b);">
    <!-- .hidden-bar-->
    
    <!-- /.side-menu-->
   
   
   <br>
    <br>
    
     <section style="text-align: -webkit-center;">
     <img src="images/images/logo1.png">
</section>
<br>
<br>

    <section>
     
     
 

<br>
<br>
<table width="1003" border="0" align="center">

  
   <tr style="background: #f30b58;
    color: white;
    text-align: center !important;
    border: 1px dotted white;">
    <th style="padding: 10px;">S.No</th>
    <th style="padding: 27px;">Reg.No</th>
    <th>Name</th>
    <th>Caste</th>
    <th>Sub Caste</th>
    <th width: "400px">Photo</th>
   
  </tr>
  <?php
include 'config.php';


  $age1=$_GET['age1'];
     $age2=$_GET['age2'];
     
      $religion=$_GET['religion'];
       $caste=$_GET['caste'];
        $gender=$_GET['gender'];
         $thosam=$_GET['thosam'];


    if($age1 != '' && $age2 != '' && $religion != '' && $caste != '' &&
                         $thosam != '' && $gender != '')
                        {
                            $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
                            age<='$age2' AND religion='$religion' AND caste='$caste' AND thosam='$thosam' AND gender='$gender' order by id desc" ;
                            // echo $sql;
                            

                        }
                        elseif($age1 != '' && $age2 != '' && $religion != '' && $caste != ''  && $thosam != '')
                        {

                            $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
                            age<='$age2' AND religion='$religion' AND caste='$caste' AND thosam='$thosam' order by id desc";
                         
                            
                        }
                        elseif($age1 != '' && $age2 != '' && $gender != '' && $caste != '')
                        {
                            $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
                            age<='$age2'  AND caste='$caste' AND gender='$gender' order by id desc";
                            
                        }
                        elseif($age1 != '' && $age2 != '' && $religion != '' && $caste != '')
                        {
                            $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
                            age<='$age2' AND religion='$religion' AND caste='$caste' order by id desc";
                            
                        }
                        elseif($age1 != '' && $age2 != '' && $thosam != '' && $religion != '' ){

                            $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
                            age<='$age2' AND religion='$religion' AND thosam='$thosam' order by id desc";
                        }
                        elseif($age1 != '' && $age2 != '' && $religion != '')
                        {
                            $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
                            age<='$age2' AND religion='$religion' order by id desc";
                        }
                        
                        
                        elseif($age1 != '' && $age2 != '' && $caste != ''){

                            $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
                            age<='$age2' AND caste='$caste' order by id desc";
                        }
                        elseif($age1 != '' && $age2 != '' && $thosam != '' ){

                            $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
                            age<='$age2' AND thosam='$thosam' order by id desc";
                        }
                        elseif($age1 != '' && $age2 != ''  && $gender != ''){

                            $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
                            age<='$age2' AND gender='$gender' order by id desc";
                        }
                        elseif($age1 != '' && $age2 != ''){

                            $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
                            age<='$age2' order by id desc";
                            //echo $sql;
                        }
                        
                        else{
                             echo "<script>alert('Please Select the age'); window.location.href='planreport2.php'</script>";
                        }



// if($mode=='all'){
//   $q="SELECT * FROM `registerfree`  ORDER BY id DESC ";
// }
// elseif($mode=='male')
// {
//  $q="SELECT * FROM `registerfree` WHERE gender='Male'  ORDER BY id DESC ";
// }
// elseif($mode=='female')
// {
//    $q="SELECT * FROM `registerfree` WHERE gender='Female'  ORDER BY id DESC ";
// }
// else{
//   echo "Choose the tab";
// }

$result = mysql_query($sql)or die(mysql_error());
$k=mysql_num_rows($result);
if($k=='')
{

echo "<script>alert('No Records Found');self.location='planreport2.php';</script>";
    //echo $sql;
}
$s_no=1;
while ($row = mysql_fetch_array($result)) {
    ?>
  
  
  <tr style="text-align: center;background: aliceblue;">
   <td> <a class="foss" href="#"><?php echo $s_no++; ?></a></td>
     <td> <a class="foss" href="viewprofilead.php?id=<?php echo $row['matri_id'];?>"><?php echo  $row['matri_id'];?></a></td>
      <td> <a class="foss" href="viewprofilead.php?id=<?php echo $row['matri_id'];?>"><?php echo  $row['name'];?></a></td>
       <td> <a class="foss" href="viewprofilead.php?id=<?php echo $row['matri_id'];?>"><?php echo  $row['caste'];?></a></td>
        <td> <a class="foss" href="viewprofilead.php?id=<?php echo $row['matri_id'];?>"><?php echo  $row['subcaste'];?></a></td>
        <td><a class="example-image-link" href="<?php echo '../'. $row['up_profile']; ?>" data-lightbox="example-set" data-title="<?php echo $row['name']; ?>"><img id="myImg" class="example-image" src="<?php echo '../'.$row['up_profile']; ?>" style="width:300px; height:300px;">
</a>   
    </td>
   
   
  </tr>
  <?php
}
?>
  </table>
 
  
  </section>
    
    
    <?php  ?>

   

   
<script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="javascripts/lightbox-plus-jquery.min.js"></script>
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




</body></html>