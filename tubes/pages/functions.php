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

 
     // cek apakah user tidak mengupload gambar
     if ($_FILES["gambar"]["error"]===4) {

        // pilih gambar default
            $gambar= '../img/nophoto.png';
        } else {
            // jalankan fungsi upload
            $gambar = upload();
            // cek jika upload gagal
            if(!$gambar) {
                return false;
            }
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
    if( $ukuranFile > 5000000) {
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


    move_uploaded_file($tmpName, '../img/' . $namaFileBaru);

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
    $merek = htmlspecialchars($data["nama_merek"]);
    $tipe = htmlspecialchars($data["tipe"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4){
    $gambar = $gambarLama;
    } else {
        $gambar = upload();
        if(!$gambar) {
            return false;
        }
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

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");

    if(mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah terdaftar!');
    </script>";
return false;
    }

    // cek konfirmasi password
    if( $password !== $password2) {
     echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
    return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}


?>