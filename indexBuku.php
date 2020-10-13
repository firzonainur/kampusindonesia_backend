<?php  
include "connection.php";

$readdata = "SELECT * from Buku";
$data = mysqli_query($con, $readdata);
?>

<!DOCTYPE html>
<html>
<head>
	<title>List Artikel</title>
	<script type="text/javascript" src="datatables/media/js/jquery.js"></script>
	<script type="text/javascript" src="datatables/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="datatables/media/css/jquery.dataTables.css"></script>
	<script type="text/javascript" src="datatables/media/css/dataTables.bootstrap.css"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		thead{
			background-color: #AACAF4;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row" align="center">
			<div class="col-lg-12">
				<legend style="color: #7A91AF">List Artikel</legend>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" align="center">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Nomor Artikel</th>
							<th>Judul</th>
							<th>Penulis</th>
							<th>Isi Artikel</th>
							<th>Tahun Post Artikel</th>
							<th>Tindakan</th>
						</tr>
					</thead>
					<tbody>
					<?php while ($row = mysqli_fetch_array($data)){?>
						<tr>
							<td><?php echo $row['buku_id']?></td>
							<td><?php echo $row['judul']?></td>
							<td><?php echo $row['penulis']?></td>
							<td><?php echo $row['artikel']?></td>
							<td><?php echo $row['tahun_terbit']?></td>
							<td>
								<button class="btn btn-warning" onclick="window.location.href='updateBuku.php?id=<?php echo $row['buku_id']?>'">Update</button>
								<button class="btn btn-secondary" onclick="window.location.href='deleteBuku.php?id=<?php echo $row['buku_id']?>'">Delete</button>
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
				<button type="button" class="btn btn-primary" onclick="window.location.href='tambahBuku.php'">Tambah Artikel</button>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('.table').DataTable();
	});
</script>
</html>
