<?php
    include "../koneksi.php";

    $id = $_GET['id'];
    
    $query = "DELETE from pembayaran where id_siswa='$id'";
    $hapus = mysqli_query($conn, $query);

    $query = "DELETE from siswa where id_siswa='$id'";
    $hapus = mysqli_query($conn, $query);

    if($hapus){
        header("location:siswa.php");
    }else{
        mysqli_errno($conn);
    }
?>