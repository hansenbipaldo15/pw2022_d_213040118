<?php 
require_once 'core/init.php';

$super_user = false;

if (!isset($_SESSION['user'])) {
	header("location:index.php");
}else{

if (cek_status($_SESSION['user']) == 1){
	$super_user = true;
}

require_once 'headerAdmin.php';

?>
<div class="nav-kanan">
	    <div class="ad-konten" id="#home">
							
			<div class="kon-des">
				<div class="container">
					<h4 class="center">Selamat datang Di halaman Husus Admin</h4>
					<br><br>
					<div class="row">
						<div class="col s6 ceter">
							<div class="center" >
							<a href="inputBerita.php" class="btn">Input Berita</a><br><br>
							<?php if ($super_user == true) :?>					
							<a href="register.php" class="btn">Register Admin</a><br><br>
							<?php endif; ?>
							<a href="inputBerita.php" class="btn">Infomasi Berita</a>
							</div>
						</div>
						<div class="col s6">
							<div class="center">
							<a href="about.php" class="btn" >About</a><br><br>
							<a href="logout.php" class="btn">Logout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="batas"></div>
		
		
	</div>
	<?php } ?>