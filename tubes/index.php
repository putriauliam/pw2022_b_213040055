<?php 
require 'pages/functions.php';
$tablet = query("SELECT * FROM tablet");

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
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="CSS/style.css" />

    <title>Halaman User</title>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Putri Aulia M</a>
        <form action="" method="post">
                
                <input type="text" name="keyword" size="40" autofocus placeholder="cari data" autocomplete="off">
                <button type="submit" name="cari" class="btn btn-sm btn-primary">Cari</button>
                </form>
                <div class="m-0">
                <a href="../tubes/pages/samples/login.php" class="btn btn-info font-weight-bold">Login</a>
                <a href="../tubes/pages/samples/registrasi.php" class="btn btn-info font-weight-bold">Registrasi</a>
                </div>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class=" text-center mt-3">
      <img src="img/tablet.png " width="1275" height="auto"/>
      
      
    </section>
    <!-- Akhir Jumbotron -->

   

    <!-- Gallery -->
    <section id="skills">
      <div class="container">
        <div class="row text-center">
          <div class="col mt-4">
            <h2>Tablet Android</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
        <?php foreach( $tablet as $row) : ?>
          <div class="col-md-4 mt-3 mb-3">
            <div class="card bg-white shadow">
              <div class="card-body">
                <img src="../tubes/img/<?= $row["gambar"]; ?>" class="card-img-top" height="200" width="auto">
                <h4 class=""><?= $row["merek"]; ?></h4>
                <h5 class=""><?= $row["tipe"]; ?></h5>
               
                <a href="#" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
          
        </div>
      </div>
      
    </section>
    <!-- Akhir Skill -->

    <!-- Akhir Gallery -->

   

   

    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-2">
      <p class="pt-2">Created with <i class="bi bi-heart text-white"></i> by <a href="https://www.instagram.com/ptriauliam/" class="text-white fw-bold">Putri Aulia Maulidina</a></p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
