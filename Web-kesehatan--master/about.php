<?php 
require_once 'core/init.php';
if (!isset($_SESSION['user'])) {
	header("Location:index.php");
}else{


require_once 'headerAdmin.php'; 


?>
<div class="nav-kanan">
	<div class="conteiner">
		<div class="row">
			<!-- <div class="center"> -->
			<div class="col s6 offset-s3 kotak">
				<div class="gambar">
				<img src="gambar/pas.jpg" class="responsive-img">
				</div>
				<div class="data_diri">
					<p>Nama : Lalu Bayu Alami</p>
					<p>Nim : 1510520165</p>
					<p>Kelas : C </p>
					<p>Semester : 5 </p>
					<p>Prodi : S1TI </p>
				</div>
			</div>
			<!-- </div> -->
		</div>
	</div>
</div>


<?php require_once 'footer.php';
}
 ?>