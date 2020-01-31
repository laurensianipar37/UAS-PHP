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
mysqli_query($koneksi,"UPDATE user SET id ='$ID',nama ='$Nama_lengkap',tgl_lahir='$Tgl_lahir',alamat='$Alamat',no_hp='$No_Hp',status='$Status',kode_pel='$Kode_Pelayanan' where id = '$ID'");

	header ('location:data_pelayan.php');
}
else{
header ('location:edit_data_pelayan.php');	
}	
?>