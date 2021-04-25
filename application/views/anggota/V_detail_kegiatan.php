<div class="container-fluid">
	<div class="page-title">
    <br>
		<div class="row">
			<div class="col-5" style="margin-left:300px;">
				<h5>Detail Kegiatan <i class="fa fa-child" aria-hidden="true"></i></h5>
			</div>
	<br> <br> <br>
<div class="col-sm-5" >
 	<div class="card">
		<div class="card-body">
       <!-- <img src="<?= base_url('./assets/images/' . $kegiatan['gambar']); ?>" alt="Maaf gambar tidak tersedia" style="width:50%; height:45%; margin-left:90px;"> -->
			<p class="card-text">
				<label for="judul"><b> Judul :</b></label>
				<?= $kegiatan['judul']; ?>
			</p>
			<p class="card-text">
				<label for="tanggal_kegiatan"><b> Tanggal Kegiatan: </b></label>
				<?= date('d-m-Y'),(strtotime( $kegiatan['tanggal_kegiatan'])); ?>
			</p>
			<p class="card-text">
				<label for="tanggal_berakhir"><b> Tanggal Kegiatan Berakhir: </b></label>
				<?= date('d-m-Y',strtotime($kegiatan['tanggal_berakhir'])); ?>
			</p>
			<p class="card-text">
				<label for="deskripsi"><b>Deskripsi: </b></label>
				<?= $kegiatan['deskripsi']; ?>
			</p>
            <p class="card-text">
				<label for="created"><b>Created at </b></label>
				<?= date('d-m-Y H:i:s',strtotime($kegiatan['created_at'])); ?>
			</p>
            <p class="card-text">
            <a href="<?= base_url('kegiatan/listkegiatan'); ?>" class="btn btn-secondary" type="submit"> <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
		</p>
		</div>
	</div>
</div>
<br>
<div class="col-sm-5" >
 	<div class="card">
		<div class="card-body">
       <!-- <img src="<?= base_url('./assets/images/' . $kegiatan['gambar']); ?>" alt="Maaf gambar tidak tersedia" style="width:50%; height:45%; margin-left:90px;"> -->
       <?php
                        $src = 'https://pertaniansehat.com/v01/wp-content/uploads/2015/08/default-placeholder.png';

                        if ($kegiatan['gambar']) {

                            $src = "";
                            $checkDataPhoto = explode(',', $kegiatan['gambar']);

                            // apakah gambar tsb lebih dari 1 ?
                            if (count($checkDataPhoto) > 1) {

                                foreach ($checkDataPhoto as $rowPhoto) {

                                    echo '<img src="' . base_url('./assets/images/' . $rowPhoto) . '" style="width: 100px; height:50px;"> <hr>';
                                }
                            } else { // gambar hanya 1

                                echo '<img src="' . base_url('./assets/images/' . $kegiatan['gambar']) . '" style="width: 100px"; height:100px;>';
                            }
                        }

                        ?>
		</div>
	</div>
</div>
</div>
	</div>
</div>
