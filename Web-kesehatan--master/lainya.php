<?php  
require_once 'core/init.php';
$berita = tampilkanAll();
if (isset($_GET['cari'])) {
	$cari = $_GET['cari'];
	$berita = hasil_cari($cari);
}

 
require_once 'header.php'; ?>


<div class="container"><br>
<div class="col s3">
	<div class="right">
		
<form action="" method="get">
	<input type="search" name="cari" placeholder="Silahkan Cari Disini .. ">
</form>
	</div>
</div>
<br><br><br>

	<h3 class="center">Berita</h3>
	<div class="row"><br>
	<div class="row materis-Card animated bounceIn">
			<?php while($row = mysqli_fetch_assoc($berita)): ?>
		<div class="col s12 m4">
			<div class="card ">
				<div class="card-img waves-effect waves-light">
					<img src="gambar/info.jpg" class="activator responsive-img">
				</div>
				<div class="card-content">
					<span class="card-title"><?php echo $row['judul'] ?><i class="activator material-icons right">more_vert</i></span>
				</div>
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
</div>


<?php require_once 'footer.php'; ?>