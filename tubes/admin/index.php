<?php
include '../admin/app/header.php';
?>
<body id="page-top">
    <div id="wrapper"> 
        <?php 
        include '../admin/app/sidebar.php';
        ?> 
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php
                include '../admin/app/nav.php';
                ?>
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
                    </div>
                    
                    <div class="row">
            
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Siswa</div>

                                                <?php
                                                    $jml = mysqli_num_rows(mysqli_query($conn, "select *from siswa"));
                                                ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jml?></div>
                                        </div>
                                        <div class="col-auto">
                                            <img width="50px" height="50px" src="../img/group.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                petugas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                                        </div>
                                        <div class="col-auto">
                                            <img width="50px" height="50px" src="../img/user.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                kelas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                                        </div>
                                        <div class="col-auto">
                                            <img width="50px" height="50px" src="../img/school.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                pembayaran</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                                        </div>
                                        <div class="col-auto">
                                            <img width="50px" height="50px" src="../img/mayar.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                spp</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
                                        </div>
                                        <div class="col-auto">
                                            <img width="50px" height="50px" src="../img/money.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <footer class="sticky-footer bg-gray">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SPP Online 2021
                                            HILAL
                        </span>
                    </div>
                </div>
            </footer>
            
        </div>
        
    </div>
    
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php
    include '../admin/app/modal.php';
    ?>

<?php
include '../admin/app/footer.php';
?>