 <!-- Container-fluid starts-->
 <div class="container-fluid">
     <div class="page-title">
         <div class="row">
             <div class="col-6">
                 <h3>Profile</h3>
             </div>
             <div class="col-6">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                     <li class="breadcrumb-item">Data Tables</li>
                     <li class="breadcrumb-item active">Profile</li>
                 </ol>
             </div>
         </div>
     </div>
 </div>




 <div class="edit-profile">
     <div class="row">
         <div class="col-xl-4">
             <div class="card">
                 <div class="card-header">
                     <h4 class="card-title mb-0">My Profile</h4>
                     <div class="card-options"><a class="card-options-collapse" href="#"
                             data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                             class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                 class="fe fe-x"></i></a></div>
                 </div>
                 <div class="card-body">
                     <form>
                         <div class="row mb-2">
                             <div class="col-auto"><img class="img-70 rounded-circle" alt=""
                                     src="../assets/images/user/7.jpg"></div>
                             <div class="col">
                                 <h3 class="mb-1"><?php echo $this->session->userdata('sess_fullname') ?></h3>
                                 <p class="mb-4"><?php echo ucfirst($this->session->userdata('sess_level')) ?></p>
                             </div>
                         </div>
                         <div class="mb-3">
                             <label class="form-label">OLD Password</label>
                             <input class="form-control" type="password" value="password">
                         </div>
                         <div class="mb-3">
                             <label class="form-label">New Password</label>
                             <input class="form-control" type="password" value="password">
                         </div>
                         <div class="form-footer">
                             <button class="btn btn-primary btn-block">Save</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
         <div class="col-xl-8">

             <form class="card" action="<?php echo base_url('Profile/update') ?>" method="POST">
                 <div class="card-header">
                     <h4 class="card-title mb-0">Edit Profile</h4>
                     <div class="card-options"><a class="card-options-collapse" href="#"
                             data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                             class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                 class="fe fe-x"></i></a></div>
                 </div>
                 <div class="card-body">
                     <div class="row">

                         <div class="col-sm-6 col-md-6">
                             <div class="mb-3">
                                 <label class="form-label">Username</label>
                                 <input class="form-control" name="id_profile" id="id_profile" type="hidden"
                                     value="<?php echo $akun_profile->id_profile ?>" placeholder="id profile">
                                 <input class="form-control" name="username" id="username" type="text"
                                     value="<?php echo $akun_profile->username ?>" placeholder="akun_profile"
                                     required="">
                             </div>
                         </div>
                         <div class="col-sm-6 col-md-6">
                             <div class="mb-3">
                                 <label class="form-label">Full Name</label>
                                 <input class="form-control" name="full_name" id="full_name" type="text"
                                     value="<?php echo $akun_profile->full_name ?>" placeholder="full_name" required="">
                             </div>
                         </div>
                         <div class="col-md-12">
                             <div class="mb-3">
                                 <label class="form-label">Tempat Lahir</label>
                                 <input class="form-control" name="tempat_lahir" id="tempat_lahir" type="text"
                                     value="<?php echo $akun_profile->tempat_lahir ?>" placeholder="tempat_lahir"
                                     required="">
                             </div>
                         </div>
                         <div class="col-sm-6 col-md-4">
                             <div class="mb-3">
                                 <label class="form-label">asal</label>
                                 <input class="form-control" name="asal" id="asal" type="text"
                                     value="<?php echo $akun_profile->asal ?>" placeholder="asal" required="">
                             </div>
                         </div>
                         <div class="col-sm-6 col-md-3">
                             <div class="mb-3">
                                 <label class="form-label">Reason Join</label>
                                 <textarea class="form-control" name="reason_join" id="reason_join" type="text"
                                     value="<?php echo $akun_profile->reason_join ?>" placeholder="reason join"
                                     required=""></textarea>
                             </div>
                         </div>
                         <div class="col-md-5">
                             <div class="mb-3">
                                 <label class="form-label">Gender</label>
                                 <select class="form-control btn-square" name="gender" required="" id="gender"
                                     value="<?php echo  $akun_profile->gender ?>">
                                     <option value="0">--Select--</option>
                                     <option value="P">Women</option>
                                     <option value="L">Man</option>
                                 </select>
                             </div>
                         </div>

                     </div>
                     <div class="card-footer text-end">
                         <button class="btn btn-primary" type="submit">Update Profile</button>
                     </div>
             </form>
         </div>

     </div>
 </div>
 <!-- Container-fluid Ends-->
 </div>
