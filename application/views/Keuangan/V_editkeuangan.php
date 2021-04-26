<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Data keuangan</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">Donasi</li>
                    <li class="breadcrumb-item active">Edit Data keuanganSenyum Desa</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h5>Edit keuangan Senyum Desa</h5>
    </div>

    <?php echo $this->session->flashdata('flash-data') ?>
    <form class="form theme-form" action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_keuangan" value="<?= $data_keuangan['id_keuangan']; ?>">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?= $data_keuangan['judul']; ?>">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control"><?= $data_keuangan['deskripsi']; ?></textarea>
        </div>

        <div class="form-group">
            <label for="cabang">Pilih Cabang</label>
            <select name="cabang" class="form-control" id="cabang">
                <?php if ($cabang->num_rows() > 0) {

                    foreach ($cabang->result() as $rowCabang) {

                        $status_selected = '';
                        if ($rowCabang->id_cabang == $data_keuangan['id_cabang']) {

                            $status_selected = 'selected="selected"';
                        }

                        echo '<option value="' . $rowCabang->id_cabang . '" ' . $status_selected . '>' . ucfirst($rowCabang->nama_kategori) . '</option>';
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="tipe">Tipe</label>
            <select class="form-control" id="tipe" name="tipe">

                <option value="pendaftaran"
                    <?php if ($data_keuangan['tipe'] == "pendaftaran") echo 'selected="selected"'; ?>>
                    pendaftaran</option>
                <option value="sosialisasi"
                    <?php if ($data_keuangan['tipe'] == "sosialisasi") echo 'selected="selected"'; ?>>
                    sosialisasi</option>
                <option value="Rapat Kerja"
                    <?php if ($data_keuangan['tipe'] == "Rapat Kerja") echo 'selected="selected"'; ?>>
                    Rapat Kerja</option>
                <option value="danadarurat"
                    <?php if ($data_keuangan['tipe'] == "danadarurat") echo 'selected="selected"'; ?>>
                    danadarurat</option>
            </select>
        </div>

        <div class="form-group">
            <label for="jenis_keuangan">Jenis Keuangan</label>
            <select class="form-control" id="jenis_keuangan" name="jenis_keuangan">

                <option value="masuk"
                    <?php if ($data_keuangan['jenis_keuangan'] == "masuk") echo 'selected="selected"'; ?>>
                    Masuk</option>
                <option value="keluar"
                    <?php if ($data_keuangan['jenis_keuangan'] == "keluar") echo 'selected="selected"'; ?>>
                    Keluar</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nominal">Nominal</label>
            <input type="text" class="form-control" id="nominal" name="nominal"
                value="<?= $data_keuangan['nominal']; ?>">
        </div>

        <button type="submit" name="edit" class="btn btn-primary float-right">
            <i class="fas fa-edit"></i> Edit</button>
    </form>

</div>