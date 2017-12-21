<!DOCTYPE html>
<html>
    
    
<head>
        <meta charset="utf-8" />
<!--        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">-->
        <title>Inventory Management System</title>
<!--        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />-->
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge" />-->

        <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico">

        <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/morris/morris.css">

        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" type="text/css" media="all" />
        

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        
                        <a href="#" class="logo"><img src="<?php echo base_url();?>assets/images/logo.jpg" width="80%"  alt="logo">
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">
<!--
                    <div class="user-details">
                        <div class="text-center">
                            <img src="assets/images/users/8831.jpg" alt="" height="50%" weidth="50%" class="rounded-circle">
                           
                        </div>
                        <div class="user-info">
                            <h4 class="font-16">Sajib</h4>
                             <span class="text-muted user-status"><i class="fa fa-dot-circle-o text-success"></i> Online</span> 
                        </div>
                    </div>-->

                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?php echo base_url();?>welcome/home" class="waves-effect">
                                    <span> Product List<span class="badge badge-primary pull-right">8</span></span>
                                </a>
                            </li>

                            

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cube-outline"></i> <span> Memo Generator  </span> </a>
                                
                            </li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted-type"></i><span> Daily Earning  </span></a>
                                
                            </li>

                            <li >
                                <a href="<?php echo base_url();?>welcome/Customer_page" class="waves-effect">
                                    <i class="mdi mdi-album"></i>
                                    <span> Customer's </span> </a>
                                
                            </li>

                            <li class="has_sub">
                                <a href="<?php echo base_url();?>welcome/Database_page" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Database </span></a>
                                
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-line"></i><span> Charts </span></a>
                                
                            </li>

                           
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-maps"></i><span> Maps </span></a>
                               

                            

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ion-ios7-bell noti-icon"></i>
                                        <span class="badge badge-success noti-icon-badge">3</span>
                                    </a>
                                    
                                </li>
                                <li class="list-inline-item dropdown notification-list">
                                    <h4 class="font-16">Sajib</h4>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="<?php echo base_url();?>assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="<?php echo base_url();?>welcome/lock_screen">
                                            <i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                        <a class="dropdown-item" href="<?php echo base_url();?>welcome/login"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Dashboard</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="row">
                               <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-primary">
                            <span class="panel-body"><i class="fa fa-2x text-white">Item Product</i></span>
                            
                            <div class="mini-stat-info text-right text-white">
                                <span class="counter">8,457 Kg</span>
                                
                            </div>
                        </div>
                    </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-primary">
                            <span class="panel-body"><i class="fa fa-2x text-white">Item Product</i></span>
                            
                            <div class="mini-stat-info text-right text-white">
                                <span class="counter">8,457 Kg</span>
                                
                            </div>
                        </div>
                    </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-primary">
                            <span class="panel-body"><i class="fa fa-2x text-white">Item Product</i></span>
                            
                            <div class="mini-stat-info text-right text-white">
                                <span class="counter">8,457 Kg</span>
                                
                            </div>
                        </div>
                    </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-primary">
                            <span class="panel-body"><i class="fa fa-2x text-white">Item Product</i></span>
                            
                            <div class="mini-stat-info text-right text-white">
                                <span class="counter">8,457 Kg</span>
                                
                            </div>
                        </div>
                    </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-primary">
                            <span class="panel-body"><i class="fa fa-2x text-white">Item Product</i></span>
                            
                            <div class="mini-stat-info text-right text-white">
                                <span class="counter">8,457 Kg</span>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-primary">
                            <div class="panel-body">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                                <h3>52,160 </h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                Sales

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-primary">
                            <div class="panel-body">
                                <i class="fa fa fa-comments fa-5x"></i>
                                <h3>15,823 </h3>
                            </div>
                            <div class="panel-footer back-footer-red">
                                Comments

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-primary">
                            <div class="panel-body">
                                <i class="fa fa-users fa-5x"></i>
                                <h3>36,752 </h3>
                            </div>
                            <div class="panel-footer back-footer-brown">
                                No. of Visits

                            </div>
                        </div>
                    </div>
                            </div>


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2017 Admiry - By Themesdesign.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/detect.js"></script>
        <script src="<?php echo base_url();?>assets/js/fastclick.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url();?>assets/js/waves.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>

        <!--Morris Chart-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/raphael/raphael-min.js"></script>

        <script src="<?php echo base_url();?>assets/pages/dashborad.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url();?>assets/js/app.js"></script>

    </body>

    
</html>