<?php
	include "../koneksi.php";
	
	if(isset($_POST['submit'])){
        $id_spp     = $_POST['id_spp'];
		$tahun       = $_POST['tahun'];
		$nominal       = $_POST['nominal'];
		
		
		
		$tambah = mysqli_query($conn, "insert into spp values('$id_spp','$tahun','$nominal')");
        
		if($tambah){
			header("Location:spp.php");
			die();
		}else{
			echo 'Data Gagal Ditambahkan !!';
			echo '<a href="index.php">Kembali</a>';
		}
	}
 ?>