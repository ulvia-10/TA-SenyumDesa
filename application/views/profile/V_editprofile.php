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
                     <form  action="<?php echo base_url('profile/changepassword') ?>" method="POST">
                         <div class="row mb-2">
                             <div class="col-auto"><img class="img-70 rounded-circle" alt=""
                                     src="../assets/images/user/7.jpg"></div>
                             <div class="col">
                                 <h3 class="mb-1"><?php echo $this->session->userdata('sess_fullname') ?></h3>
                                 <p class="mb-4"><?php echo ucfirst($this->session->userdata('sess_level')) ?></p>
                             </div>
                         </div>
                         <div class="mb-3">
                             <label class="form-label">Old Password</label>
                             <input class="form-control" name="password" type="password" value="password" maxlength="6">
                         </div>
                         <div class="mb-3">
                             <label class="form-label">New Password</label>
                             <input class="form-control" name="password" type="password" value="password" maxlength="6">
                         </div>
                         <div class="form-footer">
                             <button class="btn btn-primary btn-block">Save</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
         <div class="col-xl-8">

             <form class="card" action="<?php echo base_url('profile/update') ?>" method="POST">
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
                             <!-- id_profile type hidden 
                             <input class="form-control" name="id_profile" id="id_profile" type="hidden"
                                     value="<?php echo $akun_profile->id_profile ?>" placeholder="id profile"> -->
                                 <label class="form-label">Username</label>
                                 <input class="form-control" name="username" id="username" type="text"
                                     value="" placeholder="Username"
                                     required="">
                             </div>
                         </div>
                         <div class="col-sm-6 col-md-6">
                             <div class="mb-3">
                                 <label class="form-label">Full Name</label>
                                 <input class="form-control" name="full_name" id="full_name" type="text"
                                     value="" placeholder="Nama Lengkap" required="">
                             </div>
                         </div>
                         <div class="col-sm-6 col-md-6">
                             <div class="mb-3">
                                 <label class="form-label">Password</label>
                                 <input class="form-control" name="password" id="password" type="password" maxlength="6"
                                     value="" placeholder="Password" required="">
                             </div>
                         </div>
                         <div class="col-sm-6 col-md-6">
                             <div class="mb-3">
                                 <label class="form-label">Tempat Lahir</label>
                                 <input class="form-control" name="tempat_lahir" id="tempat_lahir" type="text"
                                     value="" placeholder="Tempat Lahir"
                                     required="">
                             </div>
                         </div>
                         <div class="col-sm-6 col-md-6">
                             <div class="mb-3">
                                 <label class="form-label">Asal</label>
                                 <input class="form-control" name="asal" id="asal" type="text"
                                     value="" placeholder="Asal pekerjaan" required="">
                             </div>
                         </div>
                         <div class="col-sm-6 col-md-6">
                             <div class="mb-3">
                                 <label class="form-label">Foto</label>
                                 <input class="form-control" name="photo" id="photo" type="file"
                                     value="" placeholder="Asal pekerjaan" required="">
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
