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
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  <link href="//apps.shareaholic.com/v2/4ba3a7b2/shrMain.min.js" rel="preload" as="script">
  <!--if IE-->
  <link rel="stylesheet" type="text/css" href="css/all-ie-only.css">
  <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/metisMenu.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/slicknav.min.css">
  <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
  <link rel="stylesheet" href="assets/css/typography.css">
  <link rel="stylesheet" href="assets/css/default-css.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
  <style>
  body {font-family: Arial, Helvetica, sans-serif;}
  * {box-sizing: border-box;}
  .main-content {
    background: #F3F8FB;
  }
  .form-popup {
    display: none;
    position: fixed;
    bottom: 0;
    right: 15px;
    border: 3px solid #f1f1f1;
    z-index: 9;
  }
  .form-container {
    max-width: 300px;
    padding: 10px;
    background-color: white;
  }
  .form-container input[type=text], .form-container input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
  }
  .form-container input[type=text]:focus, .form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }
  .form-container .btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom:10px;
    opacity: 0.8;
  }
  .form-container .cancel {
    background-color: red;
  }
  .form-container .btn:hover, .open-button:hover {
    opacity: 1;
  }
  .setPage{
    padding:15px 10px;
    font-size:14px;
  }
  .newbottom{
    background-color: #a90f0f;
    border-radius: 2px;
    line-height: 37px;
    color: white;
    margin-top: 10px;
  }
  
  .liveborder {
    border: 1px solid #ccc;
    border-top-right-radius: 1.5em;
    border-top-left-radius: 1.5em;
  }
  .litehead {
    color: #EB1478;
    font-size: 0.9em;
    font-weight: 500;
    font-family: 'Nunito-Regular';
  }
  .ad-top {
    padding-top: 3em;
  }
  .newbottom {
    background-color: #347ab7;
    border-radius: 3px;
    line-height: 35px;
    color: white;
    margin-top: 10px;
  }
  .box:hover {
   background-color:rgb(255, 255, 255);
   box-shadow:0 1px 9px rgb(49, 49, 47), 0 0 20px rgb(175, 168, 168) inset;
 }
 .box {
  width: 95%;
  height: auto;
  float: left;
  background-color: white;
  margin: 0 0 15px 0;
  border-radius: 5px;
  padding: 20px 15px;
}
.shadow3 {
  position: relative;
  box-shadow:0 1px 9px rgb(49, 49, 47), 0 0 14px rgb(197, 197, 197) inset;
}

table.dataTable thead>tr>th.sorting
{
  /*padding-right: 37px !important;*/
}
table.dataTable thead th
{
  padding: 0px 0px;
  font-size: 15px;
  font-weight: 200;
  text-align: center;
}
table.dataTable tbody td {
  padding: 0px 7px;
}
.datatable-primary thead {
  background: #f74d70d6;
  color: #fff;
}
table.dataTable tbody td {
  padding: 7px 0px;
  font-size: 14px;
  text-align: center;
}
.dataTables_wrapper .dataTables_paginate
{
 /* margin-right: -233px;*/
}
.dataTables_wrapper .dataTables_info 
{
  padding-top: 2.755em;
  /*margin-left: -153px;*/
  font-size: 14px;
}
.dataTables_wrapper .dataTables_filter input {
  margin-top: -26px;
}
label {
  font-weight: 500;
  color: #666;
  display: inline-block;
  margin-bottom: 8px;
  margin-bottom: .5rem;
  font-size: 14px;
}
.datatable-primary .dataTables_paginate .page-item.active .page-link
{
  background-color: #3e3d42;
}
table tr td {
  border-top: 1px solid rgba(64, 59, 59, 0.94) !important;
}
.page-link:hover
{
  background-color: #3e3d42;
}
button.close 
{
  padding: 7px 106px;
}
.close
{
  font-size: 2.5rem;
}
</style>
</head>
<body>
 <?php
 //session_start();
 include('conn.php');
 if(isset($_POST['submit']))
 {
  $age1=$_POST['age1'];
  $age2=$_POST['age2'];
  $religion=$_POST['religion'];
  $caste=$_POST['caste'];
  $m_status=$_POST['martial_s'];
  $gender=$_POST['gender'];
}

