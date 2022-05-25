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
     $deskripsi = htmlspecialchars($data["deskripsi"]);
    
    // upload gambar
    $gambar = upload();
    if( !$gambar) {
        return false;
    }
 
 $query = "INSERT INTO tablet
 VALUES
 ('', '$kode', '$merek', '$tipe', '$deskripsi', '$gambar')     
";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}

function upload() {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah ada gambar yang diupload
    if( $error ===  4 ) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
            </script>";
        return false;
        
    }

    // cek apakah yang diupload adalah gambar 
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
              </script>";
        return false;
    
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile > 1000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar!');
    </script>";
    return false;
    }
    
    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tablet WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    $id = $data["id"];

    $kode = htmlspecialchars($data["kode"]);
    $merek = htmlspecialchars($data["merek"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4){
    $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


$query = "UPDATE tablet SET
            kode = '$kode',
            merek = '$merek',
            tipe = '$tipe',
            deskripsi = '$deskripsi',
            gambar ='$gambar'   
        WHERE id = $id
";
mysqli_query($conn, $query) or die(mysqli_error($conn));

return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM tablet
                WHERE
            kode LIKE '%$keyword%' OR
            merek LIKE '%$keyword%' OR
            tipe LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%' 
    ";
    return query($query);
}





?>