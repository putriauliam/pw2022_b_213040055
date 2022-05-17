<?php 
require 'functions.php';

// cek  apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // ambil data dari tiap elemen dalam forrm
    $kode = $_POST["kode"];
    $merek = $_POST["merek"];
    $tipe = $_POST["tipe"];
    $harga = $_POST["harga"];
    $gambar = $_POST["gambar"];

    // cek apakah data berhasil ditambahkan atau tidak
    if(tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>       
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>       
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data tablet</title>
</head>
<body>
    <h1>Tambah Data Tablet</h1>

    <form action="" method="post">
        <ul>
        <li>
            <label for="kode">Kode : </label>
            <input type="text" name="kode" id="kode" required>
        </li>

        <li>
            <label for="merek">Merek : </label>
            <input type="text" name="merek" id="merek">
        </li>

        <li>
            <label for="tipe">Tipe : </label>
            <input type="text" name="tipe" id="tipe">
        </li>

        <li>
            <label for="harga">Harga : </label>
            <input type="text" name="harga" id="harga">
        </li>

        <li>
            <label for="gambar">Gambar : </label>
            <input type="text" name="gambar" id="gambar">
        </li>

        <li>
            <button type="submit" name="submit">Tambah Data!</button>
        </li>

        
        </ul>


    </form>
</body>
</html>