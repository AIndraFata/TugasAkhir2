<?php 
include '../koneksi.php';

$sql = "SELECT * FROM odp ORDER BY nama";

$res = mysqli_query($kon, $sql);

$odp = array();

while ($data = mysqli_fetch_assoc($res)) {
	$odp[] = $data;
}

include '../aset/header.php';
?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md">
		</div>
	</div>
</div>

<div class="card">
  	<div class="card-header">
  		<h2 class="card-title"><i class="fas fa-edit"></i>Data ODP</h2>

  	</div>
    <br>

    <center><div>
      <a href="tambah.php"><button type="submit" class="btn btn-primary" name="simpan">Tambah Data</button></a>
    </div></center>
    
    <center></center> 
    <div class="card-body">
  	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Nomor Telepon</th>
      <th scope="col">Alamat</th>
      <th scope="col">Suhu</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php  
    $no = 1;
    foreach ($odp as $o){ ?>
    	<tr>
    		<th scope="row"><?php $no ?></th>
    		<td><?= $o['nama'] ?></td>
    		<td><?= $o['telp'] ?></td>
    		<td><?= $o['alamat'] ?></td>
    		<td><?= $o['rata'] ?></td>
        <td><?= $o['keterangan'] ?></td>
    		<td>
    			<a href="detail.php?id_odp=<?php echo $o['id_odp']; ?>" class="badge badge-success">Detail</a>
          <a href="edit.php?id_odp=<?php echo $o['id_odp']; ?>" class="badge badge-warning">Edit</a>
				<a href="hapus.php?id_odp=<?php echo $o['id_odp']; ?>" class="badge badge-danger">Hapus</a>
			</td>
    	</tr>
    	<?php 
    		$no++;
    	}
    	?>
  </tbody>
</table>
    </div>
</div>
<br>
<?php
include '../aset/footer.php';
 ?>
