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
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Siswa</h6>
                        </div>
                        <div class="card-body">
                        <form action="prosestambah_siswa.php" method="POST">
                             <div class="form-group">
                             <?php 
                                    $urutan=1;
                                    $query = mysqli_query($conn, "SELECT max(id_siswa) as id_siswa FROM siswa");
                                    $data = mysqli_fetch_array($query);
                                    $urutan = $data['id_siswa'];
                                    $urutan++;
                                    $urutan = sprintf("%03s", $urutan);
                             ?>    
                                <label for="exampleNisn">ID Siswa</label>
                                <input type="text" name="id_siswa" value="<?php echo $urutan;?>" class="form-control" id="exampleInputNisn" aria-describedby="nisnHelp" placeholder="<?php echo $urutan;?>" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="exampleNisn">NISN</label>
                                <input type="text" name="nisn" class="form-control" id="exampleInputNisn" aria-describedby="nisnHelp" placeholder="Masukan NISN" required/>
                            </div>
                            <div class="form-group">
                                <label for="exampleNis">NIS</label>
                                <input type="text" name="nis" class="form-control" id="exampleInputNis" aria-describedby="nisHelp" placeholder="Masukan NIS" required/>
                            </div>
                            <div class="form-group">
                                <label for="exampleNama">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputNama" aria-describedby="namaHelp" placeholder="Masukan nama" required/>
                            </div>
                            <div class="form-group">
                            <?php
                                $query = mysqli_query($conn, "select *from kelas");
                                ;
                            ?>
                                <label for="exampleFormControlSelect1">Pilih Kelas</label>
                                <select name ="kelas" class="form-control" id="exampleFormControlSelect1">
                                <?php
                                    while($result = mysqli_fetch_array($query)){
                                ?>
                                    <option value="<?php echo $result['id_kelas']?>"><?php echo $result['nama_kelas']?> - <?php echo $result['kompetensi_keahlian']?></option>
                                 <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleAlamat">Alamat</label>
                                <textarea name="alamat" class="form-control" id="exampleInputAlamat" aria-describedby="alamatHelp" placeholder="Masukan Alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleNotelp">No Telp.</label>
                                <input type="text" name="notelp" class="form-control" id="exampleInputNoTelp" aria-describedby="NoTelpHelp" placeholder="Masukan No Telp" required/>
                            </div>
                            <div class="form-group">
                            <?php
                               
                                $query = mysqli_query($conn, "select *from spp");
                                ;
                            ?>
                                <label for="exampleFormControlSelect1">Tahun Angkatan SPP</label>
                                <select name="spp" class="form-control" id="exampleFormControlSelect1">
                                <?php
                                    while( $result = mysqli_fetch_array($query)){
                                ?>
                                    <option value="<?php echo $result['id_spp']?>">Rp. <?php echo $result['nominal']?> - Thn <?php echo $result['tahun']?></option>
                                 <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleNotelp">Jatuh Tempo</label>
                                <label for="exampleFormControlSelect1">Tahun Angkatan SPP</label>
                                <select name="jatuh_tempo" class="form-control" id="exampleFormControlSelect1">
                                    <option value="2019-01-10">Thn 2019</option>
                                    <option value="2020-01-10">Thn 2020</option>
                                    <option value="2021-01-10">Thn 2021</option>
                                </select>
                            </div>
                            <div class="form-group p-3">
                                <button type="submit" name ="submit" class="btn btn-success">simpan</button>
                            </div>
                            
                            </form>
                        </div>
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