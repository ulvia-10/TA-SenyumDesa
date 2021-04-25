<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Data Akun</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">Detail Data Akun</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->


<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Informasi User</h5>
                </div>
                <div class="card-body">
                    <center>
                        <h5 class="card-title"><strong><?= $profile['full_name']; ?></strong></h5>
                    </center>
                    <td><img width="100px" height="100px" style="margin-left: 600px; margin-top: 20px;"
                                    src='<?= base_url() ?>assets/images/<?= $profile["photo"]; ?>'></td>
                        <div style="margin-bottom: 100px;">
                        <p class="card-text">
                            <label for="full_name"><b> Nama Lengkap :</b></label>
                            <?= $profile['full_name']; ?>
                        </p>
                        <p class="card-text">
                            <label for="username"><b> Username: </b></label>
                            <?= $profile['username']; ?>
                        </p>
                        <p class="card-text">
                            <label for="created_at"><b> Tanggal Pembuatan akun: </b></label>
                            <?= date('d-m-Y H:i:s',strtotime($profile['created_at'])); ?>
                        </p>
                        <p class="card-text">
                            <label for="email"><b> Email: </b></label>
                            <?= $profile['email']; ?>
                        </p>
                        <label for="no_telp"><b> No Telp: </b></label>
                        <?= $profile['telp']; ?></p>
                        <p class="card-text">
                            <label for="level"><b> Level: </b></label>
                            <?= $profile['level']; ?>
                        </p>
                        <p class="card-text">
                            <label for="tempat_lahir"><b> Tempat lahir: </b></label>
                            <?= $profile['tempat_lahir']; ?>
                        </p>
                        <p class="card-text">
                            <label for="tanggal_lahir"><b> Tanggal lahir: </b></label>
                            <?= date('d-m-Y',strtotime($profile['tanggal_lahir'])); ?>
                        </p>
                        <p class="card-text">
                            <label for="asal"><b> Asal: </b></label>
                            <?= $profile['asal']; ?>
                        </p>
                        <p class="card-text">
                            <label for="wilayah"><b> Wilayah: </b></label>
                            <?= $profile['name_cabang']; ?>
                        </p>
                        <p class="card-text">
                            <label for="gender"><b> Gender: </b></label>
                            <?= $profile['gender']; ?>
                        </p>
                        <label for="address"><b> Alamat: </b></label>
                        <?= $profile['address']; ?></p>
                </div>
            </div>
            </div>

        </div>
    </div>
</div>
</div>
<!-- Container-fluid Ends-->
