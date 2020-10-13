<?php 
include 'connection.php';
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$artikel = $_POST['artikel'];
$tahun = $_POST['tahun'];

$query = "INSERT INTO buku(judul,penulis,artikel,tahun_terbit) VALUES ('$judul','$penulis','$artikel','$tahun')";
$save = mysqli_query($con, $query);
if ($save) {?>
	<script>alert('Data berhasil ditambahkan');window.location.assign('./indexBuku.php')</script>
<?php }else{?>
	<script>alert('Gagal menambah data');window.location.assign('./indexBuku.php')</script>
<?php }
?>
