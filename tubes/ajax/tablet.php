<?php 
require '../pages/functions.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM tablet join merek on merek.id_merek = tablet.merek

WHERE
kode LIKE '%$keyword%' OR
nama LIKE '%$keyword%' OR
tipe LIKE '%$keyword%' OR
deskripsi LIKE '%$keyword%' 
";
$tablet = query($query);
?>

<table class="table table-bordered text-center">
                        <thead>
                        <tr>
                          <th>No.</th>
                          <th>Gambar</th>
                          <th>Kode</th>
                          <th>Merek</th>
                          <th>Tipe</th>
                          <th>Deskripsi Produk</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                      <tbody>
                      <tr class="table-bordered">
      <?php $i =1; ?>
        <?php foreach( $tablet as $row) : ?>
          
              <td><?= $i ?></td>


                    <td><img src="../img/<?= $row["gambar"]; ?>" style="border-radius: 0%; width:100px; height:auto;"></td>
                    <td><?= $row["kode"] ?></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["tipe"] ?></td>
                    <td><?= $row["deskripsi"] ?></td>  
                    
                <td>
                <a href="ubah.php?id=<?= $row["id"];?>" class="btn btn-sm btn-outline-info">ubah</a>
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');" class="btn btn-sm btn-outline-primary  mt-1">hapus</a>
                </td>
        </tr>
        <?php $i++ ?>
    </tr>
   
            </tr> 
        <?php endforeach; ?>
                      </tbody>
                      </table>