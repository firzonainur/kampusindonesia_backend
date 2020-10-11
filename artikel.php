<?php
session_start();
if($_SESSION['status']!="login"){
	header("location:login.php?pesan=Login untuk mengakses!");
}
	
$connect = mysqli_connect("localhost","root","","kampusindonesia"); 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
} ?>
	
	
<!DOCTYPE html>
<html lang="en">
 	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Kampus Indoensia</title>
    </head>

    <body>
	<a href="dashboard.php"><button class="">Upload Artikel</button><br></a><br>
			<table border="1" cellpadding="10">
			<tr>
				<th width="20%">Gambar</th>
				<th width="20%">Judul</th>
				<th width="60%">Text</th>
			</tr>
			
			<?php 
			$data = mysqli_query($connect,"select * from artikel");
			while($d = mysqli_fetch_array($data)){ ?>				
			<tr>
				<td align="center" ><img src="uploads/<?php echo $d['gambar'] ?>" width="150" height="150"></td>
				<td align="justify" valign="top"><?php echo $d['judul']; ?></td>
				<td align="justify" valign="top"><?php echo $d['text']; ?></td>				
			</tr>
			<?php
			} ?>			
		</table><br>  
	<a href="koneksi/logout.php"><button>Logout</button><br></a>
	</body>
</html>
