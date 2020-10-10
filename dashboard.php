<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
		<title>Kampus Indoensia</title>
    </head>
    <body>
        
<div class="navbar">
  <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="dashboard.php" >Kampus Indonesia</a>	
                </div>
				<div>
                    <a  href="koneksi/logout.php">LOGOUT</a>	
                </div>

            </nav>
        </header>
 </div>
 <div class="sidebar">
  <div class="nav"></div>
  <a href="dashboard.php"><button class="btnt"><i style="margin-right: 5px" class="fa fa-home">Upload Artikel</i></button><br></a>
  <a href="artikel.php"><button class="btnt"><i style="margin-right: 5px" class="fa fa-home">Artikel</i></button><br></a>
 
 
 </div>
  <div class="boxx">
	<div class="container">
		<h2 style="text-align: center;">Upload Artikel</h2>
		<form action="koneksi/upload.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Judul :</label>
				<input type="text" class="form-control" placeholder="Masukkan Judul" name="judul" required="required">
			</div>
			<div class="form-group">
				<label>Text :</label>
				<textarea style="resize:none;height:200px;" class="form-control" name="text" required="required"></textarea>
			</div>
			<div class="form-group">
				<label>Gambar :</label>
				<input type="file" name="foto" required="required">
				<p style="color:red; font-size: 14px;">*file png, jpg, jpeg</p>
			</div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
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
	</div>

 </div> 

 
</body>
</html>
