<?php 
	$server = "localhost";
	$user = "root";
	$password = "";
	$nama_database = "db_bukutamu";
	$db = mysqli_connect($server, $user, $password, $nama_database);
	if(!$db){
		die("Gagal terhubung dengan database: " .)
	}
 ?>