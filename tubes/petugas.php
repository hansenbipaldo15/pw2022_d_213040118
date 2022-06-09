<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(img/cover.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Silahkan Login</h3>

				      		        <?php
			                               if(isset($_GET['pesan'])){
	                                       $pesan = $_GET['pesan'];
                                        if($pesan == "gagal"){
                                                echo '<div class="alert alert-danger" role="alert">
                                               Maaf Username dan Password Salah !
                                              </div>';
                                            }
                                        }
                                    ?>
		      	<form action="admin/app/proses_login.php" method="POST" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" name="username" class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input  type="password" name="password" class="form-control" placeholder="Password" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name ="submit" class="form-control btn btn-primary submit px-3">Masuk</button>
	

	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

