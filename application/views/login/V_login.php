


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
                                <input type="text" class="form-control" name="username" placeholder="username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="password">
                                <br><a class="btn-link" href="<?php echo base_url('login/forgetpassword') ?>">Forgot Password?</a>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                        <div class="d-flex align-items-center mt-4"> <span class="text-muted me-1">Don't have an
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