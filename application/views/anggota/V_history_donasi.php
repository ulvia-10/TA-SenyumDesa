<div class="container-fluid">
    <div class="page-title">
    <a href="<?= base_url(); ?>donasi/tambahbuktidonasi/" class="btn btn-secondary btn-sm mb-3">
                    <i class="fa fa-plus" aria-hidden="true"></i>Upload Bukti</a>
        <div class="row">
            <div class="col-6" >
                <h6>Riwayat Pembayaran Donasi</h6>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12" >
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <?php echo $this->session->flashdata('msg') ?>
                <table class="display" id="basic-1" style="text-align:center;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Bayar</th>
                            <th>Nama Penerima</th>
                            <th>Judul</th>
                            <th>Tipe</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php $no = 1;
                        foreach ($kas->result_array() as $ks) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <?php
														
														$tanggal = "-";
														if ( $ks['tanggal_laporan'] ){

															$tanggal = date('d-m-Y',strtotime($ks['tanggal_laporan']));
														}
													?>
                            <td><?= $tanggal ?></td>
                            <td><?= $ks["full_name"]; ?></td>
                            <td><?= $ks["judul"]; ?></td>
                            <td > <span class="badge badge-info"><?=  $ks["tipe"]; ?></span></td>
                            <td> <span class="badge badge-secondary"><?= $ks["status"]; ?></span></td>
                            <td>
                                <!-- detail -->
                                <a href="<?= base_url(); ?>kegiatan/detailpembayaran/<?= $ks['id_profile']; ?>"
                                    class="badge badge-primary">
                                    <i class="fa fa-eye" aria-hidden="true"></i></a></a>
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
