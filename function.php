<?php 
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "kampus_indonesia");

$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);


function tambah($data){
global $connect;

$judul_artikel = htmlspecialchars($_POST["judul_artikel"]);
	$teks_artikel = htmlspecialchars($_POST["teks_artikel"]);
	$gambar_artikel = upload();
	if(!$gambar_artikel){
		return false;
	}
	$query = "INSERT INTO artikel
			VALUES
			('','$judul_artikel','$teks_artikel','$gambar_artikel')
			";
	mysqli_query($connect, $query);

	return mysqli_affected_rows($connect);
}



function upload(){
	
$namaFile = $_FILES['gambar_artikel']['name'];
$ukuranFile = $_FILES['gambar_artikel']['size'];
$error = $_FILES['gambar_artikel']['error'];
$tmpName = $_FILES['gambar_artikel']['tmp_name'];


if($error === 4){
	echo "
	<script>
			alert('Anda belum memilih gambar !');
			document.location.href = 'dashboard.php';
	</script>
	";
	return false;
}

$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
$ekstensiGambar = explode('.', $namaFile);
$ekstensiGambar = strtolower(end($ekstensiGambar));
if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
	echo "
	<script>
			alert('Anda salah memilih file gambar !');
			document.location.href = 'dashboard.php';
	</script>
	";
	return false;
}

if ($ukuranFile > 5000000) {
	echo "
	<script>
			alert('Ukuran gambar terlalu besar !');
			document.location.href = 'dashboard.php';
	</script>
	";
	return false;
}

$namaFileBaru = uniqid();
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;

move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

return $namaFileBaru;











}


 ?>
