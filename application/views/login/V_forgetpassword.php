<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12">     
            <div class="login-card">
              <div>
                <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="http://admin.pixelstrap.com/cuba/assets/images/logo/login.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
                <div class="login-main"> 
                  <form class="theme-form">
                    <h4>Create Your Password</h4>
                    <div class="form-group">
                      <label class="col-form-label">New Password</label>
                      <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Retype Password</label>
                      <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                    </div>
                    <div class="form-group mb-0">
                      <div class="checkbox p-0">
                        <input id="checkbox1" type="checkbox">
                        <label class="text-muted" for="checkbox1">Remember password</label>
                      </div>
                      <button class="btn btn-primary btn-block" type="submit">Done </button>
                    </div>
                    <p class="mt-4 mb-0">Don't have account?<a class="ms-2" href="<?php echo base_url('login/processLogin') ?>">Create Account</a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>