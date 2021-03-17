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
	<link rel="icon" href="<?php echo base_url() ?>assets/backend/images/favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/backend/images/favicon.png" type="image/x-icon">
	<title>Cuba - Premium Admin Template</title>
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
		rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/backend/css/fontawesome.css">
	<!-- ico-font-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/backend/css/vendors/icofont.css">
	<!-- Themify icon-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/backend/css/vendors/themify.css">
	<!-- Flag icon-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/backend/css/vendors/flag-icon.css">
	<!-- Feather icon-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/backend/css/vendors/feather-icon.css">
  <!-- datatables -->
  <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/cuba/assets/css/vendors/datatables.css">
	<!-- Plugins css start-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/backend/css/vendors/scrollbar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/backend/css/vendors/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/backend/css/vendors/chartist.css">
	<link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/cuba/assets/css/vendors/owlcarousel.css">
	<link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/cuba/assets/css/vendors/prism.css">
	<!-- Plugins css Ends-->
	<!-- Bootstrap css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/backend/css/vendors/bootstrap.css">
	<!-- App css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/backend/css/style.css">
	<link id="color" rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/color-1.css" media="screen">
	<!-- Responsive css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/backend/css/responsive.css">

	<!-- latest jquery-->
	<script src="<?php echo base_url() ?>assets/backend/js/jquery-3.5.1.min.js"></script>
</head>

