<?php
session_start();

if(!isset($_SESSION['logged_in_user']) || $_SESSION['logged_in_user'] != "guest") {
	header("Location: http://codeup.dev/login.php");
	die();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Authorization Page</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Authorized</h1>
		<h3>Currently: <?= $_SESSION['logged_in_user'] ?></h3>
		<p><a href="/logout.php">Logout</a></p>
	</body>
</html>