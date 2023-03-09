<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- DataTales  -->
   <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex flex-row">
         <h5 class="m-0 mr-auto font-weight-bold text-dark">Data Pengguna</h5>
      </div>
      <div class="card-body">
         <div class="table-responsive pt-3 pr-2">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     <th>No.</th>
                     <th>pengguna id</th>
                     <th>username</th>
                     <th>password</th>
                     <th>role</th>
                     <th width="120">Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                  $i = 0;
                  foreach ($data['datapengguna'] as $pengguna) { ?>
                     <tr>
                        <td><?= ++$i ?></td>
                        <td><?= $pengguna['id'] ?></td>
                        <td><?= $pengguna['username'] ?></td>
                        <td><?= $pengguna['password'] ?></td>
                        <td>
                           <?php if ($pengguna['role'] == "siswa") { ?>
                              <span class="text-capitalize p-1 badge badge-success"><?= $pengguna['role'] ?></span>
                           <?php } ?>
                           <?php if ($pengguna['role'] == "petugas") { ?>
                              <span class="text-capitalize p-1 badge badge-warning"><?= $pengguna['role'] ?></span>
                           <?php } ?>
                           <?php if ($pengguna['role'] == "admin") { ?>
                              <span class="text-capitalize p-1 badge badge-primary"><?= $pengguna['role'] ?></span>
                           <?php } ?>
                        </td>
                        <td>
                           <a href="<?php BASE_URL ?>pengguna/editpengguna/<?= $pengguna['id'] ?>" class="btn btn-warning">Edit</a>
                           <a href="<?php BASE_URL ?>pengguna/deletepengguna/<?= $pengguna['id'] ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus data ini')">Hapus</a>
                        </td>
                     </tr>
                  <?php } ?>
               </tbody>
            </table>
         </div>
      </div>
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