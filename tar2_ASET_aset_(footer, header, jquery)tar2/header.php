<?php  
session_start();

if (!(isset($_SESSION['id_login']))) 
{  
  header("Location: http://localhost/tar2/login/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="http://localhost/tar2/aset/bootstrap/css/bootstrap.min.css" >
	<link rel="stylesheet" href="http://localhost/tar2/aset/fontawesome/css/all.min.css">
	<title>E-Karantina</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fas fa-book-reader text-white mr-2"></i>E-Karantina</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="http://localhost/tar2/isi/tentang.php">Tentang</a>
      <a class="nav-item nav-link" href="http://localhost/tar2/index.php">Logout</a>
    </div>
  </div>
</nav>
</body>
</html>