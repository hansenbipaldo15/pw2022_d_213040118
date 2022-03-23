<?php
// $mahasiswa = [
// ["Aldi Muhammad R", "213040110", 
// "ramdani.aldi93@gmail.com", "teknik informatika"],
// ["Hansen Bipaldo Silitonga", "213040118", 
// "hansensorga@gmail.com", "teknik informatika"],
// ];

    //array associative
    //definisinya sama seperti array numerik, kecuali
    // key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "aldi muhammad r", 
    "nrp" => "213040110",
    "email" => "ramdani.aldi93@gmail.com",
    "jurusan" => "teknik informatika",
    "gambar" => "nomor.png"
],
[
    "nama" => "Hansen Bipaldo Silitonga", 
    "nrp" => "213040118",
    "email" => "hansensorga@gmail.com",
    "jurusan" => "teknik informatika",
    "gambar" => "hbs.jpg"
],
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1> Daftar Mahasiswa</h1>
    
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>nrp : <?= $mhs["nrp"]; ?></li>
            <li>jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>