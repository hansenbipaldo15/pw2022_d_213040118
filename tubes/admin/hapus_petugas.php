<?php
    include "../koneksi.php";

    $id = $_GET['id'];
    
    $query = "DELETE from petugas where id_petugas='$id'";
    $hapus = mysqli_query($conn, $query);

    if($hapus){
        header("location:petugas.php");
    }else{
        mysqli_errno($conn);
    }
 ?>