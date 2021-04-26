 <!-- Page Sidebar Ends-->
 <div class="page-body">

     <div class="container-fluid">
         <div class="page-title">
             <div class="row">
                 <div class="col-6">
                     <h3>Master Cabang</h3>
                 </div>
                 <div class="col-6">
                     <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                         <li class="breadcrumb-item">Data Tables</li>
                         <li class="breadcrumb-item active">Master Cabang</li>
                         <li class="breadcrumb-item active">Edit Master Cabang</li>
                     </ol>
                 </div>
             </div>
         </div>
     </div>
     <!-- Container-fluid starts-->
     <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12">
                 <div class="card">
                     <div class="card-header">
                         <h5>Edit Master Cabang</h5><span>Isi Data dengan Teliti</span>
                     </div>
                     <div class="card-body">
                         <?php echo form_open_multipart(); ?>
                         <form class="needs-validation" action="<?php echo base_url('master/update') ?>" method="POST">
                             <div class="row g-3">
                                 <input type="hidden" name="id_cabang" value="<?php echo $master_cabang->id_cabang ?>">
                                 <div class="col-md-6">
                                     <label class="form-label" for="name_cabang">Nama Cabang</label>
                                     <input class="form-control" name="name_cabang"
                                         value="<?php echo $master_cabang->name_cabang ?>" type="text"
                                         placeholder="nama Cabang" required="">
                                     <div class="invalid-feedback">Please provide a valid Nama Cabang.</div>
                                 </div>

                                 <div class="col-md-6">
                                     <label class="form-label" for="status_cabang">Status Cabang</label>
                                     <select class="form-select" name="status_cabang"
                                         value="<?php echo $master_cabang->status_cabang ?>" required="">
                                         <option selected="" disabled="" value="">Pilih Status Cabang
                                         </option>
                                         <option value="active">Aktif</option>
                                         <option value="inactive">Tidak Aktif</option>
                                     </select>
                                     <div class="invalid-feedback">status cabang.</div>
                                 </div>
                             </div><br>

                             <div class="col-md-8">
                                 <label class="form-label" for="photo">Photo</label>
                                 <div class="col-sm-9">
                                     <input class="form-control" type="file" name="photo">
                                 </div><br>
                             </div>
                             <center>
                                 <img src="<?php echo base_url() ?>assets/images/<?php echo $master_cabang->photo ?>"
                                     width="400" height="300px" alt="" name="photo">
                             </center>

                             <br><br>

                             <button class="btn btn-primary" type="submit" value="simpan">Update</button>
                             <input class="btn btn-warning" type="reset" value="Reset">
                             <a href="<?= base_url('master'); ?>" class="btn btn-light" type="submit">Cancel</a>
                         </form>
                         <?php echo form_close() ?>
                     </div>
                 </div>

             </div>
         </div>
     </div>

 </div>