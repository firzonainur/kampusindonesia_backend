<?php 
	session_start();
	if($_SESSION['status']!="login"){
	header("location:login.php?pesan=belum_login");
} ?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Kampus Indoensia</title>
	</head>

	<body>          		
	<a href="artikel.php"><button>Lihat Artikel</button><br></a>
		<h3>Upload Artikel</h3>
		<form action="koneksi/upload.php" method="post" enctype="multipart/form-data">
			<label>Judul :</label>
			<input type="text" placeholder="Masukkan Judul" name="judul" required="required"><br><br>
			<label>Text :</label>
			<textarea style="resize:none;height:150px;"  name="text" required="required"></textarea><br><br>			
			<label>Gambar :</label>
			<input type="file" name="foto" required="required">
			<p style="color:red; font-size: 14px;">*file png, jpg, jpeg</p>			
			<input type="submit" name="" value="Simpan">
			<?php 
				if(isset($_GET['alert'])){
				if($_GET['alert'] == "berhasil"){
					echo "Upload berhasil!";
				}else if($_GET['alert'] == "gagal_ekstensi"){
					echo "Upload Gagal, Ektensi yang anda masukkan tidak didukung";
				}else if($_GET['alert'] == "gagal_ukuran"){
					echo "Upload Gagal, Ukuran file yang anda masukkan terlalu besar";
				}
			}
			?>
		</form>
	</body>
</html>
