<!doctype html>

<html lang="en" class="fixed">

<?php

session_start();

?>



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

      <title>Inaikkumkarangal  Matrimony</title> <link rel="icon" type="image/png" sizes="32x32" href="images/header.png"> 

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
                      
                        <li><a style="font-weight:bold; font-size:16px;">Inaikkumkarangal  Matrimony</a></li>
                    </ul>
                </div>

            </div>

            <div class="row animated fadeInRight">

               

          <form name="form1" method="post" action="">     

                <div class="col-sm-12">

                    <h4 class="section-subtitle"><b>Customer </b> Report </h4>
                    <div align="right" style="margin-top: -58px;">
           <a href="add_customer.php">
                        	<button type="button" class="btn btn-primary" name="submit">Add Customer</button>
                        
                        </a></div><br>
                    <div class="panel">

                        <div class="panel-content">

                            <table id="responsive-table" class="data-table table table-striped table-hover responsive nowrap" cellspacing="0" width="100%">

                                <thead>

                                 <tr> <th width="12%">Customer Name</th>

        <th width="12%">Email Id</th>

        <th width="21%">Phone Number</th>

        <th width="11%">User Name</th>

        <th width="8%">Password</th>

         <th width="25%">Action</th>

    </tr>

                                </thead>

                                <tbody>

                               <?php

	

include('config.php');

$select="select * from  add_customer where status!='0'";

 		$sel=mysql_query($select);

 		while($data=mysql_fetch_array($sel))

 		{

			$id=$data['id'];

			

		

?>   <tr>

        <td><?php echo $data['name'];?></td>

        <td class="center"><?php echo $data['email_id'];?></td>

        <td class="center"><?php echo $data['phone_number'];?></td>

           <td class="center"><?php echo $data['user_name'];?></td>

             <td class="center"><?php echo $data['password'];?></td>

        <td class="center">

            <a class="btn btn-success" href="view_customer.php?id=<?php echo $id?>">

                <i class="glyphicon glyphicon-zoom-in icon-white"></i>

                View

            </a>

            <a class="btn btn-info" href="edit_customer.php?id=<?php echo $id?>">

                <i class="glyphicon glyphicon-edit icon-white"></i>

                Edit

            </a>

           <!-- <a class="btn btn-danger" href="delete.php?s=<?php echo $id?> & d=<?php echo $id1;?>">-->
           <a class="btn btn-danger" href="customer_delete.php?id=<?php echo $id?>">

                <i class="glyphicon glyphicon-trash icon-white"></i>

                Delete

            </a>
            
           
        </td>

    </tr> <?php } ?>

                              

                                </tbody>

                            </table>
                      
                            </div> 
                                      
                        </div>

                    </div>

                </div>

            </div>

        </div></form>

        


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

