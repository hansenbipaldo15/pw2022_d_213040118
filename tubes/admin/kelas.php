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

                    <h1 class="h3 mb-2 text-gray-800">Daftar Kelas</h1>
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kelas SMK Bina Wisata Lembang</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            
                            <a href="tambah_kelas.php" class="btn btn-success">Tambah Data</a><br/>
                            
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <?php
                                        $query="select * from kelas";
                                        $result= mysqli_query($conn, $query);
                                        if(mysqli_num_rows($result)==0){
                                            echo '<center><tr><td colspan="8">TIDAK ADA DATA !!</td></tr></center>';
                                        }
                                        $no=1;
                                    ?>
                                    
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kelas</th>
                                            <th>Kompetensi Keahlian</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while($data= mysqli_fetch_array($result)){
                                        ?>
                                        <tr>
                                          <td><?php echo $no;?></td>
                                              <td><?php echo $data['nama_kelas'];?></td>
                                              <td><?php echo $data['kompetensi_keahlian'];?></td>
                                              <td>
                                                  <a href="edit_kelas.php?id=<?php echo $data['id_kelas'];?>" class="btn btn-warning">Edit</a>
                                                  <?php include 'app/modal_kelas.php'; ?>
                                                 <a data-toggle="modal" data-target="#kelas-<?php echo $data['id_kelas'];?>" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php
                                     $no++;
                                     }
                                    ?>
                                    </tbody>
                                </table>
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