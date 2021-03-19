<div class="card">
	<div class="card-header">
		<h5>Add New Account</h5>
	</div>
	<form class="form theme-form" action="<?php echo base_url('data_akun/prosesTambah') ?>" method="POST">
		<div class="card-body">
			<div class="row">
				<div class="col">
					<div class="mb-2 row">
						<label class="col-sm-3 col-form-label">Name</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" placeholder="Type full name">
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Username</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" placeholder="Type username">
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Email</label>
						<div class="col-sm-9">
							<input class="form-control" id="exampleInputEmail1" type="email"
								placeholder="Demo@gmail.com">
						</div>
					</div>

					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Password</label>
						<div class="col-sm-9">
							<input class="form-control" type="password" placeholder="Input max length 6" maxlength="6">
						</div>
					</div>

					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Telephone</label>
						<div class="col-sm-9">
							<input class="form-control m-input digits" type="tel" value="91-(999)-999-999"
								maxlength="12">
						</div>
					</div>
					<div class="mb-2 row">
						<label class="col-sm-3 col-form-label">Tempat Lahir</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" placeholder="Type your born place ">
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Tanggal lahir</label>
						<div class="col-sm-9">
							<input class="form-control digits" type="date" value="2018-01-01">
						</div>
					</div>
					<div class="mb-2 row">
						<label class="col-sm-3 col-form-label">Asal</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" placeholder="Type asal kampus/instansi/kerja">
						</div>
					</div>
					<div class="row">

						<label class="col-sm-3 col-form-label">Gender</label>
						<div class="col-sm-9">
							<div class="m-checkbox-inline custom-radio-ml">
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline4" type="radio" name="gender"
										value="gender">
									<label class="form-check-label mb-0" for="radioinline4"><span class="digits">
											Female</span></label>
								</div>
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline5" type="radio" name="gender"
										value="gender">
									<label class="form-check-label mb-0" for="radioinline5"><span class="digits">
											Male</span></label>
								</div>
							</div>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Date</label>
						<div class="col-sm-9">
							<input class="form-control digits" type="date" value="2018-01-01">
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label">Pas Foto</label>
								<div class="col-sm-9">
									<input class="form-control" type="file">
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
										value="pusat">
									<label class="form-check-label mb-0" for="radioinline1">Option<span class="digits">
											Admin Pusat</span></label>
								</div>
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline2" type="radio" name="level"
										value="korwil">
									<label class="form-check-label mb-0" for="radioinline2">Option<span class="digits">
											Admin Korwil</span></label>
								</div>
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline3" type="radio" name="level"
										value="anggota">
									<label class="form-check-label mb-0" for="radioinline3">Option<span class="digits">
											Anggota</span></label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">

						<div class="row" id="element-wilayah">

							<div class="mb-2 row">
								<label class="col-sm-3 col-form-label">Wilayah</label>
								<div class="col-sm-9">
									<select name="wilayah" class="form-select digits" id="">
										<option value="">-- Pilih salah satu --</option>

										<?php
										
										
											foreach ( $data_master AS $cabang) {

												echo '<option value="'.$cabang['id_cabang'].'">'.$cabang['name_cabang'].'</option>';
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
									<input class="form-check-input" id="radioinline7" type="radio" name="gender"
										value="active">
									<label class="form-check-label mb-0" for="radioinline7"><span class="digits">
											Active</span></label>
								</div>
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline8" type="radio" name="gender"
										value="inactive">
									<label class="form-check-label mb-0" for="radioinline8"><span class="digits">
											Inactive</span></label>
								</div>

							</div>
						</div>
					</div>
					<div class="row">
						<label class="col-sm-3 col-form-label">Address</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="5" cols="5" placeholder="Type Address"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="col-sm-9 offset-sm-3">
				<button class="btn btn-secondary" type="submit">Tambah</button>
				<input class="btn btn-light" type="reset" value="Cancel">
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
	});

</script>
