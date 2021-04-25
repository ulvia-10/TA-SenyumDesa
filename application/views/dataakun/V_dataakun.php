<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Data Akun</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">Data Akun</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->

<!-- Zero Configuration  Starts-->
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Data Akun Senyum Desa</h5><span>Data Akun Ini,Data seluruh akun di seluruh Cabang</span>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <?php echo $this->session->flashdata('msg') ?>
                <a href="<?= base_url(); ?>data_akun/tambah/" class="btn btn-primary btn-sm mb-3">
                    <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
                <table class="display" id="basic-1" style="text-align:center;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Wilayah</th>
                            <th>Level</th>
                            <th>Asal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($profile->result_array() as $prf) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $prf["full_name"]; ?></td>
                            <td><?= $prf["username"]; ?></td>
                            <td><?= $prf["name_cabang"]; ?></td>
                            <td><span class="badge badge-info"><?=$prf["level"];?></span></td>
                            <td><?= $prf["asal"]; ?></td>
                                <td>
                                <!-- detail -->
                                <a href="<?= base_url(); ?>data_akun/detail/<?= $prf['id_profile']; ?>"
                                    class="badge badge-primary">
                                    <i class="fa fa-eye" aria-hidden="true"></i></a></a>

                                <a href="<?= base_url(); ?>data_akun/edit/<?= $prf['id_profile']; ?>"
                                    class="badge badge-success"><i class="fa fa-edit "></i> </a>

                                <!-- hapus -->
                                <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#aksi-hapus-<?php echo $prf['id_profile'] ?>"
                                    class="badge badge-danger "> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                <!-- pop up  -->
                                <div class="modal fade" id="aksi-hapus-<?php echo $prf['id_profile'] ?>" tabindex=" -1"
                                    role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h4>Hapus Akun</h4>
                                                <p>Apakah anda yakin ingin menghapus Akun
                                                    <b><?php echo $prf['full_name'] ?></b>.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary btn-sm" type="button"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <a href="<?php echo base_url('data_akun/delete/' . $prf['id_profile']) ?>"
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
