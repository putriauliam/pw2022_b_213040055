<?php  
// definisikan masing-masing sisi kubus
$a = 9;
$b = 4;

// hitung masing-masing volume kubus
$volume_a = pow($a,3);
$volume_b = pow($b,3);

// hitung total 2 volume
$total = $volume_a + $volume_b;

// kembalikan nilai total
echo "Jumlah dari volume kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";

echo "<hr>";

// Deklarasi / definisi function
function totalVolumeDuaKubus($a, $b){
    // $volume_a = pow($a,3); // a pangkat 3
    // $volume_b = pow($b,3); // b pangkat 3
    
    // $total = $volume_a + $volume_b;
    $total = pow($a,3) + pow($b,3); // refactoring (disederhanakan)

    return "Jumlah dari volume kubus  dengan sisi $a dan kubus  dengan sisi $b adalah $total";
}

// pemanggilan / eksekusi function
echo totalVolumeDuaKubus(9,4);
echo "<br>";
echo totalVolumeDuaKubus(10,20);
echo "<br>";
echo totalVolumeDuaKubus(5,6);

echo "<hr>";

// buat sebuah fungsi untuk menghitung luas segitiga
function luasSegitiga($alas, $tinggi) {

    $luas = 0.5 * $alas * $tinggi;

    return "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah  $luas";
}

echo  luasSegiTiga(2,4);

?>