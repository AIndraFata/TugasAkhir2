<?php 
include '../koneksi.php';

include '../aset/header.php';


$id_odp = isset($_GET['id_odp']) ? $_GET['id_odp'] : '';
$query = mysqli_query($kon,"SELECT * FROM odp WHERE id_odp=$id_odp");

$edit = mysqli_fetch_assoc($query);

?>
<html>
<head>
	<title>Edit Data Buku</title>
</head>
<body>
<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Edit Buku</h2>
			<hr class="bg-dark">
			<form action="proses-edit.php" method="post">
			<table class="bg-light">
				<tr>
					<th>
						<table class="table table-bordered">
						<input type="hidden" name="id_odp" value="<?= $edit['id_odp'] ?>">
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama" value="<?= $edit['nama'] ?>"></td>
						</tr>
						<tr>
							<td>Nomor Telepon</td>
							<td><input type="text" name="telp" value="<?= $edit['telp'] ?>"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><input type="text" name="alamat" value="<?= $edit['alamat'] ?>"></td>
						</tr>
						<tr>
							<td>Suhu 1</td>
							<td><input type="number" name="suhu1" value="<?= $edit['suhu1'] ?>"></td>
						</tr>
						<tr>
							<td>Suhu 2</td>
							<td><input type="number" name="suhu2" value="<?= $edit['suhu2'] ?>"></td>
						</tr>
						<tr>
							<td>Suhu 3</td>
							<td><input type="number" name="suhu3" value="<?= $edit['suhu3'] ?>"></td>
						</tr>
						<tr>
							<td>Suhu 4</td>
							<td><input type="number" name="suhu4" value="<?= $edit['suhu4'] ?>"></td>
						</tr>
						<tr>
							<td>Suhu 5</td>
							<td><input type="number" name="suhu5" value="<?= $edit['suhu5'] ?>"></td>
						</tr>s
						<tr>
							<td></td>
							<td><button type="submit" class="btn btn-success" name="simpan">Simpan</button>
							<button name="kembali" type="submit" class="btn btn-primary">Kembali</button></td>
						</tr>
						</table>
					</th>
				</tr>
			</table>
		</form>
</body>
</html>

<?php 
include '../aset/footer.php';
?>