<body id="page-top">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Laporan</h1>

        <!-- Collapsable Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-print" aria-hidden="true"></i>
                    Filter Data</h6>
                </h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    <?php echo $this->session->flashdata('flash-data') ?>
                    <form action="<?php echo base_url('C_data/exportLaporanPDF') ?>" method="GET">
                        <div class="row">

                            <div class="form-group col-md-3">
                                <label for="kategori">Lihat berdasarkan</label>
                                <input type="date" class="form-control" name="start">
                            </div>
                            <div class="form-group">
                                <div style="margin-top: 40px">Sampai</div>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="date" class="form-control" name="end" style="margin-top: 35px">
                            </div>
                            <div class="col-md-2"><button type="submit" style="margin-top: 35px"
                                    class="btn btn-primary">Cetak</button></div>
                            <a class="btn btn-primary" style="margin-top: 35px; width:80px; height:40px;"
                                href="<?php echo base_url('C_data') ?>">Reset</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <!-- DataTales Example data kondisi wilayah -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Info Data Laporan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead style=" text-align: center;">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Kategori</th>
                                <th>Kecamatan</th>
                                <th>Status Lapor </th>
                                <th>Action</th>
                            </tr>
                        <!-- </thead>
                        <tbody style=" text-align:center;">
                            <?php $no = 1;
                            foreach ($lapor->result_array() as $lpr) { ?>
                            <tr>
                                <td> <?= $no++; ?></td>
                                <td><?= $lpr["nama_lapor"]; ?></td>
                                <td><?= $lpr["tgl_tragedi"]; ?></td>
                                <td><?= $lpr["nama_kategori"]; ?></td>
                                <td><?= $lpr["kecamatan"] ?></td>
                                <td><?= $lpr["status_lapor"] ?></td>
                                </td>
                                <td>
                                    <!-- detail -->
                                    <a href="<?= base_url(); ?>C_data/detail/<?= $lpr['id_lapor']; ?>"
                                        class="badge badge-primary"> <i class="fa fa-eye"
                                            aria-hidden="true"></i></a></a>

                                    <a href="<?= base_url(); ?>C_data/edit/<?= $lpr['id_lapor']; ?>"
                                        class="badge badge-success"><i class="fa fa-edit "></i> </a>
                                    <!-- cetak -->

                                    <a href="<?= base_url(); ?>C_data/getCetakById/<?= $lpr['id_lapor']; ?>"
                                        class="badge badge-secondary " target="_blank"> <i class="fa fa-print"></i></a>
                                    <!-- hapus -->
                                    <a href="<?= base_url(); ?>C_data/hapus/<?= $lpr['id_lapor']; ?>"
                                        class="badge badge-danger "> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                                </td>
                                <?php
                            }
                                ?>
                        </tbody> -->
                    </table>


                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <script>
        <script>
    $(window).on("load", function() {
    $(".loader-container").fadeOut(1000);
});
</script>
    </script>