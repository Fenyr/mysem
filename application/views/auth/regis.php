  <div class="container">

    <div class="card o-hidden border-0 shadow-lg mt-5 col-lg-5 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
              </div>
              <div class="bg-danger">
                  <?php $this->upload->display_errors('<span style="color: white; padding: 10px;">', '</span><br>');
                  echo validation_errors('<span style="color: white; padding: 10px;">', '</span><br>');?>
              </div>
              <form class="user" method="post" action="<?php echo site_url('auth/regis');?>">
                <div class="form-group">

                  <input type="text" name="username" value="<?=$username?>" class="form-control form-control-user" placeholder="Masukkan Username">
                </div>
                 <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" value="<?=$password?>" class="form-control form-control-user" placeholder="Masukkan Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="passwordv" value="<?=$passwordv?>" class="form-control form-control-user" placeholder="Ulangi Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-warning btn-user btn-block">
                  Daftarkan Akun
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth');?>">Sudah Memiliki Akun? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
