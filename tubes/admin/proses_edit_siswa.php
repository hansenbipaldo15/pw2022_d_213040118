<?php 

include '../koneksi.php';

if(isset($_POST['submit'])){
$id       = $_POST['id_siswa'];
$nisn     = $_POST['nisn'];
$nis      = $_POST['nis'];
$nama     = $_POST['nama'];
$id_kelas = $_POST['kelas'];
$alamat   = $_POST['alamat'];
$no_telp  = $_POST['notelp'];
$id_spp   = $_POST['spp'];


mysqli_query($conn, "UPDATE siswa SET nisn='$nisn', nis='$nis', nama='$nama', id_kelas='$id_kelas', alamat='$alamat', nomor_telepon='$no_telp', id_spp='$id_spp' where id_siswa='$id'");

header("Location:siswa.php");

}
?>