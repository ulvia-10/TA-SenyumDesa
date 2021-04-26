<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Data Keuangan</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">KeuanganSenyum Desa</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <?php echo $this->session->flashdata('pesan') ?>
            <div class="card">
                <div class="card-header">
                    <h5>Tabel</h5><span>Tabel KeuanganSenyum Desa</span><br>
                    <a href="<?= base_url('Keuangan/tambah'); ?>" class="btn btn-outline-primary" type="button"
                        data-original-title="btn btn-outline-danger-2x" style="width: 120px;" title=""> Tambah</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="API-3" width="100%" cellspacing="0">
                            <thead style=" text-align: center;">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Laporan</th>
                                    <th>Judul</th>
                                    <th>Nama Cabang</th>
                                    <th>Jenis Keuangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody style=" text-align:center;">
                                <?php $no = 1;
                                foreach ($data_keuangan->result_array() as $kas) { ?>
                                <tr>
                                    <td> <?= $no++; ?></td>
                                    <td><?= $kas["tanggal_laporan"]; ?></td>
                                    <td><?= $kas["judul"]; ?></td>
                                    <td><?= $kas["name_cabang"]; ?></td>
                                    <td><?= $kas["jenis_keuangan"]; ?></td>
                                    <td>


                                        <!-- edit -->
                                        <a href="<?= base_url(); ?>Keuangan/prosesedit/<?= $kas['id_keuangan']; ?>"
                                            class="badge badge-success"><i class="fa fa-edit "></i> </a>

                                        <!-- hapus -->
                                        <a href="#" data-bs-toggle="modal"
                                            data-bs-target="#aksi-hapus-<?php echo $kas['id_keuangan'] ?>"
                                            class="badge badge-danger "> <i class="fa fa-trash"
                                                aria-hidden="true"></i></a>

                                        <div class="modal fade" id="aksi-hapus-<?php echo $kas['id_keuangan'] ?>"
                                            tabindex=" -1" role="dialog" aria-labelledby="exampleModalCenter"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <h4>Hapus keuangan</h4>
                                                        <p>Apakah anda yakin ingin menghapus data keuangan
                                                            <b><?php echo $kas['nama_donatur'] ?></b>.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary btn-sm" type="button"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <a href="<?php echo base_url('keuangan/hapus/' . $kas['id_keuangan']) ?>"
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
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Laporan</th>
                                    <th>Judul</th>
                                    <th>Nama Cabang</th>
                                    <th>Jenis Keuangan</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </di