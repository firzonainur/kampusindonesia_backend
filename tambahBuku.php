<!DOCTYPE html>
<html>
<head>
	<title>Tambah Buku</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<form method="post" action="insertBukuController.php">
					<legend>Form Tambah Artikel</legend>
					<div class="form-group">
						<label for="">Judul</label>
						<input type="text" class="form-control" placeholder="Input field" name="judul">
					</div>
					<div class="form-group">
						<label for="">Penulis</label>
						<input type="text" class="form-control" placeholder="Input field" name="penulis">
					</div>
					<div class="form-group">
						<label for="">Isi Artikel</label>
						<input type="text" class="form-control" placeholder="Input field" name="artikel">
					</div>
					<div class="form-group">
						<label for="">Tahun Post Artikel</label>
						<input type="text" class="form-control" placeholder="Input field" name="tahun">
					</div>
					<button type="submit" class="btn btn btn-primary">Tambahkan</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
