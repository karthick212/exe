<!doctype html>
<html lang="en" class="fixed">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Inaikkumkarangal  Matrimony</title> <link rel="icon" type="image/png" sizes="32x32" href="images/header.png"> 
    <script src="vendor/pace/pace.min.js"></script>
    <link href="vendor/pace/pace-theme-minimal.css" rel="stylesheet" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <link rel="stylesheet" href="vendor/data-table/media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="vendor/data-table/extensions/Responsive/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/css/style.css">
</head>

<body>
<div class="wrap">
    <div class="page-header">
        <div class="leftside-header">
             <img alt="logo" src="images/user.png" />
            <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>
        <div class="rightside-header">
            <div class="header-middle"></div>
            
            <div class="header-section hidden-xs" id="notice-headerbox">
                
                
                
             
            </div>
           
            <div class="header-separator"></div>
            <div class="header-section">
                <a href="index.php" data-toggle="tooltip" data-placement="left" title="Logout"><i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="left-sidebar">
            <!-- left sidebar HEADER -->
            <div class="left-sidebar-header">
                <div class="left-sidebar-title">Main Menu</div>
                <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                    <span></span>
                </div>
            </div>
            <!-- NAVIGATION -->
            <!-- ========================================================= -->
         <?php include 'amenu.php';?>     

        </div>

        <div class="content">
            <div class="content-header">
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                      
                        <li><a style="font-weight:bold; font-size:16px;">Inaikkumkarangal  Matrimony</a></li>
                    </ul>
                </div>
            </div>
            <div class="row animated fadeInRight">
               
            
              <div class="col-sm-3" align="center"></div>  <div class="col-sm-6" align="center">
                    <h4 class="section-subtitle" align="center"><b>Daily</b>  Report</h4>
                    <div class="panel">
                        <div class="panel-content">
                            

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<center> 
<br>
<tr><td>From:  <input type="date" name="rfrom"> To:<input type="date" name="rto"></td></br> </br> 
    <td> </br>   <input type="submit" class="btn btn-success" name="submit"></td>
    </tr> </center> 
                   </form>           
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
		 <?php 
if(isset($_POST["submit"]))
{
	$rfrom=$_POST["rfrom"];
	$rto=$_POST["rto"];
	echo"<script>self.location='bill1.php?rfrom=$rfrom&rto=$rto';</script>";
	
}


		 ?>
       

        <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
    </div>
</div>
<script src="vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/nano-scroller/nano-scroller.js"></script>
<script src="javascripts/template-script.min.js"></script>
<script src="javascripts/template-init.min.js"></script>
<script src="vendor/data-table/media/js/jquery.dataTables.min.js"></script>
<script src="vendor/data-table/media/js/dataTables.bootstrap.min.js"></script>
<script src="vendor/data-table/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="vendor/data-table/extensions/Responsive/js/responsive.bootstrap.min.js"></script>
<script src="javascripts/examples/tables/data-tables.js"></script>
</body>


</html>
