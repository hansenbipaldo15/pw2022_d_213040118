<?php 
require_once 'core/init.php';

if (!isset($_SESSION['user'])) {
	header("Location:index.php");
}else{
	
	if (isset($_POST['btn'])) {
		$nama = $_POST['nama'];
		$pass = $_POST['pass'];
		if (!empty(trim($nama)) && !empty(trim($pass))) {
			if (register_cek_nama($nama)) {
				if (register_user($nama,$pass)) {
					echo "<script language='JavaScript'>alert('Data Berhasil ditambah');
	               document.location = 'register.php';
		          </script>";
				}
			}else{
				echo "<script language='JavaScript'>alert('Nama sudah terdaftar');
		          </script>";
			}
		}else{
			echo "<script language='JavaScript'>alert('Data tidak boleh ada yang kosong');
		          </script>";
		}
	}

require_once 'headerAdmin.php';
 ?>
<div class="nav-kanan">
	<div class="ad-konten">
		<div class="container">
			<div class="row"><br><br>
				<!-- <div class="col 12"></div> -->
				<div class="col s2"></div>
				<div class="col s8" >
					<div class="center"><h3>Register Admin</h3></div><br><br>
					<form method="post" action="">
					<label>Nama</label>
					<input type="text" name="nama">
					<label>Password</label>
					<input type="password" name="pass">
					<input type="submit" name="btn" class="btn" value="Daftar">
					<input type="submit" name="btn" class="btn" value="Batal">
				</form>
				</div>	
				<div class="col s2"></div>
			</div>
		</div>
	
		


	</div>
</div>

<?php } ?>



