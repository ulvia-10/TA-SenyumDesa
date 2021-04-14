<div class="container-fluid">
	<div class="page-title">
		<div class="row">
			<div class="col-6">
				<h3>Data Akun</h3>
			</div>
			<div class="col-6">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
					<li class="breadcrumb-item">Data Tables</li>
					<li class="breadcrumb-item active">Tambah Data Akun</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- Container-fluid starts-->


<div class="card">
	<div class="card-header">
		<h5>Tambah Akun Baru</h5>
	</div>
	<form class="form theme-form" action="<?php echo base_url('data_akun/prosesTambah') ?>" method="POST" enctype="multipart/form-data">
		<div class="card-body">
			<div class="row">
				<div class="col">
					<div class="mb-2 row">
						<label class="col-sm-3 col-form-label">Name</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" placeholder="Isi Nama" name="full_name"
								id="full_name" required="Nama harap DiIsi">
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Username</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" placeholder="Isi username" name="username"
								id="username" required="Username harap DiIsi">
						</div>
					</div>

					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Password</label>
						<div class="col-sm-9">
							<input class="form-control" type="password" placeholder="Input max length 6" maxlength="6"
								name="password" id="password">
						</div>
					</div>


					<div class="mb-2 row">
						<label class="col-sm-3 col-form-label">Tempat Lahir</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" placeholder="Isi tempat lahir" name="tempat_lahir"
								id="tempat_lahir" required="Tempat Lahir harap DiIsi">
						</div>
					</div>

					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-9">
							<input class="form-control digits" type="date" value="2018-01-01" name="tanggal_lahir"
								id="tanggal_lahir" required="Tanggal harap DiIsi">
						</div>
					</div>
					<div class="mb-2 row">
						<label class="col-sm-3 col-form-label">Asal</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" placeholder="Isi asal kampus/instansi/kerja"
								name="asal" id="asal" required="asal harap DiIsi">
						</div>
					</div>
					<div class="row">
						<label class="col-sm-3 col-form-label">Gender</label>
						<div class="col-sm-9">
							<div class="m-checkbox-inline custom-radio-ml">
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline4" type="radio" name="gender"
										id="gender" value="P" required="Gender harap DiIsi">
									<label class="form-check-label mb-0" for="radioinline4"><span class="digits">
											Perempuan</span></label>
								</div>
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline5" type="radio" name="gender"
										id="gender" value="L">
									<label class="form-check-label mb-0" for="radioinline5"><span class="digits">
											Laki</span></label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label" for="photo">Pas Foto</label>
								<div class="col-sm-9">
									<input class="form-control" type="file" name="photo">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<label class="col-sm-3 col-form-label">Level</label>
						<div class="col-sm-9">
							<div class="m-checkbox-inline custom-radio-ml">
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline1" type="radio" name="level"
										id="level" value="pusat" required="Level harap DiIsi">
									<label class="form-check-label mb-0" for="radioinline1"><span class="digits">
											Admin Pusat</span></label>
								</div>
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline2" type="radio" name="level"
										id="level" value="korwil" required="Level harap DiIsi">
									<label class="form-check-label mb-0" for="radioinline2"><span class="digits">
											Admin Korwil</span></label>
								</div>
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline3" type="radio" name="level"
										id="level" value="anggota" required="Level harap DiIsi">
									<label class="form-check-label mb-0" for="radioinline3"><span class="digits">
											Anggota</span></label>
								</div>
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline6" type="radio" name="level"
										id="level" value="calon_anggota" required="Level harap DiIsi">
									<label class="form-check-label mb-0" for="radioinline6"><span class="digits">
										Calon Anggota</span></label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">

						<div class="row" id="element-wilayah">
							<div class="mb-2 row">
								<label class="col-sm-3 col-form-label">Wilayah</label>
								<div class="col-sm-9">
									<select name="name_cabang" class="form-select digits" id=""
										required="wilayah harap DiIsi">
										<option value="name_cabang">-- Pilih salah satu --</option>

										<?php


                                        foreach ($data_master->result_array() as $cabang) {

                                            echo '<option value="' . $cabang['id_cabang'] . '">' . $cabang['name_cabang'] . '</option>';
                                        }
                                        ?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">

						<label class="col-sm-3 col-form-label">Status Account</label>
						<div class="col-sm-9">
							<div class="m-checkbox-inline custom-radio-ml">
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline7" type="radio" name="status_account"
										id="status_account" value="active" required="status harap DiIsi">
									<label class="form-check-label mb-0" for="radioinline7"><span class="digits">
											Active</span></label>
								</div>
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline8" type="radio" name="status_account"
										id="status_account" value="inactive" required="status akun harap DiIsi">
									<label class="form-check-label mb-0" for="radioinline8"><span class="digits">
											Inactive</span></label>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="col-sm-9 offset-sm-3">
				<button class="btn btn-primary" type="submit">Tambah</button>
				<input class="btn btn-warning" type="reset" value="Reset">
				<a href="<?= base_url('Data_akun'); ?>" class="btn btn-light" type="submit">Cancel</a>
			</div>
		</div>
	</form>
</div>

<script>
	let elementWilayah = $('#element-wilayah');

	// sembunyikan
	elementWilayah.hide();

	// perintah event on click
	$('input[name="level"]').change(function () {


		if (this.value == "pusat") {

			elementWilayah.fadeOut();
		} else {

			elementWilayah.fadeIn();
		}
	})

</script>
