<?php
session_start();

if(!isset($_SESSION["login"])) {
  header("Location: samples/login.php");
  exit;
}

require 'functions.php';

// Ambil data di URL
$id =  $_GET["id"];

// query data tablet berdasarkan id
$tab = query("SELECT * FROM tablet WHERE id = $id")[0];


// cek apakah tombol tambah sudah di klik
if(isset($_POST ["edit"]) ) {
    


    // cek apakah data berhasil diubah atau tidak
    if( ubah ($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'tables.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'tables.php';
        </script>
        ";  
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

    <title>Ubah Data Tablet</title>
  </head>
  <body>
    
    <div class="container mt-3">
        <h1>Form Ubah Data Tablet</h1>

        <a href="../pages/tables.php">Kembali ke Daftar Tablet Android</a>

        <div class="row mt-3">
            <div class="col-8">

                <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $tab["id"]; ?>">
                <input type="hidden" name="gambarLama" value="<?= $tab["gambar"]; ?>">
                <div class="mb-3">
                    <label for="kode" class="form-label">Kode</label>
                    <input type="text" class="form-control" id="kode" name="kode" required maxlength="15" minlength="15" style="width: 200px;" value="<?= $tab["kode"]; ?>"> 
                </div>

                <div class="mb-3">
                            <label for="merek" class="form-label">Merek</label>
                            <select class="form-select" name="nama_merek" required="" id="merek">
                                <option disabled="" selected="">Pilih Merek</option>
                                <option value="1" <?php if($tab['merek'] == "1") { echo "selected";} ?>>Oppo</option>
                                <option value="2" <?php if($tab['merek'] == "2") { echo "selected";} ?>>Huawei</option>
                                <option value="3" <?php if($tab['merek'] == "3") { echo "selected";} ?>>Advan</option>
                                <option value="4" <?php if($tab['merek'] == "4") { echo "selected";} ?>>Nokia</option>
                                <option value="5" <?php if($tab['merek'] == "5") { echo "selected";} ?>>Lenovo</option>
                                <option value="6" <?php if($tab['merek'] == "6") { echo "selected";} ?>>Acer</option>
                                <option value="7" <?php if($tab['merek'] == "7") { echo "selected";} ?>>Nokia</option>
                                <option value="8" <?php if($tab['merek'] == "8") { echo "selected";} ?>>Xiaomi</option>
                                <option value="9" <?php if($tab['merek'] == "9") { echo "selected";} ?>>Vivo</option>
                                <option value="10" <?php if($tab['merek'] == "10") { echo "selected";} ?>>Asus</option>

                            </select>
                        </div>

                <div class="mb-3">
                    <label for="tipe" class="form-label">Tipe</label>
                    <input type="text" class="form-control" id="tipe" name="tipe" required value="<?= $tab["tipe"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"> <?= ($tab["deskripsi"]); ?> </textarea>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label> <br>
                    <img src="../img/<?= $tab['gambar']; ?>" width="60"> <br>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                </div>

                <button type="submit" name="edit" class= "btn btn-primary mb-3"> Ubah Data Tablet</button>

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