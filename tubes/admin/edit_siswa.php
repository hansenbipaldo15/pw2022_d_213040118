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
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data Siswa</h6>
                        </div>
                        <?php
                            $id = $_GET['id'];
                            $data = mysqli_fetch_array(mysqli_query($conn, "select *from siswa where id_siswa='$id'"));
                        ?>
                        <div class="card-body">
                        <form action="proses_edit_siswa.php" method="POST">
                             <div class="form-group">
                                <label for="exampleNisn">ID Siswa</label>
                                <input type="text" name="id_siswa" value="<?php echo $id;?>" class="form-control" id="exampleInputNisn" aria-describedby="nisnHelp" placeholder="<?php echo $id;?>" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="exampleNisn">NISN</label>
                                <input type="text" name="nisn" class="form-control" id="exampleInputNisn" aria-describedby="nisnHelp" value="<?php echo $data['nisn'];?>" placeholder="<?php echo $data['nisn'];?>" required/>
                            </div>
                            <div class="form-group">
                                <label for="exampleNis">NIS</label>
                                <input type="text" name="nis" class="form-control" id="exampleInputNis" aria-describedby="nisHelp" value="<?php echo $data['nis'];?>" placeholder="<?php echo $data['nis'];?>" required/>
                            </div>
                            <div class="form-group">
                                <label for="exampleNama">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputNama" aria-describedby="namaHelp" value="<?php echo $data['nama'];?>" placeholder="<?php echo $data['nama'];?>" required/>
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
                                <input type="text" name="alamat" class="form-control" id="exampleInputAlamat" aria-describedby="alamatHelp" value="<?php echo $data['alamat'];?>"  placeholder="<?php echo $data['alamat'];?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleNotelp">No Telp.</label>
                                <input type="text" name="notelp" class="form-control" id="exampleInputNoTelp" aria-describedby="NoTelpHelp" value="<?php echo $data['nomor_telepon'];?>" placeholder="<?php echo $data['nomor_telepon'];?>" required/>
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
                            <!-- <div class="form-group">
                                <label for="exampleNotelp">Jatuh Tempo</label>
                                <label for="exampleFormControlSelect1">Tahun Angkatan SPP</label>
                                <select name="jatuh_tempo" class="form-control" id="exampleFormControlSelect1">
                                    <option value="2019-01-10">Thn 2019</option>
                                    <option value="2020-01-10">Thn 2020</option>
                                    <option value="2021-01-10">Thn 2021</option>
                                </select>
                            </div> -->
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