<<?php 
include 'connection.php';
$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$artikel = $_POST['artikel'];
$tahun = $_POST['tahun'];

$query = "UPDATE buku SET judul = '$judul', penulis = '$penulis', artikel = '$artikel', tahun_terbit = '$tahun' WHERE buku_id = '$id'";
$save = mysqli_query($con, $query);

if ($save) {?>
	<script>alert('Data berhasil diubah');window.location.assign('./indexBuku.php')</script>
<?php }else{?>
	<script>alert('Gagal menyimpan perubahan');window.location.assign('./indexBuku.php')</script>
<?php }
?>
