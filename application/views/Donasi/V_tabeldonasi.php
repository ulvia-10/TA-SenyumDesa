<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Data Donasi </h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">Donasi Senyum Desa</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Individual column searching (text inputs) Starts-->
<div class="col-sm-12">
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="card">
        <div class="card-header">
            <h5>Tabel</h5><span>Tabel Donasi Senyum Desa</span><br>
            <a href="<?= base_url('Donasi/tambah'); ?>" class="btn btn-outline-primary" type="button"
                data-original-title="btn btn-outline-danger-2x" style="width: 120px;" title=""> Tambah</a>
        </div>


        <div class="card-body">
            <div class="table-responsive">
                <table class="display" id="API-3">
                    <thead>
                        <!-- Kolom-->
                        <tr>
                            <th>No</th>
                            <th>No Rekening</th>
                            <th>Nama Donatur</th>
                            <th>Nama Cabang</th>
                            <th>Tanggal Donasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <!-- Baris-->
                    <tbody>
                        <?php $no = 1;
                        foreach ($data_donasi->result_array() as $dns) { ?>
                        <tr>
                            <td> <?= $no++; ?></td>
                            <td><?= $dns["no_rekening"]; ?></td>
                            <td><?= $dns["nama_donatur"]; ?></td>
                            <td><?= $dns["name_cabang"]; ?></td>
                            <td><?= $dns["tgl_donasi"]; ?></td>
                            <td>


                                <!-- edit -->
                                <a href="<?= base_url(); ?>Donasi/edit/<?= $dns['Id_donasi']; ?>"
                                    class="badge badge-success"><i class="fa fa-edit "></i> </a>

                                <!-- hapus -->
                                <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#aksi-hapus-<?php echo $dns['Id_donasi'] ?>"
                                    class="badge badge-danger "> <i class="fa fa-trash" aria-hidden="true"></i></a>

                                <div class="modal fade" id="aksi-hapus-<?php echo $dns['Id_donasi'] ?>" tabindex=" -1"
                                    role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h4>Hapus donasi</h4>
                                                <p>Apakah anda yakin ingin menghapus data donasi
                                                    <b><?php echo $dns['nama_donatur'] ?></b>.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary btn-sm" type="button"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <a href="<?php echo base_url('Donasi/hapus/' . $dns['Id_donasi']) ?>"
                                                    class="btn btn-danger btn-sm" type="button"><i
                                                        class="fa fa-trash"></i> Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            </td>
                            <?php
                        }
                            ?>
                    </tbody>
                    <!-- Search-->
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>No Rekening</th>
                            <th>Nama Donatur</th>
                            <th>Nama Cabang</th>
                            <th>Tanggal Donasi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>