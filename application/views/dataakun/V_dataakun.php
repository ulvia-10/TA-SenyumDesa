  <!-- Zero Configuration  Starts-->
  <div class="col-sm-12">
  <div class="card">
  		<div class="card-header">
  			<h5>Data Akun Senyum Desa</h5><span>Isi dengan teliti!</span>
  		</div>
  		<div class="card-body">
  			<div class="table-responsive">
  				<a href="<?= base_url();?>data_akun/tambah/" class="btn btn-primary btn-sm mb-3">
  					<i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
  				<table class="display" id="basic-1" style="text-align:center;">
  					<thead>
  						<tr>
  							<th>No</th>
  							<th>Nama</th>
  							<th>Username</th>
  							<th>Wilayah</th>
  							<th>Level</th>
  							<th>Action</th>
  						</tr>
  					</thead>
  					<tbody>
  						<?php $no=1;
                            foreach ($profile->result_array() as $prf){?>
  						<tr>
  							<td><?=$no++;?></td>
  							<td><?=$prf["full_name"];?></td>
  							<td><?=$prf["username"];?></td>
  							<td><?=$prf["name_cabang"];?></td>
  							<td>
  								<span class="badge badge-info"><?=$prf["level"];?></span></td>
  							<td>
  								<!-- detail -->
  								<a href="<?= base_url();?>data_akun/detail/<?= $prf['id_profile'];?>"
  									class="badge badge-primary">
  									<i class="fa fa-eye" aria-hidden="true"></i></a></a>

                                  <a href="<?= base_url();?>data_akun/edit/<?= $prf['id_profile'];?>"
                                      class="badge badge-success"><i class="fa fa-edit "></i> </a>
                                  <!-- hapus -->
                                  <a href="<?= base_url();?>data_akun/hapus/<?=$prf['id_profile'];?>"
                                      class="badge badge-danger "> <i class="fa fa-trash" aria-hidden="true"></i></a>
                              </td>

                              <?php 
                                        }
                                         ?>
                          </tr>

                  </table>
              </div>
          </div>
      </div>
  </div>