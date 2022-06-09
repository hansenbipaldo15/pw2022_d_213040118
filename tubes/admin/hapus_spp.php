<?php
    include "../koneksi.php";

    $id = $_GET['id'];
    
    $query = "DELETE from spp where id_spp='$id'";
    $hapus = mysqli_query($conn, $query);

    if($hapus){
        header("location:spp.php");
    }else{
        mysqli_errno($conn);
    }
?>