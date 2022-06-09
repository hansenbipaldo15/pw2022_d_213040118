<?php 
require_once 'core/init.php';
if (!isset($_SESSION['user'])) {
	header("Location:index.php");
}else{

$erorr ='';
$id = $_GET['id'];


if (isset($_GET['id'])) {
	$berita = tampilkan_per_id($id);

	while ($row = mysqli_fetch_assoc($berita)) {
		$judul_awal = $row['judul'];
		$konten_awal = $row['isi'];
	}
}

if (isset($_POST['btn'])) {
	$judul = $_POST['judul'];
	$konten = $_POST['konten'];
	if (!empty(trim($judul)) && !empty(trim($konten))) {
		if (edit_data($judul,$konten,$id)) {
			echo "<script language='JavaScript'>alert('Edit Data Berhasil');
	               document.location = 'berita.php';
	          </script>";
		}
	}else{
		echo "data tidk boleh kosong";
	}
}

require_once 'headerAdmin.php'; 
?>

<div class="nav-kanan">
	    <div class="ad-konten" id="#home">
							
			<div class="kon-des">
				<div class="container">
				<!-- isi -->
				<h3>Edit Berita</h3>
				<div class="row">
				<form class="col s12" method="post" action="">
					<div class="row">
						<div class="input-field col s12">
						<!-- icon -->
						
							<label >Judul</label>
							<input type="text" name="judul" required value="<?= $judul_awal ?>">
						</div>
				
						<!-- <label>Isi</label> -->
						<div class="input-field  col s12">
							<!-- <i class="material-icons prefix">vpn_key</i> -->
							<textarea name="konten" rows="240" cols="80" id="tinytextarea"><?=$konten_awal ?></textarea>
						
						</div>
						
					</div>
					
					<input type="submit" name="btn" class="btn " value="edit">
				
					
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