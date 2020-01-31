<?php

include "koneksi.php";
$ID = $_GET['ID'];

if(!empty($ID)){

mysqli_query($koneksi,"DELETE FROM data_pelayan WHERE id ='$ID'");

	header('location:data_pelayan.php');
	
} else {
	header('location:data_pelayan.php');
}

?>