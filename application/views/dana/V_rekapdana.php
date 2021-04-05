  <!-- Zero Configuration  Starts-->
  <div class="col-sm-12">
  	<div class="card">
  		<div class="card-header">
  			<h5>Data Akun Senyum Desa</h5><span>Isi dengan teliti!</span>
  		</div>
  		<div class="card-body">
		
  			<div class="table-responsive">
			  <?php echo $this->session->flashdata('msg') ?>
  				<!-- <a href="<?= base_url();?>data_akun/tambah/" class="btn btn-primary btn-sm mb-3"> -->
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
                            foreach ($dana->result_array() as $dn){?>
  						<tr>
  							<td><?=$no++;?></td>
  							<td><?=$dn["full_name"];?></td>
  							<td><?=$dn["username"];?></td>
  							<td><?=$dn["name_cabang"];?></td>
  							<td>
  								<span class="badge badge-info"><?=$dn["level"];?></span></td>
  							<td>
  								<!-- detail -->
  								<a href="<?= base_url();?>data_akun/detail/<?= $dn['id_profile'];?>"
  									class="badge badge-primary">
  									<i class="fa fa-eye" aria-hidden="true"></i></a></a>

  								<a href="<?= base_url();?>data_akun/edit/<?= $dn['id_profile'];?>"
  									class="badge badge-success"><i class="fa fa-edit "></i> </a>
									
  								<!-- hapus -->
								  <a href="#" data-bs-toggle="modal"
                                            data-bs-target="#aksi-hapus-<?php echo $dn['id_profile'] ?>"
                                            class="badge badge-danger "> <i class="fa fa-trash"
                                                aria-hidden="true"></i></a>
								<!-- pop up  -->
								  <div class="modal fade" id="aksi-hapus-<?php echo $dn['id_profile'] ?>"
                                            tabindex=" -1" role="dialog" aria-labelledby="exampleModalCenter"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <h4>Hapus Akun</h4>
                                                        <p>Apakah anda yakin ingin menghapus Akun
                                                            <b><?php echo $dn['full_name'] ?></b>.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary btn-sm" type="button"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <a href="<?php echo base_url('data_akun/delete/' . $dn['id_profile']) ?>"
                                                            class="btn btn-warning btn-sm" type="button"><i
                                                                class="fa fa-trash"></i> Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
  								
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
