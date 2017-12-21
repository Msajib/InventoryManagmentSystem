<!DOCTYPE html>
<html>
    
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admiry - Responsive Flat Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">

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
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="<?php echo base_url();?>assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
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
                                    <h3 class="page-title">Blank Page</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container">
                            <div class="row">

                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-block">
                                            <h4 class="mt-0 m-b-15 header-title">Database Information </h4>

                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                <tr>
                                                    <th>Serial No</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Phone</th>
                                                    <th>Total Money info</th>
                                                    
                                                </tr>

                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div><!-- container -->


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

        <!-- App js -->
        <script src="<?php echo base_url();?>assets/js/app.js"></script>

    </body>

</html>

