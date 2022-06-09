<?php
    session_start();
    include '../../koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select *from petugas where username='$username' and password = '$password'";
    $data = mysqli_query($conn, $query);
    $result = mysqli_fetch_array($data);

    if(isset($_POST['submit'])){
        $cek = mysqli_num_rows($data);  
        if($cek>0){
            if($result['level']=="admin"){
                $_SESSION['nama_petugas'] = $result['nama_petugas'];
                $_SESSION['level'] = $result['level'];

                header("Location:../../admin/index.php");
            }else{
                $_SESSION['nama_petugas'] = $result['nama_petugas'];
                $_SESSION['level'] = $result['level'];

                header("Location:../../petugas/index.php"); 
            }
        }else{
            header("Location:../../index.php?pesan=gagal");
        }
    }
?>  