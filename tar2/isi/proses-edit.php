<?php 

include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $id_odp     = $_POST['id_odp'];
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
            $keterangan ="Segeralah Menyerahkan diri Ke rumah sakit";
        }
        else if($rata >= 39 )
        {
            $status ="ODP";
            $keterangan ="Anda Dalam Pengawasan";
        }
        else if($rata >= 38 )
        {
            $status ="ODP";
            $keterangan ="Anda Dalam Pengawasan";
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

        
        $sql = "UPDATE odp SET  nama='$nama', 
                                telp='$telp', 
                                alamat='$alamat', 
                                suhu1='$suhu1', 
                                suhu2='$suhu2', 
                                suhu3='$suhu3',
                                suhu4='$suhu4',
                                suhu5='$suhu5',
                                rata='$rata',
                                status='$status', 
                                keterangan ='$keterangan' WHERE id_odp = $id_odp";

    	$res = mysqli_query($kon, $sql);
        var_dump($res,$_POST);
    	$count = mysqli_affected_rows($kon);

}

if($res>0){
            header("location: ../isi/index.php");
			// echo "<script>alert('Data Berhasil di Tambah.');window.location='index.php';</script>";
}else{
	       header("location: edit.php");
}

if(isset($_POST["kembali"])){
header("location: index.php");
}

?>