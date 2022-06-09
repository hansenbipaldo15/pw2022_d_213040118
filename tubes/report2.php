<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$id = $_GET['id'];
$id2 = $_GET['nisn'];
$nama = $_GET['nama'];
$query = mysqli_query($conn,"SELECT a.nisn, a.bulan, a.jumlah_bayar, a.keterangan, b.nama from pembayaran AS a INNER JOIN siswa as b ON a.nisn = b.nisn where a.keterangan='Lunas' and a.id_pembayaran='$id' ");
$query2 = mysqli_query($conn, "SELECT a.nama_kelas from kelas AS a INNER JOIN siswa as b ON a.id_kelas = b.id_kelas where b.nisn='$id2'  ");
$row2 = mysqli_fetch_array($query2);





$html = '<center><h3>SEKOLAH MENENGAH KEJURUAN BINA WISATA LEMBANG</h3><h3>LAPORAN DATA PEMBAYARAN SPP</h3></center><hr/><br/>';
$html .= '<table border="1" cellspacing="0" cellpadding="10" width="100%">
 <tr>
 <th>No</th>
 <th>NISN</th>
 <th>Nama</th>
 <th>Kelas</th>
 <th>Bulan</th>
 <th>Nominal</th>
 <th>Status</th>
 </tr>';
$no = 1;
$row = mysqli_fetch_array($query);

 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['nisn']."</td>
 <td>".$row['nama']."</td>
 <td>".$row2['nama_kelas']."</td>
 <td>".$row['bulan']."</td>
 <td>".$row['jumlah_bayar']."</td>
 <td>".$row['keterangan']."</td>
 </tr>";
 $no++;

$html .= "</table>";

$html .= '<br><br><br><br> <table align="right" border="0" cellspacing="0" cellpadding="10" width="100%">
 <tr>
 <th></th>
 <th></th>
 <th></th>
 <th></th>
 <th align="right">Lembang,  '.date("j F, Y");'</th>
 </tr>';

$html .= "</table>";

$html .= '<br><br><br><br><br><br> <table align="right" border="0" cellspacing="0" cellpadding="10" width="100%">
 <tr>
 <td align="right">'.$_GET["nama"].'</td>
 </tr>
 <tr>
 <td align="right"></td>
 </tr>';

$html .= "</table>";

$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_siswa.pdf');
?>