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
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Cabang Wilayah</h5>
                    <p>Pilih Kegiatan Berdasarkan Cabang Wilayah Masing Masing</p>
                </div>
                <div class="gallery my-gallery card-body row" itemscope="">
                    <?php foreach ($data_kegiatan->result_array() as $ft) : ?>
                    <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia" itemscope=""><a
                            href="<?= base_url() ?>assets/images/<?= $ft["photo"]; ?>" itemprop="contentUrl"
                            data-size="1600x950"><img class="img-thumbnail"
                                src="<?= base_url() ?>assets/images/<?= $ft["photo"]; ?>" itemprop="thumbnail"
                                alt="Image description"></a>
                        <figcaption itemprop="caption description">
                            <h2><a
                                    href="
                    <?= base_url('Adminkorwil/informationKegiatan/' . $ft['id_cabang']); ?>"><?php echo $ft['name_cabang'] ?></a>
                            </h2>
                        </figcaption>
                    </figure>
                    <?php endforeach; ?>
                </div>
                <!-- Root element of PhotoSwipe. Must have class pswp.-->
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
                            <button class="pswp__button pswp__button--arrow--left"
                                title="Previous (arrow left)"></button>
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