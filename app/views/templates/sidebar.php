<body id="page-top">

   <!-- Page Wrapper -->
   <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <!-- <div class="sidebar-brand-icon rotate-n-15">
               <i class="fas fa-money-bill"></i>
            </div> -->
            <div class="sidebar-brand-text mx-6">PEMBAYARAN SPP SMKN 1 DENPASAR</div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item <?= currentUrl("dashboard") ? "active" : "" ?>">
            <a class="nav-link" href="<?= BASE_URL ?>">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span></a>
         </li>
         <?php if ($data['role'] == "admin") { ?>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <div class="sidebar-heading" style="color: #eaeaea bold">MASTER DATA</div>

     <!-- <hr class="sidebar-divider mb-0 mt-2"> -->


         <!-- Heading
         <div class="sidebar-heading">
            master data
         </div> -->
         <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?= currentUrl("siswa") ? "active" : "" ?>">
               <a class="nav-link" href="<?= BASE_URL ?>siswa">
                  <i class="fas fa-fw fa-user"></i>
                  <span>Data Siswa</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item <?= currentUrl("petugas") ? "active" : "" ?>">
               <a class="nav-link" href="<?= BASE_URL ?>petugas">
                  <i class="fas fa-fw fa-solid fa-user-secret"></i>
                  <span>Data Petugas</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item <?= currentUrl("kelas") ? "active" : "" ?>">
               <a class="nav-link" href="<?= BASE_URL ?>kelas">
                  <i class="fas fa-fw fa-school"></i>
                  <span>Data Kelas</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= currentUrl("pengguna") ? "active" : "" ?>">
               <a class="nav-link" href="<?= BASE_URL ?>pengguna">
                  <i class="fas fa-fw fa-users"></i>
                  <span>Data Pengguna</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= currentUrl("pembayaran") ? "active" : "" ?>">
               <a class="nav-link" href="<?= BASE_URL ?>pembayaran">
                  <i class="fas fa-fw fa-money-bill-wave"></i>
                  <span>Data Pembayaran</span></a>
            </li>

         <!-- Nav Item  -->
         
            <li class="nav-item <?= currentUrl("entritransaksi") ? "active" : "" ?>">
               <a class="nav-link" href="<?= BASE_URL ?>entritransaksi">
                  <i class="fas fa-fw fa-solid fa-cash-register"></i>
                  <span>Entri transaksi</span></a>
            </li>
                     
            <!-- Nav Item - Tables -->
            <li class="nav-item <?= currentUrl("historytransaksi") ? "active" : "" ?>">
               <a class="nav-link" href="<?= BASE_URL ?>historytransaksi">
                  <i class="fas fa-fw fa-sticky-note"></i>
                  <span>History transaksi</span></a>
            </li>
         <?php } ?>

         <?php if ($data['role'] == "petugas") { ?>

            <!-- Nav Item - Charts -->
            <li class="nav-item <?= currentUrl("kelas") ? "active" : "" ?>">
               <a class="nav-link" href="<?= BASE_URL ?>kelas">
                  <i class="fas fa-fw fa-school"></i>
                  <span>Data Kelas</span></a>
               </li>
            <li class="nav-item <?= currentUrl("entritransaksi") ? "active" : "" ?>">
               <a class="nav-link" href="<?= BASE_URL ?>entritransaksi">
                  <i class="fas fa-fw fa-solid fa-cash-register"></i>
                  <span>Entri transaksi</span></a>
            </li>

            
          
            <!-- Nav Item - Tables -->
            <li class="nav-item <?= currentUrl("historytransaksi") ? "active" : "" ?>">
               <a class="nav-link" href="<?= BASE_URL ?>historytransaksi">
                  <i class="fas fa-fw fa-sticky-note"></i>
                  <span>History transaksi</span></a>
            </li>
         <?php } ?>
         <?php if ($data['role'] == "siswa") { ?>
            <!-- Nav Item - Tables -->
            <li class="nav-item <?= currentUrl("historytransaksi") ? "active" : "" ?>">
               <a class="nav-link" href="<?= BASE_URL ?>historytransaksi/historysiswa">
                  <i class="fas fa-fw fa-sticky-note"></i>
                  <span>History transaksi</span></a>
            </li>
         <?php } ?>

         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

         <!-- Main Content -->
         <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

               <!-- Sidebar Toggle (Topbar) -->
               <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
               </button>

               <!-- Topbar Search
               <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                     <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                           <i class="fas fa-search fa-sm"></i>
                        </button>
                     </div>
                  </div>
               </form> -->
               <!-- Topbar Navbar -->
               <ul class="navbar-nav ml-auto">

                  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                  <li class="nav-item dropdown no-arrow d-sm-none">
                     <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                     </a>
                     <!-- Dropdown - Messages -->
                     <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                           <div class="input-group">
                              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                              <div class="input-group-append">
                                 <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                 </button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </li>

                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $data['user']['username'] ?></span>
                        <img class="img-profile rounded-circle" src="<?= BASE_URL ?>assets/image/undraw_profile.svg">
                     </a>
                     <!-- Dropdown - User Information -->
                     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                           <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                           Logout
                        </a>
                     </div>
                  </li>

               </ul>

            </nav>
            <!-- End of Topbar -->