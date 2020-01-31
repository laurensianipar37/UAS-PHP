<?php

include "koneksi.php";
	$query = mysqli_query($koneksi,"select * from data_pelayan");
	while ($m = mysqli_fetch_array($query)){	
	}
?>


<h3> Data Pelayan</h3>
<a href = "input_data_pelayan.php"> Tambahkan data </a>
<table width="" border=1>
<?php

	echo "<tr>
	<th>NO</th>
	<th>ID</th>
	<th>Nama lengkap</th>
	<th>Tanggal Lahir</th>
	<th>Alamat</th>
	<th>No HP</th>
	<th>Status</th>
	<th>Kode Pelayanan</th>
	<th>Pilihan</th>
	</tr>";

?>
<?php

$i = 0;
$query = mysqli_query ($koneksi, "select * from data_pelayan order by id_user asc");
while ($m = mysqli_fetch_array($query)){
	
	$i++;
	



?>
<tr>
<td><?php print $i; ?> </td>
<td><?php print $m['ID']; ?> </td>
<td><?php print $m['nama']; ?> </td>
<td><?php print $m['tanggal']; ?> </td>
<td><?php print $m['alamat']; ?> </td>
<td><?php print $m['nohp']; ?> </td>
<td><?php print $m['status']; ?> </td>
<td><?php print $m['kode']; ?> </td>
<td><a href = "edit_data_pelayan.php?ID=<?php echo $m['id_user']; ?>">Edit</a> | <a href="hapus_data_pelayan.php?ID=<?php echo $m['id_user']; ?>">Hapus</a></td>
</tr>
<?php
}
?>



</table>