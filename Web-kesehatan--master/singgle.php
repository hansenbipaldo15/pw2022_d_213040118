<?php
 require_once 'header.php';
require_once 'core/init.php';
$id = $_GET['id'];

if (isset($_GET['id'])) {
	$berita = tampilkan_per_id($id);

	while ($row = mysqli_fetch_assoc($berita)) {
		$judul_awal = $row['judul'];
		$konten_awal = $row['isi'];
		
	}
}
 ?>


<div class="container animated bounceInLeft">
	<div class="row">
		<h4 class="center"><?php echo $judul_awal; ?></h4><br>
		<p><?php echo $konten_awal; ?></p>
	</div>
</div>