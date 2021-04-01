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
            <?php echo $this->session->flashdata('pesan') ?>
            <div class="card">
                <div class="card-header">
                    <h5>Tabel</h5><span>Tabel Master Cabang</span><br>
                    <a href="<?= base_url('master/tambah'); ?>" class="btn btn-outline-primary" type="button"
                        data-original-title="btn btn-outline-danger-2x" style="width: 120px;" title=""> Tambah</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1" width="100%" cellspacing="0">
                            <thead style=" text-align: center;">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Cabang</th>
                                    <th>Status Cabang</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody style=" text-align:center;">
                                <?php $no = 1;
                                foreach ($master_cabang->result_array() as $msr) { ?>
                                <tr>
                                    <td> <?= $no++; ?></td>
                                    <td><?= $msr["name_cabang"]; ?></td>
                                    <td><?= $msr["status_cabang"]; ?></td>
                                    <td><?= $msr["created_at"]; ?></td>
                                    <td>

                                        <!-- edit -->
                                        <a href="<?= base_url(); ?>Master/prosesedit/<?= $msr['id_cabang']; ?>"
                                            class="badge badge-success"><i class="fa fa-edit "></i> </a>

                                        <!-- hapus -->
                                        <a href="#" data-bs-toggle="modal"
                                            data-bs-target="#aksi-hapus-<?php echo $msr['id_cabang'] ?>"
                                            class="badge badge-danger "> <i class="fa fa-trash"
                                                aria-hidden="true"></i></a>

                                        <div class="modal fade" id="aksi-hapus-<?php echo $msr['id_cabang'] ?>"
                                            tabindex=" -1" role="dialog" aria-labelledby="exampleModalCenter"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <h4>Hapus Cabang</h4>
                                                        <p>Apakah anda yakin ingin menghapus data cabang
                                                            <b><?php echo $msr['name_cabang'] ?></b>.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary btn-sm" type="button"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <a href="<?php echo base_url('master/hapus/' . $msr['id_cabang']) ?>"
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
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
