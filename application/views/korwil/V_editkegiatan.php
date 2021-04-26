<!-- Page Sidebar Ends-->
<div class="page-body">

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>Edit Kegiatan</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Information </li>
                        <li class="breadcrumb-item active">Edit Kegiatan</li>
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
                        <h5>Information Edit Kegiatan</h5>
                    </div>

                    <!-- Validasi ERROR -->
                    <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif ?>

                    <?php echo $this->session->flashdata('flash-data') ?>
                    <!-- END VALIDASI ERROR-->
                    <div class="card-body add-post">
                      
                        <form class="row needs-validation" method="POST" enctype="multipart/form-data">
                            <div class="col-sm-12">
                                <input type="hidden" name="id_kegiatan" value="<?= $data_kegiatan['id_kegiatan']; ?>">
                                <div class="mb-3">
                                    <label for="Tema">Tema</label>
                                    <input class="form-control" name="Tema" value="<?= $data_kegiatan['Tema']; ?>"
                                        type=" text" placeholder="Isikan Tema" required="">
                                </div>
                                <div class="mb-3">
                                    <label for="judul">Judul</label>
                                    <input class="form-control" name="judul" value="<?= $data_kegiatan['judul']; ?>"
                                        type=" text" placeholder="Isikan Judul" required="">
                                </div>

                                <div class="email-wrapper">
                                    <div class="theme-form">
                                        <div class="mb-3">
                                            <label>Isi Berita:</label>
                                            <textarea id="text-box" name="textbox"
                                            value="<?= $data_kegiatan['textbox']; ?>" cols=" 10"
                                                rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class=" col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="tanggal_kegiatan">Tanggal Kegiatan</label>
                                    <input class="form-control form-control-lg" name="tanggal_kegiatan"
                                    value="<?= date('Y-m-d', strtotime($data_kegiatan['tanggal_kegiatan'])); ?>" type="date"
                                        placeholder="Masukan Tanggal Kejadian" required=""></input>
                                </div>
                            </div>
                            <div class=" col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="tanggal_berakhir">Tanggal Berakhir</label>
                                    <input class="form-control form-control-lg" name="tanggal_berakhir"
                                    value="<?= date('Y-m-d', strtotime($data_kegiatan['tanggal_berakhir'])); ?>" type="date"
                                        placeholder="Masukan deskripsi" required=""></input>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="name_cabang">Nama Cabang</label>
                                    <select class="form-select form-control-lg digits" name="name_cabang"
                                    value="<?= $data_kegiatan['name_cabang']; ?>" required="">
                                    <option selected="" disabled="" value="">Pilih Cabang Wilayah</option>
                                            <?php foreach ($dataCabang->result_array() as $row) { ?>
                                            <option 
                                                value="<?php echo $row['id_cabang'] ?>"
                                                <?php if ( $row['id_cabang'] == $data_kegiatan['id_cabang'] ) echo 'selected="selected"'; ?>>
                                                <?php echo $row['name_cabang'] ?></option>
                                            <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="status">Status</label>
                                    <select class="form-select form-control-lg digits" name="status"
                                    value="<?= $data_kegiatan['status']; ?>" required="">
                                        <option selected="" disabled="" value="">Pilih Status</option>
                                        <option value="expired" <?php if ( $data_kegiatan['status'] == "expired" ) echo 'selected="selected"' ?>>Expired</option>
                                        <option value="draft" <?php if ( $data_kegiatan['status'] == "draft" ) echo 'selected="selected"' ?>>Draft</option>
                                        <option value="publish" <?php if ( $data_kegiatan['status'] == "publish" ) echo 'selected="selected"' ?>>Publish</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="namaberkas">Foto</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form-control-lg" type="file" name="namaberkas">
                                    </div>
                                <br><br>
                                    <div class="col-md-8">

                                <h5>Edit Foto</h5>

                                <table class="table" style="font-size: 12px">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama File</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <?php

                                    $data_foto = array();
                                    if ($data_kegiatan['namaberkas']) { // dia ada fotonya ?

                                        $data_foto = explode(',', $data_kegiatan['namaberkas']);
                                    }

                                    if (count($data_foto) > 0) {
                                        $nomor = 0;
                                        foreach ($data_foto as $foto) {

                                            $link = base_url('Adminkorwil/onRemovePhoto?id_kegiatan=' . $data_kegiatan['id_kegiatan'] . '&index=' . $nomor);
                                    ?>
                                    <tr>
                                        <td><?php echo ($nomor + 1) ?></td>
                                        <td>
                                            <a target="_blank"
                                                href="<?php echo base_url('assets/images/' . $foto) ?>"><?php echo $foto ?></a>
                                        </td>
                                        <td><a href="<?php echo $link ?>"
                                                onclick="return confirm('Apakah anda yakin ingin menghapus foto Kegiatan? <?php echo $foto ?>')"><i
                                                    class="fa fa-trash"></i></a></td>
                                    </tr>

                                    <?php $nomor++;
                                        }
                                    } else echo '<tr><td colspan="2" align="center">Tidak memiliki Satupun foto</td></tr>'; ?>
                                </table>
                            </div>
                                    <!-- END Foto -->
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="namaberkas">Tampil Foto</label>
                                        <div class="col-sm-9">
                                            <center>
                                            <?php
                                    $src = 'https://pertaniansehat.com/v01/wp-content/uploads/2015/08/default-placeholder.png';

                                    if ($data_kegiatan['namaberkas']) {

                                        $src = "";
                                        $checkDataPhoto = explode(',', $data_kegiatan['namaberkas']);

                                        // apakah gambar tsb lebih dari 1 ?
                                        if (count($checkDataPhoto) > 1) {

                                            foreach ($checkDataPhoto as $rowPhoto) {

                                                echo '<img class="img-thumbnail rounded-circle me-2" width="240px" height="240px" src="' . base_url('assets/images/' . $rowPhoto) . '"  alt="Generic placeholder image"> <hr>';
                                            }
                                        } else { // gambar hanya 1

                                            echo '<img class="img-thumbnail rounded-circle me-2" width="240px" height="240px" src="' . base_url('assets/images/' . $data_kegiatan['namaberkas']) . '" alt="Generic placeholder image">';
                                        }
                                    }

                                    ?>
                                            </center>
                                        </div>



                        </form>
                        <br>
                        <div class="btn-showcase">
                            <button class="btn btn-primary" type="submit" name="editKegiatan">Simpan Data</button>
                            <input class="btn btn-warning" type="reset" value="Reset">
                            <a href="<?= base_url('Adminkorwil/tabelkegiatan'); ?>" class="btn btn-light"
                                type="submit">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
</div>
</div>
</div>