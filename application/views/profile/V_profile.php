   <!-- Container-fluid starts-->
   <div class="container-fluid">
            <div class="user-profile">
              <div class="row">
                <!-- user profile first-style start-->
                <div class="col-sm-12">
                  <div class="card hovercard text-center">
                    <div class="cardheader"></div>
                    <div class="user-image">
                      <div class="avatar"><img src="<?=base_url();?>/assets/images/<?=$profile['photo'];?>"></div>
                      <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"> <a href="<?= base_url('data_akun/edit'); ?>"></a></i></div>
                    </div>
                    <div class="info">
                      <div class="row">
                        <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="ttl-info text-start">
                                <h6><i class="fa fa-envelope"></i> Email</h6><span><?= $profile['email']; ?></span>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="ttl-info text-start">
                                <h6><i class="fa fa-calendar"></i> BOD</h6><span><?= $profile['tanggal_lahir']; ?></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                          <div class="user-designation">
                            <div class="title"><a target="_blank" href="user-profile.html"><?= $profile['full_name']; ?></a></div>
                            <div class="desc mt-2"><?= $profile['level']; ?></div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="ttl-info text-start">
                                <h6><i class="fa fa-phone"></i>   Contact Us</h6><span><?= $profile['telp']; ?></span>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="ttl-info text-start">
                                <h6><i class="fa fa-location-arrow"></i> Address</h6><span><?= $profile['address']; ?></span>
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
          <!-- Container-fluid Ends-->