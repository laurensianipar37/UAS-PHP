<?php
include "koneksi.php";
	$ID = $_POST['ID'];
	$Nama_lengkap = $_POST['Nama_lengkap'];
	$Tgl_lahir = $_POST['Tgl_lahir'];
	$Alamat = $_POST['Alamat'];
	$No_Hp = $_POST['No_Hp'];
	$Status =$_POST['Status'];
	$Kode_Pelayanan = $_POST['Kode_pel'];
	
if (!empty($ID) && !empty($Nama_lengkap) && !empty($Tgl_lahir) && !empty($Alamat) && !empty($No_Hp) && !empty($Status) && !empty($Kode_Pelayanan)){

$query = mysqli_query($koneksi,"INSERT INTO data_pelayan(id,nama,tgl_lahir,alamat,no_hp,status,kode_pel) values('$ID','$Nama_lengkap','$Tgl_lahir','$Alamat','$No_Hp','$Status','$Kode_Pelayanan')");	

	header ('location:data_pelayan.php');
}
else
{
	header('location:data_pelayan.php');
}
?>