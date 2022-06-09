<?php 
require_once 'core/init.php';
if (!isset($_SESSION['user'])) {
	header("Location:index.php");
}else{


$erorr ='';
if (isset($_POST["btn"])) {
	$judul = $_POST["judul"];
	$konten = $_POST["konten"];

	if (!empty(trim($judul)) && !empty(trim($konten))) {
		if (tambah_data($judul,$konten)) {
			 echo "<script language='JavaScript'>alert('Input Data Berhasil');
	               document.location = 'Deshbord.php';
	          </script>";
		}else{
			$erorr = 'ada masalah saat menambah data';
		}
	}else{
			$erorr = 'data tidak boleh kosong';
	}
}

require_once 'headerAdmin.php'; 
?>

<div class="nav-kanan">
	    <div class="ad-konten" id="#home">
							
			<div class="kon-des">
				<div class="container">
				<!-- isi -->
				<h3>Input Berita</h3>
				<div class="row">
				<form class="col s12" method="post" action="inputBerita.php">
					<div class="row">
						<div class="input-field col s12">
						<!-- icon -->
						
							<label >Judul</label>
							<input type="text" name="judul" required>
						</div>
				
						<!-- <label>Isi</label> -->
						<div class="input-field  col s12">
							<!-- <i class="material-icons prefix">vpn_key</i> -->
							<textarea name="konten" rows="240" cols="80" id="tinytextarea"></textarea>
							
							<!-- <label for="isi">Isi Berita</label> -->
						</div>
						
					</div>
					
					<input type="submit" name="btn" class="btn " value="simpan">

					
					</form>
					<br><br>
					
				</div>
				<!-- batas isi -->
					</div>
				</div>
			</div>
		</div>
		<div id="batas"></div>
		
		
	</div>

	<?php require_once 'footer.php'; }?>