?>

<section class="top-bar dhomev">
  <div class="container">
    <div class="pull-left left-infos contact-infos">
      <ul class="list-inline">
        <li class="sty">பதிவு கட்டணம் இலவசம்</li>
        <li><a href="#"><i class="fa fa-phone"></i> +91 6384166047</a></li>
            <!--comment for inline hack
            -->

            <!--comment for inline hack
            -->
            <li><a href="#"><i class="fa fa-envelope"></i> info@inaikkumkarangal.com</a></li>
          </ul>
        </div>
        <ul class="list-inline">
          <li class="l-style">
            <a href="index.php"> <button class="open-button" style="float: right; background-color: #c410d0;border: none;margin-left: 403px;padding: 8px 9px;border-radius: 10px;"> LOGOUT</button></a>
          </li>
        </ul>
      </div> 
    </div>
  </section>
  <div class="single" style="background: #f74d70;color: black;font-size: 13px;padding: 24px 0px;">
    <div class="container">
      <div class="single-top">
        <div class="container-fluid">
          <div class="page-container" style="padding-left:0px;"> 
           <?php

//             if($age1 != '' && $age2 != '' && $religion != '' && $caste != '' &&
//              $m_status != '' && $gender != '')
//             {
//               $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
//               age<='$age2' AND religion='$religion' AND caste='$caste' AND mstatus='$m_status' AND gender='$gender' order by id desc" ;
//             }
//             elseif($age1 != '' && $age2 != '' && $religion != '' && $caste != ''  && $m_status != '')
//             {
//               $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
//               age<='$age2' AND religion='$religion' AND caste='$caste' AND mstatus='$m_status' order by id desc";


//             }
//             elseif($age1 != '' && $age2 != '' && $gender != '' && $caste != '')
//             {
//               $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
//               age<='$age2'  AND caste='$caste' AND gender='$gender' order by id desc";

//             }
//             elseif($age1 != '' && $age2 != '' && $religion != '' && $caste != '')
//             {
//               $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
//               age<='$age2' AND religion='$religion' AND caste='$caste'  order by id descorder by id desc";

//             }
//             elseif($age1 != '' && $age2 != '' && $m_status != '' && $religion != '' ){

//               $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
//               age<='$age2' AND religion='$religion' AND mstatus='$m_status' ";
//             }
//             elseif($age1 != '' && $age2 != '' && $religion != '')
//             {
//               $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
//               age<='$age2' AND religion='$religion' order by id desc";
//             }


//             elseif($age1 != '' && $age2 != '' && $caste != ''){

//               $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
//               age<='$age2' AND caste='$caste'  order by id desc";
//             }
//             elseif($age1 != '' && $age2 != '' && $m_status != '' ){

//               $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
//               age<='$age2' AND mstatus='$m_status' order by id desc ";
//             }
//             elseif($age1 != '' && $age2 != ''  && $gender != ''){

//               $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
//               age<='$age2' AND gender='$gender' order by id desc";
//             }

//             elseif($age1 != '' && $age2 != ''){

//               $sql1="SELECT * FROM registerfree WHERE age>='$age1' AND 
//               age<='$age2' order by id desc";
//             }
// else if($age1=='' || $age2==''){
//                echo "<script>alert('Please Select the field'); window.location.href='profiless.php'</script>";
//             }

