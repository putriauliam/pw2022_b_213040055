<?php 
require '../functions.php';

if (isset($_POST ["register"]) ) {

    if(registrasi($_POST) >
0) { echo "
<script>
  alert('user baru berhasil ditambahkan!');
</script>
"; } else { echo mysqli_error($conn); } } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Registrasi</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../../vendors/feather/feather.css" />
    <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/style.css" />
    <!-- endinject -->
    <!-- <link rel="shortcut icon" href="../../images/favicon.png" /> -->
  </head>

  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <!-- <div class="brand-logo">
                  <img src="../../images/logo-dark.svg" alt="logo" />
                </div> -->
                <h4>Daftarkan dirimu</h4>
                <h6 class="font-weight-light">Mendaftar hanya dengan beberapa langkah</h6>
                <form class="pt-3" action="" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Nama Pengguna" autocomplete="off" required/>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Kata Sandi" required />
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="password2" name="password2" placeholder="Konfirmasi Kata Sandi" autocomplete="off" required/>
                  </div>

                  <!-- <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input" />
                        I agree to all Terms & Conditions
                      </label>
                    </div>
                  </div> -->
                  <div class="mt-3">
                    <button class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn" type="submit" name="register">Daftar</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light">Sudah punya akun? <a href="login.php" class="text-primary">Masuk</a></div>
                  <div class="text-center mt-2">
                  <a href="../../index.php" class="btn btn-primary">Kembali ke Beranda</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="../../vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <!-- endinject -->
  </body>
</html>
