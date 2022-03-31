<?php
// cek apakah tombol sumbit sudah tekan atau belum
if( isset($_POST["sumbit"])){
    // cek username & password
    if( $_POST["username"] == "admin" && $_POST
    ["password"] == "2021"){
    // jika bener, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else{
    // jika salah, tampilkan kesalahan
        $error = true;
    }
}
?>