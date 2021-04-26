<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>Information Blog Kegiatan</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Information</li>
                    <li class="breadcrumb-item active">Kegiatan</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="user-profile">
        <div class="row">

            <?php foreach ($data_kegiatan->result_array() as $kg) : ?>
            <!-- user profile second-style start-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="profile-img-style">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="media"><img class="img-thumbnail rounded-circle me-3" width="80px"
                                        height="80px" src="<?= base_url() ?>assets/images/<?= $kg["photo"]; ?>"
                                        alt="Generic placeholder image">
                                    <div class="media-body align-self-center">
                                        <h5 class="mt-0 user-name"><?= $kg["name_cabang"]; ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 align-self-center">
                                <div class="float-sm-end"><small><?= $kg["created_at"]; ?></small></div>
                            </div>
                        </div>
                        <hr>
                        <center>
                            <h3><?= $kg["judul"]; ?></h3>
                        </center>
                        <br>

                        <center>
                            <div class="col-sm-6">

                                <?php
                                    $src = 'https://pertaniansehat.com/v01/wp-content/uploads/2015/08/default-placeholder.png';

                                    if ($kg['namaberkas']) {

                                        $src = "";
                                        $checkDataPhoto = explode(',', $kg['namaberkas']);

                                        // apakah gambar tsb lebih dari 1 ?
                                        if (count($checkDataPhoto) > 1) {

                                            foreach ($checkDataPhoto as $rowPhoto) {

                                                echo '<img class="img-thumbnail rounded-circle me-2" width="40px" height="50px" src="' . base_url('assets/images/' . $rowPhoto) . '"  alt="Generic placeholder image"> <hr>';
                                            }
                                        } else { // gambar hanya 1

                                            echo '<img class="img-thumbnail rounded-circle me-2" width="40px" height="50px" src="' . base_url('assets/images/' . $kg['namaberkas']) . '" alt="Generic placeholder image">';
                                        }
                                    }

                                    ?>
                            </div>
                        </center>

                        <p><?= $kg["textbox"]; ?></p>


                    </div>

                    <!--- END COMMENT -->


                </div>
            </div>
            <?php endforeach; ?>
            <!-- user profile second-style end-->


            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="pswp__bg"></div>
                <div class="pswp__scroll-wrap">
                    <div class="pswp__container">
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                    </div>
                    <div class="pswp__ui pswp__ui--hidden">
                        <div class="pswp__top-bar">
                            <div class="pswp__counter"></div>
                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                            <button class="pswp__button pswp__button--share" title="Share"></button>
                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                            <div class="pswp__preloader">
                                <div class="pswp__preloader__icn">
                                    <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                            <div class="pswp__share-tooltip"></div>
                        </div>
                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                        <div class="pswp__caption">
                            <div class="pswp__caption__center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>