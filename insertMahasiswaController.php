<?php 
include 'connection.php';
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$institusi = $_POST['institusi'];
$alamat = $_POST['alamat'];
$tahun = $_POST['tahun'];

$query = "INSERT INTO mahasiswa(nrp,nama,institusi,alamat,tahun) VALUES ('$nrp','$nama','$institusi','$alamat','$tahun')";
$save = mysqli_query($con, $query);
if ($save) {?>
	<script>alert('Data berhasil ditambahkan');window.location.assign('./indexMahasiswa.php')</script>
<?php }else{?>
	<script>alert('Gagal menambah data');window.location.assign('./indexMahasiswa.php')</script>
<?php }
?>
