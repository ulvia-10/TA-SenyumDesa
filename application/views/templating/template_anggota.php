<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:url" content="http://demo.madebytilde.com/elephant">
    <meta property="og:type" content="website">
    <meta property="og:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta property="og:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:image" content="http://demo.madebytilde.com/elephant.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@madebytilde">
    <meta name="twitter:creator" content="@madebytilde">
    <meta name="twitter:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
   <meta name="twitter:image" content="http://demo.madebytilde.com/elephant.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  	<link rel="icon" type="image/png"  href="<?php echo base_url() ?>assets/pusatbackend/images/logo/logo.png"
		sizes="32x32">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#7e7dcf">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/anggota/css/vendor.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/anggota/css/elephant.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/anggota/css/application.min.css">
    <title><?= $title ?></title>
  
    	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  </head>
  <body class="layout layout-header-fixed">
    <div class="layout-header">
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand navbar-brand-center" href="index.html">
            <img class="navbar-brand-logo" src="<?php echo base_url() ?>assets/img/logo-inverse.svg" alt="Senyum Desa">
            
          </a>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
            <span class="sr-only">Toggle navigation</span>
            <span class="bars">
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
            </span>
            <span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
          </button>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="arrow-up"></span>
            <span class="ellipsis ellipsis-vertical">
              <img class="ellipsis-object" width="32" height="32" src="<?php echo base_url() ?>assets/img/0180441436.jpg" alt="Teddy Wilson">
            </span>
          </button>
        </div>
        <div class="navbar-toggleable">
          <nav id="navbar" class="navbar-collapse collapse">
            <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
                <span class="bar-line bar-line-4 in"></span>
                <span class="bar-line bar-line-5 in"></span>
                <span class="bar-line bar-line-6 in"></span>
              </span>
            </button>
            <ul class="nav navbar-nav navbar-right">
              <li class="visible-xs-block">
                <h4 class="navbar-text text-center">Hi, Teddy Wilson</h4>
              </li>
             
              <li class="dropdown">
                <a class="dropdown-toggle" href="dashboard-1.html#" role="button" data-toggle="dropdown" aria-haspopup="true">
                  <span class="icon-with-child hidden-xs">
                    <span class="icon"> <i class="fa fa-bell" aria-hidden="true"></i> </span>
                    <span class="badge badge-primary badge-above right">7</span>
                  </span>
                  <span class="visible-xs-block">
                    <span class="icon icon-bell icon-lg icon-fw"></span>
                    <span class="badge badge-primary pull-right">7</span>
                    Notifications
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                  <div class="dropdown-header">
                    <a class="dropdown-link" href="dashboard-1.html#">Mark all as read</a>
                    <h5 class="dropdown-heading">Recent Notifications</h5>
                  </div>
                  <div class="dropdown-body">
                    <div class="list-group list-group-divided custom-scrollbar">
                      <a class="list-group-item" href="dashboard-1.html#">
                        <div class="notification">
                          <div class="notification-media">
                            <span class="icon icon-exclamation-triangle bg-warning circle sq-40"> <i class="fa fa-bell" aria-hidden="true"></i> </span>
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">35 min</small>
                            <h5 class="notification-heading">Update Status</h5>
                            <p class="notification-text">
                              <small class="truncate">Failed to get available update data. To ensure the proper functioning of your application, update now.</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="dashboard-1.html#">
                        <div class="notification">
                          <div class="notification-media">
                            <span class="icon icon-flag bg-success circle sq-40"></span>
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">43 min</small>
                            <h5 class="notification-heading">Account Contact Change</h5>
                            <p class="notification-text">
                              <small class="truncate">A contact detail associated with your account teddy.wilson, has recently changed.</small>
                            </p>
                          </div>
                        </div>
                   
                    </div>
                  </div>
                  <div class="dropdown-footer">
                    <a class="dropdown-btn" href="dashboard-1.html#">See All</a>
                  </div>
                </div>
              </li>
              <li class="dropdown hidden-xs">
                <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
                  <img class="circle" width="36" height="36" src="<?php echo base_url() ?>assets/img/0180441436.jpg" alt="Teddy Wilson">     <span><?php echo $this->session->userdata('sess_fullname') ?></span>
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                 
                  <li class="divider"></li>
                  <li><a href="profile.html"> <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400" aria-hidden="true"></i> Profile</a></li>
                  <li><a href="<?= base_url('Login/logout');?>"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Sign out</a></li>
                </ul>
              </li>
         
              
         
            </ul>
            <div class="title-bar">
              <h1 class="title-bar-title">
                <span class="d-ib">Dashboard <i class="fas fa-tachometer-alt "></i> </span>
                
            
              </h1>
              <p class="title-bar-description">
                <small>Hai, Selamat Datang Anggota Senyum Desa! <i class="fas fa-hands-helping    "></i></small>
              </p>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <div class="layout-main">
      <div class="layout-sidebar">
        <div class="layout-sidebar-backdrop"></div>
        <div class="layout-sidebar-body">
          <div class="custom-scrollbar">
            <nav id="sidenav" class="sidenav-collapse collapse">
              <ul class="sidenav level-1">
               <li class="divider"></li>
            
                <li class="sidenav-item">
                <a href="<?= base_url('rekruitment/index');?>">
                    <span class="sidenav-icon icon icon-works"> <i class="fa fa-home" aria-hidden="true"></i></span>
                    <span class="sidenav-label">Dashboard</span>
                  </a>
                </li>
        
                <li class="sidenav-heading">Account</li>
                <li class="sidenav-item has-subnav">
                  <a href="dashboard-1.html#" aria-haspopup="true">
                    <span class="sidenav-icon icon "><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                    <span class="sidenav-label">Profile</span>
                  </a>
                  <ul class="sidenav level-2 collapse">
                    <li><a href="arrows.html"> <span class="sidenav-icon icon icon-works"><i class="fa fa-eye fa-xs" aria-hidden="true"></i> </span> View Profile</a></li>
                    <li><a href="badges.html"><span class="sidenav-icon icon icon-works"><i class="fas fa-edit fa-xs" aria-hidden="true"  ></i> </span>Edit Profile </a></li>   
                  </ul>
                </li>
                <li class="sidenav-heading">Kegiatan</li>
                <li class="sidenav-item has-subnav">
                  <a href="dashboard-1.html#" aria-haspopup="true">
                    <span class="sidenav-icon icon "><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
                    <span class="sidenav-label">Events</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="contacts.html">
                    <span class="sidenav-icon icon icon-works"><i class="fa fa-calendar" aria-hidden="true"></i> </span>
                    <span class="sidenav-label">Schedule</span>
                  </a>
                </li>

              
                <li class="sidenav-heading">Log Out</li>
                <li class="sidenav-item">
                  <a href="<?= base_url('Login/logout');?>">
                    <span class="sidenav-icon icon icon-works"> <i class="fa fa-power-off" aria-hidden="true"></i> </span>
                    <span class="sidenav-label">Log Out</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="layout-content">
      <?php $this->load->view($namafolder . '/' . $namafileview); ?>
      </div>
      <!-- footer -->
      <div class="layout-footer" style="text-align:center;">
        <div class="layout-footer-body">
          <small class="version">Version 1.4.0</small>
          <small class="copyright">2021 &copy; IT Polinema <a href="http://madebytilde.com/">Made by Luvia</a></small>
        </div>
      </div>
    </div>
 
    <script src="<?php echo base_url() ?>assets/anggota/js/vendor.min.js"></script>
    <script src="<?php echo base_url() ?>assets/anggota/js/elephant.min.js"></script>
    <script src="<?php echo base_url() ?>assets/anggota/js/application.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-83990101-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>