<!DOCTYPE html>
<html lang="en">

<head>

	<!-- meta tags -->
	<meta charset="utf-8">
	<meta name="keywords" content="bootstrap 5, premium, multipurpose, sass, scss, saas" />
	<meta name="description" content="Bootstrap 5 Landing Page Template" />
	<meta name="author" content="www.themeht.com" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title -->
	<title>
		<?= $title ?>
	</title>

	<!-- Favicon Icon -->
	<link rel="shortcut icon" href="<?= base_url('assets/Home/images/logo.png'); ?>" />

	<!-- inject css start -->

	<!-- fontawesome -->
	<link rel="stylesheet" href="path/to/line-awesome/css/line-awesome-font-awesome.min.css">
	<link rel="stylesheet"
		href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet"
		href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

	<!--== bootstrap -->
	<link href="<?= base_url('assets/Home/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="path/to/line-awesome/css/line-awesome-font-awesome.min.css">

	<!--== animate -->
	<link href="<?= base_url('assets/Home/css/animate.css'); ?>" rel="stylesheet" type="text/css" />

	<!--== line-awesome -->
	<link href="<?= base_url('assets/Home/css/line-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />

	<!--== magnific-popup -->
	<link href="<?= base_url('assets/Home/css/magnific-popup.css'); ?>" rel="stylesheet" type="text/css" />

	<!--== owl.carousel -->
	<link href="<?= base_url('assets/Home/css/owl.carousel.css'); ?>" rel="stylesheet" type="text/css" />

	<!--== lightslider -->
	<link href="<?= base_url('assets/Home/css/lightslider.min.css'); ?>" rel="stylesheet" type="text/css" />

	<!--== spacing -->
	<link href="<?= base_url('assets/Home/css/spacing.css'); ?>" rel="stylesheet" type="text/css" />

	<!--== theme.min -->
	<link href="<?= base_url('assets/Home/css/theme.min.css'); ?>" rel="stylesheet" />

	<!-- inject css end -->

</head>

<body>

	<!-- page wrapper start -->

	<div class="page-wrapper">

		<!-- preloader start -->

		<div id="ht-preloader">
			<div class="loader clear-loader"> <span>S</span>
				<span>e</span>
				<span>n</span>
				<span>y</span>
				<span>u</span>
				<span>m</span>
				<span>D</span>
				<span>e</span>
				<span>s</span>
				<span>a</span>
			</div>
		</div>

		<!-- preloader end -->


		<!--header start-->

		<header class="site-header">
			<div id="header-wrap">
				<div class="container">
					<div class="row">
						<!--menu start-->
						<div class="col">
							<nav class="navbar navbar-expand-lg navbar-light">
								<a class="navbar-brand logo text-primary mb-0 font-w-7" href="index.html">
									S<span class="text-dark font-w-4">enyum Desa</span>
								</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
									data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarNav">
									<ul class="navbar-nav mx-auto">
										<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#"
												data-bs-toggle="dropdown">Home</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="<?= base_url('Page'); ?>">Beranda</a>
												</li>
												<li><a class="dropdown-item" href="index.html">Tentang Senyum Desa</a>
												</li>
												<li><a class="dropdown-item" href="index-2.html">Visi Dan Misi</a>
												</li>
											</ul>
										</li>

										<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle"
												href="login.html#" data-bs-toggle="dropdown">Information</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="product-grid.html">Careers</a>
												</li>
												<li><a class="dropdown-item" href="product-list.html">Pengurus Pusat</a>
												</li>
												<li><a class="dropdown-item" href="product-single.html">
														Kontak</a>
												</li>
												<li><a class="dropdown-item" href="product-single.html">
														Cabang Wilayah</a>
												</li>
												<li><a class="dropdown-item" href="product-single.html">
														Coming soon Open donasi</a>
												</li>
												<li><a class="dropdown-item" href="product-single.html">
														kegiatan</a>
												</li>
											</ul>
										</li>
										<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle"
												href="login.html#" data-bs-toggle="dropdown">Blog</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="feature-accordion.html">Maps</a>
												</li>
												<li><a class="dropdown-item" href="feature-blog.html">Social Media</a>
												</li>
												<li><a class="dropdown-item"
														href="feature-testimonial.html">Testimonial</a>
												</li>
												<li><a class="dropdown-item" href="feature-testimonial.html">Gallery</a>
												</li>
											</ul>
										</li>
										    <!-- *************************DONASI***************************** -->
											<li class="nav-item dropdown">
											 <a class="nav-link dropdown-toggle"
                                                href="index-4.html#" data-bs-toggle="dropdown">Donasi <i class="fa fa-hand-o-down" aria-hidden="true"></i></a>
                                            <ul class="dropdown-menu">
											<li><a class="dropdown-item" href="<?= base_url('donasi/donasinonanggota'); ?>">Tambah Bukti Donasi</a>
                                                </li>
                                                <li><a class="dropdown-item" href="<?= base_url('donasi/riwayatdonasinonanggota'); ?>">Daftar Donasi</a>
                                                </li>
                                            </ul>
                                        </li>
									</ul>
								</div>
								<div class="d-sm-flex align-items-center justify-content-end"> <a
										class="btn btn-primary btn-sm ms-3 d-sm-inline-block d-none"
										href="<?php echo base_url('login/index') ?>">Login</a>
									<a class="btn btn-primary btn-sm ms-3 d-sm-inline-block d-none"
										href="<?php echo base_url('login/register') ?>">Sign Up</a>
								</div>
							</nav>

						</div>
						<!--menu end-->
					</div>
				</div>
			</div>
		</header>

		<!--hero section start-->



		<!-- Main Content -->
		<?php $this->load->view($namafolder . '/' . $namafileview); ?>
		<!-- End Main Content -->

		</section>

		<!--newsletter end-->

	</div>
	<script>
		window.setTimeout(function () {
			$(".alert").fadeTo(500, 0).slideUp(500, function () {
				$(this).remove();
			});
		}, 5000);

	</script>
	<!--body content end-->
