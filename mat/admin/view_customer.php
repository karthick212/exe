<?php
session_start();
include 'config.php';
$id=$_GET['id'];
/*if(isset($_POST['submit']))
{
	$name=$_POST['name'];
    $email_id=$_POST['email_id'];
	$phone_number=$_POST['phone_number'];
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
		
		

  $insert="insert into add_customer(name,email_id,phone_number,user_name,password,status)values('$name','$email_id','$phone_number','$user_name','$password','1')";

//mysql_query($insert) or die(mysql_error()); 

mysql_query($insert);
      $id=mysql_insert_id();
      $unique_id='Balaji00'.$id;
	  
	  $update=mysql_query("update add_customer set cus_id='".$unique_id."' where id='$id'");
	  
	  if(!$insert)
echo"error".mysql_error();
else
header('location:cus_view.php');
}*/



/*if($insert){
echo "<script>alert('Your New Customer Added !!'); window.location.href='cus_view.php';</script>"; 
			 
}
else{
	echo "<script>alert('Failed!!'); window.location.href='add_customer.php';</script>";
	}*/




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
            <?php include 'amenu.php';?>   
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
                    <h4 class="section-subtitle">View <b> Customer </b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-sm-12">
                                <?php 
								$sql=mysql_query("select * from add_customer where id='$id'");
while($res=mysql_fetch_array($sql))
{?>
								
                                    <form class="form-horizontal form-stripe" method="post">
                                        <!--<h6 class="mb-xlg text-center"><b>Add New Customer Here...</b></h6>-->
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php echo $res['name']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email_id" class="col-sm-2 control-label">Email Id</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="email_id" class="form-control" id="email_id" placeholder="Email Id" value="<?php echo $res['email_id']; ?>" readonly>
                                            </div>
                                        </div>
                                      <div class="form-group">
                                            <label for="phone_number" class="col-sm-2 control-label">Phone Number</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="Phone Number" value="<?php echo $res['phone_number']; ?>" readonly>
                                            </div>
                                        </div>
                                      <div class="form-group">
                                            <label for="user_name" class="col-sm-2 control-label">User Name</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="user_name" class="form-control" id="user_name" placeholder="User Name" value="<?php echo $res['user_name']; ?>" readonly>
                                            </div>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label for="password3" class="col-sm-2 control-label">Password</label>
                                            <div class="col-sm-6">
                                                <input type="text"  name="password" class="form-control" id="password" placeholder="Password" value="<?php echo $res['password']; ?>" readonly>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-6">
                                               <a class="btn btn-primary" href="cus_view.php">Back</a>

                                            </div>
                                        </div>
                                    </form>
                                    <?php } ?>
                                </div>
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
