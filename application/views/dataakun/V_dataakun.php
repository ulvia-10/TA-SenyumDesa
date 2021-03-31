  <!-- Zero Configuration  Starts-->
  <div class="col-sm-12">
      <div class="card">
          <div class="card-header">
              <h5>Data Akun Senyum Desa</h5><span>Isi dengan teliti!</span>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="display" id="basic-1">
                      <thead>
                          <tr>
                              <th>Nama</th>
                              <th></th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Tambah</th>
                              <th>Edit</th>
                              <th>Hapus</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td><?=$no++;?></td>
                              <td><?=$prf["full_name"];?></td>
                              <td><?=$prf["username"];?></td>
                              <td><?=$prf["name_cabang"];?></td>
                              <td>
                                  <span class="badge badge-info"><?=$prf["level"];?></span>
                              </td>
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