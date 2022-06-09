<?php
require 'functions.php';
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($conn,"SELECT * FROM tablet join merek on merek.id_merek = tablet.merek ORDER BY id DESC");
$html = '<center>
        <h2>DATA TABLET ANDROID</h2> </br>
        </center><br><br>';
$html.= '<center><h3 style="margin-top:20px; margin-bottom:20px;">Jl. Gegerkalong Tengah No.52, Kota Bandung, Jawa Barat </h3></center>';
$html.= '<br/>';
$html.= '<br/>';
$html.= '<hr>';

$html .= '<table border="1" width="100%" style="margin-top:40px;border-collapse: collapse;border: 1px solid #ddd;">
 <tr>
 <th style="text-align:center;  padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">No</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">Kode</th>
 <th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">Merek</th>
<th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">Tipe</th>
<th style=" padding: 10px; background-color: #f2f2f2; font-family: Arial, Helvetica, sans-serif;">Deskripsi Produk</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td style='text-align:center; font-family: Arial, Helvetica, sans-serif;'>".$no."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['kode']."</td>
 <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['nama']."</td>
//  <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['tipe']."</td>
//  <td style='padding: 10px; font-family: Arial, Helvetica, sans-serif;'>".$row['deskripsi']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('data_tablet.pdf');
?>