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
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data Petugas</h6>
                        </div>
                        <?php
                            $id = $_GET['id'];
                            $data = mysqli_fetch_array(mysqli_query($conn, "select *from petugas where id_petugas='$id'"));
                        ?>
                        <div class="card-body">
                        <form action="proses_edit_petugas.php" method="POST">
                             <div class="form-group">
                                <label for="exampleNisn">ID Petugas</label>
                                <input type="text" name="id_petugas" value="<?php echo $id;?>" class="form-control" id="exampleInputNisn" aria-describedby="nisnHelp" placeholder="<?php echo $id;?>" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="exampleNisn">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleInputNisn" aria-describedby="nisnHelp" value="<?php echo $data['username'];?>" placeholder="<?php echo $data['username'];?>" required/>
                            </div>
                            <div class="form-group">
                                <label for="exampleNis">Password</label>
                                <input type="text" name="password" class="form-control" id="exampleInputNis" aria-describedby="nisHelp" value="<?php echo $data['password'];?>" placeholder="<?php echo $data['password'];?>" required/>
                            </div>
                            <div class="form-group">
                                <label for="exampleNama">Nama Petugas</label>
                                <input type="text" name="nama_petugas" class="form-control" id="exampleInputNama" aria-describedby="namaHelp" value="<?php echo $data['nama_petugas'];?>" placeholder="<?php echo $data['nama_petugas'];?>" required/>
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
                        <span>Copyright &copy; Your Website 2020</span>
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