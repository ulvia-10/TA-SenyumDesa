<!-- Page Sidebar Ends-->
<div class="page-body">

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Data keuangan </h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Data Tables</li>
                        <li class="breadcrumb-item active">keuangan</li>
                        <li class="breadcrumb-item active">Edit Data keuangan Senyum Desa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5>Edit keuangan Senyum Desa</h5>
        </div>
        <?php foreach ($data_keuangan as $kas) { ?>
        <form class="form theme-form" action="<?php echo base_url('Keuangan/update') ?>" method="POST">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="id_keuangan">id keuangan</label>
                            <input class="form-control form-control-lg" name="id_keuangan" id="id_keuangan" type="text"
                                value="<?php echo $kas->id_keuangan ?>" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="judul">judul</label>
                            <input class="form-control form-control-lg" name="judul" id="judul" type="text"
                                value="<?php echo $kas->judul ?>" placeholder="Masukan judul">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="deskripsi">Deskripsi</label>
                            <input class="form-control" name="deskripsi" id="deskripsi" type="text"
                                value="<?php echo $kas->deskripsi ?>" placeholder="Masukan Deskripsi">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="tipe">Jumlah keuangan</label>
                            <input class="form-control form-control-sm" name="tipe" id="tipe" type="text"
                                value="<?php echo $kas->tipe ?>" placeholder="Masukan tipe">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="nominal">Jumlah Nominal</label>
                            <input class="form-control form-control-sm" name="nominal" id="nominal" type="text"
                                value="<?php echo $kas->nominal ?>" placeholder="Masukan nominal">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="jenis_keuangan">jenis_keuangan</label>
                            <select class="form-select form-control-lg digits" name="jenis_keuangan" id="jenis_keuangan"
                                value="<?php echo $kas->jenis_keuangan ?>">
                                <option value="masuk">masuk</option>
                                <option value="keluar">keluar</option>
                            </select>
                        </div>
                    </div>
                </div>


            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit" value="simpan">Update</button>
                <input class="btn btn-warning" type="reset" value="Reset">
                <a href="<?= base_url('keuangan'); ?>" class="btn btn-light" type="submit">Cancel</a>
            </div>
        </form>
        <?php } ?>
    </div>

</div>

<!-- Container-fluid Ends-->