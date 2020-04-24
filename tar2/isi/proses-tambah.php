<?php 

include '../koneksi.php';

if (isset($_POST['submit'])) {
	$nama 		= $_POST['nama'];
	$telp 		= $_POST['telp'];
	$alamat 	= $_POST['alamat'];
	$suhu1 		= $_POST['suhu1'];
	$suhu2 		= $_POST['suhu2'];
	$suhu3 		= $_POST['suhu3'];
	$suhu4 		= $_POST['suhu4'];
	$suhu5 		= $_POST['suhu5'];


        $jml=$suhu1+$suhu2+$suhu3+$suhu4+$suhu5;
        $rata=$jml/5;
        if($rata >= 40 )
        {
            $status ="Positif";
            $keterangan ="Segeralah Pergi Ke Rumah Sakit";
        }
        else if($rata >= 39 )
        {
            $status ="ODP";
            $keterangan ="Anda Dalam Pengawasan Pihak Medis";
        }
        else if($rata >= 38 )
        {
            $status ="ODP";
            $keterangan ="Anda Dalam Pengawasan Pihak Medis";
        }
        else if($rata >= 37 )
        {
            $status ="Waspada";
            $keterangan ="Waspada";
        }
        else if ($rata <= 36 )
        {
            $status ="Negatif";
            $keterangan ="Normal";
        }
}

$sql = "INSERT INTO odp (nama, telp, alamat, suhu1, suhu2, suhu3, suhu4, suhu5, rata, status, keterangan) VALUES ('$nama', '$telp', '$alamat', '$suhu1', '$suhu2', '$suhu3', '$suhu4', '$suhu5', '$rata', '$status', '$keterangan')";

	$res = mysqli_query($kon, $sql);

	$count = mysqli_affected_rows($kon);

		if($count){
			echo "<script>alert('Data Berhasil di Tambah.');window.location='index.php';</script>";
}else{
	header("location: tambah.php");
}
if(isset($_POST["kembali"])){
header("location: index.php");
	}
?>