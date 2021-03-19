  <div class="container-fluid">
      <div class="page-title">
          <div class="row">
              <div class="col-6">
                  <h3>Master Cabang</h3>
              </div>
              <div class="col-6">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">Data Tables</li>
                      <li class="breadcrumb-item active">Master Cabang</li>
                  </ol>
              </div>
          </div>
      </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
      <div class="row">
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-header">
                      <h5>Tabel</h5><span>Tabel Master Cabang</span>
                  </div><br>
                  <a href="<?= base_url('master/tambah'); ?>" class="btn btn-outline-primary" type="button"
                      data-original-title="btn btn-outline-danger-2x" style="width: 120px;" title="">Tambah</a>
                  <div class="card-body">
                      <div class="table-responsive">
                          <table class="display" id="basic-1">
                              <thead>
                                  <tr>
                                      <th>No</th>
                                      <th>Id cabang</th>
                                      <th>Nama Cabang</th>
                                      <th>status cabang</th>
                                      <th>Tanggal cabang</th>
                                      <th>action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>Tiger Nixon</td>
                                      <td>System Architect</td>
                                      <td>Edinburgh</td>
                                      <td>61</td>
                                      <td>2011/04/25</td>
                                      <td>
                                          <!-- detail -->
                                          <a href="<?= base_url('Master/detail'); ?>" class="badge badge-primary"><i
                                                  class="fa fa-eye"></i></a>

                                          <a href="<?= base_url('Master/edit'); ?>" class="badge badge-success"><i
                                                  class="fa fa-edit "></i> </a>
                                          <!-- cetak -->
                                          <!-- hapus -->
                                          <a href="<?= base_url('Master/hapus'); ?>" class="badge badge-danger "> <i
                                                  class="fa fa-trash" aria-hidden="true"></i></a>
                                      </td>
                                  </tr>

                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>


      </div>
  </div>