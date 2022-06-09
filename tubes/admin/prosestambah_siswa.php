<?php
	include "../koneksi.php";
	
	if(isset($_POST['submit'])){
		$id_siswa		= $_POST['id_siswa'];
        $nisn           = $_POST['nisn'];
		$nis            = $_POST['nis'];
		$nama           = $_POST['nama'];
		$id_kelas	    = $_POST['kelas'];
		$alamat         = $_POST['alamat'];
        $no_telp        = $_POST['notelp'];
        $id_spp         = $_POST['spp'];
		$awaltempo	    = $_POST['jatuh_tempo'];

		$bulanIndo =[
			'01' => 'januari',
			'02' => 'Februari',
			'03' => 'Maret',
			'04' => 'April',
			'05' => 'Mei',
			'06' => 'Juni',
			'07' => 'Juli',
			'08' => 'Agustus',
			'09' => 'September',
			'10' => 'Oktober',
			'11' => 'November',
			'12' => 'Desember',
		];
		
		if($nisn =='' || $nis=='' || $nama==''){
			echo "Form belum lengkap";
		}else{
			$tambah = mysqli_query($conn, "insert into siswa values('$id_siswa','$nisn','$nis','$nama','$id_kelas','$alamat','$no_telp','$id_spp')");
		
			
	
			$ambildata= mysqli_fetch_array(mysqli_query($conn,"SELECT id_siswa from siswa order by id_siswa DESC LIMIT 1"));
			$idsiswa = $ambildata['id_siswa'];
			$ambildata2 = mysqli_fetch_array(mysqli_query($conn,"SELECT *from spp where id_spp='$id_spp'"));
			$jmlbayar=$ambildata2['nominal'];
			$keterangan = 'Belum Lunas';
			$tgl_bayar = '';
			for($i=0;$i<12;$i++){
				//tanggal jatuh tempo setiap tanggal 10
				$jatuhtempo = date("Y-m-d" , strtotime("+$i month" , strtotime($awaltempo)));

				$bulan     = $bulanIndo[date('m' ,strtotime($jatuhtempo))]."  ".date('Y', strtotime($jatuhtempo));

				$tambah2 = mysqli_query($conn,"insert into pembayaran(id_siswa, nisn, jatuh_tempo, bulan, tgl_bayar ,id_spp, jumlah_bayar,keterangan) values('$idsiswa','$nisn','$jatuhtempo','$bulan','$tgl_bayar','$id_spp','$jmlbayar','$keterangan')");
			}
			header('Location: siswa.php?pesan=tambah');

		}
		
		// ambil nominal spp
		
	
			

	}
 ?>