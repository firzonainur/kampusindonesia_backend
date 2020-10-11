<?php 
require "function.php";


if (isset($_POST["submit"])) {
	

	if (tambah($_POST)>0) {
		echo "
		<script>
			alert('Anda berhasil menambahkan artikel !');
			document.location.href = 'dashboard.php';
		</script>
		";
	}else{
		echo "
		<script>
			alert('Artikel gagal ditambahkan !');
			document.location.href = 'dashboard.php';
		</script>
		";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Kampus Indonesia-Dashboard</title>
	<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #00BFFF;
  color: white;
}
</style>
</head>
<body>
<h1>DASHBOARD</h1>
<div class="topnav">
  <a class="active" href="dashboard.php">Dashboard</a>
  <a href="artikel.php">Artikel</a>
  <a href="login.php">Logout</a>
</div>

<form action="" method="post" enctype="multipart/form-data">
<div style="padding-left:16px">
<ul>
	<li>
		<label for="judul_artikel">Judul Artikel : </label>
		<input type="text" name="judul_artikel" id="judul_artikel" size="100" required>
	</li>
	<br>
	<li>
		<label for="teks_artikel">Isi Artikel : </label>
		<br>
		<textarea id="teks_artikel" name="teks_artikel" rows="25" cols="150" required>
  		</textarea>
	</li>
	<br>
	<li>
		<label for="gambar_artikel">Gambar : </label>
		<input type="file" name="gambar_artikel" id="gambar_artikel">

	</li>
	<br>
	<li>
		<button type="submit" name="submit">Input Artikel</button>
	</li>
</ul>
</div>	

</form>


</body>
</html>