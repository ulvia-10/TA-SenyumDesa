<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Data Keuangan</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">Donasi</li>
                    <li class="breadcrumb-item active">Tambah Data Keuangan Senyum Desa</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h5>Tambah Keuangan Senyum Desa</h5>
    </div>
    <form class="form theme-form" action="<?php echo base_url('Keuangan/prosesTambah') ?>" method="POST">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label" for="judul">judul</label>
                        <input class="form-control form-control-lg" name="judul" id="judul" type="text"
                            placeholder="Masukan judul">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label" for="deskripsi">Dekripsi</label>
                        <input class="form-control" name="deskripsi" id="deskripsi" type="text"
                            placeholder="Masukan Nama deskripsi">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label" for="tipe">Tipe</label>
                        <input class="form-control form-control-sm" name="tipe" id="tipe" type="text"
                            placeholder="Masukan tipe">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label" for="nominal">Nominal</label>
                        <input class="form-control form-control-sm" name="nominal" id="nominal" type="text"
                            placeholder="Masukan Nominal">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label" for="jenis_keuangan">Jenis Keuangan</label>
                        <select class="form-select form-control-lg digits" name="jenis_keuangan" id="jenis_keuangan">
                            <option value="masuk">Masuk</option>
                            <option value="keluar">Keluar</option>
                        </select>
                    </div>
                </div>
            </div>


        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Submit</button>
            <input class="btn btn-warning" type="reset" value="Reset">
            <a href="<?= base_url('Keuangan'); ?>" class="btn btn-light" type="submit">Cancel</a>
        </div>
    </form>
</div>

<!-- Container-fluid Ends-->