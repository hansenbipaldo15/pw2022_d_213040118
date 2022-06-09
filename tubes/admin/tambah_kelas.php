<?php 
include 'app/header.php';
?>

<body id="page-top">
    <div id="wrapper">
        
        <?php
        include 'app/sidebar.php';
        ?>
        
        <div id="content-wrapper" class="d-flex flex-column">

            
            <div id="content">

                <?php
                include 'app/nav.php';
                ?>
                
                <div class="container-fluid">
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Kelas</h6>
                        </div>
                        <div class="card-body">
                        <form action="prosestambah_kelas.php" method="POST">
                             <div class="form-group">
                             <?php 
                                    $urutan=1;
                                    $query = mysqli_query($conn, "SELECT max(id_kelas) as id_kelas FROM kelas");
                                    $data = mysqli_fetch_array($query);
                                    $urutan = $data['id_kelas'];
                                    $urutan++;
                                    $urutan = sprintf("%03s", $urutan);
                             ?>    
                                <label for="exampleNisn">ID Kelas</label>
                                <input type="text" name="id_kelas" value="<?php echo $urutan;?>" class="form-control" id="exampleInputNisn" aria-describedby="nisnHelp" placeholder="<?php echo $urutan;?>" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="exampleNisn">Nama Kelas</label>
                                <input type="text" name="nama_kelas" class="form-control" id="exampleInputNisn" aria-describedby="nisnHelp" placeholder="Masukan Username" required/>
                            </div>
                            <div class="form-group">
                                <label for="exampleNis">Kompetensi Keahlian</label>
                                <input type="text" name="kompetensi_keahlian" class="form-control" id="exampleInputNis" aria-describedby="nisHelp" placeholder="Masukan Password" required/>
                            </div>
                            
                            <div class="form-group p-3">
                                <button type="submit" name ="submit" class="btn btn-success">Simpan</button>
                            </div>
                            
                            </form>
                        </div>
                    </div>
                </div>

                </div>     

            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            

        </div>
        

    </div>
    

    
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
    <?php
    include 'app/modal.php';
    ?>

<?php 
include 'app/footer.php';
?>