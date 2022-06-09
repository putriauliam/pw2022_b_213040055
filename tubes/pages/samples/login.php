<?php 
session_start();
require '../functions.php';

// // cek cookie
// if( isset($_COOKIE['id_user']) && isset($_COOKIE['key'])) {
  //  $id = $_COOKIE['id_user'];
  //  $key = $_COOKIE['key'];
  
  // //  ambil username berdasarkan id
  // $result = mysqli_query($conn, "SELECT username FROM user WHERE id_user = $id");
  // $row = mysqli_fetch_assoc($result);

// cek cookie dan username
// if( $key === hash('sha256', $row['username']) ) {
  // $_SESSION['login'] = true;
// }
// }




if (isset($_SESSION ["login"]) ) {
    header("Location: ../tables.php");
    exit;
}

if (isset($_POST ["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");

    // cek username
    if( mysqli_num_rows($result) === 1 ) {
        
        // cek password
        $row = mysqli_fetch_assoc($result);
       if (password_verify($password, $row["password"]) ) {
        // set session
        $_SESSION["login"] = true;
        
        // // cek remember me
        // if( isset($_POST['remember'])) {
        //   // buat  cookie
        //   setcookie('id_user', $row['id_user'], time()+60 );
        //   setcookie('key', hash('sha256', $row['username']), time()+60);
        // }
       

            header("Location: ../tables.php");
            exit;
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Regal Admin</title>
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
    <link rel="shortcut icon" href="../../images/favicon.png" />
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
                <h4>Halo! mari kita mulai</h4>
                <h6 class="font-weight-light">Masuk untuk melanjutkan.</h6>

                <!-- username / password -->
                <?php if(isset($error)) : ?>
                   <p style="color: red; font-style: italic;">Nama pengguna atau kata sandi anda salah</p>
                <?php endif; ?>

                <form class="pt-3" action="" method="post">
                  <div class="form-group">
                    <input type="username" name="username" class="form-control form-control-lg" id="username" placeholder="Nama Pengguna" autocomplete="off" required/>
                  </div>

                 

                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Kata Sandi" required/>
                  </div>

                  <!-- Cookie
                   <div class="mb-4">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" value="" name="remember" id="
                      remember"/>
                      <label for="remember">
                       Remember Me :
                      </label>
                    </div>
                  </div> 
                   -->
                  <div class="mt-3">
                    <button class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn" name="login" type="submit">Masuk</button>
                  </div>
                
                  
                  <div class="mb-2">
             
                  <div class="text-center mt-4 font-weight-light">Belum punya akun? <a href="registrasi.php" class="text-primary">Buat disini</a></div>
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
