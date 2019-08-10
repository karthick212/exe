<!doctype html>
<html lang="en" class="fixed">

<?php include 'conn.php';?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Sree Balaje Matrimony </title>
   <link rel="icon" type="image/png" sizes="32x32" href="images/header.png">
    <script src="vendor/pace/pace.min.js"></script>
    <link href="vendor/pace/pace-theme-minimal.css" rel="stylesheet" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <link rel="stylesheet" href="vendor/data-table/media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="vendor/data-table/extensions/Responsive/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/css/style.css">
</head>
<script>
function myadd()
{
	
	 var a,b,c,v;

 a= parseFloat(document.getElementById("price_1").value);
 b= parseFloat(document.getElementById("quantity_1").value);
 
 v= document.getElementById("total_1");


 v.value =   Math.round((a*b )*100)/100;
  
}
</script>
<body>
<div class="wrap">
    <div class="page-header">
        <div class="leftside-header">
            <div class="logo">
                <a href="index.html" class="on-click">
                    <img alt="logo" src="images/reg.jpg" />
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
                      
                        <li><a style="font-weight:bold; font-size:16px;">Sree Balaje Matrimony </a></li>
                    </ul>
                </div>
            </div>
            <div class="row animated fadeInRight">
               
          <form action="check.php" method="post" >
<div class="row" >
    
         	<div class='row'>
      		
      		<input type="hidden" name="billn" value="<?Php  
	                              $sel=mysql_query("select * from invoice");
                                     $aa=mysql_num_rows($sel);
                                  while($data=mysql_fetch_array($sel))

							 {
								 
								 
                                $rr=$data['bill_no']+1;
								
								
								
                             }
							
								 
								if($aa=='') {
									
									echo "1001";
									
									}
									else {
										
									echo $rr;
									}
								 ?>
							
							
							">
      	</div>
      
    	<h2 align="center">Invoice</h2>
     <br>
     
    
      		<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'></div><div class='col-xs-8 col-sm-8 col-md-8 col-lg-8'>
      			<table width="102%" class="table table-bordered table-hover">
					<thead>
						<tr>
						
							<th width="15%" >Cus Id</th>
						
							<th width="15%" >No Of Jathagam</th>
							<th width="15%" >Amount/Jathagam</th>
							<th width="15%" >Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
                        	<?Php 
	 $sel=mysql_query("select * from reg order by reg desc limit 1 ");
	 
	              while($data=mysql_fetch_array($sel))

							 {
								$cus_id=$data['reg']; 
								
								 }             
									
                                ?>
                        
							
							<td><input type="text" data-type="productCode" name="itemNo[]" id="itemNo_1" class="form-control autocomplete_txt" autocomplete="off" value="<?Php  
	                              $sel=mysql_query("select * from invoice order by id desc limit 1");
                                     $aa=mysql_num_rows($sel);
									
                                  while($data=mysql_fetch_array($sel))

							 {
								 
								 
                                $rr=$data['item_no'];
								
								
                             }
							
							
							if($rr==''){
								echo "1001";
								}	 
								else{
									
								echo $rr+1;	
									}
								 ?>
                                   "></td>
							
                            <td><input type="text" name="quantity[]"  onKeyUp="myadd()" id="quantity_1" class="form-control"    value=""></td>
							<td><input type="number" name="price[]" id="price_1" class="form-control changesNo" autocomplete="off"  value="30" ondrop="return false;"  onKeyUp="myadd()"></td>
							
							<td><input type="number" name="total[]" id="total_1" class="form-control totalLinePrice" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
						</tr>
					</tbody>
				</table>
      		</div>
      
      	
      	</div>
      	
      	<div align="center"><br>	<button type="submit" id="submit" name="submit1" class="btn btn-primary button-loading" >Ok</button></div>	</form>

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
