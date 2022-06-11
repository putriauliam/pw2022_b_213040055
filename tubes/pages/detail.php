<?php 
require 'functions.php';
$id=$_GET["id"];


$tablet = query("SELECT * FROM tablet join merek on merek.id_merek = tablet.merek WHERE id = $id");

// tombol cari ditekan
if( isset($_POST["cari"])) {
  $tablet = cari($_POST["keyword"] );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark  shadow-sm " style="background-color: #DA70D6;">
      <div class="container">
      <div class="navbar-brand font-weight-bold" >
          <h3>TABDROID</h3>
        </div>
       
                <div class="m-0">
                <a href="samples/login.php" class="btn btn-primary font-weight-bold">Masuk</a>
                <a href="samples/registrasi.php" class="btn btn-primary font-weight-bold">Daftar</a>
                </div>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        
      </div>
    </nav>
  
    <section class="content">
    <div class="container mt-4">
    <h1>Spesifikasi Tablet</h1>

       <div class="row">
       <?php foreach( $tablet as $row) : ?>
           <div class="col-md-6">
           <img src="../img/<?php echo $row["gambar"]; ?>"alt="" class="img-responsive mt-3" width="500" height="auto"></td>
           </div>

           
        <div class="col-md-6">
            <h2><?php echo $row["nama"] ?></h2>
            
            <h5 class="mt-5">Kode :</h5>
            <h5><?php echo $row["kode"] ?></h5>
            
            <h5 class="mt-5">Tipe :</h5>
            <h5 ><?php echo $row["tipe"] ?></h5>
            
            <h5 class="mt-5">Deskripsi Produk :</h5>
            <h5><?php echo $row["deskripsi"] ?></h5>
           
            <?php endforeach; ?> 
           
            
            

            <form method="post">
                <div class="form-grup">
                    <div class="input-group">
                    </div>
                </div>

            </form>
        </div>
       </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>