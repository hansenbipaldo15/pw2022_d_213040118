<!DOCTYPE html>
<html>
  <head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/cari.png">

    <title>Pencarian</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/soon.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

  </head>
  <!-- START BODY -->
  <body class="nomobile">

    <!-- START HEADER -->
    <section id="header">

        <div class="container">
            <header>
                <!-- HEADLINE -->
                <h1 data-animated="GoIn"><b>CARI DATA BERDASARKAN NISN</b></h1>
            </header>
            
         
            <div class="col-lg-4 col-lg-offset-4 mt centered">
            	<h4>CARI NISN</h4>
				<form class="form-inline" role="form" action="history.php" method="POST">
				  <div class="form-group">
				    <label class="sr-only" for="exampleInputEmail2" >NISN</label>
				    <input type="text" class="form-control" id="exampleInputEmail2" name="nisn" placeholder="NISN">
				  </div>
				  <button type="submit" class="btn btn-info" name="submit">Submit</button>
				</form>            
			</div>
            
        </div>
        <!-- LAYER OVER THE SLIDER TO MAKE THE WHITE TEXTE READABLE -->
        <div id="layer"></div>
        <!-- END LAYER -->
        <!-- START SLIDER -->
        <div id="slider" class="rev_slider">
            <ul>
              <li data-transition="currentSlide" data-slotamount="1" data-thumb="../img/cover.jpg">
                <img src="../img/cover.jpg">
              </li>
            </ul>
        </div>
        <!-- END SLIDER -->
    </section>
    <!-- END HEADER -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/soon/plugins.js"></script>
    <script src="assets/js/soon/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/soon/custom.js"></script>
  </body>
  <!-- END BODY -->
</html>