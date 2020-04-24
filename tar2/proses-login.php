<?php  
session_start();
include 'koneksi.php';

if (isset($_POST['btnlogin'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT id_login, nama FROM login WHERE username='$username' AND password='$password'";
	$res = mysqli_query($kon,$sql);

	$count = mysqli_affected_rows($kon);

	if ($count == 1) {
		$data_login = mysqli_fetch_assoc($res);
		$_SESSION['id_login'] = $data_login['id_login'];
		$_SESSION['nama'] = $data_login['nama'];
		header("Location: http://localhost/tar2/isi/index.php");
	}else{
		header("Location: http://localhost/tar2/index.php");
	}
}

?>