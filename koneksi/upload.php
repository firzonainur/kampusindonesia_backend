<?php 
include 'koneksi.php';
$judul = $_POST['judul'];
$text = $_POST['text'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:../dashboard.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$img = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../assets/uploads/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO artikel VALUES(NULL,'$judul','$text','$img')");
		header("location:../dashboard.php?alert=berhasil");
	}else{
		header("location:../dashboard.php?alert=gagal_ukuran");
	}
}
?>