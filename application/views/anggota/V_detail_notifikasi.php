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
                    <li class="breadcrumb-item active">Informasi Notifikasi</li>
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
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="API-3" width="100%" cellspacing="0">
                            <thead style=" text-align: center;">
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Pesan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody style=" text-align:center;">
                                <?php $index = 1 ?>
                                <?php foreach ($notif as $bell) : ?>
                                <tr>
                                    <td> <?= $index ?></td>
                                    <td><?= $bell["judul"] ?></td>
                                    <td><?= $bell["pesan"] ?></td>
                                    <td>
                                        <!-- hapus -->
                                        <?php if ($bell['is_read'] == 0) : ?>
                                        <a href="<?= base_url(); ?>Adminkorwil/hapunotif/<?= $bell['id_notif'] ?>"
                                            class="badge badge-danger"><i class="fa fa-trash "> </i>
                                            Hapus
                                        </a>
                                        <?php else : ?>
                                        <?php endif; ?>
                                    </td>
                                    <?php
                                endforeach;
                                    ?>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Pesan</th>
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