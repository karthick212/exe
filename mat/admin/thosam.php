<!doctype html>

<html lang="en" class="fixed">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Inaikkumkarangal Matrimony</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/header.png">

    <title>Inaikkumkarangal Matrimony</title>
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
                <?php include 'amenu.php';
                include 'config.php';

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
                        <h4 class="section-subtitle" align="center"><b>Search Your</b>  Report</h4>

                        <div class="col-sm-1"></div>
                        <div class="col-sm-12">

                            <div class="panel">
                                <div class="panel-content">

                                    <form action="viewlist1.php" method="post">

                                        <tr>
                                             <td width="269" align="center">
                                                <select name="age1" style="width: 100px; height: 40px; " id="email4" required>
                                                    <option value="" style=" font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', 'sans-serif';">Age From</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                </select>
                                            </td>
                                            <td width="269" align="center">
                                                <select name="age2" style="width: 100px; height: 40px; " id="email4" required>
                                                    <option value="" style=" font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', 'sans-serif';">Age To</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                </select>
                                            </td>
                                            <td width="269" align="center" required>
                                                <select name="gender" style="width: 150px; height: 40px; " id="email4"  >

                                                   
                                                    <option value="">Select Gender</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Male">Male</option>
                                                       

                                                    

                                                </select>
                                            </td>
                                             <td width="269" align="center">
                                                <select name="religion" style="width: 150px; height: 40px; ">
                                                    <option value="">Select Religion</option>
                                                    <?php 
      $q="select religion from registerfree GROUP BY religion";
      $res=mysql_query($q)or die(mysql_error());
      while($f=mysql_fetch_array($res))
      {
        $star=$f['religion'];

      ?>
                                                        <option value="<?php echo $religion;?>">
                                                            <?php echo $star;?>
                                                        </option>

                                                        <?php } ?>

                                                </select>
                                            </td>
                                            <td width="240" align="center">

                                                <select name="caste" style="width: 248px; height: 40px; ">
                                                    <option value="">Select Caste</option>
                                                    <?php 
      $q="select caste from registerfree GROUP BY caste";
      $res=mysql_query($q)or die(mysql_error());
      while($f=mysql_fetch_array($res))
      {
        $caste=$f['caste'];

      ?>
                                                        <option value="<?php echo $caste;?>">
                                                            <?php echo $caste;?>
                                                        </option>
                                                        <?php } ?>

                                                </select>
                                            </td>
                                            <td width="269" align="center">
                                                <select name="thosam" style="width: 150px; height: 40px; ">
                                                    <option value="">Select Thosam</option>
                                                    <!-- <?php 
      $q="select star from registerfree GROUP BY star";
      $res=mysql_query($q)or die(mysql_error());
      while($f=mysql_fetch_array($res))
      {
        $star=$f['star'];

      ?>
                                                        <option value="<?php echo $star;?>">
                                                            <?php echo $star;?>
                                                        </option>

                                                        <?php } ?>

 -->
  <option value="Raagu/kethu">Raagu/kethu Thosam</option>
   <option value="Sevvai">Sevvai Thosam </option>
    <option value="Nagu">Nagu Thosam</option>
                                                </select>
                                            </td>

                                           
                                            

                                        </tr>

                                        <td>
                                            <input type="submit" class="btn btn-success" name="submit">
                                        </td>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

            </div>

            <?php 



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