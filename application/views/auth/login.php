<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-lg-5 mt-5">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                </div>
                <form class="user" method="post" action="<?= base_url('auth/ceklog')?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="username"  name="username" placeholder="Masukkan Username...">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                  </div>
                  <div class="form-group">
                    
                  </div>
                  <button type="submit" class="btn btn-warning btn-user btn-block">
                    Login
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= base_url('auth/regis'); ?>">Belum Memiliki Akun? Buat Sekarang</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>