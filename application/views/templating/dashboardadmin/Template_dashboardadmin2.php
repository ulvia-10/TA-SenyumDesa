<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo base_url() ?>assets/pusatbackend/images/logo/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/pusatbackend/images/logo/logo.png"
        type="image/x-icon">
    <title><?= $title ?></title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pusatbackend/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pusatbackend/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pusatbackend/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pusatbackend/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url() ?>assets/pusatbackend/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pusatbackend/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url() ?>assets/pusatbackend/css/vendors/datatables.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pusatbackend/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pusatbackend/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo base_url() ?>assets/pusatbackend/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pusatbackend/css/responsive.css">
</head>

<body onload="startTime()">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Cuba .." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span
                                        class="sr-only">Welcome Admin Pusat</span></div><i class="close-search"
                                    data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
                                src="<?= base_url('assets/pusatbackend/images/logo/logo-icon.png'); ?>" alt=""></a>
                    </div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                            data-feather="align-center"></i></div>
                </div>
                <div class="left-header col horizontal-wrapper ps-0">
                    <!-- Button -->
                </div>
                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li class="language-nav">
                            <div class="translate_wrapper">
                                <!-- Bahasa -->

                            </div>
                        </li>
                        <li> <span class="header-search"><i data-feather="search"></i></span></li>
                        <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="bell"> </i><span
                                    class="badge rounded-pill badge-secondary">4 </span></div>
                            <ul class="notification-dropdown onhover-show-div">
                                <li><i data-feather="bell"></i>
                                    <h6 class="f-18 mb-0">Notitications</h6>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span
                                            class="pull-right">10 min.</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span
                                            class="pull-right">1 hr</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span
                                            class="pull-right">3 hr</span></p>
                                </li>
                                <li>
                                    <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span
                                            class="pull-right">6 hr</span></p>
                                </li>
                                <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                            </ul>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="notification-box"><i data-feather="star"></i></div>
                            <div class="onhover-show-div bookmark-flip">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="front">
                                            <ul class="droplet-dropdown bookmark-dropdown">
                                                <li class="gradient-primary"><i data-feather="star"></i>
                                                    <h6 class="f-18 mb-0">Bookmark</h6>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-4 text-center"><i data-feather="file-text"></i>
                                                        </div>
                                                        <div class="col-4 text-center"><i data-feather="activity"></i>
                                                        </div>
                                                        <div class="col-4 text-center"><i data-feather="users"></i>
                                                        </div>
                                                        <div class="col-4 text-center"><i data-feather="clipboard"></i>
                                                        </div>
                                                        <div class="col-4 text-center"><i data-feather="anchor"></i>
                                                        </div>
                                                        <div class="col-4 text-center"><i data-feather="settings"></i>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="text-center">
                                                    <button class="flip-btn" id="flip-btn">Add New Bookmark</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="back">
                                            <ul>
                                                <li>
                                                    <div class="droplet-dropdown bookmark-dropdown flip-back-content">
                                                        <input type="text" placeholder="search...">
                                                    </div>
                                                </li>
                                                <li>
                                                    <button class="d-block flip-back" id="flip-back">Back</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>

                        <li class="onhover-dropdown"><i data-feather="message-square"></i>
                            <ul class="chat-dropdown onhover-show-div">
                                <li><i data-feather="message-square"></i>
                                    <h6 class="f-18 mb-0">Message Box </h6>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid rounded-circle me-3"
                                            src="<?= base_url('assets/pusatbackend/images/user/1.jpg'); ?>" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="media-body"><span>Erica Hughes</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-success">58 mins ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid rounded-circle me-3"
                                            src="<?= base_url('assets/pusatbackend/images/user/2.jpg'); ?>" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="media-body"><span>Kori Thomas</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-success">1 hr ago</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="media"><img class="img-fluid rounded-circle me-3"
                                            src="<?= base_url('assets/pusatbackend/images/user/4.jpg'); ?>" alt="">
                                        <div class="status-circle offline"></div>
                                        <div class="media-body"><span>Ain Chavez</span>
                                            <p>Lorem Ipsum is simply dummy...</p>
                                        </div>
                                        <p class="f-12 font-danger">32 mins ago</p>
                                    </div>
                                </li>
                                <li class="text-center"> <a class="btn btn-primary" href="#">View All </a></li>
                            </ul>
                        </li>
                        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                    data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="media profile-media"><img class="b-r-10"
                                    src="<?php echo base_url() ?>assets/pusatbackend/images/profile/profile.jpg" alt="">
                                <div class=" media-body">
                                    <span><?php echo $this->session->userdata('sess_fullname') ?></span>
                                    <p class="mb-0 font-roboto">
                                        <?php echo ucfirst($this->session->userdata('sess_level')) ?><i
                                            class="middle fa fa-angle-down"></i></p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                                <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                                <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                                <li><a href="<?= base_url('Login/logout'); ?>"><i data-feather="log-in"> </i><span>Log
                                            out</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
                <script class="empty-template" type="text/x-handlebars-template">
                    <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
                </script>
            </div>
        </div>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light"
                                src="<?= base_url('assets/pusatbackend/images/logo/senyumdesa.jpg'); ?>" alt=""><img
                                class="img-fluid for-dark"
                                src="<?= base_url('assets/pusatbackend/images/logo/logo_dark.jpg'); ?>" alt=""></a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                            </i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                                src="<?= base_url('assets/pusatbackend/images/logo/senyumdesa.jpg'); ?>" alt=""></a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                            src="<?= base_url('assets/pusatbackend/images/logo/senyumdesa.jpg'); ?>"
                                            alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                            aria-hidden="true"></i></div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6 class="lan-1">Dashboard</h6>
                                        <p class="lan-2">Halaman Dashboard.</p>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link " href="<?= base_url('Dashboard'); ?>"><i
                                            data-feather="home"></i><span class="lan-3">Dashboard </span></a>
                                </li>

                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                        href="<?= base_url('Data_akun'); ?>"><i data-feather="git-pull-request">
                                        </i><span>Data
                                            Akun</span></a></li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="<?= base_url('master'); ?>"><i
                                            data-feather="monitor">
                                        </i><span>Data Master Cabang</span></a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="kanban.html"><i
                                            data-feather="monitor">
                                        </i><span>Data Donasi</span></a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="kanban.html"><i
                                            data-feather="monitor">
                                        </i><span>Profile</span></a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="kanban.html"><i
                                            data-feather="monitor">
                                        </i><span>Rekap Dana </span></a>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="kanban.html"><i
                                            data-feather="monitor">
                                        </i><span>Laporan Dana</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->