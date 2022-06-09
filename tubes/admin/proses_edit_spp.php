<?php 

include '../koneksi.php';
 

if(isset($_POST['submit'])){
$id = $_POST['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

 

mysqli_query($conn,"update spp set tahun='$tahun', nominal='$nominal' where id_spp='$id'");
 
header("location:spp.php");
}
?>