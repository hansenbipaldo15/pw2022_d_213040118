<?php 

include '../koneksi.php';
 

if(isset($_POST['submit'])){
$id = $_POST['id_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = 'petugas';
 

mysqli_query($conn,"update petugas set username='$username', password='$password', nama_petugas='$nama_petugas' where id_petugas='$id'");
 
header("location:petugas.php");
}
?>