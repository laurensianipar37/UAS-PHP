<?php
include "koneksi.php";
	$Kode_pel = $_POST['Kode_pel'];
	$Pelayanan = $_POST['Pelayanan'];


if (!empty($Kode_pel) && !empty($Pelayanan)){
mysqli_query($koneksi,"UPDATE user SET Kode_pel ='$Kode_pel', Pelayanan ='$Pelayanan' where Kode_pel = '$Kode_pel'");

	header ('location:pelayanan.php');
}
else{
header ('location:edit_pelayanan.php');	
}	
?>