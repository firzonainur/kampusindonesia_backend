<?php 
session_start();
include 'connection.php';
$user = $_POST['username'];
$pass = md5($_POST['password']);
$query = mysqli_query($con, "SELECT * from user where username = '$user' and password = '$pass'");
$data = mysqli_fetch_array($query);

if ($user == $data['username'] && $pass == $data['password']) {
	$_SESSION["username"] = $data['username'];
	$_SESSION["iduser"] = $data['user_id'];
	header("location: welcome.php");
}else{?>
	<script>alert('Login failed! Check username and password.');window.location.assign('./login.php')</script>
<?php }
?>
