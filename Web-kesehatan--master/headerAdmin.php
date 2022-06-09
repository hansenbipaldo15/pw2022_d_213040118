<?php require_once 'core/init.php';
	$super_user = false;

	if (cek_status($_SESSION['user']) == 1) {
		$super_user = true;
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
 <link rel="shortcut icon" href="img/log.png">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="asset/costem/costum.css">
<link rel="stylesheet" type="text/css" href="asset/css/materialize.min.css"><script src="asset/JQuerry/JQuery.js"></script>
<script src="asset/JQuerry/JQuery.js"></script>

<script src="asset/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinymce.init({
		selector : '#tinytextarea',
		menubar : false,
		plugins : 'codesample,image,jbimages',
		toolbar  : 'newdocument, bold, italic, underline, strikethrough, alignleft, aligncenter, alignright, alignjustify, fontselect, fontsizeselect, bullist, numlist, outdent, indent,image,jbimages,codesample'
	});
	
</script>
 
<body>
	<div class="navAd">
		<div id="nav-admin">
			<span><b>AD<span id="min">MIN</span></b></span>
		</div>
		<div id="nav-gambar">
			<img src="img/log1.png">
			
		</div>
	</div>
<div class="col s6">	
	<div class="nav-kiri">
		<div id="des"><a href="Deshbord.php"><img src="img/icon/home.png">Dashboard</a></div>

		<?php if ($super_user == true) :
			
		 ?>
		<div id="des"><a href="register.php">Register Admin</a></div>
		<?php endif; ?>

		<div id="des"><a href="inputBerita.php"><img src="img/icon/form.png">Input Berita</a></div>
		<div id="des"><a href="berita.php"><img src="img/icon/tabel.png">Berita</a></div>
		<div id="des"><a href="about.php"><img src="img/icon/about.png">About</a></div>
		<div id="des"><a href="logout.php"><img src="img/icon/logout.png">Logout</a></div>

	</div>
</div>

