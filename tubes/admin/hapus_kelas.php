<?php
    include "../koneksi.php";

    $id = $_GET['id'];
    
    $query = "DELETE from kelas where id_kelas='$id'";
    $hapus = mysqli_query($conn, $query);

    if($hapus){
        header("location:kelas.php");
    }else{
        mysqli_errno($conn);
    }
 ?>