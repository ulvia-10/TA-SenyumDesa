<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Data Kegiatan</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Data Kegiatan</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts                    -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 xl-100 col-lg-12 box-col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="pull-left">Data Kegiatan Dan Laporan Kegiatan</h5>
                </div>
                <div class="card-body">
                    <div class="tabbed-card">
                        <ul class="pull-right nav nav-pills nav-primary" id="pills-clrtab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="pills-clrhome-tab" data-bs-toggle="pill"
                                    href="#pills-clrhome" role="tab" aria-controls="pills-clrhome"
                                    aria-selected="true"><i class="icofont icofont-printer"></i>CetaK Laporan</a></li>
                            <li class="nav-item"><a class="nav-link" id="pills-clrprofile-tab" data-bs-toggle="pill"
                                    href="#pills-clrprofile" role="tab" aria-controls="pills-clrprofile"
                                    aria-selected="false"><i class="icofont icofont-ui-file"></i>Tabel Kegiatan</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-clrtabContent">
                            <div class="tab-pane fade show active" id="pills-clrhome" role="tabpanel"
                                aria-labelledby="pills-clrhome-tab">
                                <!-- FORM CETAK -->

                                <?php echo $this->session->flashdata('flash-data') ?>
                                <form action="<?php echo base_url('C_data/exportLaporanPDF') ?>" method="GET">
                                    <div class="row">

                                        <div class="form-group col-md-3">
                                            <label for="kategori">Lihat berdasarkan</label>
                                            <input type="date" class="form-control" name="start">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="kategori">Sampai Dengan Tanggal</label>
                                            <input type="date" class="form-control" name="end">
                                        </div>
                                        <div class="col-md-2"><button type="submit" style="margin-top: 35px"
                                                class="btn btn-primary">Cetak</button></div>
                                        <a class="btn btn-primary" style="margin-top: 30px; width:150px; height:40px;"
                                            href="<?php echo base_url('C_data') ?>">Reset</a>
                                    </div>

                                </form>
                                <!-- END FROM CETAK -->
                            </div>
                            <div class="tab-pane fade" id="pills-clrprofile" role="tabpanel"
                                aria-labelledby="pills-clrprofile-tab">
                                <!-- Template Tabel Kegiatan -->

                                <?php echo $this->session->flashdata('msg') ?>
                                <a href="<?= base_url('Adminkorwil/tambahKegiatan'); ?>" class="btn btn-outline-primary"
                                    type="button" data-original-title="btn btn-outline-danger-2x"
                                    style="width: 130px;">Tambah Data</a>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="display" id="API-3">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Foto Cabang</th>
                                                    <th>Nama Cabang</th>
                                                    <th>Tema</th>
                                                    <th>Status</th>
                                                    <th>Tanggal</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($data_kegiatan->result_array() as $kg) { ?>
                                                <tr>
                                                    <td> <?= $no++; ?></td>
                                                    <td><img width="80px" height="80px"
                                                            src='<?= base_url() ?>assets/images/<?= $kg["photo"]; ?>'>
                                                    </td>
                                                    <td><?= $kg["name_cabang"]; ?></td>
                                                    <td><?= $kg["Tema"]; ?></td>
                                                    <td><?= $kg["status"]; ?></td>
                                                    <td><?= $kg["created_at"]; ?></td>
                                                    <td>
                                                        <!-- edit -->
                                                        <a href="<?= base_url(); ?>Adminkorwil/edit/<?= $kg['id_kegiatan']; ?>"
                                                            class="badge badge-success"><i class="fa fa-edit "></i>
                                                        </a>

                                                        <!-- hapus -->
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#aksi-hapus-<?php echo $kg['id_kegiatan'] ?>"
                                                            class="badge badge-danger "> <i class="fa fa-trash"
                                                                aria-hidden="true"></i></a>
                                                        
                                                        <!--- DIV MODAL HAPUS -->
                                                        <div class="modal fade" id="aksi-hapus-<?php echo $kg['id_kegiatan'] ?>" tabindex=" -1" role="dialog"
                                                            aria-labelledby="exampleModalCenter" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <h4>Hapus Kegiatan</h4>
                                                                        <p>Apakah anda yakin ingin menghapus
                                                                            data kegiatan
                                                                            <b><?php echo $kg['Tema'] ?></b>.
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-primary btn-sm" type="button" data-bs-dismiss="modal">Batal</button>
                                                                        <a href="<?php echo base_url('Adminkorwil/hapuskegiatan/' . $kg['id_kegiatan']) ?>"
                                                                            class="btn btn-danger btn-sm" type="button"><i class="fa fa-trash"></i>
                                                                            Hapus</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--- END DIV MODAL HAPUS -->

                                                    </td>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Foto Cabang</th>
                                                    <th>Nama Cabang</th>
                                                    <th>Judul</th>
                                                    <th>Status</th>
                                                    <th>Tanggal</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tabel Kegiatan -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

