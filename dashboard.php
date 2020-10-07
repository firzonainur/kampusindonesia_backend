<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Kampus Indoensia</title>
</head>
<body>
	<h2>Halaman Admin</h2>
	
	<br/>
 
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
	?>
 
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?></h4>
 
	<br/>
	<br/>
 
	<a href="koneksi/logout.php">LOGOUT</a>
 
 
</body>
</html>

