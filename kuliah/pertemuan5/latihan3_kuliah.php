<?php
$mahasiswa = [
    ["Putri Aulia Maulidina", "213040055", "ptriauliam61@gmail.com", "Teknik Informatika"],
    ["Rahma Aliaputri Efendi", "213040047", "rahmaaliap@gmail.com", "Teknik Informatika"],
    ["Emilia Paradilas", "213040043", "emiliaparadilas@gmail.com", "Teknik Informatika"]
];

?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama: <?php echo $mhs[0]; ?> </li>
    <li>NPM: <?php echo $mhs[1]; ?> </li> 
    <li>Email: <?php echo $mhs[2]; ?></li>
    <li>Jurusan: <?php echo $mhs[3]; ?></li>
</ul>


<?php } ?>

