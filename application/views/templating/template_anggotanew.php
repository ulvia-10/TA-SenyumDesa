<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<!-- latest jquery-->
    <link rel="stylesheet" type="text/css" href="http://admin.pixelstrap.com/cuba/assets/css/vendors/calendar.css">
    <!-- Plugins css Ends-->

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
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/pusatbackend/css/vendors/animate.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/pusatbackend/css/vendors/chartist.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/pusatbackend/css/vendors/date-picker.css'); ?>">
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url() ?>assets/pusatbackend/css/vendors/date-time-picker.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url() ?>assets/pusatbackend/css/vendors/datatables.css">
	<!-- Animate  -->
	 <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/pusatbackend/css/vendors/animate.css">
	<!-- Plugins css Ends-->
	<!-- Bootstrap css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pusatbackend/css/vendors/bootstrap.css">
	<!-- App css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pusatbackend/css/style.css">
	<link id="color" rel="stylesheet" href="<?php echo base_url() ?>assets/pusatbackend/css/color-1.css" media="screen">
	<!-- Responsive css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pusatbackend/css/responsive.css">

	<script src="<?php echo base_url() ?>assets/pusatbackend/js/jquery-3.5.1.min.js"></script>
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
				<div class="nav-right col-8 pull-right right-header p-0" style="margin-left: 25%;">
					<ul class="nav-menus">
						<li class="language-nav">
							<div class="translate_wrapper">
								<!-- Bahasa -->

							</div>
						</li>
					
						<li class="onhover-dropdown">
						<?php
									$notif = $this->db->get_where('tbl_notif', ['is_read' => 0])->result_array();
									$notif_count = count($notif);
                            	?>
							<div class="notification-box"><i data-feather="bell"></i> <span
										class="badge rounded-pill badge-secondary">
										<?= $notif_count ?>
									</span></div>
							<ul class="notification-dropdown onhover-show-div">
								<li><i data-feather="bell"></i>
									<h6 class="f-18 mb-0">Notifications</h6>
								</li>
								<?php foreach ($notif as $bell) : ?>
									<li>
										<p><i class="fa fa-circle-o me-3 font-primary">
											</i><?= $bell['id_notif'] ?></p>
										<p><i class="fa fa-circle-o me-3 font-primary">
											</i><?= $bell['judul'] ?></p>
									</li>
									<?php endforeach; ?>
								<li><a class="btn btn-primary" href="<?= base_url('kegiatan/detailnotifikasi');?>">Check all notification</a></li>
							</ul>
						</li>
						<li>
							<div class="mode"><i class="fa fa-moon-o"></i></div>
						</li>

						<li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
									data-feather="maximize"></i></a></li>
						<li class="profile-nav onhover-dropdown p-0 me-0" >
							<div class="media profile-media">
							<img class="b-r-6"  src="<?php echo base_url('assets/images/' . $this->session->userdata('sess_foto')) ?>" style="width:45px; height:55px;" alt="">
								<div class=" media-body">
									<span><?php echo $this->session->userdata('sess_fullname') ?></span>
									<p class="mb-0 font-roboto">
										<?php echo ucfirst($this->session->userdata('sess_level')) ?><i
											class="middle fa fa-angle-down"></i></p>
								</div>
							</div>
							<ul class="profile-dropdown onhover-show-div">
								<li><a href="<?= base_url('kegiatan/viewprofile');?>"><i data-feather="user"></i><span>Account </span></a></li>
								<li><a href="<?= base_url('login/logout'); ?>"><i data-feather="log-in"> </i><span>Log
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
                                src="<?= base_url('assets/images/Vista Konstruksi.gif'); ?>" alt="">
								<img
                                class="img-fluid for-dark"
                                src="<?= base_url('assets/pusatbackend/images/logo/logo_dark.jpg'); ?>" alt=""></a> 
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                            </i>
                        </div>
                    </div> 
					<div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
					src="<?= base_url('assets/images/Vista Konstruksi.gif'); ?>" alt=""></a>
					</div>
					<nav class="sidebar-main">
						<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
						<div id="sidebar-menu">
							<ul class="sidebar-links" id="simple-bar">
								<li class="back-btn"><a href="index.html"><img class="img-fluid"
								src="<?= base_url('assets/images/Vista Konstruksi.gif'); ?>"	
											alt=""></a>
									<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
											aria-hidden="true"></i></div>
								</li>
								<br><br>
								<li class="sidebar-list">
									<a class="sidebar-link " href="<?= base_url('rekruitment/index'); ?>"><i
											data-feather="home"></i><span class="lan-3">Dashboard </span></a>
								</li>
								<li class="sidebar-list">
									<a class="sidebar-link sidebar-title link-nav" href="<?= base_url('kegiatan/viewprofile'); ?>"><i
											data-feather="user">
										</i><span>My Profile</span></a>
								</li>
                                <!-- <li class="sidebar-list">
									<a class="sidebar-link sidebar-title link-nav" href="<?= base_url('kegiatan/editprofile'); ?>"><i
											data-feather="user-check">
										</i><span>Edit Profile</span></a>
								</li> -->
								<li class="sidebar-list">
									<a class="sidebar-link sidebar-title link-nav" href="<?= base_url('kegiatan/listkegiatan'); ?>"><i
											data-feather="list">
										</i><span>Daftar Kegiatan</span></a>
								</li>
								<li class="sidebar-list">
									<a class="sidebar-link sidebar-title link-nav" href="<?= base_url('kegiatan/historypembayaran'); ?>"><i
											data-feather="shopping-bag">
										</i><span>Kas</span></a>
								</li>
								<!-- donasi -->
								<li class="sidebar-list">
									<a class="sidebar-link sidebar-title link-nav" href="<?= base_url('donasi/riwayatdonasi'); ?>"><i
											data-feather="airplay">
										</i><span>Donasi</span></a>
								</li>
							
                                <li class="sidebar-list">
									<a class="sidebar-link sidebar-title link-nav" href="<?= base_url('login/logout'); ?>"><i
											data-feather="power">
										</i><span>Log out</span></a>
								</li>

							</ul>
						</div>
						<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
					</nav>
				</div>
			</div>
			<div class="page-body">
				<?php $this->load->view($namafolder . '/' . $namafileview); ?>
			</div>
			<!-- footer start-->
			<footer class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 footer-copyright text-center">
							<p class="mb-0">Copyright 2021 © Senyum Desa </p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<!-- latest jquery-->
	<script src="<?php echo base_url() ?>assets/pusatbackend/js/datepicker/date-time-picker/moment.min.js"></script>
	<script
		src="<?php echo base_url() ?>assets/pusatbackend/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js">
	</script>
	<script src="<?php echo base_url() ?>assets/pusatbackend/js/datepicker/date-time-picker/datetimepicker.custom.js">
	</script>
	<!-- Bootstrap js-->
	<script src="<?php echo base_url() ?>assets/pusatbackend/js/bootstrap/bootstrap.bundle.min.js"></script>
	<!-- feather icon js-->
	<script src="<?php echo base_url() ?>assets/pusatbackend/js/icons/feather-icon/feather.min.js"></script>
	<script src="<?php echo base_url() ?>assets/pusatbackend/js/icons/feather-icon/feather-icon.js"></script>
	<!-- scrollbar js-->
	<script src="<?php echo base_url() ?>assets/pusatbackend/js/scrollbar/simplebar.js"></script>
	<script src="<?php echo base_url() ?>assets/pusatbackend/js/scrollbar/custom.js"></script>
	<!-- Sidebar jquery-->
	<script src="<?php echo base_url() ?>assets/pusatbackend/js/config.js"></script>
	<!-- Plugins JS start-->
	<script src="<?php echo base_url() ?>assets/pusatbackend/js/sidebar-menu.js"></script>
	<script src="<?php echo base_url() ?>assets/pusatbackend/js/datatable/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ?>assets/pusatbackend/js/datatable/datatables/datatable.custom.js"></script>
	<script src="<?php echo base_url() ?>assets/pusatbackend/js/tooltip-init.js"></script>

	<!-- js timeline -->
	<script src="http://admin.pixelstrap.com/cuba/assets/js/timeline/timeline-v-1/main.js"></script>
    <script src="http://admin.pixelstrap.com/cuba/assets/js/modernizr.js"></script>
	
	<script src="<?php echo base_url() ?>assets/pusatbackend/js/sidebar-menu.js"></script>
	<!-- Plugins JS Ends-->
	<!-- Theme js-->
	<script src="<?php echo base_url() ?>assets/pusatbackend/js/script.js"></script>
	<script src="<?php echo base_url() ?>assets/pusatbackend/js/theme-customizer/customizer.js"></script>

	<!-- Dashboard JS-->
	
	<script src="<?= base_url('assets/pusatbackend/js/chart/chartist/chartist.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/chart/chartist/chartist-plugin-tooltip.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/chart/knob/knob.min.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/chart/knob/knob-chart.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/chart/apex-chart/apex-chart.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/chart/apex-chart/stock-prices.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/notify/bootstrap-notify.min.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/dashboard/default.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/notify/index.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/datepicker/date-picker/datepicker.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/datepicker/date-picker/datepicker.en.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/datepicker/date-picker/datepicker.custom.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/typeahead/handlebars.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/typeahead/typeahead.bundle.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/typeahead/typeahead.custom.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/typeahead-search/handlebars.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/typeahead-search/typeahead-custom.js'); ?>"></script>
	<script src="<?= base_url('assets/pusatbackend/js/tooltip-init.js'); ?>"></script>
	<!-- calendar -->
	

	<!--end  Plugin used-->

	<style>
		.removeRow {
			background-color: #FF0000;
			color: #FFFFFF;
		}

	</style>
	<script>
		$(document).ready(function () {

			$('.delete_checkbox').click(function () {
				if ($(this).is(':checked')) {
					$(this).closest('tr').addClass('removeRow');
				} else {
					$(this).closest('tr').removeClass('removeRow');
				}
			});

			$('#delete').click(function () {
				var checkbox = $('.delete_checkbox:checked');
				if (checkbox.length > 0) {
					var checkbox_value = [];
					$(checkbox).each(function () {
						checkbox_value.push($(this).val());
					});
					$.ajax({
						url: "<?php echo base_url(); ?>Master/delete",
						method: "POST",
						data: {
							checkbox_value: checkbox_value
						},
						success: function () {
							$('.removeRow').fadeOut(1500);
						}
					})
				} else {
					alert('Select atleast one records');
				}
			});

		});

		<script>
		window.setTimeout(function () {
			$(".alert").fadeTo(500, 0).slideUp(500, function () {
				$(this).remove();
			});
		}, 5000);

	</script>

	</script>


</body>

</html>
