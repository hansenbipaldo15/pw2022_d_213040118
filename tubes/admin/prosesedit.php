<?php
	include "../koneksi.php";
	
	if(isset($_POST['submit'])){
		$username       = $_POST['username'];
		$password       = $_POST['password'];
		$nama_petugas	= $_POST['nama_petugas'];
		
		
		$tambah = mysqli_query($conn, "update petugas set values('$username','$password','$nama_petugas')") or die(mysqli_error($conn));
		
		if($tambah){
			header("Location:petugas.php");
			die();
		}else{
			echo 'Data Gagal Ditambahkan !!';
			echo '<a href="index.php">Kembali</a>';
		}
	}
 ?>