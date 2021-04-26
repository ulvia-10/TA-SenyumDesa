 <!-- Container-fluid starts-->
 <div class="container-fluid">
 	<div class="row">
 		<div class="col-sm-12">
 			<div class="card">
 				<div class="card-header">
 					<h5>Information User</h5>
 				</div>
 				<div class="card-body">
 					<center>
 						<h5 class="card-title"><strong><?= $donasi['full_name']; ?></strong></h5>
 					</center>
 					<p class="card-text">
 						<label for="full_name"><b> Nama Lengkap :</b></label>
 						<?= $donasi['full_name']; ?></p>
 					<p class="card-text">
 						<label for="username"><b> Username: </b></label>
 						<?= $donasi['username']; ?></p>
 					<p class="card-text">
 						<label for="created_at"><b> Tanggal Pembuatan akun: </b></label>
 						<?= $donasi['created_at']; ?></p>
 					<p class="card-text">
 						<label for="email"><b> Email: </b></label>
 						<?= $donasi['email']; ?></p>
 					<label for="no_telp"><b> No Telp: </b></label>
 					<?= $donasi['telp']; ?></p>
 					<p class="card-text">
 						<label for="level"><b> Level: </b></label>
 						<?= $donasi['level']; ?></p>
 					<p class="card-text">
 						<label for="tempat_lahir"><b> Tempat lahir: </b></label>
 						<?= $donasi['tempat_lahir']; ?></p>
 					<p class="card-text">
 						<label for="tanggal_lahir"><b> Tanggal lahir: </b></label>
 						<?= $donasi['tanggal_lahir']; ?></p>
 					<p class="card-text">
 						<label for="asal"><b> Asal: </b></label>
 						<?= $donasi['asal']; ?></p>
 					<p class="card-text">
 						<label for="wilayah"><b> Wilayah: </b></label>
 						<?= $donasi['name_cabang']; ?></p>
 					<p class="card-text">
 						<label for="gender"><b> Gender: </b></label>
 						<?= $donasi['gender']; ?></p>
 					<label for="address"><b> Alamat: </b></label>
 					<?= $donasi['address']; ?></p>
 				</div>
 			</div>

 		</div>
 	</div>
 </div>
 </div>
 <!-- Container-fluid Ends-->
