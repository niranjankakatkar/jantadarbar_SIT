        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url(); ?>/public/assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?= base_url(); ?>/public/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons -->
        <link href="<?= base_url(); ?>/public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Datatables css -->
        <link href="<?= base_url(); ?>/public/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/public/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/public/assets/libs/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/public/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>/public/assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    </head>

    <!-- body start -->
    <body data-menu-color="light" data-sidebar="default"

        <!-- Begin page -->
        <div id="app-layout">
            
            <!-- Topbar Start -->
            <div class="topbar-custom">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                            <li>
                                <button class="button-toggle-menu nav-link">
                                    <i data-feather="menu" class="noti-icon"></i>
                                </button>
                            </li>
                            <?php
                           date_default_timezone_set("Asia/Kolkata");
                            $currentHour = date('H');
                            if ($currentHour >= 5 && $currentHour < 12) {
                                $greeting = "Good Morning";
                            } elseif ($currentHour >= 12 && $currentHour < 17) {
                                $greeting = "Good Afternoon";
                            } elseif ($currentHour >= 17 && $currentHour < 21) {
                                $greeting = "Good Evening";
                            } else {
                                $greeting = "Good Night";
                            }
                            ?>
                            <li class="d-none d-lg-block">
                                <h5 class="mb-0"><?=$greeting;?>, <?=$_SESSION['name'];?></h5>
                            </li>
                        </ul>

                        <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">

                            <li class="d-none d-sm-flex">
                                <button type="button" class="btn nav-link" data-toggle="fullscreen">
                                    <i data-feather="maximize" class="align-middle fullscreen noti-icon"></i>
                                </button>
                            </li>

                            <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i data-feather="bell" class="noti-icon"></i>
                                    <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-lg">
        
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-end">
                                                <a href="#" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>
        
                                    <div class="noti-scroll" data-simplebar>
        
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary active">
                                            <div class="notify-icon">
                                                <img src="<?= base_url(); ?>/public/assets/images/users/user-12.jpg" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="notify-details">Carl Steadham</p>
                                                <small class="text-muted">5 min ago</small>
                                            </div>
                                            <p class="mb-0 user-msg">
                                                <small class="fs-14">Completed <span class="text-reset">Improve workflow in Figma</span></small>
                                            </p>
                                        </a>
        
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                            <div class="notify-icon">
                                                <img src="<?= base_url(); ?>/public/assets/images/users/user-2.jpg" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                            <div class="notify-content">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="notify-details">Olivia McGuire</p>
                                                    <small class="text-muted">1 min ago</small>
                                                </div>
                                    
                                                <div class="d-flex mt-2 align-items-center">
                                                    <div class="notify-sub-icon">
                                                        <i class="mdi mdi-download-box text-dark"></i>
                                                    </div>

                                                    <div>
                                                        <p class="notify-details mb-0">dark-themes.zip</p>
                                                        <small class="text-muted">2.4 MB</small>
                                                    </div>
                                                </div>

                                            </div>
                                        </a>
        
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                            <div class="notify-icon">
                                                <img src="<?= base_url(); ?>/public/assets/images/users/user-3.jpg" class="img-fluid rounded-circle" alt="" /> 
                                            </div>
                                            <div class="notify-content">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="notify-details">Travis Williams</p>
                                                    <small class="text-muted">7 min ago</small>
                                                </div>
                                                <p class="noti-mentioned p-2 rounded-2 mb-0 mt-2"><span class="text-primary">@Patryk</span> Please make sure that you're....</p>
                                            </div>
                                        </a>
        
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                            <div class="notify-icon">
                                                <img src="<?= base_url(); ?>/public/assets/images/users/user-8.jpg" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="notify-details">Violette Lasky</p>
                                                <small class="text-muted">5 min ago</small>
                                            </div>
                                            <p class="mb-0 user-msg">
                                                <small class="fs-14">Completed <span class="text-reset">Create new components</span></small>
                                            </p>
                                        </a>
        
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                            <div class="notify-icon">
                                                <img src="<?= base_url(); ?>/public/assets/images/users/user-5.jpg" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="notify-details">Ralph Edwards</p>
                                                <small class="text-muted">5 min ago</small>
                                            </div>
                                            <p class="mb-0 user-msg">
                                                <small class="fs-14">Completed <span class="text-reset">Improve workflow in React</span></small>
                                            </p>
                                        </a>
        
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item text-muted link-primary">
                                            <div class="notify-icon">
                                                <img src="<?= base_url(); ?>/public/assets/images/users/user-6.jpg" class="img-fluid rounded-circle" alt="" /> 
                                            </div>
                                            <div class="notify-content">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p class="notify-details">Jocab jones</p>
                                                    <small class="text-muted">7 min ago</small>
                                                </div>
                                                <p class="noti-mentioned p-2 rounded-2 mb-0 mt-2"><span class="text-reset">@Patryk</span> Please make sure that you're....</p>
                                            </div>
                                        </a>
                                    </div>
        
                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all
                                        <i class="fe-arrow-right"></i>
                                    </a>
        
                                </div>
                            </li>
        
                            <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="<?= base_url(); ?>/public/assets/images/users/user_icon.png" alt="user-image" class="rounded-circle">
                                    <span class="pro-user-name ms-1">
                                        <?=$_SESSION['name'];?> <i class="mdi mdi-chevron-down"></i> 
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>
        
                                    <div class="dropdown-divider"></div>
        
                                    <!-- item-->
                                    <a class='dropdown-item notify-item' href="<?php echo base_url(); ?>/logout">
                                        <i class="mdi mdi-location-exit fs-16 align-middle"></i>
                                        <span>Logout</span>
                                    </a>
        
                                </div>
                            </li>
        
                        </ul>
                    </div>

                </div>
               
            </div>
            <!-- end Topbar -->

            <!-- Left Sidebar Start -->
            <div class="app-sidebar-menu">
                <div class="h-100" data-simplebar>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <div class="logo-box">
                            <a class='logo logo-light' href="<?= base_url(); ?>adminDashboard">
                                <span class="logo-sm">
                                    <!--<img src="<?= base_url(); ?>/public/assets/images/logo-sm.png" alt="" height="22">-->
                                    <div style="font-size:30px;">FTS</div>
                                </span>
                                <span class="logo-lg">
                                    <!--<img src="<?= base_url(); ?>/public/assets/images/logo-light.png" alt="" height="24">-->
                                     <div style="font-size:30px;">FTS</div>
                                </span>
                            </a>
                            <a class='logo logo-dark' href="<?= base_url(); ?>adminDashboard">
                                <span class="logo-sm">
                                    <!--<img src="<?= base_url(); ?>/public/assets/images/logo-sm.png" alt="" height="22">-->
                                     <div style="font-size:30px;">FTS</div>
                                </span>
                                <span class="logo-lg">
                                    <!--<img src="<?= base_url(); ?>/public/assets/images/logo-dark.png" alt="" height="24">-->
                                     <div style="font-size:30px;">FTS</div>
                                </span>
                            </a>
                        </div>

                        <ul id="side-menu">

                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="<?= base_url(); ?>adminDashboard">
                                    <i data-feather="home"></i>
                                    <span> डॅशबोर्ड </span>
                                </a>
                            </li>
                            
                            <li class="menu-title">मास्टर</li>
                            
                            <li>
                                <a href="#sidebarM" data-bs-toggle="collapse">
                                    <i data-feather="grid"></i>
                                    <span> मास्टर</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarM">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a class='tp-link' href="<?= base_url(); ?>Department">शाखा</a>
                                        </li>
                                        <li>
                                            <a class='tp-link' href="<?= base_url(); ?>Vibhag">विभाग</a>
                                        </li>
                                        <li>
                                            <a class='tp-link' href="<?= base_url(); ?>Designation">अधिकार</a>
                                        </li>
                                        <li>
                                            <a class='tp-link' href="<?= base_url(); ?>Employee">कर्मचारी</a>
                                        </li>
                                        <li>
                                            <a class='tp-link' href="<?= base_url(); ?>RejectionReason">नकार कारण</a>
                                        </li>
                                         <li>
                                            <a class='tp-link' href="<?= base_url(); ?>Role">भूमिका</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="menu-title">फाईल</li>
                            
                            <li>
                                <a href="#sidebarAuth" data-bs-toggle="collapse">
                                    <i data-feather="code"></i>
                                    <span> फाईल</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarAuth">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a class='tp-link' href="<?= base_url(); ?>File">फाईल</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!--<li class="menu-title">Deed</li>-->
                            
                            <!--<li>-->
                            <!--    <a href="#sidebarError" data-bs-toggle="collapse">-->
                            <!--         <i data-feather="check-circle"></i>-->
                            <!--        <span> Deed </span>-->
                            <!--        <span class="menu-arrow"></span>-->
                            <!--    </a>-->
                            <!--    <div class="collapse" id="sidebarError">-->
                            <!--        <ul class="nav-second-level">-->
                            <!--            <li>-->
                            <!--                <a class='tp-link' href="<?= base_url(); ?>ConveyanceForm">Conveyance</a>-->
                            <!--            </li>-->
                            <!--            <li>-->
                            <!--                <a class='tp-link' href="<?= base_url(); ?>AssignmentForm">Assignment</a>-->
                            <!--            </li>-->
                            <!--        </ul>-->
                            <!--    </div>-->
                            <!--</li>-->

                           

                        </ul>
            
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
            </div>
            <!-- Left Sidebar End -->
