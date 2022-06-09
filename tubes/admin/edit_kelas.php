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
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data Kelas</h6>
                        </div>
                        <?php
                            $id = $_GET['id'];
                            $data = mysqli_fetch_array(mysqli_query($conn, "select *from kelas where id_kelas='$id'"));
                        ?>
                        <div class="card-body">
                        <form action="proses_edit_kelas.php" method="POST">
                             <div class="form-group">
                                <label for="exampleNisn">ID Kelas</label>
                                <input type="text" name="id_kelas" value="<?php echo $id;?>" class="form-control" id="exampleInputNisn" aria-describedby="nisnHelp" placeholder="<?php echo $id;?>" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="exampleNisn">Nama Kelas</label>
                                <input type="text" name="nama_kelas" class="form-control" id="exampleInputNisn" aria-describedby="nisnHelp" value="<?php echo $data['nama_kelas'];?>" placeholder="<?php echo $data['nama_kelas'];?>" required/>
                            </div>
                            <div class="form-group">
                                <label for="exampleNis">Kompetensi Keahlian</label>
                                <input type="text" name="kompetensi_keahlian" class="form-control" id="exampleInputNis" aria-describedby="nisHelp" value="<?php echo $data['kompetensi_keahlian'];?>" placeholder="<?php echo $data['kompetensi_keahlian'];?>" required/>
                            </div>
                            <div class="form-group p-3">
                                <button type="submit" name ="submit" class="btn btn-success">simpan</button>
                            </div>
                            
                            </form>
                        </div>
                    </div>
                </div>

    </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; s.hilal</span>
                    </div>
                </div>
            </footer>
            

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