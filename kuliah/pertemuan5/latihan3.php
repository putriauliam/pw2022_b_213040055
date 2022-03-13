<?php
$mahasiswa = [
    ["Putri Aulia Maulidina", "213040055", "Teknik Informatika", "ptriauliam61@gmail.com"],
    ["Rahma Aliaputri Efendi", "213040047", "Teknik Informatika",  "rahmaaliap@gmail.com"],
    ["Emilia Paradilas", "213040043", "Teknik Informatika", "emiliaparadilas@gmail.com"] //urutan tidak boleh salah
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP: <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>
