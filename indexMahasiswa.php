<?php  
include "connection.php";

$readdata = "SELECT * from Mahasiswa";
$data = mysqli_query($con, $readdata);
?>

<!DOCTYPE html>
<html>
<head>
	<title>List Pengunjung</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		thead{
			background-color: #FFE3A1;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row" align="center">
			<div class="col-lg-12">
				<legend style="color: #E0AC48">Pengunjung Hari Ini</legend>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" align="center">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama</th>
							<th>Institusi</th>
							<th>Alamat</th>
							<th>Tahun</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php while ($row = mysqli_fetch_array($data)){?>
						<tr>
							<td><?php echo $row['nrp']?></td>
							<td><?php echo $row['nama']?></td>
							<td><?php echo $row['institusi']?></td>
							<td><?php echo $row['alamat']?></td>
							<td><?php echo $row['tahun']?></td>
							<td>
								<button class="btn btn-warning" onclick="window.location.href='updateMahasiswa.php?id=<?php echo $row['nrp']?>'">Update</button>
								<button class="btn btn-secondary" onclick="window.location.href='deleteMahasiswa.php?id=<?php echo $row['nrp']?>'">Delete</button>
							</td>
						</tr>
						<?php }
						?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" align="center">
				<button type="button" class="btn btn-primary" onclick="window.location.href='tambahMahasiswa.php'">Tambah Data</button>
			</div>
		</div>
	</div>
</body>
</html>
