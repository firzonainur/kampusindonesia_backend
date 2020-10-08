<?php
	include 'koneksi/koneksi.php';  
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
	<h2 style="text-align: center;">Upload Artikel</h2>
	<table class="table table-bordered">
			<tr>
				<th width="20%">Gambar</th>
				<th width="20%">Judul</th>
				<th width="60%">Text</th>
			</tr>
			
			<?php 
			$data = mysqli_query($koneksi,"select * from artikel");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><img src="assets/uploads/<?php echo $d['gambar'] ?>" width="150" height="150"></td>
					<td><?php echo $d['judul']; ?></td>
					<td><?php echo $d['text']; ?></td>
					
				</tr>
				<?php
			}

			?>
			
		</table>

 </div> 

 
</body>
</html>
