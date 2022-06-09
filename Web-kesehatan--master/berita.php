<?php 
require_once 'core/init.php';

$super_user = false;
if (!isset($_SESSION['user'])) {
	header("Location:index.php");

}else{
	if (cek_status($_SESSION['user']) == 1) {
		$super_user = true;
	}



$berita = tampilkanAll();
if (isset($_GET['cari'])) {
	$cari = $_GET['cari'];
	$berita = hasil_cari($cari);
}


require_once 'headerAdmin.php'; ?>
<div class="nav-kanan">
	
					
<div class="container">
<div class="row"> 
<div class="col s12">
		
<form action="" method="get">
	<div class="right">
	<input type="search" name="cari" placeholder="Silahkan Cari Disini .. ">
	</div>
</form>
</div>
</div>


	<h3 class="center">Berita</h3>
	<div class="row">
	

	<div class="row materis-Card">
	<?php while($row = mysqli_fetch_assoc($berita)): ?>
		<div class="col s12 m4">
			<div class="card">
				<div class="card-img waves-effect waves-light">
					<img src="gambar/info.jpg" class="activator responsive-img">
				</div>
				<div class="card-content">
					<span class="card-title"><?php echo $row['judul'] ?><i class="activator material-icons right">more_vert</i></span>
				</div>

		 	<?php if ($super_user == true) :?>
				 <div class="card-action">
	              <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
	              <a href="hapus.php?id=<?= $row['id'] ?>">Hapus</a>
	            </div>
			<?php endif;?>
		 		<div class="card-reveal">
					<div class="card-title">
						<?php echo $row['judul']; ?><i class="material-icons right">close</i>
					</div>
					<p><?php echo exceprt($row['isi']); ?></p>
					<a href="singgle.php?id=<?= $row['id'] ?>" class="btn waves-effect waves-light">Lihat</a>
				</div>
			</div>
		</div>

<?php endwhile; ?>
	</div>
<div>
</div>
</div>


</div>
</div>

<?php require_once 'footer.php';
}
 ?>
	