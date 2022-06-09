<?php 
    include 'app/header.php';
    include "../koneksi.php";
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

                    <h1 class="h3 mb-2 text-gray-800">Daftar Siswa</h1>
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Siswa SMK Bina Wisata Lembang</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <?php
                               
                               // if(isset($_GET['pesan'])){
                                  //  $pesan= $_GET['pesan'];
                                   // if($pesan=="berhasil"){
                                       // echo'<div class="alert alert-success" role="alert">
                                       // Berhasil !
                                     // </div>';
                                    //}
                             //   } 
                            ?>
                            <a href="tambah_siswa.php" class="btn btn-success m-2">Tambah Data</a><br/>
                                <table class="table table-bordered" style="width: 1500px" id="dataTable" width="100%" cellspacing="0">
                                <?php
                                    $query="select *from siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas INNER JOIN spp ON siswa.id_spp=spp.id_spp";
                                    $result= mysqli_query($conn, $query);
                                    if(mysqli_num_rows($result)==0){
                                        echo '<center><tr><td colspan="8">TIDAK ADA DATA !!</td></tr></center>';
                                    }
                                    $no=1;
                                ?>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NISN</th>
                                            <th>NIS</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Kompetensi Keahlian</th>
                                            <th>Alamat</th>
                                            <th>No. Telp</th>
                                            <th>Tahun</th>
                                            <th>Nominal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                     while($data= mysqli_fetch_array($result)){
                                    ?>
                                        <tr>
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $data['nisn'];?></td>
                                            <td><?php echo $data['nis'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['nama_kelas'];?></td>
                                            <td><?php echo $data['kompetensi_keahlian'];?></td>
                                            <td><?php echo $data['alamat'];?></td>
                                            <td><?php echo $data['nomor_telepon'];?></td>
                                            <td><?php echo $data['tahun'];?></td>
                                            <td><?php echo $data['nominal'];?></td>
                                            <td>
                                                <a href="edit_siswa.php?id=<?php echo $data['id_siswa'];?>" class="btn btn-warning">Edit</a>
                                                <?php include 'app/modal_siswa.php'; ?>
                                                <a data-toggle="modal" data-target="#siswa-<?php echo $data['id_siswa']; ?>" class="btn btn-danger">Hapus</a>
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
                        <span>Copyright &copy; SPP Online 2021</span>
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