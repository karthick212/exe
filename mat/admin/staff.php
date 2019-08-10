<?php
include('config.php');
if(isset($_GET['did'])) {
    $del_id= $_GET['did'];
   //include('conn.php');
  
$sql3="DELETE FROM staff WHERE id='$del_id'";
$res3=mysql_query($sql3);
if($res3 == true)
{
echo "<script> confirm('Staff Deleted success...!');window.location.href='staff.php';</script>";
  //echo "success";
}
else{
   echo "<script> alert('Delete Failed...!');window.location.href='staff.php';</script>";
}
 }



?>






<!doctype html>

<html lang="en" class="fixed">

<!--<php

session_start();
$lid=$_SESSION['username'];
?>-->



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

        <?php 
		
		// if($lid=='1')
		// {
		// 	include 'amenu.php';
		// }
		// else
		{
		include 'menu.php';
		}
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
			
			
			
			<h4><b>Add Staff Details</b></h4>
			
			<div class="panel">
			<div class="container">
					<form action="" method="post">
						<div class="row" style="padding-top:20px;padding-bottom:20px;">
							<div class="col-md-2">
								<input type="text" name="name" class="form-control" placeholder="Staff Name">
							</div>
							
							<div class="col-md-2">
								<input type="text" name="email" class="form-control" placeholder="Staff_id">
							</div>
                            <div class="col-md-1">
                                <input type="text" name="password" class="form-control" placeholder="Password">
                            </div>
							<div class="col-md-2">
								<input type="text" name="contact" class="form-control" placeholder="Mobil.no">
						
							</div>
							
							<div class="col-md-3">
								<input type="text" name="address"  class="form-control" placeholder="Address">
							</div>
							<div class="col-md-2">
								<button type="submit" name="submit" >submit</button>
							</div>
					
						</div>
					</form>
					
			
			</div>
			</div>
            <div class="row animated fadeInRight">
                <?php
                include ('config.php');
                if(isset($_POST['submit']))
                {
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $contact=$_POST['contact'];
                    $password=$_POST['password'];
                    $address=$_POST['address'];

                    $sql1="INSERT INTO staff (name,staff_id,contact,password,address ) VALUES ('$name','$email','$contact','$password','$address') ";
    $result=mysql_query($sql1);
    if($result)
    {
echo "<script>
alert(Staff add successfully');
window.location.href='staff.php';
</script>";
    }
    else{
        echo "<script>
alert('process failed');
window.location.href='staff.php';
</script>";
    }


                }


                ?>

               

          <form name="form1" method="post" action="">     

                <div class="col-sm-12">

                    <h4 class="section-subtitle"><b>Staff Details</b>   </h4>

                    <div class="panel">

                        <div class="panel-content">

                            <table id="responsive-table" class="data-table table table-striped table-hover responsive nowrap" cellspacing="0" width="100%">

                                <thead>

                                 <tr> 
		  <th width="11%">S.No</th>
		   <th width="21%">Staff_Name</th>
		
		<th width="12%">Staff_id</th>
    
          
		  <th width="8%">Password</th>
          <th width="13%">Contact</th>
           <th width="13%">Action</th>

          

    </tr>

                                </thead>

                                <tbody>

                              <?php

	

$query=mysql_query("select *from staff");
									//echo "select *from send_profile where cus_id='$lid'";exit;
$s_no=1;
	while($data=mysql_fetch_assoc($query))
	{
	//$name=$data['name'];
	//echo $name;

	/*$rno=explode(',',$reg_no);
	for($i=0;$i<=count($rno);$i++)
	{*/
	

?>  
 <tr>

       
        <td><?php echo $s_no++; ?></td>

        <td class="center"> <?php echo $data['name']; ?></td>

        <td class="center"><?php echo $data['staff_id']; ?></td>

           <td class="center"><?php echo $data['password']; ?></td>

             <td class="center"><?php echo $data['contact']; ?></td>

           <td class="center"><a href="staff.php?did=<?php echo $data["id"]; ?>"
                                     class="product-table-info" data-toggle="tooltip" title="" data-original-title="Delete">
                                         <i class="glyphicon glyphicon-trash"></i></a></td>
<?php } ?>
          

       <!-- <td class="center">


            <a class="btn btn-success" href="">

                <i class="glyphicon glyphicon icon-white"></i>

                14

            </a>
            <a class="btn btn-success" href=" ">

                <i class="glyphicon glyphicon icon-white"></i>

                50

            </a>-->

            
           <!-- <a class="btn btn-info" href=" ">

                <i class="glyphicon glyphicon-edit icon-white"></i>

                Edit

            </a>

            <a class="btn btn-danger" href="delete.php?s=<php echo $id?> & d=<php echo $id1;?>">

                <i class="glyphicon glyphicon-trash icon-white"></i>

                Delete

            </a>
-->
        </td>

    </tr> 

                              

                                </tbody>

                            </table><!-- <div align="right"><input name="delete" type="submit" value="Delete" class="btn btn-danger"></div> -->

                        </div>

                    </div>

                </div>

            </div>

        </div></form>

        

<!--<php



// Check if delete button active, start this 



if(isset($_POST['delete']))

{

    $checkbox =implode(',',$_POST['checkbox']);

	 $c =explode(',',$checkbox);

	

	//print_r($checkbox);

	



//echo $v;

//exit;

for($i=0;$i<count($c);$i++){



//$del_id = $checkbox[$i];

$sql = "DELETE FROM registerfree WHERE id='$c[$i]'";

//echo $sql;

//exit;



$result = mysql_query($sql);

}

// if successful redirect to delete_multiple.php 

if($result){

echo "<meta http-equiv=\"refresh\" content=\"0;URL=reg_report.php\">";

}

 }



mysql_close($dbc);



?>-->

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

