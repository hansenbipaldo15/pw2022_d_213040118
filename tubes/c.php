<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SPP Online</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body class="bg-gradient-secondary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-7 col-md-4">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Aplikasi SPP Online</h1>
                                    </div>
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
                                    <form action="admin/app/proses_login.php" method="POST" class="user">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="exampleInputUsername"
                                                placeholder="Masukan Username" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukan Password" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit" value="Login" class="btn btn-primary btn-user btn-block"/>
                                        </div>
                                        <hr>
                                     </form>   
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>