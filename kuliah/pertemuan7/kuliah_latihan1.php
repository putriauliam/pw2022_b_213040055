<?php
// SUPERGLOBALS
// Variabel bawaan PHP yang bisa diakses di mana pun
// Bentuknya Array Sociative
// $_GET
// $_POST
// $_SERVER
// $_GET = ["nama" => 'Putri', "email"=>"ptriauliam@gmail.com"] ;
//  $_GET["nama"] = "Putri";
// $_GET["email"] = "ptriauliam61@gmail.com";
// var_dump($_GET);









?>

<!-- <h1>Halo, <?= $_GET["nama"];?></h1> -->

<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=Putri&npm=213040055&email=ptriauliam61@gmail.com">Putri</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Emil&npm=213040043&email=emiliaparadilas@gmail.com">Emil</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Rahma&npm=213040042&email=rahmaaliaputri@gmail.com">Rahma</a>
    </li>
</ul>