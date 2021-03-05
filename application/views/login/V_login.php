<!-- start login section -->
<section class="bg-light p-0">
    <div class="container d-flex flex-column">

        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-sm-11 col-md-8 col-lg-7 col-xl-5">


                <div class="card p-2-0 p-sm-2-5 my-2-0">



                    <div class="mb-4 text-center">
                        <h2 class="font-weight-normal mb-0">Welcome to <span class="text-primary">Amava</span>
                        </h2>
                        <p class="mb-0">Login to your account.</p>

                    </div>


                    <!-- Flashdata -->
                    <?php echo $this->session->flashdata('msg') ?>

                    <!-- Form -->
                    <form action="<?php echo base_url('login/processLogin') ?>" method="POST">

                        <div class="row">

                            <!-- Input -->
                            <div class="col-12">

                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Your username">
                                </div>

                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-12">

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Your password">
                                </div>

                            </div>
                            <!-- End Input -->

                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-6 mb-2 mb-sm-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="login-remember">
                                    <label class="custom-control-label display-30" for="login-remember">Keep me
                                        signed in</label>
                                </div>
                            </div>
                            <div class="col-sm-6 text-left text-sm-right">
                                <a href="password-recovery.html" class="m-link-muted small">Forgot password?</a>
                            </div>

                            <div class="col-md-12 center">
                                <button type="submit" class="butn style-one fill btn-block mt-4 mb-0">Login</button>
                            </div>
                        </div>

                        <div class="text-center text-small mt-4">
                            <span>Don't have an account yet? <a href="register.html"
                                    class="text-primary">Register</a></span>
                        </div>

                    </form>
                    <!-- End Form -->

                </div>

            </div>
        </div>

    </div>
</section>
<!-- end login section -->