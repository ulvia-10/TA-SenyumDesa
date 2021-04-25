


<!--hero section end-->


<!--body content start-->

<div class="page-content">

    <!--login start-->

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-12">
                    <img class="img-fluid" src="http://themeht.com/winck/ltr/assets/images/about/06.png" alt="">
                </div>
                <div class="col-lg-5 col-12">
                    <div>
                        <h2 class="mb-3">Change Password</h2>
                        <!-- Flashdata -->
                        <?php echo $this->session->flashdata('msg') ?>
                        <form action="<?php echo base_url('login/processLogin') ?>" method="POST">

                            <div class="form-group">
                                <input type="text" class="form-control" name="password1" placeholder="Enter New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password2" placeholder="Repeat Password">
                                <br><a class="btn-link" style="margin-left:300px;" href="<?php echo base_url('login/index') ?>">Back To Login</a>
                            </div>
                            <button type="submit" class="btn btn-primary" >Change </button>
                        </form>
                   
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--login end-->


    <!--newsletter start-->