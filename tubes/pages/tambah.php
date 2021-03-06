<?php
session_start();

if(!isset($_SESSION["login"])) {
  header("Location: samples/login.php");
  exit;
}


require 'functions.php';

// cek apakah tombol tambah sudah di klik
if(isset($_POST ["tambah"]) ) {
    if(tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'tables.php';
        </script>";
    }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data Tablet</title>
  </head>
  <body>
    
    <div class="container">
        <h1>Form Tambah Data Tablet</h1>

        <a href="../pages/tables.php">Kembali ke Daftar Tablet Android</a>

        <div class="row mt-3">
            <div class="col-8">
                <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="kode" class="form-label">Kode</label>
                    <input type="text" class="form-control" id="kode" name="kode" required maxlength="15" minlength="15" style="width: 200px;"> 
                </div>

                <!-- <div class="mb-3">
                    <label for="merek" class="form-label">Merek</label>
                    <input type="text" class="form-control" id="merek" name="merek" required>
                </div> -->

                <div class="mb-3">
                            <label for="merek" class="form-label">Merek</label>
                            <select class="form-select" name="merek" required="" id="merek">
                                <option disabled="" selected="">Pilih Merek</option>
                                <option value="1">Oppo</option>
                                <option value="2">Huawei</option>
                                <option value="3">Advan</option>
                                <option value="4">Nokia</option>
                                <option value="5">Lenovo</option>
                                <option value="6">Acer</option>
                                <option value="7">Nokia</option>
                                <option value="8">Xiaomi</option>
                                <option value="9">Vivo</option>
                                <option value="10">Asus</option>

                            </select>
                        </div>

                <div class="mb-3">
                    <label for="tipe" class="form-label">Tipe</label>
                    <input type="text" class="form-control" id="tipe" name="tipe" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                </div>

                <button type="submit" name="tambah" class= "btn btn-primary"> Tambah Data Tablet!</button>

                </form>
            </div>
        </div>

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