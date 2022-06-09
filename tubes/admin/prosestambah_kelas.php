<?php
	include "../koneksi.php";
	
	if(isset($_POST['submit'])){
        $id_kelas             = $_POST['id_kelas'];
		$nama_kelas           = $_POST['nama_kelas'];
		$kompertisi_keahlian  = $_POST['kompetensi_keahlian'];
		
		
		$tambah = mysqli_query($conn, "insert into kelas values('$id_kelas','$nama_kelas','$kompertisi_keahlian')");
		
		if($tambah){
			header("Location:kelas.php");
			die();
		}else{
			echo 'Data Gagal Ditambahkan !!';
			echo '<a href="index.php">Kembali</a>';
		}
	}
 ?>