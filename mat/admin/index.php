<!doctype html>
<html lang="en" class="fixed accounts lock-screen">
<?php
session_start();

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <title>Inaikkumkarangal  Matrimony</title> <link rel="icon" type="image/png" sizes="32x32" href="images/header.png"> 
   
   
      <title>Inaikkumkarangal  Matrimony</title> <link rel="icon" type="image/png" sizes="32x32" href="images/header.png"> 
   
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <link rel="stylesheet" href="stylesheets/css/style.css">
</head>

<body>
<div class="wrap">
    <div class="page-body">
       <div align="center">   <br>  <br> <br> <h3 style="color:#FFF;">Login into Your Account</h3></div>
        <div class="box animated fadeInUp">
            <div class="panel">
            
                <div class="panel-content bg-scale-0">
                    <form action="" method="post">
                        <h3 class="text-center mb-md">Inaikkumkarangal Matrimony</h3>
                        <div class="form-group">
                                <span class="input-with-icon">
                                        <input type="text"  name="user_name"  class="form-control" id="user_name" placeholder="username">
                                        <i class="fa fa-user"></i>
                                    </span>
                        </div>
                        <div class="form-group">
                                <span class="input-with-icon">
                                        <input type="password"  name="password"  class="form-control" id="password" placeholder="Password">
                                        <i class="fa fa-key"></i>
                                    </span>
                        </div>
                        <div class="form-group">
                        <input type="submit" name="submit" value="submit" class="btn btn-primary btn-block "/>
                          
                        </div>
                        <div class="form-group text-center">
                          
                        </div>
                    </form>
					 <?php
					 include('config.php');
						   if(isset($_POST["submit"]))
						   {
							   $un=$_POST["user_name"];
							   $pwd=$_POST["password"];
							  $_SESSION['user_name']=$un;
							  
					if($un!="" && $pwd!="")
					{		
$q="select * from add_customer where user_name='$un' and password='$pwd'";

$res=mysql_query($q)or die(mysql_error());
while($f=mysql_fetch_array($res))
{  

    $_SESSION['login_id']=$f['id'];
	$_SESSION['role_id']=$f['role_id'];
	$dbun=$f['user_name'];
	$dbpwd=$f['password'];
	$_SESSION['status']=$f['status'];
	//$_SESSION['status']=$s;
}	

					





	if($un==$dbun && $pwd==$dbpwd && $_SESSION['status']==0)		
	{		
	echo "<script>self.location='dashboard.php';</script>";	
	}
else if($un==$dbun && $pwd==$dbpwd && $_SESSION['status']==1)
{
echo "<script>self.location='user_dashboard.php';</script>";	
	
}	
else
{
echo "<script>alert('username or password incorrect!');self.location='index.php';</script>";		
}
						   }
						   else
							{
echo "<script>alert('username or password empty!');self.location='index.php';</script>";	
	
}	   
						   }
						   
						   ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="javascripts/template-script.min.js"></script>
<script src="javascripts/template-init.min.js"></script>
</body>


</html>
