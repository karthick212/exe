<!doctype html>
<html lang="en" class="fixed">
<?php
session_start();
include('config.php');
?>
0
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
        <div class="leftside-header" align="center">
           
              
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
<?php include 'menu.php';?>    
		  
        </div>

        <div class="content">
            <div class="content-header">
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                      
                        <li><a style="font-weight:bold; font-size:16px;">Welcome Admin</a></li>
                    </ul>
                </div>
            </div>
            <div class="row animated fadeInRight">
               
                
             <!--   <div class="col-sm-12">
                    <h4 class="section-subtitle"><b>Welcome <?php echo $_SESSION['username'];?></b></h4>
                    
                </div>-->
				
            </div>
		<style>
		.container
		{
			width:1030px;
		}
		.box
		{
			background-color:white;
			color:maroon;
		}
		</style>	
			
			
		
			<div class="row">
			<div class="container">
			
			<?php /*?><?php 
			$q="select caste,count(caste) from mbill2 GROUP BY caste ORDER BY caste DESC";
			$res=mysql_query($q)or die(mysql_error());
			while($f=mysql_fetch_array($res))
			{
				$caste=$f['caste'];
				$count=$f['count(caste)'];
				

			
			?><?php */?>
			
			<!--<div class="col-md-3">
			  <div class="panel widgetbox wbox-2 bg-lighter-2 color-light">
                                <a href="bill3.php?caste=<?php echo $caste;?>">
                                    <div class="box">
                                        <div class="row">
										
                                         <div class="col-xs-1">
                                               <span style="font-size:20px;margin-left: 10px;margin-top: 10px;"class="icon fa fa-user color-darker-2"></span>
                                            </div>
                                            <div class="col-xs-10">
                                                <h4 style="text-align:left; font-family:bamini;"><?php echo $caste;?></h4>
                                                <h4 class="" style="color:maroon;text-align:left;"><?php echo $count;?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
							</div>-->
		<?php /*?>	<?php }?><?php */?>
        
        
        <div class="row animated fadeInUp">
        <br>
                <div class="col-sm-12 col-lg-9">
                    <div class="row">
                    <div class="col-sm-12 col-md-4">
                            <div class="panel widgetbox wbox-2 bg-scale-0">
                                <a href="list_view.php?mode=all">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon fa fa-user color-darker-1"></span>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4 class="subtitle color-darker-1">Total No of Profile</h4>
                                               <?php 
			$q="select *,(select count(*) from registerfree) as cnt from registerfree";
			$res=mysql_query($q)or die(mysql_error());
			$x=mysql_num_rows($res);
			while($f=mysql_fetch_array($res))
			{
				$caste=$f['caste'];
				$count=$f['cnt'];
				}
			
			?> <h1 class="title color-primary"> <?php echo $x;?></h1><?php  ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </a>
                            </div>
                            
                            
                        </div>  <?php 
			$q1="select * from registerfree where gender='Male'";
			$res1=mysql_query($q1)or die(mysql_error());
			$x1=mysql_num_rows($res1);
			?>
                        <div class="col-sm-12 col-md-4">
                            <div class="panel widgetbox wbox-2 bg-scale-0">
                                <a href="list_view.php?mode=male">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon fa fa-male color-darker-1"></span>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4 class="subtitle color-darker-1"> No of Male Profile</h4>
                                                <h1 class="title color-primary"><?php echo $x1;?></h1>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </a>
                            </div>
                            
                            
                        </div> <?php 
			$q2="select * from registerfree where gender='Female'";
			$res2=mysql_query($q2)or die(mysql_error());
			$x2=mysql_num_rows($res2);
			?>
                        <div class="col-sm-12 col-md-4">
                            <div class="panel widgetbox wbox-2 bg-scale-0">
                                <a href="list_view.php?mode=female">
                                    <div class="panel-content">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <span class="icon fa fa-female color-darker-1"></span>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4 class="subtitle color-darker-1"> No of Female Profile</h4>
                                                <h1 class="title color-primary"><?php echo $x2;?></h1>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </a>
                            </div>
                            
                            
                        </div>
                            
                            
                        </div>
                        
                        
                    </div>
                    
                    
                </div>
                
            </div>
        
							</div> </div>
        </div>
        

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
