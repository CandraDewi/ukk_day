<body class="bg-gradient-dark">

   <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">

         <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
               <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                     <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                     <div class="col-lg-6">
                        <div class="p-5">
                           <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Aplikasi Pembayaran SPP</h1>
                           </div>
                           <form class="user" method="post" action="<?= BASE_URL ?>auth/handleLogin">
                              <div class="form-group">
                                 <input name="username" type="text" class="form-control form-control-user" id="exampleInputusername" aria-describedby="usernameHelp" placeholder="Enter username...">
                              </div>
                              <div class="form-group">
                                 <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                              </div>
                              <button type="submit" class="btn btn-dark btn-user btn-block">
                                 Login
                              </button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>

      </div>

   </div>