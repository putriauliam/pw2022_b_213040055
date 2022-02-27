<?php 
// Pertemuan 2, Belajar sintaks PHP

// NILAI
// angka (integer), tulisan (string), true/false (boolean)
// integer
echo 10;
echo '<br>';
// string  
echo 'Putri';
echo '<br>';
// boolean
// boolean 1
echo true; 
// boolean null
echo false;

// baris bawah
echo '<hr>';

// VARIABEL (komponen yang harus ada)
// Tempat menampung NILAI
// awali dengan tanda $, nama nya bebas
// syaratnya boleh mengandung angka, tidak boleh diawali angka
// tidak boleh ada spasi
$nama_depan = 'Putri';
echo $nama_depan;
echo '<hr>';

// STRING
// '', " "
// jika di dalam string ada kutip 1, ganti kutip 2 dan sebaliknya
$hari = "Jum'at";
echo $hari;
echo "<br>";
echo 'Putri: "Halo, Semua!"';
echo '<br>';
// Escape Character
//  \
// jadi string ga error
echo 'Putri: "Selamat hari Jum\'at"';
echo '<br>';
echo "Putri: \"Selamat hari jum'at\"";
echo '<br>';

// Interpolasi
// Mencetak langsung isi variabel
// hanya bisa oleh " "
echo "Halo, nama saya $nama_depan";
// dicetak sebenarnya
echo '<br>';
echo 'Halo, nama saya $nama_depan';

echo '<hr>';

// Concat / Penggabung String
// .

$nama_depan = 'Putri';
$nama_belakang = 'Maulidina';
echo $nama_depan . " " . $nama_belakang;
echo '<br>';
echo 'Putri: "Selamat' . " ". "hari Jum'at\"";

echo '<hr>';
// OPERATOR
// ARITMATIKA
// +, -, *, /, % (modulo / modulus / sisa bagi)
echo 1 + 1;
echo '<br>';
echo "Hasil dari 1 + 1 adalah" .  1 + 1 ;
echo '<br>';
// KaBaTaKu
echo (1 + 2 ) * 3 - 4; 
echo '<br>';
echo 10 % 5;
echo '<br>';
//  selama string masih angka masih bisa di jumlahin
echo 1 + "1" + 1;
echo '<hr>';

//  Perbandingan
// <, >, <==, >=, ==, != (menghailkan boolean)
echo 1 > 5;
echo '<br>';
echo 1 == "1";
echo '<hr>';



// Identitas / Strict Comparison
// ===, !==
echo 1 === "1";



// Increment / kurang 1
// tambah / kurang 1
// ++, --
$x = 10;

echo ++$x;
echo '<br>';
echo $x++;
echo '<hr>';




?>