<div class="container-fluid">
    <div class="page-title">
        <div class="row">
        <br>
            <div class="col-6">
                <h5>Detail Pembayaran Kas <i class="fa fa-money" aria-hidden="true"></i></h5>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6"  style="margin-left: 150px;">
    <div class="card">
        <div class="card-body">
        <p class="card-text">
                        <label for="judul"><b> Judul:</b></label>
                            <?= $kas['judul']; ?>
                        </p>
                        <p class="card-text">
                            <label for="deskripsi"><b> Deskripsi: </b></label>
                            <?= $kas['deskripsi']; ?>
                        </p>
                        <p class="card-text">
                            <label for="tipe"><b> Tipe: </b></label>
                            <?= $kas['tipe']; ?>
                        </p> 
        </div>
    </div>
</div>
