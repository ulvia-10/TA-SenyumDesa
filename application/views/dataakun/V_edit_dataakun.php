<div class="card">
	<div class="card-header">
		<h5>Edit Akun
	</div>
	<form class="form theme-form" action="<?php echo base_url('data_akun/edit') ?>" method="POST" enctype="multipart/form-data">
		<div class="card-body">
			<div class="row">
				<div class="col">
				<input type="hidden" name="id_profile" value="<?= $profile['id_profile'];?>">
					<div class="mb-2 row">
						<label class="col-sm-3 col-form-label">Name</label>
						<div class="col-sm-9">
							<input class="form-control" type="text"  name="full_name" id="full_name" value="<?= $profile['full_name'] ;?>">
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Username</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" placeholder="Type username" name="username" id="username" value="<?= $profile['username'] ;?>">
						</div>
					</div>
					<!-- <div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Email</label>
						<div class="col-sm-9">
							<input class="form-control" id="exampleInputEmail1" type="email" name="email" id="email"
								placeholder="Masukkan email yang valid">
						</div>
					</div> -->

					<!-- <div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Password</label>
						<div class="col-sm-9">
							<input class="form-control" type="password" placeholder="Input max length 6" maxlength="6" name="password" id="password">
						</div>
					</div> -->
<!-- 
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Telephone</label>
						<div class="col-sm-9">
							<input class="form-control m-input digits" type="tel" placeholder="91-(999)-999-999"  name="telp" id="telp"
								maxlength="12">
						</div> -->
					</div>
					<div class="mb-2 row">
						<label class="col-sm-3 col-form-label">Tempat Lahir</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" placeholder="Type your born place" name="tempat_lahir" id="tempat_lahir" value="<?= $profile['tempat_lahir'] ;?>">
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Tanggal lahir</label>
						<div class="col-sm-9">
							<input class="form-control digits" type="date" value="2018-01-01" name="tanggal_lahir" id="tanggal_lahir" value="<?= $profile['tanggal_lahir'] ;?>">
						</div>
					</div>
					<div class="mb-2 row">
						<label class="col-sm-3 col-form-label">Asal</label>
						<div class="col-sm-9">
							<input class="form-control" type="text"  name="asal" id="asal" value="<?= $profile['asal'] ;?>">
						</div>
					</div>
					<div class="row">

						<label class="col-sm-3 col-form-label">Gender</label>
						<div class="col-sm-9">
							<div class="m-checkbox-inline custom-radio-ml">
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline4" type="radio" name="gender"
										value="P" <?php echo $profile['gender'] == "P" ? 'checked=""' : '' ?>>
									<label class="form-check-label mb-0" for="radioinline4"><span class="digits">
											Female</span></label>
								</div>
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline5" type="radio" name="gender"
										value="L" <?php echo $profile['gender'] == "L" ? 'checked=""' : '' ?>>
									<label class="form-check-label mb-0" for="radioinline5"><span class="digits">
											Male</span></label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="mb-3 row">
								<label class="col-sm-3 col-form-label">Pas Foto</label>
								<div class="col-sm-9">
									<input class="form-control" type="file" name="photo" id="photo">
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
										value="pusat" <?php echo $profile['level'] == "pusat" ? 'checked=""' : '' ?>>
									<label class="form-check-label mb-0" for="radioinline1">Option<span class="digits">
											Admin Pusat</span></label>
								</div>
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline2" type="radio" name="level"
										value="korwil" <?php echo $profile['level'] == "korwil" ? 'checked=""' : '' ?>>
									<label class="form-check-label mb-0" for="radioinline2">Option<span class="digits">
											Admin Korwil</span></label>
								</div>
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline3" type="radio" name="level"
										value="anggota" <?php echo $profile['level'] == "anggota" ? 'checked=""' : '' ?>>
									<label class="form-check-label mb-0" for="radioinline3">Option<span class="digits">
											Anggota</span></label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
					<div class="row" id="#element-wilayah">
						<div class="mb-2 row">
							<label class="col-sm-3 col-form-label">Wilayah</label>
							<div class="col-sm-9">
								<select name="name_cabang" class="form-select digits" id="">
									<option value="name_cabang">-- Pilih salah satu --</option>

									<?php
									
									
										foreach ( $data_master->result_array() AS $cabang) {

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
									<input class="form-check-input" id="radioinline7" type="radio" name="status_account"
										value="active">
									<label class="form-check-label mb-0" for="radioinline7"><span class="digits">
											Active</span></label>
								</div>
								<div class="form-check form-check-inline radio radio-primary">
									<input class="form-check-input" id="radioinline8" type="radio" name="status_account"
										value="inactive">
									<label class="form-check-label mb-0" for="radioinline8"><span class="digits">
											Inactive</span></label>
								</div>

							</div>
						</div>
					</div>
					<!-- <div class="row">
						<label class="col-sm-3 col-form-label">Address</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="5" cols="5" placeholder="Type Address" name="address" id="address"></textarea>
						</div>
					</div> -->
				</div>
			</div>
		</div>
		<button class="btn btn-success" type="submit" style="margin-left: 50px;">Edit</button>
                        <input class="btn btn-primary" type="reset" value="Reset">
                        <a href="<?= base_url('data_akun'); ?>" class="btn btn-light" type="submit">Cancel</a>
	</form>
</div>

<script>
	let elementWilayah = $('#element-wilayah');

	// sembunyikan
	elementWilayah.hide();

	// perintah event on click
	$('input[name="level"]').change(function () {


		if (this.value == "pusat") {

			elementWilayah.hide();

		} else {

			elementWilayah.show();
		}

	});

</script>
