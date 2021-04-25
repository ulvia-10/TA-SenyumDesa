


<!--hero section end-->


<!--body content start-->

<div class="page-content">

    <!--login start-->

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-12">
                    <img class="img-fluid" src="http://themeht.com/winck/ltr/assets/images/login.png" alt="">
                </div>
                <div class="col-lg-5 col-12">
                    <div>
                        <h2 class="mb-3">Sign In</h2>
                        <!-- Flashdata -->
                        <?php echo $this->session->flashdata('msg') ?>
                        <form action="<?php echo base_url('login/processLogin') ?>" method="POST">

                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                <br><a class="btn-link" style="margin-left:300px;" href="<?php echo base_url('login/forgetpassword') ?>">Forgot Password?</a>
                            </div>
                            <button type="submit" class="btn btn-primary" >Login Now</button>
                        </form>
                        <div class="d-flex align-items-center mt-4" > <span class="text-muted me-1">Don't have an
                                account?</span>
                            <a href="<?php echo base_url('login/register') ?>">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--login end-->


    <!--newsletter start-->