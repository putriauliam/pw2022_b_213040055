<?php 
// cek apakah tidak ada data di $_GET
if (!isset($_GET["judul"]) ||
    !isset($_GET["genre"]) ||
    !isset($_GET["durasi"]) ||
    !isset($_GET["sutradara"]) ||
    !isset($_GET["gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Film</title>
</head>
<body>
    
<ul>
    <li> <img src="<?= $_GET["gambar"]; ?>" width="100px"> </li>
    <li><?= $_GET["judul"];?></li>
    <li><?= $_GET["genre"];?></li>
    <li><?= $_GET["durasi"];?></li>
    <li><?= $_GET["sutradara"];?></li>
</ul>

<a href="latihan1.php">Kembali ke daftar film</a>

</body>
</html>