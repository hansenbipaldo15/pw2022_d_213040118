  <?php
    session_start();
    include "../koneksi.php";
    if(isset($_GET['nisn']) && isset($_GET['act'])){
        if($_GET['act']=='bayar'){
            $nisn = $_GET['nisn'];
            $id = $_GET['id'];
            $tanggal_bayar = date("Y-m-d");
            $nama_petugas = $_SESSION['nama_petugas'];
            $update = mysqli_query($conn, "UPDATE pembayaran SET tgl_bayar='$tanggal_bayar', nama_petugas='$nama_petugas', keterangan = 'Lunas' where  id_pembayaran= '$id'");
            header("Location:pembayaran.php");
        }elseif($_GET['act']=='batal'){
            $nisn = $_GET['nisn'];
            $id = $_GET['id'];
            $tanggal_bayar = '';
            $nama_petugas = '';
            $update = mysqli_query($conn, "UPDATE pembayaran SET tgl_bayar='$tanggal_bayar', nama_petugas='$nama_petugas', keterangan = 'Belum Lunas' where  id_pembayaran= '$id'");
            header("Location:pembayaran.php");
        }else{


        }
    }
  
  ?>