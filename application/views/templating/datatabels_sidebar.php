 <!-- Page Body Start-->
 <div class="page-body-wrapper">

     <!-- Page Sidebar Start-->
     <div class="sidebar-wrapper">
         <div>
             <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light"
                         src="<?= base_url('assets/pusatbackend/images/logo/senyumdesa.jpg'); ?>" alt=""><img
                         class="img-fluid for-dark"
                         src="<?= base_url('assets/pusatbackend/images/logo/logo_dark.jpg'); ?>" alt=""></a>
                 <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                 <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
                 </div>
             </div>
             <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                         src="<?= base_url('assets/pusatbackend/images/logo/senyumdesa.jpg'); ?>" alt=""></a></div>
             <nav class="sidebar-main">
                 <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                 <div id="sidebar-menu">
                     <ul class="sidebar-links" id="simple-bar">
                         <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                     src="<?= base_url('assets/pusatbackend/images/logo/senyumdesa.jpg'); ?>"
                                     alt=""></a>
                             <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                     aria-hidden="true"></i></div>
                         </li>
                         <li class="sidebar-main-title">
                             <div>
                                 <h6 class="lan-1">Dashboard</h6>
                                 <p class="lan-2">Halaman Dashboard.</p>
                             </div>
                         </li>
                         <li class="sidebar-list">
                             <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title"
                                 href="#"><i data-feather="home"></i><span class="lan-3">Dashboard </span></a>
                             <ul class="sidebar-submenu">
                                 <li><a class="lan-4" href="index.html">Default</a></li>
                                 <li><a class="lan-5" href="dashboard-02.html">Ecommerce</a></li>
                             </ul>
                         </li>

                         <li class="sidebar-main-title">
                             <div>
                                 <h6 class="lan-8">Data</h6>
                                 <p class="lan-9">Halaman Data</p>
                             </div>
                         </li>

                         <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                 href="<?= base_url('data_akun'); ?>"><i data-feather="git-pull-request"> </i><span>Data
                                     Akun</span></a></li>
                         <li class="sidebar-list">
                             <a class="sidebar-link sidebar-title link-nav" href="<?= base_url('master'); ?>"><i
                                     data-feather="monitor">
                                 </i><span>Data Master Cabang</span></a>
                         </li>
                         <li class="sidebar-list">
                             <a class="sidebar-link sidebar-title link-nav" href="kanban.html"><i
                                     data-feather="monitor">
                                 </i><span>Data Pendaftaraan</span></a>
                         </li>

                         <li class="sidebar-main-title">
                             <div>
                                 <h6>Components</h6>
                                 <p>UI Components & Elements </p>
                             </div>
                         </li>
                         <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                 href="file-manager.html"><i data-feather="git-pull-request"> </i><span>Edit
                                     Profile</span></a></li>
                         <li class="sidebar-list">
                             <a class="sidebar-link sidebar-title link-nav" href="kanban.html"><i
                                     data-feather="monitor">
                                 </i><span>Profile</span></a>
                         </li>

                         <li class="sidebar-main-title">
                             <div>
                                 <h6>Components</h6>
                                 <p>UI Components & Elements </p>
                             </div>
                         </li>
                         <li class="sidebar-list">
                             <a class="sidebar-link sidebar-title link-nav" href="kanban.html"><i
                                     data-feather="monitor">
                                 </i><span>Blog</span></a>
                         </li>
                         <li class="sidebar-list">
                             <a class="sidebar-link sidebar-title link-nav" href="kanban.html"><i
                                     data-feather="monitor">
                                 </i><span>information</span></a>
                         </li>
                     </ul>
                 </div>
                 <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
             </nav>
         </div>
     </div>
     <!-- Page Sidebar Ends-->

     <!-- Page Sidebar Ends-->
     <div class="page-body">
         <!-- Zero Configuration  Starts-->
         <!-- Main Content -->
         <?php $this->load->view($namafolder . '/' . $namafileview); ?>
         <!-- End Main Content -->
         <!-- Container-fluid Ends-->
     </div>