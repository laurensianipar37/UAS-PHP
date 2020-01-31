<?php

include "koneksi.php";
$Kode_pel = $_GET['Kode_pel'];

if(!empty($Kode_pel)){

mysqli_query($koneksi,"DELETE FROM pelayanan WHERE Kode_pel ='$Kode_pel'");

	header('location:pelayanan.php');
	
} else {
	header('location:pelayanan.php');
}

?>