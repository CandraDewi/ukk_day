<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
   </div>

   <!-- Content Row -->
   <div class="row">

   <?php if ($data['role'] == "admin") { ?>
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                        Data Transaksi</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data["jumlahtransaksi"]["jumlah"] ?></div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xl font-weight-bold text-success text-uppercase mb-1">
                        Data siswa</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data["jumlahsiswa"]["jumlah"] ?></div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xl font-weight-bold text-info text-uppercase mb-1">Data kelas
                     </div>
                     <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                           <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $data["jumlahkelas"]["jumlah"] ?></div>
                        </div>
                        <div class="col">
                        </div>
                     </div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
                         Saldo</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.<?= $data["jumlahsaldo"]["jumlah"] ?></div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-comments fa-2x text-gray-300"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php } ?>

   <?php if ($data['role'] == "petugas") { ?>
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xl font-weight-bold text-info text-uppercase mb-1">Data kelas
                     </div>
                     <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                           <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $data["jumlahkelas"]["jumlah"] ?></div>
                        </div>
                        <div class="col">
                        </div>
                     </div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <?php } ?>



   <!-- Content Row -->

   <div class="row">
      <!-- Area Chart -->
      <div class="col">
         <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-primary">Tampilan Video</h6>
            </div>
            <div class="p-3">
               <video autoplay loop width="100%">
                  <source src="<?= BASE_URL ?>assets/image/ubur-ubur.mp4" type="video/mp4" a\>
               </video>
            </div>
         </div>
      </div>
   </div>

   <!-- Content Row -->
   <div class="row">
   </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
   <div class="container my-auto">
      <div class="copyright text-center my-auto">
         <span>Copyright &copy; SPPskensa | Candra 2023</span>
      </div>
   </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
   <i class="fas fa-angle-up"></i>
</a>