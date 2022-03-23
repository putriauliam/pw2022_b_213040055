<?php
// Array Associative

// Array yang undexnya berupa string, yang berasosiasi dengan nilainya

$mahasiswa = [
    [
        "nama" => "Putri Aulia Maulidina", 
        "npm" => "213040055", 
        "email" => "ptriauliam61@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],

    [
        "nama" => "Rahma Aliaputri Efendi", 
        "npm" =>"213040047", 
        "email" => "rahmaaliap@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],

    [
        "nama" => "Emilia Paradilas", 
        "npm" =>"213040043", 
        "email" =>"emiliaparadilas@gmail.com", 
        "jurusan" =>"Teknik Informatika"
    ],

    [
        "nama" => "Lita Yusdia", 
        "email" =>"litaysdf@gmail.com",
        "jurusan" =>"Teknik Informatika",
        "npm" =>"213040059", 
        
    ]
];


// var_dump($mahasiswa[3]["nilai_tugas"][1]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama: <?php echo $mhs["nama"]; ?> </li>
    <li>NPM: <?php echo $mhs["npm"]; ?> </li> 
    <li>Email: <?php echo $mhs["email"]; ?></li>
    <li>Jurusan: <?php echo $mhs["jurusan"]; ?></li>
</ul>


<?php } ?>






