<?php 

function tampilkanAll(){
	
	$query = "SELECT * FROM berita ORDER BY id DESC";

	return result($query);
}

function tampilkan(){
	
	$query = "SELECT * FROM berita ORDER BY id DESC LIMIT 3";

	return result($query);
}

function tampilkan_per_id($id){
	$query = "SELECT * FROM berita WHERE id = $id";
	
	return result($query);

}
function hasil_cari($cari){

	$query = "SELECT * FROM berita WHERE judul LIKE '%$cari%' ";

	return result($query);
}

function result($query){
	global $link;

	if ($result = mysqli_query($link,$query)) {
		return $result;
	}
}

function tambah_data($judul,$konten){
	$judul = escape($judul);

	$query = "INSERT INTO berita (judul,isi) VALUES ('$judul','$konten')";

	return run($query);
}
function edit_data($judul,$konten,$id){
	$judul = escape($judul);
	$konten = escape($konten);
	
	$query = "UPDATE berita SET judul='$judul', isi='$konten' WHERE id =$id ";

	return run($query);
}

function hapus_data($id){
	$query = "DELETE FROM berita WHERE id = '$id' ";
	return run($query);
}

function run($query){
	global $link;

	if (mysqli_query($link,$query)) return true;
	return false;

}


function exceprt($string){
	$string = substr($string,0,100);

	return $string . "...";
}
function escape($data){
	
	global $link;

	return mysqli_real_escape_string($link,$data);
}




 ?>