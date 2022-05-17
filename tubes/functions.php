<?php 
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "tubes_pw2022_b_213040055");


function query($query) {
    global $conn;
   $result = mysqli_query($conn, $query);
   $rows = [];
   while( $row = mysqli_fetch_assoc($result) ) {
       $rows[] = $row;
   }
   return $rows;
}



function tambah($data) {
    global $conn;
     $kode = htmlspecialchars($data["kode"]);
     $merek = htmlspecialchars($data["merek"]);
     $tipe = htmlspecialchars($data["tipe"]);
     $harga = htmlspecialchars($data["harga"]);
     $gambar = htmlspecialchars($data["gambar"]);

 
 $query = "INSERT INTO tablet
 VALUES
 ('', '$kode', '$merek', '$tipe', '$harga', '$gambar')     
";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tablet WHERE id = $id");

    return mysqli_affected_rows($conn);
}







?>