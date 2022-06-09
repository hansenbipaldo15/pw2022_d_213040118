<?php 

include '../koneksi.php';
 

if(isset($_POST['submit'])){
$id = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];
 

mysqli_query($conn,"update kelas set nama_kelas='$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian' where id_kelas='$id'");
 
header("location:kelas.php");
}
?>