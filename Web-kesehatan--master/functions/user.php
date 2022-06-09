<?php 


function register_user($user,$pass){
	$user = escape($user);
	$pass = escape($pass);
	$pass = md5($pass);
	$query = "INSERT INTO user (user,pass,status) VALUES ('$user','$pass',0)";

	return run($query);
}

function register_cek_nama($user){
	global $link;
	$user = escape($user);
	$query = "SELECT * FROM user WHERE user = '$user' ";

	if ($result = mysqli_query($link,$query)) {
		if (mysqli_num_rows($result) == 0  ) return true;
		else return false;
	}
}

function cek_data($nama,$pass){
	global $link;

	$user = escape($nama);
	$pass = escape($pass);

	$pass = md5($pass);
	$query = "SELECT * FROM user WHERE user = '$user' && pass = '$pass' ";
	if ($result = mysqli_query($link,$query)) {
		if (mysqli_num_rows($result) != 0) return true;
		else return false;
	}
}


function cek_status($user){
	global $link;
	$user = escape($user);


	$query = "SELECT status FROM user WHERE user = '$user' ";

	if ($result = mysqli_query($link,$query)) {
		while($row = mysqli_fetch_assoc($result)){
			$status = $row['status'];
		}

		return $status;
	}
}




 ?>