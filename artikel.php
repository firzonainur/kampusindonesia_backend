<?php 
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "kampus_indonesia");

$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
$artikelDB =mysqli_query($connect, "SELECT * FROM artikel");

if(!$artikelDB){
	echo mysqli_error($connect);
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Kampus Indonesia - Artikel</title>
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
<h1>ARTIKEL</h1>
<div class="topnav">
  <a class="active" href="artikel.php">Artikel</a>
  <a href="dashboard.php">Dashboard</a>
  <a href="login.php">Logout</a>
</div>
<?php while ( $row = mysqli_fetch_assoc($artikelDB)) { ?>
	<article>
	<tr>
		<td><center><img src="img/<?php echo $row["gambar_artikel"];?>" width="450" height="300"></center></td>
	</tr>

	<br>

	<tr>
		<td><h1><?php echo $row["judul_artikel"] ?></h1></td>
	</tr>

	<br>

	<tr>
		<td><?php echo $row["teks_artikel"] ?></td>
	</tr>
	<br>
	</article>
	
<?php } ?>

</body>
</html>