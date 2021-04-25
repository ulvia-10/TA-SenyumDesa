<div class="page-content">

	<!--login start-->

	<section class="register">
		<div class="container">
			<div class="row justify-content-center text-center">
				<div class="col-lg-8 col-md-12">
					<div class="mb-5">
						<h2><span class="font-w-4"></span> Sign Up</h2>
						<p class="lead">Mari Bergabung Dengan Kami, Mengabdi ke Pelosok Indonesia! </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-md-10 ms-auto me-auto">
					<div class="register-form text-center">

						<form id="contact-form" action="<?php echo base_url('login/proses_register')?>" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input id="full_name" type="text" name="full_name" class="form-control"
											placeholder="Nama Lengkap" required="required"
											data-error="Nama Lengkap is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input id="username" type="text" name="username" class="form-control"
											placeholder="Username" required="required"
											data-error="Username is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input id="email" type="email" name="email" class="form-control"
											placeholder="Email" required="required"
											data-error="Valid email is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input id="telp" type="number" name="telp" class="form-control"
											placeholder="Nomor Whatsapp" required="required"
											data-error="Nomor is required" maxlength="12">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input id="password1" type="password" name="password1" class="form-control"
											placeholder="Password" required="required"
											data-error="password is required." maxlength="6">
											<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input id="password2" type="password" name="password2" class="form-control"
											placeholder="Repeat Password" required="required" data-error="Confirm Password is required." maxlength="6" >
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<select class="form-control" name="gender" id="gender">
											<option selected>Pilih Gender</option>
											<option value="L">Male</option>
											<option value="P">Female</option>
										</select>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input id="tempat_lahir" type="textarea" name="tempat_lahir"
											class="form-control" placeholder="Tempat Lahir" required="required"
											data-error="tempat lahir is required.">

										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" value="2021-04-12" name="tanggal_lahir"
											id="tgl_tragedi">
										<small>Pilih tanggal Lahir</small>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input id="form_alamat" type="text" name="address" class="form-control"
											placeholder="Alamat" required="required" data-error="Alamat is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<button class="" type="submit">Buat Akun</button>
								</div>
							</div>
						</form>
						<div class="d-flex align-items-center mt-5" style="margin-left: 250px;"> <span
								class="text-muted me-1">Do you have an account?</span>
							<a href="<?php echo base_url('login/index') ?>">Sign In</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<!--login end-->
