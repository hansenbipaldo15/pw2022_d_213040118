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

                    <h1 class="h3 mb-2 text-gray-800">Pembayaran SPP</h1>
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Cek NISN Siswa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="" method="POST">
                                    <div class="form-group">
                                    <label for="exampleNisn">Cari NISN</label>
                                    <input type="text" name="nisn" class="form-control" id="exampleInputNis" aria-describedby="nisnHelp" placeholder="Masukan NISN"  autofocus required/>
                                    </div>
                                    <div class="form-group">
                                    <button type="submit" name ="submit" class="btn btn-success">Cari</button>
                                    </div>
                                </form>    
                            </div> 
                        </div>
                    </div>
                  <?php

                    if(isset($_POST['submit'])){
                      $nisn = $_POST['nisn'];
                      $query = "select *from pembayaran where nisn='$nisn'";
                      $data = mysqli_query($conn, $query);
                      $result = mysqli_fetch_array($data);
                      if(mysqli_num_rows($data)==0){
                        echo '<div class="alert alert-danger" role="alert">
                        Maaf NISN yang anda masukan tidak terdaftar ! 
                      </div>';
                      }else{
                  ?>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pembayaran SPP</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-bordered" style="width: 1500px" id="dataTable" width="100%" cellspacing="0">
                              <?php
                                $query = "SELECT a.id_pembayaran, a.nisn, a.jatuh_tempo, a.bulan, a.tgl_bayar, a.jumlah_bayar, a.nama_petugas, a.keterangan, b.nama from pembayaran AS a INNER JOIN siswa as b ON a.nisn = b.nisn where a.nisn='$nisn'";
                                $result = mysqli_query($conn, $query);
                                if(mysqli_num_rows($result)==0){
                                  '<center><tr><td colspan="8">TIDAK ADA DATA !!</td></tr></center>';
                                }
                                $no = 1;
                              ?>
                              <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NISN</th>
                                            <th>Nama Siswa</th>
                                            <th>Jatuh Tempo</th>
                                            <th>Bulan</th>
                                            <th>Tanggal Bayar</th>
                                            <th>Jumlah Bayar</th>
                                            <th>Nama Petugas</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                </thead>
                                <tbody>
                                <?php
                                  while($data=mysqli_fetch_array($result)){

                                  
                                ?>
                                       <tr>
                                          <td><?php echo $no;?></td>
                                          <td><?php echo $data['nisn'];?></td>
                                          <td><?php echo $data['nama'];?></td>
                                          <td><?php echo $data['jatuh_tempo'];?></td>
                                          <td><?php echo $data['bulan'];?></td>
                                          <td><?php echo $data['tgl_bayar'];?></td>
                                          <td><?php echo $data['jumlah_bayar'];?></td>
                                          <td><?php echo $data['nama_petugas'];?></td>
                                          <?php
                                            if($data['keterangan']=='Belum Lunas'){
                                          ?>
                                            <td style="color:red;"><strong><?php echo $data['keterangan'];?></strong></td>
                                          <?php
                                          }else{
                                          ?>
                                             <td style="color:blue;"><strong><?php echo $data['keterangan'];?></strong></td>
                                          <?php
                                            }
                                          ?>
                                          
                                          <td>
                                              <?php
                                                  if($data['keterangan']=='Belum Lunas'){  
                                              ?>
                                              <a href="proses_pembayaran.php?nisn=<?php echo $data['nisn'];?>&act=bayar&id=<?php echo $data['id_pembayaran']?>" class="btn btn-primary">Bayar</a>
                                              <?php
                                                }else{
                                              ?>
                                                <a href="proses_pembayaran.php?nisn=<?php echo $data['nisn'];?> &act=batal&id=<?php echo $data['id_pembayaran']?>" class="btn btn-danger">Batal</a>
                                                <a href="../report2.php?nisn=<?php echo $data['nisn'];?> &act=cetak&id=<?php echo $data['id_pembayaran']?>&nama=<?php echo $data['nama_petugas']?>" class="btn btn-info">Cetak</a>
                                              <?php
                                                }
                                              ?>
                                          </td>
                                       </tr>
                                 <?php 
                                  $no++;
                                }?>      
                                </tbody>
                              </table>
                            </div> 
                        </div>
                    </div>
                    <?php
                     }
                    }
                    ?>
                </div>
            </div>
            

            
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Jalalludin Mulkhan</span>
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