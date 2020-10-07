<?php 
include 'koneksi.php';
$judul = $_POST['judul'];
$text = $_POST['text'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg');
$gambar = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($gambar, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:../dashboard.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$gambar;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$gambar);
		mysqli_query($koneksi, "INSERT INTO artikel VALUES(NULL,'$judul','$text','$xx')");
		header("location:../dashboard.php?alert=berhasil");
	}else{
		header("location:../dashboard.php?alert=gagal_ukuran");
	}
}
?>