<section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-12">
                <img class="img-fluid" src="http://themeht.com/winck/ltr/assets/images/about/04.png" alt="">
                </div>
                <div class="col-lg-5 col-12">
                    <div>
                        <h2 class="mb-3">Forget Password</h2>
                        <li class="divider"></li>
                        <!-- Flashdata -->
                        <?php echo $this->session->flashdata('msg') ?>
                        <form action="<?php echo base_url('login/processLogin') ?>" method="POST">
                        <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Type your email">
                            </div>
                            <button type="submit" class="btn btn-primary">Reset Password</button>
                        </form>
                        <div class="d-flex align-items-center mt-4"> <span class="text-muted me-1">Do you have an account?</span>
                            <a href="<?php echo base_url('login/index') ?>">Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>