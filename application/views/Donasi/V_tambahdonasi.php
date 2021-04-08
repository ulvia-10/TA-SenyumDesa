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
                    <li class="breadcrumb-item active">Tambah Data Donasi Senyum Desa</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h5>Tambah Donasi Senyum Desa</h5>
    </div>
    <form class="form theme-form" action="<?php echo base_url('Donasi/prosesTambah') ?>" method="POST">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label" for="no_rekening">No Rekening</label>
                        <input class="form-control form-control-lg" name="no_rekening" id="no_rekening" type="text"
                            placeholder="Masukan No Rekeneing" required="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label" for="nama_donatur">Nama Donatur</label>
                        <input class="form-control" name="nama_donatur" id="nama_donatur" type="text"
                            placeholder="Masukan Nama Donatur" required="">
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
                        <label class="form-label" for="jumlahdonasi">Jumlah Donasi</label>
                        <input class="form-control form-control-sm" name="jml_donasi" id="jumlahdonasi" type="text"
                            placeholder="Masukan Jumlah Donasi" required="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label" for="status">Status</label>
                        <select class="form-select form-control-lg digits" name="status" id="status" required="">
                            <option value="Lunas">Lunas</option>
                            <option value="Belum Lunas">Belum Lunas</option>
                            <option value="Kadaluwarsa">Kadaluwarsa</option>
                        </select>
                    </div>
                </div>
            </div>


        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Submit</button>
            <input class="btn btn-warning" type="reset" value="Reset">
            <a href="<?= base_url('donasi'); ?>" class="btn btn-light" type="submit">Cancel</a>
        </div>
    </form>
</div>

<!-- Container-fluid Ends-->
