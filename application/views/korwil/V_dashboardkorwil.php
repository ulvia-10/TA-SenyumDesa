<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3>WELCOME ADMIN KORWIL</h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">DASHBOARD</li>
                    <li class="breadcrumb-item active">ADMIN KORWIL</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">

    <div class="col-xl-12 xl-100 chart_data_left box-col-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="row m-0 chart-main">
                    <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media align-items-center">
                            <div class="hospital-small-chart">
                                <div class="small-bar">
                                    <div class="small-chart flot-chart-container"></div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="right-chart-content">
                                    <h4><?= $getProfile; ?></h4><span>Total Jumlah Anggota</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media align-items-center">
                            <div class="hospital-small-chart">
                                <div class="small-bar">
                                    <div class="small-chart1 flot-chart-container"></div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="right-chart-content">
                                    <h4><?= $getKeuangan; ?></h4><span>Total Laporan Data Keuangan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media align-items-center">
                            <div class="hospital-small-chart">
                                <div class="small-bar">
                                    <div class="small-chart2 flot-chart-container"></div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="right-chart-content">
                                    <h4><?= $getWilayah; ?></h4><span>Total Cabang Wilayah</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                        <div class="media border-none align-items-center">
                            <div class="hospital-small-chart">
                                <div class="small-bar">
                                    <div class="small-chart3 flot-chart-container"></div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="right-chart-content">
                                    <h4><?= $getKegiatan; ?></h4><span>Data Kegiatan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="row second-chart-list third-news-update">
        <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
            <div class="card o-hidden profile-greeting">
                <div class="card-body">
                    <div class="media">
                        <div class="badge-groups w-100">
                            <div class="badge f-12"><i class="me-1" data-feather="clock"></i><span id="txt"></span>
                            </div>
                            <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
                        </div>
                    </div>
                    <div class="greeting-user text-center">
                        <div class="profile-vector"><img class="img-fluid" width="200px" height="200px"
                                src="<?php echo base_url('assets/images/' . $this->session->userdata('sess_foto')) ?>"
                                alt="">
                        </div>
                        <h4 class="f-w-600"><span id="greeting">Good Morning</span> <span class="right-circle"><i
                                    class="fa fa-check-circle f-14 middle"></i></span></h4>
                        <p><span> Welcome <?php echo $this->session->userdata('sess_fullname') ?> Lihat Profil
                                Saya</span>
                        </p>
                        <div class="whatsnew-btn"><a class="btn btn-primary">Profile</a></div>

                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-4 xl-50 notification box-col-6">
            <div class="card">
                <div class="card-header card-no-border">
                    <div class="header-top">
                        <h5 class="m-0">Notifikasi</h5>

                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="media">
                        <div class="media-body">
                            <p>20-04-2020 <span>10:10</span></p>
                            <h6>Updated Product<span class="dot-notification"></span></h6><span>Quisque a
                                consequat ante sit
                                amet magna...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 xl-50 appointment box-col-6">
            <div class="card">
                <div class="card-header">
                    <div class="header-top">
                        <h5 class="m-0">News & Update Kegiatan</h5>
                        <div class="card-header-right-icon">
                            <select class="button btn btn-primary">
                                <option>Today</option>
                                <option>Tomorrow</option>
                                <option>Yesterday</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="news-update">
                        <h6>36% off For pixel lights Couslations Types.</h6><span>Lorem Ipsum is simply
                            dummy...</span>
                    </div>
                    <div class="news-update">
                        <h6>We are produce new product this</h6><span> Lorem Ipsum is simply text of the
                            printing... </span>
                    </div>
                    <div class="news-update">
                        <h6>50% off For COVID Couslations Types.</h6><span>Lorem Ipsum is simply
                            dummy...</span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="bottom-btn"><a href="#">More...</a></div>
                </div>
            </div>
        </div>



        <div class="col-xl-4 col-lg-12 xl-50 calendar-sec box-col-6">
            <div class="card gradient-primary o-hidden">
                <div class="card-body">
                    <div class="setting-dot">
                        <div class="setting-bg-primary date-picker-setting position-set pull-right"><i
                                class="fa fa-spin fa-cog"></i></div>
                    </div>
                    <div class="default-datepicker">
                        <div class="datepicker-here" data-language="en"></div>
                    </div><span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span
                                class="dots dots1"></span><span class="dots dots2 dot-small"></span><span
                                class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span
                                class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span
                                class="dots dots7 dot-small-semi"></span><span
                                class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">
                            </span></span></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->