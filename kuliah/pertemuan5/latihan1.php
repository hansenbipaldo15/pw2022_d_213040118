<!-- materi pertemuan 5 -->
<?php
// Pertemuan 5 - ARRAY
// Array adalah variabel yang dapat menyimpan banyak nilai sekaligus

// $hari1 = "Senin";
// $hari2 = "Selasa";

// $bulan1 = "Januari";
// $bulan2 = "Februari";

// // membuat Array
// $hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at"]; //versi baru
// $bulan = array("Januari", "Februari", "Maret"); //versi lama

// mencetak array
// menggunakan index, dimulai dari 0
// echo $hari[0];
// echo "<br>";
// echo $bulan[2];
// echo "<br>";

// menggunakan var_dump() atau print_r()
// ini hanya untuk debugging
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<hr>";

// mencetak untuk user
// menggunakan looping
// for($i = 0; $i < count($hari); $i++) {
//     echo $hari[$i];
//     echo "<br>";
// }
// echo "<hr>";

// menggunakan foreach
// pengulangan khusus ARRAY
// foreach($bulan as $bln) {
//     echo $bln;
//     echo "<br>";
// }
// echo "<hr>";

// memanipulasi array
// menambah 1 elemen di akhir
// $hari[] = "Jum'at";
// $hari[] = "Sabtu";
// print_r($hari);
// echo "<br>";
// $bulan[] = "April";
// $bulan[] = "Mei";
// print_r($bulan);

?>

<!-- video yt  -->

<?php
// array
// variabel yang dapat memiliki banyak data
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);

?>