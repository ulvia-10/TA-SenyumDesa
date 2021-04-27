<!DOCTYPE html>
<html>

<head>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<br> <br>
	<div class="container">
		<h5>Data Kegiatan</h5>
		<br>
		<a href="<?= base_url(); ?>data_akun/tambah/" class="btn btn-primary btn-sm mb-3">
			<i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
		<div id="accordion">
			<!-- collapse draft -->
			<div class="card">
				<div class="card-header">
					<a class="card-link" data-toggle="collapse" href="#collapseOne">
						<i class="fa fa-list" aria-hidden="true"></i> Daftar Kegiatan Draft
					</a>
				</div>

				<div id="collapseOne" class="collapse show" data-parent="#accordion">
					<div class="card-body">
						<div class="table-responsive">
							<table class="display" id="basic-1" style="text-align:center;">
								<thead>

									<tr>
										<th>No</th>
										<th>Tanggal Kegiatan</th>
										<th>Judul</th>
										<th>Tema</th>
										<th>Tanggal Berakhir</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
						  foreach ($kegiatan_draft AS $draft) { ?>
									<tr>
										<td><?=$no++?></td>
										<td><?= date('d-m-Y',strtotime($draft["tanggal_kegiatan"])); ?></td>
										<td><?= $draft["judul"]; ?></td>
										<td><?= $draft["tema"]; ?></td>
										<td><?= date('d-m-Y',strtotime($draft["tanggal_berakhir"])); ?></td>
										<td>
											<!-- edit -->
											<a href="<?= base_url(); ?>" class="badge badge-success"><i
													class="fa fa-pencil" aria-hidden="true"></i></a>
											<!-- detail -->
											<a href="<?= base_url(); ?>" class="badge badge-secondary">
												<i class="fa fa-eye" aria-hidden="true"></i></a></a>
											<!-- hapus -->
											<!-- hapus -->
											<a href="#" data-bs-toggle="modal"
												data-bs-target="#aksi-hapus-<?php echo $draft['id_kegiatan'] ?>"
												class="badge badge-warning "> <i class="fa fa-trash"
													aria-hidden="true"></i></a>
											<!-- pop up  -->
											<div class="modal fade" id="aksi-hapus-<?php echo $draft['id_kegiatan'] ?>"
												tabindex=" -1" role="dialog" aria-labelledby="exampleModalCenter"
												aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-body">
															<h4>Hapus Akun</h4>
															<p>Apakah anda yakin ingin menghapus kegiatan
																<b><?php echo $draft['judul'] ?></b>.
															</p>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary btn-sm" type="button"
																data-bs-dismiss="modal">Batal</button>
															<a href="<?php echo base_url('data_akun/delete/' . $draft['id_kegiatan']) ?>"
																class="btn btn-danger btn-sm" type="button"><i
																	class="fa fa-trash"></i> Hapus</a>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<?php
                        }
                            ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<!-- collapse publish -->
			<div class="card">
				<div class="card-header">
					<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
						<i class="fa fa-address-card" aria-hidden="true"></i> Daftar Kegiatan Publish
					</a>
				</div>
				<div id="collapseTwo" class="collapse" data-parent="#accordion">
					<div class="card-body" style="text-align:center;">
						<div class="table-responsive">
							<table class="display" id="basic-3">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal Kegiatan</th>
										<th>Judul</th>
										<th>Tema</th>
										<th>Tanggal Berakhir</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
						  foreach ($kegiatan_publish AS $publish) { ?>
									<tr>
										<td><?=$no++?></td>
										<td><?= date('d-m-Y',strtotime($publish["tanggal_kegiatan"])); ?></td>
										<td><?= $publish["judul"]; ?></td>
										<td><?= $publish["tema"]; ?></td>
										<td><?= date('d-m-Y',strtotime($publish["tanggal_berakhir"])); ?></td>
										<td>
											<!-- detail -->
											<a href="<?= base_url(); ?>" class="badge badge-secondary">
												<i class="fa fa-eye" aria-hidden="true"></i></a></a>
											<!-- hapus -->
											<a href="#" data-bs-toggle="modal"
												data-bs-target="#aksi-hapus-<?php echo $draft['id_kegiatan'] ?>"
												class="badge badge-warning "> <i class="fa fa-trash"
													aria-hidden="true"></i></a>
											<!-- pop up  -->
											<div class="modal fade" id="aksi-hapus-<?php echo $draft['id_kegiatan'] ?>"
												tabindex=" -1" role="dialog" aria-labelledby="exampleModalCenter"
												aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-body">
															<h4>Hapus Akun</h4>
															<p>Apakah anda yakin ingin menghapus kegiatan
																<b><?php echo $draft['judul'] ?></b>.
															</p>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary btn-sm" type="button"
																data-bs-dismiss="modal">Batal</button>
															<a href="<?php echo base_url('data_akun/delete/' . $draft['id_kegiatan']) ?>"
																class="btn btn-danger btn-sm" type="button"><i
																	class="fa fa-trash"></i> Hapus</a>
														</div>
													</div>

										</td>
									</tr>
									<?php
                        }
                            ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- collapse expired -->
	<div class="card" style="margin-left:15px;">
		<div class="card-header">
			<a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
				<i class="fa fa-address-book" aria-hidden="true"></i> Daftar Kegiatan Expired
			</a>
		</div>
		<div id="collapseThree" class="collapse" data-parent="#accordion">
			<div class="card-body" style="text-align:center;">
				<div class="table-responsive">
					<table class="display" id="basic-4">
						<thead>
							<?php $no = 1;
						  foreach ($kegiatan_expired AS $expired) { ?>
							<tr>
								<th>No</th>
								<th>Tanggal Kegiatan</th>
								<th>Judul</th>
								<th>Tema</th>
								<th>Tanggal Berakhir</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?=$no++?></td>
								<td><?= date('d-m-Y',strtotime($expired["tanggal_kegiatan"])); ?></td>
								<td><?= $expired["judul"]; ?></td>
								<td><?= $expired["tema"]; ?></td>
								<td><?= date('d-m-Y',strtotime($expired["tanggal_berakhir"])); ?></td>
								<td>
									<!-- edit -->
									<a href="<?= base_url(); ?>" class="badge badge-success"><i class="fa fa-pencil"
											aria-hidden="true"></i></a>
									<!-- detail -->
									<a href="<?= base_url(); ?>" class="badge badge-secondary">
										<i class="fa fa-eye" aria-hidden="true"></i></a></a>
									<!-- hapus -->
									<a href="#" data-bs-toggle="modal"
										data-bs-target="#aksi-hapus-<?php echo $expired['id_kegiatan'] ?>"
										class="badge badge-danger "> <i class="fa fa-trash" aria-hidden="true"></i></a>
									<!-- pop up  -->
									<div class="modal fade" id="aksi-hapus-<?php echo $expired['id_kegiatan'] ?>"
										tabindex=" -1" role="dialog" aria-labelledby="exampleModalCenter"
										aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-body">
													<h4>Hapus Akun</h4>
													<p>Apakah anda yakin ingin menghapus kegiatan
														<b><?php echo $expired['judul'] ?></b>.
													</p>
												</div>
												<div class="modal-footer">
													<button class="btn btn-primary btn-sm" type="button"
														data-bs-dismiss="modal">Batal</button>
													<a href="<?php echo base_url('data_akun/delete/' . $expired['id_kegiatan']) ?>"
														class="btn btn-danger btn-sm" type="button"><i
															class="fa fa-trash"></i> Hapus</a>
												</div>
											</div>

								</td>
							</tr>
							<?php
                        }
                            ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>

	<br>
	</div>
	</div>

</body>

</html>
