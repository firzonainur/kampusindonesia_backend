<?php 
		
		$connect = mysqli_connect("localhost","root","","kampusindonesia"); 
		// Check connection
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		} 
 
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
	if($ukuran < 3145728){		
		$img = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../uploads/'.$img);
		mysqli_query($connect, "INSERT INTO artikel VALUES(NULL,'$img','$judul','$text')");
		header("location:../dashboard.php?alert=berhasil");
	}else{
		header("location:../dashboard.php?alert=gagal_ukuran");
	}
}
?>