<?php
session_start();

function clearSession() {
	session_unset();

	session_regenerate_id();

	session_destroy();

	session_start();
}

clearSession();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Logout</title>
	</head>
	<body>
		<h1>You have logged out of your profile.</h1>
		<p><a href="/login.php">Click here</a> to log back in!</p>
	</body>
</html>