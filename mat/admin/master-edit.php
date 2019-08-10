<?php
session_start();
include 'config.php';

$lid=$_SESSION['login_id'];

$id=$_GET['id'];	 


if(isset($_POST['submit']))
{
$caste=$_POST['caste'];

$i="update  caste set caste='$caste' where id='$id'";
$c=mysql_query($i);
if($c){
echo "<script>alert('Caste Edited Successfully !!'); window.location.href='master.php';</script>"; 
			 
}
else{
	echo "<script>alert('Not updated!!'); window.location.href='master.php';</script>";
	}


}

?><!doctype html>
<html lang="en" class="fixed">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Sree Balaji Matrimony </title>
      <link rel="icon" type="image/png" sizes="32x32" href="images/header.png">
    <script src="vendor/pace/pace.min.js"></script>
    <link href="vendor/pace/pace-theme-minimal.css" rel="stylesheet" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <link rel="stylesheet" href="stylesheets/css/style.css">
</head>

<body>
<div class="wrap">
    <div class="page-header">
        <div class="leftside-header">
            <div class="logo">
                <a href="index.html" class="on-click">
                    <img alt="logo" src="images/user.png" />
                </a>
            </div>
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
			if($lid=='1')
		{
			include 'amenu.php';
		}
		else
		{
		include 'menu.php';
		}
			?>   
        </div>

        <div class="content">
            <div class="content-header">
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                       <li><a style="font-weight:bold; font-size:16px;">Sree Balaji Matrimony </a></li>
                    </ul>
                </div>
            </div>
            <div class="row animated fadeInUp">
                
                
                <div class="col-md-12">
                    <h2 class="section-subtitle" align="center">Caste <b> Master</b></h2>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row"><?php $q="select * from caste where id='$id'";
//echo $q;exit;
$res=mysql_query($q)or die(mysql_error());
while($f=mysql_fetch_array($res))
{
                 ?>              <div class="col-sm-12">
                                    <form class="form-horizontal form-stripe" method="post">
                                      
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Caste Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="caste" value="<?php echo $f['caste'];?>" class="form-control" id="name" placeholder="Name">
                                            </div>
                                             <div class="col-sm-6">
                                                <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                            </div>
                                        </div>
                                       
                                      
                                    </form>
                                </div>
                                
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        

        <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
    </div>
</div>
<script src="vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/nano-scroller/nano-scroller.js"></script>
<script src="javascripts/template-script.min.js"></script>
<script src="javascripts/template-init.min.js"></script>
</body>


</html>
