<?php 
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "kampus_indonesia");

$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

//cara menulis query
$check =mysqli_query($connect, "SELECT * FROM users");

if(!$check){
	echo mysqli_error($connect);
}


?>

<?php
while ($account = mysqli_fetch_assoc($check)) {

	if(isset($_POST["login"])){
	if ($_POST["username"]== $account["username"] && $_POST["password"] == $account["password"]) {
		header("Location: dashboard.php");
		exit;
	}else{
		$error = true;
	}
}

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Kampus Indonesia-Login</title>
</head>
<body>
<h1>Anda sudah masuk di form login</h1>
<ul>
<form action="" method="post">
	<li>
		<label for="username">Username:</label> <input type="text" name="username" id="username">
	</li>
	<li>
		<label for="password">Password:</label><input type="Password" name="password" id="password">
	</li>
	<li>
		<button type="submit" name="login">Login</button>
	</li>
	<li>
		<?php if(isset($error)){ ?>
			<p style="color: red">Username atau Password anda salah!</p>
		<?php } ?>
	</li>
</form>
</ul>
</body>
</html>