<?php
include "koneksi.php";
	$ID_user = $_POST['id_user'];
	$ID_kegiatan = $_POST['id_kegiatan'];
	$Tanggal= $_POST['Tanggal'];

	
if (!empty($ID_user) && !empty($ID_kegiatan) && !empty($Tanggal)){

$query = mysqli_query($koneksi,"INSERT INTO absensi(id_user,id_kegiatan,tanggal) values('$ID_user','$ID_kegiatan','$Tanggal')");	

	header ('location:absensi.php');
}
else
{
	header('location:absensi.php');
}
?>