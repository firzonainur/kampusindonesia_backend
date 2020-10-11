<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">      
		<style>
            h1 {color:blue;}
            h3 {color:green;}
        </style>
		<title>Kampus Indoensia | LOGIN</title>
	</head>
	
	<body>
		<h1>KAMPUS INDONESIA</h1>	
		<h3>Login Admin</h3>
				
		<form action="koneksi/cek_login.php" method="post" onSubmit="return validasi()">		
			<label>Username:</label>
			<input type="text" name="username" placeholder="Masukkan username" required="required"><br><br>
			<label>Password:</label>
			<input type="password" name="password" placeholder="Masukkan password" required="required"><br><br>
			<input class="btn btn-primary" type="submit" value="Login" class="tombol">
		</form><br>
		<?php 
			if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "Login gagal! username dan password salah!";
			}else if($_GET['pesan'] == "logout"){
				echo "Anda telah berhasil logout";
			}else if($_GET['pesan'] == "belum_login"){
				echo "Maaf anda perlu login untuk mengakses halaman!";
			}
		} ?>
	</body>
</html>