<!-- Begin Page Content -->
<li class="divider"></li>
<div class="container-fluid">

	<!-- Basic Card Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-10">
			<h6 class="m-0 font-weight-bold text-primary" style="font-size: 25px; text-align:center;">Email Us <i class="fa fa-envelope" aria-hidden="true"></i> </h6>
            <div class="card-body">
			<div class="card mb-3 col-lg-8" >
				<div class="row g-0">
					<div class="col-md-4">
						<img src="<?= base_url('./assets/images/' . $profile['photo']); ?>" class="card-img" width="150px;" height="150px;" alt="Mohon maaf data tidak tampil">
					</div>
					<div class="col-md-8">
						<div class="card-body" >
							<h5 class="card-text">Nama: <?= $profile['full_name']; ?></h5>
							<p class="text-bold"> Username: <?= $profile['username']; ?></p>
                            <p class="card-text"> Tempat Lahir: <?= $profile['tempat_lahir']; ?></p>
                            <p class="card-text"> Tanggal Lahir: <?= $profile['tanggal_lahir']; ?></p>
                            <p class="card-text"> Asal: <?= $profile['asal']; ?></p>
							<!-- <p class="card-text"> Email: <?= $profile['email']; ?></p>
							<p class="card-text"> Nomor Telp (Whatsapp): <?= $profile['telp']; ?></p> -->
                            <p class="card-text"><small class="text-muted">Mendaftar pada:  <?= $profile['created_at']; ?></small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		

	</div>
</div>
