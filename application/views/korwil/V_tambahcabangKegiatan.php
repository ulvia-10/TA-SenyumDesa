<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Tambah Kegiatan</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Blog</li>
                    <li class="breadcrumb-item active">Tambah Kegiatan</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Information Kegiatan</h5>
                </div>
                <div class="card-body add-post">
                    <form class="row needs-validation"
                        action="<?php echo base_url('Adminkorwil/prosesTambahkegiatan') ?>" method="POST"
                        enctype="multipart/form-data">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="judul">Tema</label>
                                <input class="form-control" name="Tema" id="Tema" type="text" placeholder="Isikan Tema"
                                    required="">
                            </div>

                            <div class="mb-3">
                                <label for="judul">Judul</label>
                                <input class="form-control" name="judul" id="judul" type="text"
                                    placeholder="Isikan Judul" required="">
                            </div>

                            <div class=" col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="tanggal_kejadian">Tanggal Kejadian</label>
                                    <input class="form-control form-control-lg" name="tanggal_kejadian"
                                        id="tanggal_kejadian" type="date" placeholder="Masukan Tanggal Kejadian"
                                        required=""></input>
                                </div>
                            </div>
                            <div class=" col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="tanggal_berakhir">Tanggal Berakhir</label>
                                    <input class="form-control form-control-lg" name="tanggal_berakhir"
                                        id="tanggal_berakhir" type="date" placeholder="Masukan deskripsi"
                                        required=""></input>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="cabang">Cabang</label>
                                        <select class="form-select form-control-lg digits" name="cabang" id="cabang"
                                            required="">
                                            <option selected="" disabled="" value="">Pilih Cabang Wilayah</option>
                                            <?php foreach ($dataCabang->result_array() as $row) { ?>
                                            <option value="<?php echo $row['id_cabang'] ?>">
                                                <?php echo $row['name_cabang'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="status">Status</label>
                                    <select class="form-select form-control-lg digits" name="status" id="status"
                                        required="">
                                        <option selected="" disabled="" value="">Pilih Status</option>
                                        <option value="expired">Expired</option>
                                        <option value="draft">Draft</option>
                                        <option value="publish">Publish</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="photo">Upload Berkas</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form-control-lg" type="file" id="upload"
                                            name="namaberkas[]" required multiple>
                                    </div>
                                </div>

                                <div class="email-wrapper">
                                    <div class="theme-form">
                                        <div class="mb-3">
                                            <label>Isi Berita:</label>
                                            <textarea id="text-box" name="textbox" cols="10" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    </form>
                    <div class="btn-showcase">
                        <button class="btn btn-primary" type="submit">Save
                            Data</button>
                        <input class="btn btn-light" type="reset" value="Reset">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Container-fluid Ends-->