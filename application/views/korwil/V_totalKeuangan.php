<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Data Keuangan</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Data Keuangan</li>
                    <li class="breadcrumb-item active">Total Keuangan Kas </li>
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
                    <h5>Tabel</h5><span>Total Keuangan Kas | Senyum Desa</span><br>
                    <a href="<?= base_url('AdminKorwil/tambahKeuangan'); ?>" class="btn btn-outline-primary"
                        type="button" data-original-title="btn btn-outline-danger-2x" style="width: 120px;" title="">
                        Tambah</a>
                </div>

                <div class="card-body">

                    <?php

                    $totalPemasukan    = 0;
                    $totalPengeluaran   = 0;

                    // cek masuk
                    if ($masuk != null) {

                        $totalPemasukan = $masuk->TOTAL;
                    }

                    // cek keluar 
                    if ($keluar != null) {

                        $totalPengeluaran = $keluar->TOTAL;
                    }
                    ?>
                    <div class="table-responsive">
                        <table class="display" id="API-3">
                            <thead style=" text-align: center;">
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>cabang</th>
                                    <th>Kas Masuk</th>
                                    <th>Kas Keluar</th>
                                    <th>Tanggal Kas</th>
                                </tr>
                            </thead>
                            <tbody style=" text-align:center;">
                                <?php $no = 1;
                                foreach ($data_keuangan->result_array() as $ks) { ?>
                                <tr>
                                    <td> <?= $no++; ?></td>
                                    <td><?= $ks["judul"]; ?></td>
                                    <td><?= $ks["name_cabang"]; ?></td>
                                    <td><?= $ks["nominal"]; ?></td>
                                    <td><?= $ks["nominal"]; ?></td>
                                    <td><?= $ks["tanggal_laporan"]; ?></td>
                                    <?php
                                }
                                    ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Nama Cabang</th>
                                </tr>
                            </tfoot>
                            <tr>
                                <th colspan=3>Total Kas Masuk Dan Keluar</th>
                                <th align=right>Rp. <?php echo number_format($totalPemasukan, 2) ?></th>
                                <th align=right>Rp. <?php echo number_format($totalPengeluaran, 2) ?>
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>





    </div>
</div>
</div>