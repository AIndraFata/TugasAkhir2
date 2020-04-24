<?php  
include '../aset/header.php';
include '../koneksi.php';

?>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h1>Form Tambah Data</h1></center>
	
<center><table>
	<form action="proses-tambah.php" method="post">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Nomor Telepon</td>
		<td><input type="number" name="telp"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Suhu Hari Pertama</td>
		<td><input type="number" name="suhu1"></td>
	</tr>
	<tr>
		<td>Suhu Hari Kedua</td>
		<td><input type="number" name="suhu2"></td>
	</tr>
	<tr>
		<td>Suhu Hari Ketiga</td>
		<td><input type="number" name="suhu3"></td>
	</tr>
	<tr>
		<td>Suhu Hari Keempat</td>
		<td><input type="number" name="suhu4"></td>
	</tr>
	<tr>
		<td>Suhu Hari Kelima</td>
		<td><input type="number" name="suhu5"></td>
	</tr>
	<tr>
		<td></td>
		<td><button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>&nbsp&nbsp<button type="submit" class="btn btn-danger" name="kembali">Kembali</button></td>
	</tr>
</table>
</body>
</html>
<?php  
include '../aset/footer.php';
?>