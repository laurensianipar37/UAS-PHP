<?php
session_start();

$level_form = ($_POST['level_form']);
$id_form = ($_POST['id_form']);
$password_form = ($_POST['pass_form']);

include 'koneksi.php';

$result = mysqli_query($koneksi, "select * from login where Level='$level_form' AND Id='$id_form' AND password='$password_form'");
$m = mysqli_fetch_array($result);

$cekdata = mysqli_num_rows($result);

if ($cekdata>0){

header('location:user.php');

}
else{
	echo "Invalid username or password";
}

?>
