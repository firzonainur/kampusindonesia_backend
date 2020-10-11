<?php 
session_start();		
		$connect = mysqli_connect("localhost","root","","kampusindonesia"); 
		// Check Connection
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}  
$username = $_POST['username'];
$password = $_POST['password']; 
$data = mysqli_query($connect,"select * from user where username='$username' and password='$password'"); 
$cek = mysqli_num_rows($data); 
if ($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:../dashboard.php");
}else{
	header("location:../login.php?pesan=gagal");
} ?>
