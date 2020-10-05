<?php 
$judul="Kampus Indonesia";
$text1="SELAMAT DATANG DI WEBSITE KAMPUS INDONESIA";
$text2="Silahkan klik LOGIN untuk masuk ke form login";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul ?></title>
</head>
<body>
<h1><?php echo $text1 ?></h1>
<h2><?php echo $text2 ?></h2>
<input type="button" name="tombolLogin" value="LOGIN" onclick="window.location = 'login.php'">
</body>
</html>