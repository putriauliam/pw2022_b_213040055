<?php 
require 'functions.php';
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Halaman Admin </title>
  </head>
  <body>
  <div class="container" >
      <h1>Daftar Tablet Android</h1>
      
      <a href="tambah.php" class="btn btn-success">Tambah data tablet</a>
      <br><br>
 
      <form action="" method="post">

          <input type="text" name="keyword" size="40" autofocus placeholder="ketik kata kunci yang dicari.." autocomplete="off">
          <button type="submit" name="cari" class="btn badge bg-warning">Cari!</button>
          <br></br>

      </form>

     

      <table class="table table-hover table-bordered text-center border-dark" >
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


                    <td><img src="../img/<?= $row["gambar"]; ?>" width="100"></td>
                    <td><?= $row["kode"] ?></td>
                    <td><?= $row["merek"] ?></td>
                    <td><?= $row["tipe"] ?></td>
                    <td><?= $row["deskripsi"] ?></td>  
                    
                <td>
                <a href="ubah.php?id=<?= $row["id"];?>" class="btn badge bg-primary">ubah</a>
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');" class="btn badge bg-danger">hapus</a>
                </td>
        </tr>
        <?php $i++ ?>
    </tr>
   
            </tr> 
        <?php endforeach; ?>
           
  </tbody>
</table>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>