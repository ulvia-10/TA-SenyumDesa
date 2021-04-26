<!-- Page Sidebar Ends-->
<div class="page-body">

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
                        <li class="breadcrumb-item active">Donasi</li>
                        <li class="breadcrumb-item active">Edit Data Donasi Senyum Desa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5>Edit Donasi Senyum Desa</h5>
        </div>
        <?php foreach ($data_donasi as $donasi) { ?>
        <form class="form theme-form" action="<?php echo base_url('Donasi/update') ?>" method="POST">
            <div class="card-body">

                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="no_rekening">No Rekening</label>
                            <input class="form-control form-control-lg" name="Id_donasi" id="Id_donasi" type="hidden"
                                value="<?php echo $donasi->Id_donasi ?>" placeholder="Masukan No Rekeneing">
                            <input class="form-control form-control-lg" name="no_rekening" id="no_rekening" type="text"
                                value="<?php echo $donasi->no_rekening ?>" placeholder="Masukan No Rekeneing"
                                required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="nama_donatur">Nama Donatur</label>
                            <input class="form-control" name="nama_donatur" id="nama_donatur" type="text"
                                value="<?php echo $donasi->nama_donatur ?>" placeholder="Masukan Nama Donatur"
                                required="">
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="jumlahdonasi">Jumlah Donasi</label>
                            <input class="form-control form-control-sm" name="jml_donasi" id="jumlahdonasi" type="text"
                                value="<?php echo $donasi->jml_donasi ?>" placeholder="Masukan Jumlah Donasi"
                                required="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="status">Status</label>
                            <select class="form-select form-control-lg digits" name="status" required="" id="status"
                                value="<?php echo $donasi->status ?>">
                                <option value="Lunas">Lunas</option>
                                <option value="Belum Lunas">Belum Lunas</option>
                                <option value="Kadaluwarsa">Kadaluwarsa</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="tgl_donasi">Tanggal Donasi</label>
                            <input class="form-control" name="tgl_donasi" id="tgl_donasi" type="date"
                                value="<?php echo $donasi->tgl_donasi ?>" placeholder="perubahan Tanggal Donasi"
                                required="">
                        </div>
                    </div>
                </div>


            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit" value="simpan">Update</button>
                <input class="btn btn-warning" type="reset" value="Reset">
                <a href="<?= base_url('donasi'); ?>" class="btn btn-light" type="submit">Cancel</a>
            </div>
        </form>
        <?php } ?>
    </div>

</div>