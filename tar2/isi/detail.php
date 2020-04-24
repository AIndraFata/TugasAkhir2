	<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_odp = $_GET['id_odp'];

$sql = "SELECT * FROM odp WHERE id_odp = $id_odp";
$res = mysqli_query($kon,$sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Detail Pasien</h2>
			<hr class="bg-dark">
			<table><tr>
					<th>
					<table class="table table-bordered, bg-dark" style="color: white">
						<tr>
							<td width="100"><strong>Nama</strong></td>
							<td width="500"><?= $detail['nama'] ?></td>
						</tr>
						<tr>
							<td width="100"><strong>Nomor Telepon</strong></td>
							<td width="500"><?= $detail['telp'] ?></td>
						</tr>
						<tr>
							<td width="100"><strong>Alamat</strong></td>
							<td width="500"><?= $detail['alamat'] ?></td>
						</tr>
						<tr>
							<td width="100"><strong>Suhu</strong></td>
							<td width="500"><?= $detail['rata'] ?></td>
						</tr>
						<tr>
							<td width="100"><strong>Status</strong></td>
							<td width="500"><?= $detail['status'] ?></td>
						</tr>
						<tr>
							<td width="100"><strong>Keterangan</strong></td>
							<td width="500"><?= $detail['keterangan'] ?></td>
						</tr>
					</table>
					</th>
				</tr></table>
				<center><a href="index.php"><button type="submit" class="btn btn-primary">Kembali</button></a></center>
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>