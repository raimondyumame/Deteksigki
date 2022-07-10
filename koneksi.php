<?php
	
	$servername = "localhost";
	$database = "db_smarthome";
	$username = "root";
	$password = "";
	$koneksi = mysqli_connect ($servername, $username, $password, $database);
	if ($koneksi!=false){
		echo "berhasil";
	} else {
		echo "gagal";}
?>