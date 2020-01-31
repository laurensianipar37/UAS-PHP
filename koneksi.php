<?php
$namaserver = "localhost";
$namadatabase = "yais";
$username = "root";
$password = "";

$koneksi = mysqli_connect($namaserver, $username, $password, $namadatabase);

if(!$koneksi){
	die ("koneksi gagal: ". mysqli_connect_error());
	
}

?>