//             else{
//                echo "<script>alert('Please Select the age'); window.location.href='profiless.php'</script>";
//             }

           $cond = "";
            //SELECT matri_id,name,gender,age,edu,caste FROM registerfree                      

          //  if($age1 != '' && $age2 != '')
          //  {
          //    $cond .= "and age between $age1 and $age2 ";
          //  }
          //  if($religion != '')
          //  {
          //   $cond .= " AND religion='$religion'";
          // }
          // if($caste != '')
          // {
          //   $cond .= " AND caste='$caste'";
          // }
          // if($m_status != '')
          // {
          //   $cond .= " AND mstatus='$m_status'";
          // }
          // if($gender != '')
          // {
          //   $cond .= " AND gender='$gender'";
          // }
            // if($age1=='' || $age2=='')
            // {
            //    echo "<script>alert('Please Select the Age Range..!!'); window.location.href='profiless.php'</script>";
            // }  
            // if($cond=='')
            // {
            //    echo "<script>alert('Please Select Atleast age..!!'); window.location.href='profiless.php'</script>";
            // }

          $sql1="SELECT matri_id,name,gender,age,edu,caste FROM registerfree WHERE id<>'0' order by id desc" ;
            //" . $cond ."

          $res1 = mysql_query($sql1);
          $count=mysql_num_rows($res1);

          ?>
          <!-- main content area start -->
          <div class="main-content" >
            <!-- header area start -->
            

            <div class="main-content-inner">
              <div class="row">
                <a href="profiless.php"><button class="open-button" style="background-color: #c410d0;
                border: none;
                color: white;
                padding: 4px 6px;
                border-radius: 4px;
                margin-top: 5px;">Go Back</button></a>

                <!-- Primary table start -->
                <div class="col-12 mt-5" style="margin-top: 10px !important;">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="header-title">View Profile</h4>
                      <div class="data-tables datatable-primary">
                        <table id="dataTable2" class="text-center" style="" border="1">
                          <thead class="text-capitalize">
                            <tr>
                              <th>S.No.</th>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Gender</th>
                              <th>Age</th>
                              <th>Qualification</th>
                              <th>Caste</th>

                              <th>view Profile</th>
                            </tr>
                          </thead>
                          <tbody>
                           <?php

            //             if($age1 != '' && $age2 != '' && $religion != '' && $caste != '' &&
            //              $m_status != '' && $gender != '')
            //             {
            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' AND religion='$religion' AND caste='$caste' AND mstatus='$m_status' AND gender='$gender' order by id desc" ;
            //                 // echo $sql;


            //             }
            //             elseif($age1 != '' && $age2 != '' && $religion != '' && $caste != ''  && $m_status != '')
            //             {

            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' AND religion='$religion' AND caste='$caste' AND mstatus='$m_status' order by id desc";


            //             }
            // elseif($age1 != '' && $age2 != '' && $religion != '' &&
            //  $m_status != '' && $gender != '')
            // {
            //   $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //   age<='$age2' AND religion='$religion' AND mstatus='$m_status' AND gender='$gender' order by id desc" ;
            //   // echo $sql;


            // }

            //             elseif($age1 != '' && $age2 != '' && $gender != '' && $caste != '')
            //             {
            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2'  AND caste='$caste' AND gender='$gender' order by id desc";

            //             }
            //             elseif($age1 != '' && $age2 != '' && $religion != '' && $caste != '')
            //             {
            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' AND religion='$religion' AND caste='$caste' order by id desc ";

            //             }
            //             elseif($age1 != '' && $age2 != '' && $m_status != '' && $religion != '' ){

            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' AND religion='$religion' AND mstatus='$m_status' order by id desc";
            //             }
            //             elseif($age1 != '' && $age2 != '' && $religion != '')
            //             {
            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' AND religion='$religion' order by id desc ";
            //             }


            //             elseif($age1 != '' && $age2 != '' && $caste != ''){

            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' AND caste='$caste' order by id desc  ";
            //             }
            //             elseif($age1 != '' && $age2 != '' && $m_status != '' ){

            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' AND mstatus='$m_status' order by id desc  ";
            //             }
            //             elseif($age1 != '' && $age2 != ''  && $gender != ''){

            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' AND gender='$gender' order by id desc ";
            //             }

            //             elseif($age1 != '' && $age2 != ''){

            //                 $sql="SELECT * FROM registerfree WHERE age>='$age1' AND 
            //                 age<='$age2' order by id desc ";
            //             }
            //             else{
            //                  echo "<script>alert('Please Select the age'); window.location.href='profiless.php'</script>";
            //             }
                           $cond = "";
            //SELECT matri_id,name,gender,age,edu,caste FROM registerfree                      

                          //  if($age1 != '' && $age2 != '')
                          //  {
                          //    $cond .= "and age between $age1 and $age2 ";
                          //  }
                          //  if($religion != '')
                          //  {
                          //   $cond .= " AND religion='$religion'";
                          // }
                          // if($caste != '')
                          // {
                          //   $cond .= " AND caste='$caste'";
                          // }
                          // if($m_status != '')
                          // {
                          //   $cond .= " AND mstatus='$m_status'";
                          // }
                          // if($gender != '')
                          // {
                          //   $cond .= " AND gender='$gender'";
                          // }
            // if($age1=='' || $age2=='')
            // {
            //    echo "<script>alert('Please Select the Age Range..!!'); window.location.href='profiless.php'</script>";
            // }  
            // if($cond=='')
            // {
            //    echo "<script>alert('Please Select Atleast age..!!'); window.location.href='profiless.php'</script>";
            // }

                          $sql="SELECT matri_id,name,gender,age,edu,caste,ptype FROM registerfree WHERE id<>'0' order by id desc" ;
            //" . $cond ."

                          $res = mysql_query($sql);

                          $s=1;
                          while($row=mysql_fetch_assoc($res))
                          {

                            ?>

                            <tr>
                              <td><?php echo $s++; ?></td>
                              <td style="width:80px;"><?php echo  $row['matri_id'];?></td>
                              <td align="left"><?php echo  $row['name'];?></td>
                              <td align="left" style="width:80px;"><?php echo  $row['gender'];?></td>
                              <td align="left" style="width:50px;"><?php echo  $row['age'];?></td>
                              <td align="left"><?php echo  $row['edu'];?></td>
                              <td align="left"><?php echo  $row['caste'];?></td>


                              <!-- <td style="width:70px;"><img src="<?php echo $row['up_profile']; ?>" data-toggle="modal" data-target="#myModal_<?php echo $row['matri_id']; ?>" style="width: 68px;height:70px;"></td> -->
                              <?php 
                              if($row['ptype']=='0')
                              {echo '<td style="width:70px;"><a class="btn btn-primary"  style="padding: 8px 8px 1px;" target="_blank" href=m_viewprofile.php?id='.$row['matri_id'].'><i class="far fa-user"></i></a></td>';
                          }
                          else    {echo '<td style="width:70px;"><a class="btn btn-primary"  target="_blank" style="padding: 8px 8px 1px;" href=m_viewprofiletamil.php?id='.$row['matri_id'].'><i class="far fa-user"></i></a></td>';
                          }
                              ?>
                            </tr>


                            <div class="modal fade" id="myModal_<?php echo $row['matri_id']; ?>" role="dialog">
                              <div class="modal-dialog modal-sm">
                                <!-- Modal content-->
                                <div class="modal-content">
                    <!-- <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div> -->
                      <div class="modal-body">
                       <img src="<?php echo $row['up_profile']; ?>" style="width:100%;"/>
                     </div>
                   </div>
                 </div>
               </div>
             <?php } ?>

           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>
 <!-- Primary table end -->
 <!-- Modal -->


</div>
</div>
</div>
<!-- main content area end -->
<!-- footer area start-->

<!-- footer area end-->
</div>
<!-- page container area end -->


</div>
</div>
</nav>
</div>
<?php include('footer.php'); ?>
<!-- jquery latest version -->
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script>

window.addEventListener("keyup", function(e){ if(e.keyCode == 27)window.location.href='home.php'; }, false);</script>
<script type="text/javascript">
  window.history.forward();
  function noBack()
  {
   window.onbeforeunload = function() { return "Your work will be lost."; };
 }
</script>
<!-- bootstrap 4 js -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="assets/js/jquery.slicknav.min.js"></script>

<!-- Start datatable js -->
<script src="assets/js/jquery.dataTables.min.js"></script> 
<script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script> -->
      <!-- others plugins -->
      <script src="assets/js/plugins.js"></script>
      <script src="assets/js/scripts.js"></script>


    </body>
    </html>