<body>
	<!-- tap on top starts-->
	<div class="tap-top"><i data-feather="chevrons-up"></i></div>
	<!-- tap on tap ends-->
	<!-- page-wrapper Start-->
	<div class="page-wrapper compact-wrapper" id="pageWrapper">
		<!-- Page Header Start-->
		<div class="page-header">
			<div class="header-wrapper row m-0">
				<form class="form-inline search-full col" action="dashboard-02.html#" method="get">
					<div class="form-group w-100">
						<div class="Typeahead Typeahead--twitterUsers">
							<div class="u-posRelative">
								<input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
									placeholder="Search Cuba .." name="q" title="" autofocus>
								<div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span>
								</div><i class="close-search" data-feather="x"></i>
							</div>
							<div class="Typeahead-menu"></div>
						</div>
					</div>
				</form>
				<div class="header-logo-wrapper col-auto p-0">
					<div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
								src="<?php echo base_url() ?>assets/backend/images/logo/logo.png" alt=""></a></div>
					<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
					</div>
				</div>
				<div class="left-header col horizontal-wrapper ps-0">
					<ul class="horizontal-menu">
						<li class="mega-menu outside"><a class="nav-link" href="dashboard-02.html#!"><i
									data-feather="layers"></i><span>Bonus Ui</span></a>

						</li>
						<li class="level-menu outside"><a class="nav-link" href="dashboard-02.html#!"><i
									data-feather="inbox"></i><span>Level Menu</span></a>
							<ul class="header-level-menu menu-to-be-close">
								<li><a href="file-manager.html" data-original-title="" title=""> <i
											data-feather="git-pull-request"></i><span>File manager </span></a></li>
								<li><a href="dashboard-02.html#!" data-original-title="" title=""> <i
											data-feather="users"></i><span>Users</span></a>
									<ul class="header-level-sub-menu">
										<li><a href="file-manager.html" data-original-title="" title=""> <i
													data-feather="user"></i><span>User Profile</span></a></li>
										<li><a href="file-manager.html" data-original-title="" title=""> <i
													data-feather="user-minus"></i><span>User Edit</span></a></li>
										<li><a href="file-manager.html" data-original-title="" title=""> <i
													data-feather="user-check"></i><span>Users Cards</span></a></li>
									</ul>
								</li>
								<li><a href="kanban.html" data-original-title="" title=""> <i data-feather="airplay"></i><span>Kanban
											Board</span></a></li>
								<li><a href="bookmark.html" data-original-title="" title=""> <i
											data-feather="heart"></i><span>Bookmark</span></a></li>
								<li><a href="social-app.html" data-original-title="" title=""> <i data-feather="zap"></i><span>Social
											App </span></a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="nav-right col-8 pull-right right-header p-0">
					<ul class="nav-menus">
						<li class="language-nav">
							<div class="translate_wrapper">
								<div class="current_lang">
									<div class="lang"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN </span></div>
								</div>
								<div class="more_lang">
									<div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span
											class="lang-txt">English<span> (US)</span></span></div>
									<div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span
											class="lang-txt">Deutsch</span></div>
									<div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span
											class="lang-txt">Español</span></div>
									<div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span
											class="lang-txt">Français</span></div>
									<div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span
											class="lang-txt">Português<span> (BR)</span></span></div>
									<div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span
											class="lang-txt">简体中文</span></div>
									<div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">لعربية
											<span> (ae)</span></span></div>
								</div>
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
									<p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span class="pull-right">10
											min.</span></p>
								</li>
								<li>
									<p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span>
									</p>
								</li>
								<li>
									<p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span>
									</p>
								</li>
								<li>
									<p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span class="pull-right">6
											hr</span></p>
								</li>
								<li><a class="btn btn-primary" href="dashboard-02.html#">Check all notification</a></li>
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
														<div class="col-4 text-center"><i data-feather="file-text"></i></div>
														<div class="col-4 text-center"><i data-feather="activity"></i></div>
														<div class="col-4 text-center"><i data-feather="users"></i></div>
														<div class="col-4 text-center"><i data-feather="clipboard"></i></div>
														<div class="col-4 text-center"><i data-feather="anchor"></i></div>
														<div class="col-4 text-center"><i data-feather="settings"></i></div>
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
						<li class="onhover-dropdown"><i data-feather="message-square"></i>
							<ul class="chat-dropdown onhover-show-div">
								<li><i data-feather="message-square"></i>
									<h6 class="f-18 mb-0">Message Box </h6>
								</li>
								<li>
									<div class="media"><img class="img-fluid rounded-circle me-3"
											src="<?php echo base_url() ?>assets/backend/images/user/1.jpg" alt="">
										<div class="status-circle online"></div>
										<div class="media-body"><span>Erica Hughes</span>
											<p>Lorem Ipsum is simply dummy...</p>
										</div>
										<p class="f-12 font-success">58 mins ago</p>
									</div>
								</li>
								<li>
									<div class="media"><img class="img-fluid rounded-circle me-3"
											src="<?php echo base_url() ?>assets/backend/images/user/2.jpg" alt="">
										<div class="status-circle online"></div>
										<div class="media-body"><span>Kori Thomas</span>
											<p>Lorem Ipsum is simply dummy...</p>
										</div>
										<p class="f-12 font-success">1 hr ago</p>
									</div>
								</li>
								<li>
									<div class="media"><img class="img-fluid rounded-circle me-3"
											src="<?php echo base_url() ?>assets/backend/images/user/4.jpg" alt="">
										<div class="status-circle offline"></div>
										<div class="media-body"><span>Ain Chavez</span>
											<p>Lorem Ipsum is simply dummy...</p>
										</div>
										<p class="f-12 font-danger">32 mins ago</p>
									</div>
								</li>
								<li class="text-center"> <a class="btn btn-primary" href="dashboard-02.html#">View All </a></li>
							</ul>
						</li>
						<li class="maximize"><a class="text-dark" href="dashboard-02.html#!"
								onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
						<li class="profile-nav onhover-dropdown p-0 me-0">
							<div class="media profile-media"><img class="b-r-10"
									src="<?php echo base_url() ?>assets/backend/images/dashboard/profile.jpg" alt="">
								<div class="media-body"><span><?php echo $this->session->userdata('sess_fullname') ?></span>
									<p class="mb-0 font-roboto"><?php echo ucfirst($this->session->userdata('sess_level')) ?> <i
											class="middle fa fa-angle-down"></i></p>
								</div>
							</div>
							<ul class="profile-dropdown onhover-show-div">
								<li><a href="dashboard-02.html#"><i data-feather="user"></i><span>Account </span></a></li>
								<li><a href="dashboard-02.html#"><i data-feather="mail"></i><span>Inbox</span></a></li>
								<li><a href="dashboard-02.html#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
								<li><a href="dashboard-02.html#"><i data-feather="settings"></i><span>Settings</span></a></li>
								<li><a href="<?php echo base_url('login/logout') ?>"><i data-feather="log-out"> </i><span>Log
											Out</span></a></li>
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
		<!-- Page Header Ends                              -->
		<!-- Page Body Start-->


		<div class="page-body-wrapper">
			<!-- Page Sidebar Start-->
			<div class="sidebar-wrapper">
				<div>
					<div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light"
								src="<?php echo base_url() ?>assets/backend/images/logo/logo.png" alt=""><img class="img-fluid for-dark"
								src="<?php echo base_url() ?>assets/backend/images/logo/logo_dark.png" alt=""></a>
						<div class="back-btn"><i class="fa fa-angle-left"></i></div>
						<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
					</div>
					<div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
								src="<?php echo base_url() ?>assets/backend/images/logo/logo-icon.png" alt=""></a></div>
					<nav class="sidebar-main">
						<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
						<div id="sidebar-menu">
							<ul class="sidebar-links" id="simple-bar">
								<li class="back-btn"><a href="index.html"><img class="img-fluid"
											src="<?php echo base_url() ?>assets/backend/images/logo/logo-icon.png" alt=""></a>
									<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
											aria-hidden="true"></i></div>
								</li>
								<li class="sidebar-main-title">
									<div>
										<h6 class="lan-1">General</h6>
										<p class="lan-2">Dashboards,widgets & layout.</p>
									</div>
								</li>

								<?php $ambilController = $this->uri->segment(1); ?>

								<li class="sidebar-list">
									<label class="badge badge-success">2</label>
									<a class="sidebar-link active <?php if ( $ambilController == "dashboard" ) echo "active"; ?>"
										href="<?php echo base_url('dashboard/index') ?>"><i data-feather="home"></i><span
											class="lan-3">Dashboard</span></a>
								</li>
								<li class="sidebar-list">
									<a class="sidebar-link " href="<?php echo base_url('data_akun/index') ?>"><i
											data-feather="airplay"></i><span class="lan-6">Data Akun</span></a>
								</li>

								<li class="sidebar-list">
									<a class="sidebar-link" href="<?php echo base_url('master/index') ?>"><i
											data-feather="activity"></i>Master Cabang</a>
								</li>

							</ul>
						</div>
						<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
					</nav>
				</div>
			</div>
			<!-- Page Sidebar Ends-->
			<div class="page-body">
				<div class="container-fluid">
					<div class="page-title">
						<div class="row">
							<div class="col-6">
								<h3>
									Hi! Admin Pusat</h3>
							</div>
							<div class="col-6">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
									<li class="breadcrumb-item">Dashboard</li>
									<li class="breadcrumb-item active">Ecommerce</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
				<!-- Container-fluid starts-->
				<div class="container-fluid">
					<!-- Main Content -->
					<?php $this->load->view($namafolder.'/'.$namafileview); ?>
					<!-- End Main Content -->
				</div>
			</div>
			<!-- footer start-->
			<footer class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 footer-copyright text-center">
							<p class="mb-0">Copyright 2020 © IT Polinema </p>
						</div>
					</div>
				</div>
			</footer>
			<script>
				var map;

				function initMap() {
					map = new google.maps.Map(
						document.getElementById('map'), {
							center: new google.maps.LatLng(-33.91700, 151.233),
							zoom: 18
						});

					var iconBase =
						'<?php echo base_url() ?>assets/backend/images/dashboard-2/';

					var icons = {
						userbig: {
							icon: iconBase + '1.png'
						},
						library: {
							icon: iconBase + '3.png'
						},
						info: {
							icon: iconBase + '2.png'
						}
					};

					var features = [{
						position: new google.maps.LatLng(-33.91752, 151.23270),
						type: 'info'
					}, {
						position: new google.maps.LatLng(-33.91700, 151.23280),
						type: 'userbig'
					}, {
						position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
						type: 'library'
					}];

					// Create markers.
					for (var i = 0; i < features.length; i++) {
						var marker = new google.maps.Marker({
							position: features[i].position,
							icon: icons[features[i].type].icon,
							map: map
						});
					};
				}

			</script>
			<script async="" defer=""
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGCQvcXUsXwCdYArPXo72dLZ31WS3WQRw&amp;callback=initMap">
			</script>
		</div>
	</div>
	
	<!-- Bootstrap js-->
	<script src="<?php echo base_url() ?>assets/backend/js/bootstrap/bootstrap.bundle.min.js"></script>
	<!-- feather icon js-->
	<script src="<?php echo base_url() ?>assets/backend/js/icons/feather-icon/feather.min.js"></script>
	<script src="<?php echo base_url() ?>assets/backend/js/icons/feather-icon/feather-icon.js"></script>
	<!-- scrollbar js-->
	<script src="<?php echo base_url() ?>assets/backend/js/scrollbar/simplebar.js"></script>
	<script src="<?php echo base_url() ?>assets/backend/js/scrollbar/custom.js"></script>
	<!-- Sidebar jquery-->
	<script src="<?php echo base_url() ?>assets/backend/js/config.js"></script>
	<!-- Plugins JS start-->
	<script src="<?php echo base_url() ?>assets/backend/js/sidebar-menu.js"></script>
	<script src="<?php echo base_url() ?>assets/backend/js/chart/chartist/chartist.js"></script>
	<script src="<?php echo base_url() ?>assets/backend/js/chart/chartist/chartist-plugin-tooltip.js"></script>
	<script src="<?php echo base_url() ?>assets/backend/js/chart/apex-chart/apex-chart.js"></script>
	<script src="<?php echo base_url() ?>assets/backend/js/chart/apex-chart/stock-prices.js"></script>
	<script src="http://admin.pixelstrap.com/cuba/assets/js/prism/prism.min.js"></script>
	<script src="http://admin.pixelstrap.com/cuba/assets/js/clipboard/clipboard.min.js"></script>
	<script src="http://admin.pixelstrap.com/cuba/assets/js/counter/jquery.waypoints.min.js"></script>
	<script src="http://admin.pixelstrap.com/cuba/assets/js/counter/jquery.counterup.min.js"></script>
	<script src="http://admin.pixelstrap.com/cuba/assets/js/counter/counter-custom.js"></script>
	<script src="http://admin.pixelstrap.com/cuba/assets/js/custom-card/custom-card.js"></script>
	<script src="http://admin.pixelstrap.com/cuba/assets/js/owlcarousel/owl.carousel.js"></script>
	<script src="http://admin.pixelstrap.com/cuba/assets/js/dashboard/dashboard_2.js"></script>
	<script src="<?php echo base_url() ?>assets/backend/js/tooltip-init.js"></script>
  <!-- datatable -->
  <script src="<?php echo base_url() ?>assets/backend/js/datatables/dataTables.min.js"></script>

  <script>$('#basic-1').DataTable();</script>
	<!-- Plugins JS Ends-->
	<!-- Theme js-->
	<!-- <script src="<?php echo base_url() ?>assets/backend/js/script.js"></script> -->
	<!-- <script src="<?php echo base_url() ?>assets/backend/js/theme-customizer/customizer.js"></script> -->
	<!-- login js-->
	<!-- Plugin used-->
</body>

</html>
