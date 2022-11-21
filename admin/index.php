<?php
session_start();

include_once("../dbcon.php");
// function siteURL()
// {
//     $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
//     $domainName = $_SERVER['HTTP_HOST'] . '/raichand_final/';
//     return $protocol . $domainName;
// }
define('SITE_URL', getSiteURL());
// if(isset($_GET['login'])){
//     echo "<script>$(document).ready(function(){
//         setSuccessAlert('" . SITE_URL . "admin/','Good job!','Login successfully'); 
//     });</script>";
// }
if (!isset($_SESSION['verify'])) { ?>
    <?php
    echo "<script>window.location.href='" . SITE_URL . "login.php';</script>";
    exit;
    ?>
<?php } ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">

    <title>Raichand Admin Panel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/adminPage.css" rel="stylesheet" />
</head>


<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- <div class="navbar-header" data-logobg="skin6"> -->
                <a class="navbar-brand" href="<?php echo SITE_URL; ?>admin/">
                    <span class="logo-text">
                        <!-- dark Logo text -->
                        <!-- <center><img src="plugins/images/logo-text.png" alt="homepage" style="height:50px" /></center> -->
                    </span>
                </a>
                
               <style>
                   @media screen and (max-width:800px)
                   {
                       #logoutbutton
                       {
                         
                           color:white;
                           margin-left:200px;
                       }
                   }
                   @media screen and (min-width:801px) and (max-width:2000px)
                   {
                       #logoutbutton
                       {
                        display:none;
                       }
                   }
                 
                  
               </style> 
                
                
                  <a id="logoutbutton" href="<?php echo SITE_URL; ?>/admin/logout.php">
                                <span>Logout</span></a>
                                
                                
                                
                                
                                
                                
                                
                <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                <!-- </div>  -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <!-- <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li> -->
                    </ul>
                   

                    <ul id="logoutbutton" class="navbar-nav ms-auto d-flex align-items-center">


                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li >
                            <a class="profile-pic" href="<?php echo SITE_URL; ?>/admin/logout.php">
                                <span  class="text-white font-medium">Logout</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                   
                </div>
            </nav>
        </header>
        <?php /*
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="press-release/" aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Press Release</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="faq/" aria-expanded="false">
                                <i class="fa fa-comments" aria-hidden="true"></i>
                                <span class="hide-menu">FAQ</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="policies/" aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Policies</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="invester/" aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">Invester</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="contactus/" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Contact Us</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="newsletter/" aria-expanded="false">
                                <i class="fa fa-copy" aria-hidden="true"></i>
                                <span class="hide-menu">Newsletter</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="service_creation/" aria-expanded="false">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span class="hide-menu">Service Creation</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="jobcareer/jobindex.php" aria-expanded="false">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span class="hide-menu">Job Seeker</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="career/careerindex.php" aria-expanded="false">
                                <i class="fa fa-address-card" aria-hidden="true"></i>
                                <span class="hide-menu"> Job Roles </span></a>    
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="emailtemplate/" aria-expanded="false">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span class="hide-menu">Email Template</span>
                            </a>
                        </li>  
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="career/careerindex.php" aria-expanded="false">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span class="hide-menu">Career</span>
                            </a>
                        </li>  
                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="jobcareer/jobindex.php" aria-expanded="false">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span class="hide-menu">Job Career</span>
                            </a>
                        </li>    -->
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        */ ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
          
            <div class="page-breadcrumb bg-white" id="breadcrumb">
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Three charts -->
                    <!-- ============================================================== -->
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-12">
                            <div class="white-box analytics-info">
                                <a href="policies/cindex.php">
                                    <div class="card">
                                        <div class="card-body bg-warning">
                                            <h3>Our Businesses</h3>
                                            <img src="https://www.freeiconspng.com/thumbs/business-icon-png/our-featured-products-and-services--seattle-web-design-seattle-wa-16.png" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="white-box analytics-info">
                                <a href="periods/index.php">
                                    <div class="card">
                                        <div class="card-body bg-warning">
                                            <h3>Periods</h3>
                                            <img src="https://www.freeiconspng.com/thumbs/calendar-image-png/calendar-image-png-3.png" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="white-box analytics-info">
                                <a href="press-release">
                                    <div class="card">
                                        <div class="card-body bg-warning">
                                            <h3>Press Release</h3>
                                            <img src="https://www.business2community.com/wp-content/uploads/2016/03/press-release.png.png" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-12">
                            <div class="white-box analytics-info">
                                <a href="faq">
                                    <div class="card">
                                        <div class="card-body bg-warning">
                                            <h3>FAQ</h3>
                                            <img src="https://cdn-icons-png.flaticon.com/512/651/651009.png" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">

                        <div class="col-lg-3 col-md-12">
                            <div class="white-box analytics-info">
                                <a href="policies/">
                                    <div class="card">
                                        <div class="card-body bg-warning">
                                            <h3>Policies</h3>
                                            <img src="https://freepikpsd.com/file/2019/10/reporting-png-6-Transparent-Images.png" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12" id="changeSize">
                            <div class="white-box analytics-info">
                                <a href="invester/">
                                    <div class="card">
                                        <div class="card-body bg-warning">
                                            <h3>Invester</h3>
                                            <img src="https://static.vecteezy.com/system/resources/thumbnails/010/872/530/small/3d-successful-investor-gaining-profit-png.png" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="white-box analytics-info">
                                <a href="contactus/">
                                    <div class="card">
                                        <div class="card-body bg-warning">
                                            <h3>ContactUs </h3>
                                            <img src="https://baohothanhnam.com/images/ContactUs.png" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-12">
                            <div class="white-box analytics-info">
                                <a href="newsletter/">
                                    <div class="card">
                                        <div class="card-body bg-warning">
                                            <h3>NewsLetters</h3>
                                            <img src="https://static.vecteezy.com/system/resources/thumbnails/008/486/047/small/incoming-e-mail-notify-online-mail-concept-unread-mail-notification-newsletter-new-message-alert-3d-rendering-illustration-png.png" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-12">
                            <div class="white-box analytics-info">
                                <a href="service_creation/">
                                    <div class="card">
                                        <div class="card-body bg-warning">
                                            <h3>Service Creation</h3>
                                            <img src="https://static.helpjuice.com/helpjuice_production/uploads/upload/image/4752/direct/1645675984554-Customer%20Service%20Knowledge%20Base.png" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="white-box analytics-info">
                                <a href="emailtemplate/">
                                    <div class="card">
                                        <div class="card-body bg-warning">
                                            <h3>Email Template </h3>
                                            <img src="https://cdn-icons-png.flaticon.com/512/1540/1540055.png" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-md-12" id="changeSize">
                            <div class="white-box analytics-info">
                                <-- Modify 24/8/2022 start--
                                <a href="jobcareer/jobindex.php">
                                    <-- Modify 24/8/2022 end--

                                    <div class="card">
                                        <div class="card-body bg-warning">
                                            <h3>Job Seeker</h3>
                                            <img src="https://www.pngkey.com/png/full/517-5173026_job-icon-png-job-position-icon.png" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> -->
                    </div>
                    <div class="cont"></div>
                    <!-- footer -->
                    <?php include 'footer.php'; ?>
                    <!-- ============================================================== -->
                    <!-- <footer class="footer text-center">
                        <div class="copyright">© 2022 All rights reserved. RAICHAND and its logo are
                            trademarks of The Raichand Group.
                        </div>

                    </footer> -->
                    <!-- ============================================================== -->
                    <!-- End footer -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Page wrapper  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Wrapper -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- All Jquery -->
            <!-- ============================================================== -->
            <?php /*
            <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <script src="js/app-style-switcher.js"></script>
            <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
            <!--Wave Effects -->
            <script src="js/waves.js"></script>
            <!--Menu sidebar -->
            <script src="js/sidebarmenu.js"></script>
            <!--Custom JavaScript -->
            <script src="js/custom.js"></script>
            <!--This page JavaScript -->
            <!--chartis chart-->
            <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
            <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
            <script src="js/pages/dashboards/dashboard1.js"></script>
            */ ?>
</body>
<?php if (isset($_GET['login'])) {
    echo "<script>$(document).ready(function(){
        setSuccessAlert('" . SITE_URL . "admin/','Good job!','Login successfully'); 
    });</script>";
}

?>
<style>
    #main-wrapper[data-layout=vertical][data-sidebartype=full] .page-wrapper {
        margin-left: 0px !important;
    }
</style>

</html>