<?php
include 'connection.php';
$id = $_GET['id'];
$call = mysqli_query($con, "DELETE from buku WHERE buku_id = $id");

if ($call) {?>
	<script>alert('Data berhasil dihapus');window.location.assign('./indexBuku.php')</script>
<?php }else{?>
	<script>alert('Gagal menghapus data');window.location.assign('./indexBuku.php')</script>
<?php }
?>
