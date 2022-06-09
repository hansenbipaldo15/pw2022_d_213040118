<?php 
require_once 'core/init.php';
$berita = tampilkan();

if (isset($_POST["btn"])) {
	$nama = $_POST['nama'];
	$pass = $_POST['pass'];
	if (!empty(trim($nama)) && !empty(trim($pass))) {
		if (cek_data($nama,$pass)) {
			$_SESSION['user'] = $nama;
			header("Location:Deshbord.php");
		}
	}else{
		//echo "kosng";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="shortcut icon" href="img/log.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link rel="stylesheet" type="text/css" href="asset/costem/costum.css">
<link rel="stylesheet" type="text/css" href="asset/costem/animate.css">
<link rel="stylesheet" type="text/css" href="asset/css/materialize.min.css">
<script src="asset/JQuerry/JQuery.js"></script>
<body>

<!-- navbar 1 -->
<div class="navbar-fixed z-depth-4 " id="navbar1">
	<nav class=" green accent-3">
		<div class="nav-wrapper">
			<a href="#" class="right brand-logo"><b>BAYU LALU</b></a>
			<a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>

	
			<ul class="hide-on-med-and-down">
			<li><a href="#">Home</a></li>
			<li><a href="#visi" class="page">Visi Misi</a></li>
			<li><a href="#berita" class="page">Berita</a></li>
			<li><a href="#info" class="page">Informasi</a></li>
			
		</ul>

		
		</div>
	</nav>
</div>
<!-- tampilan hpnya -->
		<ul class="side-nav" id="mobile-menu">
			<li><a href="#">Home</a></li>
			<li><a href="#visi" class="page">Visi Misi</a></li>
			<li><a href="#berita" class="page">Berita</a></li>
			<li><a href="#info" class="page">Informasi</a></li>
		</ul>
<div class="gambar">
	<div class="center admin">
	<button data-target="modal_box" class="btn modal-trigger waves-effect">Admin</button>
	</div>
	<img src="gambar/nav2.png">
</div>

<!-- modal -->

<div id="modal_box" class="modal buttom-sheet">
	<div class="modal-content">
		<h4 class="center">Login</h4>
		<div class="container">
			<div class="row">
				<form class="col s12" method="post">
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">account_circle</i>
							<input type="text" name="nama" class="validate" id="icon_prefix">
							<label for="icon_prefix">Admin</label>
						</div>
				

						<div class="input-field  col s12">
							<i class="material-icons prefix">vpn_key</i>
							<input type="password" name="pass" value=" " class="validate" id="password">
							<label for="password">Password</label>
						</div>
						
					</div>
					
					<input type="submit" name="btn" class="btn tombol-admin waves-effect waves-light " style="margin-left: 42px">
					
				</form>
					
				
			</div>
		</div>


	
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect waver-light btn">close</a>
	</div>
	
</div>



<!-- navbar 2 -->
<div class="navbar z-depth-4 " id="navbar2">
	<nav class="green accent-3">
		<div class="nav-wrapper ">
			<a href="#" class="right brand-logo"><b>BAYU LALU</b></a>
			<a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="hide-on-med-and-down">
			<li><a href="#">Home</a></li>
			<li><a href="#visi" class="page">Visi Misi</a></li>
			<li><a href="#berita" class="page">Berita</a></li>
			<li><a href="#info" class="page">Informasi</a></li>
			
		</ul>

		</div>
	</nav>
</div>

<!-- Visi dan misi -->
<section id="visi">
	<br>
<div class="blue lighten-5">
<div class="container animated bounceInLeft ">
	<h3 class="center">Visi Misi</h3>
	<div class="row">
		<div class="col m6 s12">
		<img src="gambar/ab.jpg" class="responsive-img">
		<p>Visi Dinas Kesehatan Provinsi NTB adalah “Mewujudkan Masyarakat NTB yang mandiri untuk hidup Bersih dan Sehat tahun 2018”.
		Terdapat 3 (tiga) kata kunci dalam visi tersebut yaitu :</p>
		</div>
		<div class="col m6 s12">
			<p>Untuk mencapai masyarakat NTB yang mandiri untuk hidup bersih dan sehat ditempuh melalui Misi sebagai berikut :</p>
			<ol>
				<li>Meningkatkan kemampuan sumber daya manusia kesehatan dan kemandirian masyarakat dalam berperilaku hidup bersih dan sehat</li>
				<li>Meningkatkan kemampuan masyarakat dalam pengendalian penyakit dan penyehatan lingkungan.</li>
				<li>Meningkatkan keadaan gizi dan derajat kesehatan</li>
				<li>Meningkatkan keterjangkauan dan mutu pelayanan kesehatan.</li>
				<li>Meningkatkan kualitas dan ketertiban pengelolaan sumber daya kesehatan.</li>
				<li>Meningkatkan keterjangakauan dan mutu pelayanan laboratorium kesehatan masyarakat di Pulau Lombok</li>
				<li>Meningkatkan keterjangakauan dan mutu pelayanan laboratorium kesehatan masyarakat di Pulau Sumbawa</li>
				<li>Meningkatkan keterjangkauan dan mutu pelayanan kesehatan mata masyarakat</li>
				<li>Meningkatkan keterjangkauan dan mutu pelayanan kesehatan rujukan yang sesuai standar di Pulau Sumbawa</li>
				<li>Meningkatkan kemampuan dan keterampilan tenaga kesehatan yang professional dan paripurna</li>
				<li>Meningkatkan kemampuan dan keterampilan lulusan ahli madya keperawatan</li>
			</ol>
		</div>
	</div>
</div>
</div>
</section>

<section id="berita">
<br><br>

<!-- berita -->
	
<div class="container">
	<h3 class="center">Berita</h3>
	<div class="row">
	<div class="row materis-Card berita1 animated">
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
<div>
</div>
</div>
</section>
<div class="center">
	<div class="lainya">
		<a href="lainya.php" class="btn waves-effect">Lainya</a>
	</div>
</div>

</div>

<br><br><br>

<!-- baras -->
<div class="parallax-container" style="height: 350px">
      <div class="parallax">
      	<img src="gambar/b.jpg">
      </div>
	
	<div class="container  melayani1 animated">
		<div class="titile center">
		<h5 id="selamat"><b>SELAMAT DATANG DI PELAYANAN PUBLIC BIDANG KESEHATAN </b></h5>
			
		</div>
		<div class="row">
			
				<h6>Melayani : </h6>
				<ol>
			<div class="col s6">
					<li>Rekomendasi Izin PBF Pusat</li>
					<li>Rekomendasi Izin PBF Cabang</li>
					<li>Rekomendasi Izin Industri Farmasi</li>
					<li>Rekomendasi Izin Industri Alkes</li>
					<li>Rekomendasi Izin Penyaluran Alkes Pusat</li>
				</div>
				<div class="col s6">
					<li>Rekomendasi Penyaluran Alkes Cabang</li>
					<li>Rekomendasi Izin Industrii Obat Tradisional / izin Prinsip</li>
					<li>Rekomendasi Izin Usaha Kecil Obat Tradisonal</li>
					<li>Rekomendasi Registrasi Puskesmas </li>
					<li>Rekomendasi Pengusulan STR</li>
				</div>
				</ol>
			
		</div>

	</div>      
</div>

<section id="info">
	<br><br>
		<h3 class="center">Informasi kegiatan</h3>
<div class="container gambar1 animated">
	<div class="row">
		
		<div class="col s12 m4 ">
			<img src="gambar/1.jpeg" class="responsive-img materialboxed">
		</div>	
		
		<div class="col s12 m4 ">
			<img src="gambar/2.jpeg" class="responsive-img materialboxed">
		</div>	


		<div class="col s12 m4 ">
			<img src="gambar/3.jpeg" class="responsive-img materialboxed">
		</div>	

		<div class="col s12 m4 ">
			<br>
			<img src="gambar/4.jpeg" class="responsive-img materialboxed">

		</div>	
		<div class="col s12 m4 ">
				<br>
			<img src="gambar/5.jpeg" class="responsive-img materialboxed">
		</div>	


		<div class="col s12 m4 ">
				<br>
			<img src="gambar/2.jpeg" class="responsive-img materialboxed">
		</div>	
		
	</div>
</div>
</section>


<br><br>
<footer class="">
	<div class="page-footer green accent-4">
		<div class="container">
			<div class="row">
			<div class="col s6 img-foter">
				<h5>Kontak</h5>
				<ul>
					<li>Alamat Kantor Utama : Jl. Amir Hamzah No. 103 Mataram</li>
					<li>Alamat Kantor II : Jl. Swara Mahardika Mataram</li>
					<li>Kode Pos : 83121</li>
					<li>Email : dikes@ntbprov.go.id</li>
					<li>Telpon : (0370) – 621786</li>
				</ul>
				
			</div>
			<div class="col s6">
				<div class="right">
					
				<h5>Statistik Pengunjung</h5>
				<img src="gambar/grafik.png" class="responsive-img" style="height: 130px;">
				</div>
			
			
			</div>
			<div class="col s4 offset-s4">
				<div class="data">
					<h5 class="center">TUGAS UAS </h5>
					<ul>
						<li>Nama :Lalu Bayu Alami</li>
						<li>Nim :1510520165</li>
						<li>Kelas : C</li>
						<li>Semester : 5</li>
					</ul>

				</div>
			</div>
		</div>
	</div>

  <div class="footer-copyright">
    <div class="container center">
      <p>&copy;  Copyright BAYU LALU  2018</p>
    </div>
  </div>
</footer>

<?php require_once 'footer.php'; ?>