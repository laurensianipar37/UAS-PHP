<?php
include "koneksi.php";
	$Kode_pel = $_POST['Kode_pel'];
	$Pelayanan = $_POST['Pelayanan'];

	
if (!empty($Kode_pel) && !empty($Pelayanan)){

$query = mysqli_query($koneksi,"INSERT INTO pelayanan(Kode_pel,Pelayanan) values('$Kode_pel','$Pelayanan')");	

	header ('location:pelayanan.php');
}
else
{
	header('location:pelayanan.php');
}
?>