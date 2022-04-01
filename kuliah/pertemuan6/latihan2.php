<?php 
// array assosiative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Putri Aulia Maulidina", 
        "npm" => "213040055", 
        "email" => "ptriauliam61@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/a.jpg"
    ],

    [
        "nama" => "Rahma Aliaputri Efendi", 
        "npm" =>"213040047", 
        "email" => "rahmaaliap@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/b.jpg"
    ],

    
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
            <li>
                <img src="<?= $mhs["gambar"]; ?>" width="100px">
             </li>
           
            <li>Nama: <?php echo $mhs["nama"]; ?> </li>
            <li>NPM: <?php echo $mhs["npm"]; ?> </li> 
            <li>Email: <?php echo $mhs["email"]; ?></li>
            <li>Jurusan: <?php echo $mhs["jurusan"]; ?></li>
        </ul>    
<?php endforeach; ?>          
       
</body>
</html>