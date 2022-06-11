<?php 

require 'pages/functions.php';
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
        <div class="navbar-brand font-weight-bold" >
          <h3>TABDROID</h3>
        </div>
        <form action="" method="post">
                
               <div class="input-group ">
                <input type="text" class="form-control" name="keyword" size="30" placeholder="cari data" autocomplete="off">
                <button class="btn btn-info" type="submit" name="cari">Cari</button>
                
              </div>
                </form>
                <div class="m-0">
                <a href="../tubes/pages/samples/login.php" class="btn btn-info font-weight-bold">Masuk</a>
                <a href="../tubes/pages/samples/registrasi.php" class="btn btn-info font-weight-bold">Daftar</a>
                </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- banner -->
    <section class=" text-center mt-4">
      <img src="img/tablet.png " width="1285" height="auto"/>
      
      
    </section>
    <!-- Akhir banner -->
    <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/2.png" class="d-block w-100 mt-3"  >
    </div>
    <div class="carousel-item">
      <img src="img/tablet.png" class="d-block w-100 mt-3"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/3.png" class="d-block w-100 mt-3" width="1275" height="auto" alt="...">
    </div>
  </div>
</div>
    -->

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
                <h4 class=""><?= $row["nama"]; ?></h4>
                <h5 class=""><?= $row["tipe"]; ?></h5>
               
                <a href="pages/detail.php?id=<?= $row["id"]; ?>" class="btn btn-primary">Selengkapnya</a>
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
      <p class="pt-2">Dibuat dengan <i class="bi bi-heart text-white"></i> oleh <a href="https://www.instagram.com/ptriauliam/" class="text-white fw-bold">Putri Aulia Maulidina</a></p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
