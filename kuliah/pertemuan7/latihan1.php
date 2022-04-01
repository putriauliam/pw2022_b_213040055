<?php 
// Variable Scope / lingkup variabel
// $x = 10;

// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();


// SUPERG GLOBALS
// variable global milik PHP
// merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];

// $_GET
$film = [
    [
        "judul" => "Maze runner: The Death Cure", 
        "genre" => "Fiksi Ilmiah", 
        "durasi" => "2 jam 22 menit", 
        "sutradara" => "Wess Bal",
        "gambar" => "img/maze runner.jpg"
    ],


    [
        "judul" => "Scream 5", 
        "genre" => "Horror", 
        "durasi" => "1 jam 54 menit", 
        "sutradara" => "Matt bettinelli-Olpin, tyler Gillett",
        "gambar" => "img/scream.jpg"
    ],

    [
        "judul" => "The Invisible Guest", 
        "genre" => "Misteri", 
        "durasi" => "1 jam 46 menit", 
        "sutradara" => "Oriol Paulo",
        "gambar" => "img/the invisible guest.jpg"
    ],

    [
        "judul" => "The Con-Heartist", 
        "genre" => "Komedi Romantis", 
        "durasi" => "2 jam 08 menit", 
        "sutradara" => "Mez Tharatorn",
        "gambar" => "img/the con-heartist.jpg"
    ],

    [
        "judul" => "Divergent", 
        "genre" => "Fiksi Ilmiah", 
        "durasi" => "2 jam 19 menit", 
        "sutradara" => "Neil Burger",
        "gambar" => "img/divergent.jpg"
    ],

    [
        "judul" => "Nanti Kita Cerita Tentang Hari Ini", 
        "genre" => "Drama", 
        "durasi" => "2 jam 01 menit", 
        "sutradara" => "Angga Dwimas Sasongko",
        "gambar" => "img/nkcthi.jpg"
    ],

    [
        "judul" => "The Edge of Seventeen", 
        "genre" => "Komedi", 
        "durasi" => "1 jam 44 menit", 
        "sutradara" => "Kelly Fremon Craig",
        "gambar" => "img/the edge of seventeen.jpg"
    ],

    [
        "judul" => "Bad Genius", 
        "genre" => "Kejahatan", 
        "durasi" => "2 jam 10 menit", 
        "sutradara" => "Nattawut Poonpiriya",
        "gambar" => "img/bad genius.jpg"
    ],

    [
        "judul" => "Better Days", 
        "genre" => "Drama", 
        "durasi" => "2 jam 15 menit", 
        "sutradara" => "Derek Tsang",
        "gambar" => "img/better days.jpg"
    ],

    [
        "judul" => "The Hunger Games", 
        "genre" => "Fiksi Ilmiah", 
        "durasi" => "2 jam 22 menit", 
        "sutradara" => "Gary Ross",
        "gambar" => "img/hunger games.jpg"
    ]
   
]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Film</h1>
<ul>
<?php foreach($film as $f) : ?>
    <li>
        <a href="latihan2.php?judul=<?= $f["judul"]; ?>&genre= <?= $f["genre"]; ?>&durasi=<?= $f["durasi"]; ?>&sutradara=<?= $f["sutradara"]; ?>&gambar=<?= $f["gambar"]; ?>"><?= $f["judul"]; ?></a>
    </li>
    
    <?php endforeach; ?>
    </ul>
    
</body>
</html>