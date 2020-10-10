<?php
/*
* author: Ach. Jailani leejungjay1124@gmail.com
* github: https://github.com/achjailani
*/
session_start();

include '../db/connection.php';

$email 	  = $_POST['email'];
$password = $_POST['password'];


$sql_email = mysqli_query($connect, "SELECT * FROM users WHERE email='$email'");
if(mysqli_num_rows($sql_email) > 0) {
	$result = mysqli_fetch_assoc($sql_email);
	if(password_verify($password, $result['password'])){
		$_SESSION['email'] = $_POST['email'];
		echo '<script language="javascript">alert("You logged in successfully!");window.location.href = "../../dashboard.php";</script>';
	} else {
		echo '<script language="javascript">alert("Failed! passswod is not valid.");window.location.href = "../../login.php";</script>';
	}
} else {
	echo '<script language="javascript">alert("Failed! email is not registered.");window.location.href = "../../login.php";</script>';
}


