<?php  
include "connection.php";

$readdata = "SELECT * from user";
$data = mysqli_query($con, $readdata);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table width="500px" border="3">
		<thead>
			<tr>
				<td>ID User</td>
				<td>Username</td>
				<td>Password</td>
			</tr>
		</thead>
		<tbody>
			<?php 
			while ($row = mysqli_fetch_array($data)) {?>
				<tr>
					<td><?php echo $row['user_id']?></td>
					<td><?php echo $row['username']?></td>
					<td><?php echo $row['password']?></td>
				</tr>
			<?php }
			?>
		</tbody>
	</table>
</body>
</html>
