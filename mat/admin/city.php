<?php
session_start();
include('config.php');
?>
<!doctype html>
<html lang="en" class="fixed">


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
            <!--<div class="header-section" id="user-headerbox">
                <div class="user-header-wrap">
                    <div class="user-photo">
                        <img src="images/user-avatar.jpg" alt="Jane Doe" />
                    </div>
                    <div class="user-info">
                        <span class="user-name">Jane Doe</span>
                        <span class="user-profile">Admin</span>
                    </div>
                    <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                    <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                </div>
                <div class="user-options dropdown-box">
                    <div class="drop-content basic">
                        <ul>
                            <li> <a href="pages_user-profile.html"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                            <li> <a href="pages_lock-screen.html"><i class="fa fa-lock" aria-hidden="true"></i> Lock Screen</a></li>
                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Configurations</a></li>
                        </ul>
                    </div>
                </div>
            </div>-->
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
            <?php
		include("amenu.php");
			?>           


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
                <h4 class="section-subtitle" align="center"><b>City wise</b>  Report</h4>
            
           <div class="col-sm-4"></div>      <div class="col-sm-4">
                   
                    <div class="panel">
                        <div class="panel-content">
                            
 <h4 class="section-subtitle" align="center"><b>Choose</b>  City</h4>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<center> 
<tr><td><td width="269"  align="center">
<select name="star"  style="width: 248px; height: 40px; font-family:bamini;" >  
<?php 
			$q="select native from registerfree GROUP BY native";
			$res=mysql_query($q)or die(mysql_error());
			while($f=mysql_fetch_array($res))
			{
				$city=$f['native'];
			
				

			
			?><option value="<?php echo $city;?>"><?php echo $city;?></option>
<?php } ?>


 </select></td></br> </br> </br> 
    <td>   <input type="submit" class="btn btn-success" name="submit"></td>
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
	$city=$_POST["star"];
	
	echo"<script>self.location='cbill.php?city=$city';</script>";
	
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
