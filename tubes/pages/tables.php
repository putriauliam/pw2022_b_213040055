<?php 
session_start();

if(!isset($_SESSION["login"])) {
  header("Location: samples/login.php");
  exit;
}

require 'functions.php';
$tablet = query("SELECT * FROM tablet join merek on merek.id_merek = tablet.merek");

// tombol cari ditekan
if( isset($_POST["cari"])) {
  $tablet = cari($_POST["keyword"] );
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Halaman Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../vendors/feather/feather.css" />
    <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- endinject -->
    <!-- <link rel="shortcut icon" href="../images/favicon.png" /> -->
  </head>

  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
         
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
               
                <form action="" method="post">
                
<input type="text" name="keyword" size="40" autofocus placeholder="cari data" autocomplete="off" id="keyword" >
<button type="submit" name="cari" class="btn btn-sm btn-primary" id="tombol-cari">Cari</button>


</form>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-lg-flex d-none">
              <a href="../pages/logout.php" class="btn btn-primary font-weight-bold">Keluar</a>
            </li>
            <li class="nav-item dropdown d-flex">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                
              </a>
              <!-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../images/faces/face4.jpg" alt="image" class="profile-pic" />
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">David Grey</h6>
                    <p class="font-weight-light small-text text-muted mb-0">The meeting is cancelled</p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../images/faces/face2.jpg" alt="image" class="profile-pic" />
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook</h6>
                    <p class="font-weight-light small-text text-muted mb-0">New product launch</p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../images/faces/face3.jpg" alt="image" class="profile-pic" />
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">Johnson</h6>
                    <p class="font-weight-light small-text text-muted mb-0">Upcoming board meeting</p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-flex mr-4">
              
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
                <a class="dropdown-item preview-item"> <i class="icon-head"></i> Profile </a>
                <a class="dropdown-item preview-item"> <i class="icon-inbox"></i> Logout </a>
              </div>
            </li>
            -->
          </ul>
          
        </div>
      </nav>
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-profile">

            <div class="user-image">
              <img src="../img/put.JPG" style=" width:100px; height:auto;"/>
            </div>
            <div class="user-name">Putri Aulia Maulidina</div>
            <div class="user-designation">Selamat datang admin</div>
          </div>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="../pages/tables.php">
                <i class="icon-command menu-icon"></i>
                <span class="menu-title">Tabel</span>
              </a>
            </li>
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="mb-3">
            <a href="tambah.php" class="btn btn-rounded circle btn-primary mt-2">Tambah data tablet</a>
                    <a href="report.php" class=" btn btn-rounded circle btn-primary mt-2">Cetak PDF</a>
            </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2>Daftar Tablet Android</h2>
                    <!-- <a href="tambah.php" class="btn btn-rounded circle btn-primary mt-2">Tambah data tablet</a>
                    <a href="../report.php" class=" btn btn-rounded circle btn-primary mt-2">Cetak PDF</a> -->
                    <p class="card-description"></p>
                   <div id="container">
                    <div class="table-responsive pt-3">
                      
                      <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                          <th>No.</th>
                          <th>Gambar</th>
                          <th>Kode</th>
                          <th>Merek</th>
                          <th>Tipe</th>
                          <th>Deskripsi Produk</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                      <tbody>
                      <tr class="table-bordered">
      <?php $i =1; ?>
        <?php foreach( $tablet as $row) : ?>
          
              <td><?= $i ?></td>


                    <td><img src="../img/<?= $row["gambar"]; ?>" style="border-radius: 0%; width:100px; height:auto;"></td>
                    <td><?= $row["kode"] ?></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["tipe"] ?></td>
                    <td><?= $row["deskripsi"] ?></td>  
                    
                <td>
                <a href="ubah.php?id=<?= $row["id"];?>" class="btn btn-sm btn-outline-info">ubah</a>
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');" class="btn btn-sm btn-outline-primary  mt-1">hapus</a>
                </td>
        </tr>
        <?php $i++ ?>
    </tr>
   
            </tr> 
        <?php endforeach; ?>
                      </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> 
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="../../vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->


    <script src="../js/script.js" ></script>
  </body>
</html>
