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
            <!-- Menampilkan Error jika validasi tidak valid -->
            <?php echo $this->session->flashdata('msg') ?>
            <div class="card">
                <div class="card-header">
                    <h5>Tabel</h5><span>Tabel Master Cabang</span><br>
                    <!-- Start Modal -->
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test"
                        data-bs-target="#exampleModal">Tambah Data Cabang</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div><br>
                                <!-- isi conten Modal -->
                                <div class="modal-body">

                                    <form class="needs-validation"
                                        action="<?php echo base_url('master/prosesTambah') ?>" method="POST"
                                        enctype="multipart/form-data">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label" for="name_cabang">Nama Cabang</label>
                                                <input class="form-control" name="name_cabang" id="name_cabang"
                                                    type="text" placeholder="Nama Cabang"
                                                    value="<?php echo set_value('name_cabang'); ?>">
                                            </div>
                                            <div class=" col-md-6">
                                                <label class="form-label" for="status_cabang">Status cabang</label>
                                                <select class="form-select" name="status_cabang" id="status_cabang">
                                                    <option selected="" disabled="" value="">Pilih Status</option>
                                                    <option value="active">Aktif</option>
                                                    <option value="inactive">Tidak Aktif</option>
                                                </select>
                                                <div class="invalid-feedback">status cabang.</div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row g-4">
                                            <div class="col-md-12">
                                                <label class="form-label" for="photo">Pas Foto</label>
                                                <div class="col-sm-14">
                                                    <input class="form-control" type="file" name="photo">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="submit" name="submit"
                                                value="Simpan">Save
                                                Data</button>
                                            <input class="btn btn-warning" type="reset" value="Discard">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Modal-->

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="API-3">
                                <thead>
                                    <!-- Kolom-->
                                    <tr>
                                        <th><button type="button" name="delete" id="delete"
                                                class="btn btn-danger btn-xs">Delete</button></th>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama Cabang</th>
                                        <th>Status Cabang</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <!-- Baris-->
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($master_cabang->result_array() as $msr) { ?>
                                    <tr>
                                        <td><input type="checkbox" class="delete_checkbox"
                                                value="'<?= $msr["id_cabang"]; ?>'" /></td>
                                        <td> <?= $no++; ?></td>
                                        <td>
                                            <img width="80px" height="80px"
                                                src='<?= base_url() ?>assets/images/<?= $msr["photo"]; ?>'>
                                        </td>
                                        <td><?= $msr["name_cabang"]; ?></td>
                                        <td><?= $msr["status_cabang"]; ?></td>
                                        <td><?= $msr["created_at"]; ?></td>

                                        <td>

                                            <!-- edit -->
                                            <a href="<?= base_url(); ?>Master/update/<?= $msr['id_cabang']; ?>"
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