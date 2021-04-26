<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Data Keuangan</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">TabelKeuanngan</li>
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
    <form class="form theme-form" action="<?php echo base_url('Adminkorwil/prosesTambahKeuangan') ?>" method="POST">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label" for="judul">Judul</label>
                        <input class="form-control form-control-lg" name="judul" id="judul" type="text"
                            placeholder="Masukan judul" required="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label" for="deskripsi">Deskripsi</label>
                        <textarea class="form-control form-control-lg" name="deskripsi" id="deskripsi" type="text"
                            placeholder="Masukan deskripsi" required=""></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label" for="tipe">Tipe</label>
                        <select class="form-select form-control-lg digits" name="tipe" id="tipe" required="">
                            <option selected="" disabled="" value="">Pilih Tipe</option>
                            <option value="pendaftaran">Pendaftaran</option>
                            <option value="sosialisasi">sosialisasi</option>
                            <option value="raker">Rapat Kerja</option>
                            <option value="danadarurat">Dana Darurat</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label" for="jenis_keuangan">Jenis Keuangan</label>
                        <select class="form-select form-control-lg digits" name="jenis_keuangan" id="jenis_keuangan"
                            required="">
                            <option selected="" disabled="" value="">Pilih Jenis Kas</option>
                            <option value="masuk">Masuk</option>
                            <option value="keluar">Keluar</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label" for="cabang">Cabang</label>
                        <select class="form-select form-control-lg digits" name="cabang" id="cabang" required="">
                            <option selected="" disabled="" value="">Pilih Cabang Wilayah</option>
                            <?php foreach ($dataCabang->result_array() as $row) { ?>
                            <option value="<?php echo $row['id_cabang'] ?>"><?php echo $row['name_cabang'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label" for="nominal">Nominal</label>
                        <input class="form-control form-control-sm" name="nominal" id="nominal" type="number"
                            placeholder="Masukan Nominal" required="">
                    </div>
                </div>
            </div>



        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Submit</button>
            <input class="btn btn-warning" type="reset" value="Reset">
            <a href="<?= base_url('Adminkorwil/tabelKeuangan'); ?>" class="btn btn-light" type="submit">Cancel</a>
        </div>
    </form>
</div>

<!-- Container-fluid Ends-->