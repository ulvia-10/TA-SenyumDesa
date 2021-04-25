<br><br> <br>
<div class="container-fluid">
	<div class="row" style="margin-left:50px;">

		<div class="col-xl-4 box-col-6" >
		<br> <br>
			<div class="card custom-card">
				<div class="card-header"><img class="img-fluid"
						src="http://admin.pixelstrap.com/cuba/assets/images/user-card/3.jpg" alt=""></div>
				<div class="card-profile"><img class="rounded-circle"
						src="<?= base_url('./assets/images/' . $profile['photo']); ?>" alt=""></div>
				<ul class="card-social">
					<li><a> <i class="fa fa-users" aria-hidden="true"></i></a></li>
					<li><a> <i class="fa fa-heart" aria-hidden="true"></i></a></li>
					<li><a> <i class="fa fa-sun-o" aria-hidden="true"></i> </a></li>
					<li><a><i class="fa fa-fire" aria-hidden="true"></i></a></li>

				</ul>
				<div class="text-center profile-details">
					<h4> <?= $profile['full_name']; ?></h4>
					<h6><?= $profile['level']; ?></h6>
				</div>
				<div class="card-footer row">
					<div class="col-7 col-sm-4">
						<p>Name</p>
						<h3 class="counter"><?= $profile['username']; ?></h3>
					</div>
					<div class="col-4 col-sm-4">
						<h7>Status <br</h7>
						<h3><span class="counter"><?= $profile['status_account']; ?></h3>
					</div>
					<div class="col-4 col-sm-4">
						<h6>Total Kegiatan</h6>
						<h3><span class="counter"><?= $total; ?>  </h3>
					</div>
				</div>
			</div>
		</div>

    <div class="col-xl-6 box-col-6">

      <div class="card">
        <div class="card-header" style="text-align: center;">
          My Profile <i class="fa fa-user-circle" aria-hidden="true"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title" style="text-align:center;"><?= $profile['full_name']; ?> </h5> <br>
          <p class="card-text">Username: <?= $profile['username']; ?></p>
          <p class="card-text">Jabatan: <?= $profile['level']; ?></p>
          <p class="card-text">Gender: <?= $profile['gender']; ?></p>
          <p class="card-text">Tempat Lahir: <?= $profile['tempat_lahir']; ?></p>
		  <?php
														
														$tanggal = "-";
														if ( $profile['tanggal_lahir'] ){

															$tanggal = date('d-m-Y',strtotime($profile['tanggal_lahir']));
														}
													?>
          <p class="card-text">Tanggal Lahir: <?= $tanggal ?></p>
          <p class="card-text">Asal: <?= $profile['asal']; ?></p>
          <a href="<?= base_url('kegiatan/editprofile'); ?>" class="btn btn-primary" style="margin-left:200px;">Edit <i class="fa fa-edit"></i></a>
        </div>
      </div>
    </div>

	</div>
	



</div>
