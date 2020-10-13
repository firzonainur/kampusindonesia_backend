<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<form method="post" action="insertMahasiswaController.php">
					<legend>Form Tambah Mahasiswa</legend>
					<div class="form-group">
						<label for="">NRP</label>
						<input type="text" class="form-control" placeholder="7 digit nrp" name="nrp">
					</div>
					<div class="form-group">
						<label for="">Nama</label>
						<input type="text" class="form-control" placeholder="nama lengkap" name="nama">
					</div>
					<div class="form-group">
						<label for="">Institusi</label>
						<input type="text" class="form-control" placeholder="nama institusi lengkap" name="institusi">
					</div>
					<div class="form-group">
						<label for="">Alamat</label>
						<input type="text" class="form-control" placeholder="alamat lengkap" name="alamat">
					</div>
					<div class="form-group">
						<label for="">Tahun</label>
						<input type="number" class="form-control" placeholder="tahun masuk" name="tahun">
					</div>
					<button type="submit" class="btn btn btn-primary">Tambahkan</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
