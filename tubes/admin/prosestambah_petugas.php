<?php
	include "../koneksi.php";
	
	if(isset($_POST['submit'])){
        $id_petugas     = $_POST['id_petugas'];
		$username       = $_POST['username'];
		$password       = $_POST['password'];
		$nama_petugas	= $_POST['nama_petugas'];
		$level		    = 'petugas';
		
		
		$tambah = mysqli_query($conn, "insert into petugas values('$id_petugas','$username','$password','$nama_petugas','$level')");
		
		if($tambah){
			header("Location:petugas.php");
			die();
		}else{
			echo 'Data Gagal Ditambahkan !!';
			echo '<a href="index.php">Kembali</a>';
		}
	}
 ?>