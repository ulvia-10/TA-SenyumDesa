<div class="layout-content-body">
	<div class="title-bar" style="text-align:center;">
		<h1 class="title-bar-title">
			<span class="d-ib">PENDAFTARAN VOLUNTEER <i class="fa fa-users" aria-hidden="true"></i> </span> <br> <br>

		</h1>
	</div>
	<div class="card-shadow">
		<div class="card-body">

			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="demo-form-wrapper">
						<form id="demo-form-wizard-1" action="<?php echo site_url('rekruitment/prosestambah')?>"
							method="POST" enctype="multipart/form-data" data-toggle="validator">
							
							<ul class="steps">
								<li class="step col-xs-4 active">
									<a class="step-segment" href="#tab-1" data-toggle="tab">
										<span class="step-icon "> <i class="fa fa-address-book" aria-hidden="true"></i>
										</span>
									</a>
									<div class="step-content">
										<strong class="hidden-xs">Tahap Pengisian Formulir</strong>
									</div>
								</li>
								<li class="step col-xs-4">
									<a class="step-segment" href="#tab-2" data-toggle="tab">
										<span class="step-icon"> <i class="fas fa-microphone-alt    "></i> </span>
									</a>
									<div class="step-content">
										<strong class="hidden-xs">Tahap Wawancara</strong>
									</div>
								</li>
								<li class="step col-xs-4">
									<a class="step-segment" href="#tab-3" data-toggle="tab">
										<span class="step-icon icon"> <i class="fas fa-book-reader    "></i> </span>
									</a>
									<div class="step-content">
										<strong class="hidden-xs">Tahap Pembekalan</strong>
									</div>
								</li>
							</ul>
							<div class="tab-content">
								<div id="tab-1" class="tab-pane active">
									<h4 class="text-center m-y-md">
										<span>Formulir Pendaftaran Volunteer</span>
									</h4>
									<!-- flash data -->
									<?php echo $this->session->flashdata('pesan') ?>
									<!-- end flash data  -->
									<form action="<?php echo base_url('rekruitment/prosesTambah') ?>" method="POST"
										enctype="multipart/form-data">
										<div class="row">
											<div class="col-sm-8 col-sm-offset-2">
												<div class="form-group">
													<label for="full_name" class="control-label">Nama Lengkap</label>
													<input id="full_name" class="form-control" type="text"
														name="full_name" spellcheck="false" autocomplete="off"
														data-rule-required="true"
														data-msg-required="Isi Nama Lengkap Anda"
														value="<?php echo $profile['full_name'] ?>">
													<small class="help-block">Bukan nama panggilan/julukan.</small>
												</div>
												<div class="form-group">
													<label for="asal" class="control-label">Asal</label>
													<input id="asal" class="form-control" type="text" name="asal"
														spellcheck="false" autocomplete="off" data-rule-required="true"
														data-msg-required="Asal pekerjaan/kampus">
													<small class="help-block">Asal Kampus/Pekerjaan</small>
												</div>
												<div class="form-group">
													<label for="reason_join" class="control-label">Alasan
														Bergabung</label>
													<textarea id="reason_join" class="form-control" type="text"
														name="reason_join" spellcheck="false" autocomplete="off"
														data-rule-required="true"
														data-msg-required="Alasan bergabung wajib diisi"></textarea>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label" for="form-control-22">Pas
														Foto</label>
													<div class="col-sm-9">
														<div class="input-group">
															<input class="form-control" type="text"
																placeholder="No file chosen">
															<span class="input-group-btn">
																<label class="btn btn-primary file-upload-btn">
																	<input id="form-control-22"
																		class="file-upload-input" type="file"
																		name="photo">
																	<span class="icon"> <i class="fa fa-paperclip"
																			aria-hidden="true"></i></span>
																</label>
															</span>
														</div>
														<p class="help-block">
															<small>Foto formal Format: jpg, png, jpeg</small>
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label" for="form-control-22">Upload
														CV</label>
													<div class="col-sm-9">
														<div class="input-group">
															<input class="form-control" type="text"
																placeholder="No file chosen">
															<span class="input-group-btn">
																<label class="btn btn-primary file-upload-btn">
																	<input id="form-control-22"
																		class="file-upload-input" type="file" name="cv">
																	<span class="icon"> <i class="fa fa-paperclip"
																			aria-hidden="true"></i></span>
																</label>
															</span>
														</div>
														<p class="help-block">
															<small>Allowed type : PDF</small>
														</p>
													</div>
												</div>
												<div class="form-group">
												<label >Bukti Follow</label>
													<input type="radio" id="contactChoice1"
													name="bukti_follow" value="sudah" required="Gender harap DiIsi">
													<label for="contactChoice1">Sudah</label>

													<input type="radio" id="contactChoice1"
													name="bukti_follow" value="belum" required="Gender harap DiIsi">
													<label for="contactChoice1">Belum</label>
												</div>
							
												<div class="form-group">
													<label class="col-sm-3 control-label" for="form-control-22">Bukti
														Pembayaran</label>
													<div class="col-sm-9">
														<div class="input-group">
															<input class="form-control" type="text"
																placeholder="No file chosen">
															<span class="input-group-btn">
																<label class="btn btn-primary file-upload-btn">
																	<input id="form-control-22"
																		class="file-upload-input" type="file"
																		name="bukti_bayar">
																	<span class="icon"> <i
																			class="fas fa-image    "></i></span>
																</label>
															</span>
														</div>
														<p class="help-block">
															<small>Allowed type : jpg jpeg png</small>
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label" for="form-control-21">Pilih Cabang</label>
													<div class="col-sm-9">
														<select id="form-control-21" class="custom-select"
															name="name_cabang" required="Nama Cabang Harus diisi">
															<option value="name_cabang">-- Pilih salah satu -- </option>
															<?php

																foreach ($data_master->result_array() as $cabang) {

																	echo '<option value="' . $cabang['id_cabang'] . '">' . $cabang['name_cabang'] . '</option>';
																}
																?>
														</select>
													</div>
												</div>

												<div class="form-group">
													<button class="btn btn-primary btn-block btn-next"
														type="submit">Daftar
														<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
													</button>
												</div>
											</div>
										</div>
									</form>
								</div>
								<!-- tab 2 -->
								<div id="tab-2" class="tab-pane">
									<h4 class="text-center m-y-md">
										<span>Selamat! Anda Lolos Tahap Administrasi! </span>
									</h4> <br>
									<div class="row">
										<div class="col-xs-6 col-sm-9" style="margin-left: 90px;">
											<div class="pricing-card">
												<div class="pricing-card-header bg-primary">
													<h4 class="m-y-sm">Wawancara <i class="fa fa-microphone"
															aria-hidden="true"></i></h4>
												</div>
												<div class="pricing-card-body">
													<h2 class="pricing-card-price">
														<span class="pricing-card-currency"></span> <i
															class="fa fa-microchip" aria-hidden="true"></i>
													</h2>
													<ul class="pricing-card-details">
														<li>Nama Peserta:
															<span><?php echo $this->session->userdata('sess_fullname') ?></span>
														</li>
														<li >Cabang:<?= $profile['name_cabang']; ?> </li>
														<?php
														
															$tanggal = "-";
															if ( $profile['tgl_wawancara'] ){

																$tanggal = date('d-m-Y',strtotime($profile['tgl_wawancara']));
															}
														?>
														<li class="card-text">Tanggal Wawancara: <?= $tanggal ?> </li>
														<li>Pewawancara: </li>
													</ul>
													<label class="custom-control custom-control-primary custom-radio">
														<input class="custom-control-input" type="radio" name="plan_1"
															value="plan-2" checked="checked">
														<span class="custom-control-indicator"></span>
														<span class="custom-control-label">Link:  <?= $profile['link_wawancara']; ?> </span>
													</label>
												</div>
											</div>
										</div>

									</div>
									<div class="form-group text-center">
										<p>
											<small>Silahkan Lakukan wawancara sesuai dengan jadwal di atas. Semangat!
											</small>
										</p>
										<button class="btn btn-primary btn-pill btn-next"
											type="button">Continue</button>
									</div>
								</div>
								<!-- tab 3  -->
								<div id="tab-3" class="tab-pane">
									<li class="divider"></li>
									<div class="row">

										<div class="col-xs-6 col-sm-9" style="margin-left: 90px;">
											<div class="pricing-card">
												<div class="pricing-card-header bg-primary">
													<h4 class="m-y-sm">Pembekalan <i class="fas fa-book-open    "></i>
													</h4>
												</div>
												<div class="pricing-card-body">
													<h2 class="pricing-card-price">
														<span class="pricing-card-currency"></span> <i
															class="fa fa-bullhorn" aria-hidden="true"></i>

													</h2>
													<ul class="pricing-card-details">
														<li>Nama Peserta:
															<span><?php echo $this->session->userdata('sess_fullname') ?></span>
														</li>
														<li>Cabang: <?= $profile['name_cabang']; ?></li>
														<li>Tanggal Sharing: <?= date('d-m-Y',strtotime($profile['tgl_sharing'])); ?> </li>
													</ul>
													<label class="custom-control custom-control-primary custom-radio">
														<input class="custom-control-input" type="radio" name="plan_1"
															value="plan-2" checked="checked">
														<span class="custom-control-indicator"></span>
														<span class="custom-control-label">Link: <?= $profile['link_sharing']; ?> </span>
													</label>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>
