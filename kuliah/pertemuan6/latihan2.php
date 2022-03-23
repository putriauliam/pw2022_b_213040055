<?php 
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$film = [
    [
        "judul" => "Maze runner: The Death Cure", 
        "genre" => "Fiksi Ilmiah", 
        "durasi" => "2 jam 22 menit", 
        "sutradara" => "Wess Bal",
        "gambar" => "img/e.jpg"
    ],

    [
        "judul" => "Scream 5", 
        "genre" => "Horror", 
        "durasi" => "1 jam 54 menit", 
        "sutradara" => "Matt bettinelli-Olpin, tyler Gillett",
        "gambar" => "img/f.jpg"
    ],

    [
        "judul" => "The Invisible Guest", 
        "genre" => "Misteri", 
        "durasi" => "1 jam 46 menit", 
        "sutradara" => "Oriol Paulo",
        "gambar" => "img/g.jpg"
    ],

    [
        "judul" => "The Con-Heartist", 
        "genre" => "Komedi Romantis", 
        "durasi" => "2 jam 08 menit", 
        "sutradara" => "Mez Tharatorn",
        "gambar" => "img/h.jpg"
    ],

   
]; 
?>

 


<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Daftar Film</title>
 </head>
 <body>
     <h1>Daftar Film</h1>

     <?php foreach( $film as $f) : ?>
        <ul>
            <li>
                <img src="<?= $f["gambar"]; ?>" width="100px">
            </li>
            <li>Judul : <?= $f["judul"];?></li>
            <li>Genre : <?= $f["genre"];?></li>
            <li>Durasi : <?= $f["durasi"];?></li>
            <li>Sutradara : <?= $f["sutradara"];?></li>
        </ul>    
<?php endforeach; ?>          
       
     
     
 </body>
 </html>


