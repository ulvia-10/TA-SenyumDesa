<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Informasi Notiifikasi</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Notifikasi</li>

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
                    <h5>Tabel</h5><span>Informasi Tentang Notifikasi</span><br>
                    <?php echo $this->session->flashdata('msg') ?>
                    <a href="<?= base_url('Adminkorwil/hapusnotifsemua'); ?>" class="btn btn-outline-primary"
                        type="button" data-original-title="btn btn-outline-danger-2x" style="width: 250px;">Tandai Yang
                        Sudah
                        Dibaca Semua</a>
                    <a href="<?= base_url('Adminkorwil/deletenotif'); ?>" class="btn btn-outline-primary" type="button"
                        data-original-title="btn btn-outline-danger-2x" style="width: 180px;">Hapus Semua Notifikasi</a>
                </div>


                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="API-3" width="100%" cellspacing="0">
                            <thead style=" text-align: center;">
                                <tr>
                                    <th>No</th>
                                    <th>Tema</th>
                                    <th>Cabang</th>
                                    <th>Judul</th>
                                    <th>pesan</th>
                                    <th>Tanggal Notifikasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody style=" text-align:center;">
                                <?php $no = 1;
                                foreach ($notif as $bell) { ?>
                                <tr>
                                    <td> <?= $no++ ?></td>
                                    <td><?= $bell["tema"] ?></td>
                                    <td><?= $bell["name_cabang"] ?></td>
                                    <td><?= $bell["judul"] ?></td>
                                    <td><?= $bell["pesan"]; ?></td>
                                    <td><?= $bell["tanggal_notifikasi"] ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>Adminkorwil/informationKegiatan/<?= $bell['id_notif']; ?>"
                                            class="badge badge-primary"><i class="fa fa-eye "></i>
                                        </a>
                                        <!-- hapus Tandai Notifikasi -->
                                        <?php if ($bell['is_read'] == 0) : ?>
                                        <a href="<?= base_url(); ?>Adminkorwil/hapusnotif/<?= $bell['id_notif'] ?>"
                                            class="badge badge-danger"><i class="fa fa-trash "> Tandai Sudah Di Baca</i>
                                        </a>
                                        <?php else : ?>
                                        <?php endif; ?>
                                    </td>
                                    <?php
                                }
                                    ?>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tema</th>
                                    <th>Cabang</th>
                                    <th>Judul</th>
                                    <th>pesan</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>





    </div>
</div>
</div>