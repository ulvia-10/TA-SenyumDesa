<div class="container">
    <div class="row text-white text-center z-index-1">
        <div class="col">
            <h1 class="text-white">Senyum Desa</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Ayo Mengabdi</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- / .row -->
</div>
<!-- / .container -->
<div class="shape-1 bottom">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
            d="M0,288L48,288C96,288,192,288,288,266.7C384,245,480,203,576,208C672,213,768,267,864,245.3C960,224,1056,128,1152,96C1248,64,1344,96,1392,112L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</div>
</section>

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