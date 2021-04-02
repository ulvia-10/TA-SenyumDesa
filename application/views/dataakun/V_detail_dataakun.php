 <!-- Container-fluid starts-->
 <div class="container-fluid">
 	<div class="row">
 		<div class="col-sm-12">
 			<div class="card">
 				<div class="card-header">
 					<h5>Information User</h5>
 				</div>
 				<div class="card-body">
 					<img src="<?=base_url();?>./assets/images/<?=$profile['photo'];?>" class="rounded float-right"
 						alt="...">
 					<center>
 						<h5 class="card-title"><strong><?= $profile['full_name']; ?></strong></h5>
 					</center>
 					<p class="card-text">
 						<label for="full_name"><b> Nama Lengkap :</b></label>
 						<?= $profile['full_name']; ?></p>
 					<p class="card-text">
 						<label for="username"><b> Username: </b></label>
 						<?= $profile['username']; ?></p>
 					<p class="card-text">
 						<label for="email"><b> Email: </b></label>
 						<?= $profile['email']; ?></p>
 					<label for="no_telp"><b> No Telp: </b></label>
 					<?= $profile['telp']; ?></p>
 					<p class="card-text">
 						<label for="level"><b> Level: </b></label>
 						<?= $profile['level']; ?></p>
 					<p class="card-text">
 						<label for="tempat_lahir"><b> Tempat lahir: </b></label>
 						<?= $profile['tempat_lahir']; ?></p>
 					<p class="card-text">
 						<label for="tanggal_lahir"><b> Tanggal lahir: </b></label>
 						<?= $profile['tanggal_lahir']; ?></p>
 					<p class="card-text">
 						<label for="asal"><b> Asal: </b></label>
 						<?= $profile['asal']; ?></p>
 					<p class="card-text">
 						<label for="wilayah"><b> Wilayah: </b></label>
 						<?= $profile['name_cabang']; ?></p>
 					<p class="card-text">
 						<label for="gender"><b> Gender: </b></label>
 						<?= $profile['gender']; ?></p>
 					<label for="address"><b> Alamat: </b></label>
 					<?= $profile['address']; ?></p>
 				</div>
 			</div>

 		</div>
 	</div>
 </div>
 </div>
 <!-- Container-fluid Ends-->
