 <!-- Container-fluid starts-->
 <div class="container-fluid">
 	<div class="row">
 		<div class="col-sm-12">
 			<div class="card">
 				<div class="card-header">
 					<h5>Information User</h5>
 				</div>
 				<div class="card-body">
 					<p class="card-text">
 						<label for="full_name"><b> Nama Lengkap </b></label>
 						<?= $profile['full_name']; ?></p>
 						<p  class="card-text">
                         <label for="username"><b> Username  </b></label>
 						<?= $profile['username']; ?></p>
                         <p  class="card-text">
                         <label for="level"><b> Level  </b></label>
 						<?= $profile['level']; ?></p>
                         <p  class="card-text">
                         <label for="gender"><b> Gender </b></label>
 						<?= $profile['gender']; ?></p>
                         <p  class="card-text">
                         <label for="tempat_lahir"><b> Tempat lahir </b></label>
 						<?= $profile['tempat_lahir']; ?></p>
                         <p  class="card-text">
                         <label for="tanggal_lahir"><b> Tanggal lahir </b></label>
 						<?= $profile['tanggal_lahir']; ?></p>
                         <p  class="card-text">
                         <label for="asal"><b> Asal </b></label>
 						<?= $profile['asal']; ?></p>
                         <!-- <p  class="card-text">
                         <label for="asal"><b> Nama Cabang </b></label>
 						<?= $profile['nama_cabang']; ?></p> -->
 				</div>
 				</div>

 			</div>
 		</div>
 	</div>
 </div>
 <!-- Container-fluid Ends-->