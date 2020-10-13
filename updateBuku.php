<?php
include 'connection.php';
$id = $_GET['id'];
$call = mysqli_query($con, "SELECT * from buku WHERE buku_id = $id");
$row = mysqli_fetch_array($call);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Artikel</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<form method="post" action="updateBukuController.php">
					<legend>Form Update Artikel</legend>
					<input type="text" class="form-control" name="id" value="<?php echo $row['buku_id'];?>" hidden>
					<div class="form-group">
						<label for="">Judul</label>
						<input type="text" class="form-control" placeholder="Input field" name="judul" value="<?php echo $row['judul'];?>">
					</div>
					<div class="form-group">
						<label for="">Penulis</label>
						<input type="text" class="form-control" placeholder="Input field" name="penulis" value="<?php echo $row['penulis'];?>">
					</div>
					<div class="form-group">
						<label for="">Isi Artikel</label>
						<input type="text" class="form-control" placeholder="Input field" name="artikel" value="<?php echo $row['artikel'];?>">
					</div>
					<div class="form-group">
						<label for="">Tahun Post Artikel</label>
						<input type="text" class="form-control" placeholder="Input field" name="tahun" value="<?php echo $row['tahun_terbit'];?>">
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
