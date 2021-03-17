     <!-- Container-fluid starts-->
     <div class="container-fluid">
         <div class="row">
             <!-- Zero Configuration  Starts-->
             <div class="col-sm-12">
                 <div class="card">
                     <div class="card-header">
                         <h2>Data Cabang</h2>
                         <span>
                             <h5> Cabang Berisikan Wilayah
                                 Cabang<code>$().DataTable();</code>.</h5>
                         </span><br>
                         <button a href="<?= base_url('master/detail'); ?>" type="button" class="btn btn-primary">tambah
                             data</button>
                     </div>
                     <div class="card-body">
                         <div class="table-responsive">
                             <table class="display" id="basic-1">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Id cabang</th>
                                         <th>Nama Cabang</th>
                                         <th>status cabang</th>
                                         <th>Tanggal cabang</th>
                                         <th>action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td>Tiger Nixon</td>
                                         <td>System Architect</td>
                                         <td>Edinburgh</td>
                                         <td>61</td>
                                         <td>2011/04/25</td>
                                         <td>
                                             <!-- detail -->
                                             <a href="#" class="badge badge-primary"><i class="fa fa-eye"></i></a>

                                             <a href="#" class="badge badge-success"><i class="fa fa-edit "></i> </a>
                                             <!-- cetak -->
                                             <!-- hapus -->
                                             <a href="#" class="badge badge-danger "> <i class="fa fa-trash"
                                                     aria-hidden="true"></i></a>
                                         </td>
                                     </tr>
                                     <tr>
                                         <td>Donna Snider</td>
                                         <td>Customer Support</td>
                                         <td>New York</td>
                                         <td>27</td>
                                         <td>2011/01/25</td>
                                         <td>
                                             <!-- detail -->
                                             <a href="<?= base_url('master/detail'); ?>" class="badge badge-primary"> <i
                                                     class="fa fa-eye" aria-hidden="true"></i></a></a>

                                             <a href="<?= base_url('master/edit'); ?>" class="badge badge-success"><i
                                                     class="fa fa-edit "></i> </a>
                                             <!-- cetak -->

                                             <!-- hapus -->
                                             <a href="#" class="badge badge-danger "> <i class="fa fa-trash"
                                                     aria-hidden="true"></i></a>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Zero Configuration  Ends-->

         </div>
     </div>
     </div>
     </div>
     <!-- Container-fluid Ends-->
     </div>