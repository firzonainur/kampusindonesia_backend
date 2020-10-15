<?php
include 'db/connection.php';

$title   = $_POST['title'];
$slug    = strtolower(implode('-', explode(' ', $_POST['title'])));
$content = htmlspecialchars($_POST['content']);

$sql_insert = "INSERT INTO articles (title, slug, content) VALUES('$title', '$slug', '$content')";

if(mysqli_query($connect, $sql_insert)){
	echo "Good";
} else {
	echo "Error: " . mysqli_error($connect);
}
