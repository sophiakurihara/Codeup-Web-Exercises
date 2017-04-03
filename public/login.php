<?php
	var_dump($_POST);
	$failed = "";

	if(!empty($_POST)) {
		$user = isset($_POST['user']) ? $_POST['user'] : "";
		$pass = isset($_POST['pass']) ? $_POST['pass'] : "";

		if($user == "guest" && $pass == "password") {
			header("Location: http://codeup.dev/authorized.php");
			exit;
		} else {
			$failed = "Login failed. Please try again";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		
		<meta charset="utf-8">
	</head>
	<body>
		<div class="container">
			<h2>Please enter username and password:</h2>
			<p><?= $failed ?></p>
		</div>
		<form method="POST">
			<label>Username</label>
			<input type="text" name="user"><br>
			<label>Password</label>
			<input type="text" name="pass"><br>
			<input type="submit">
		</form>
	</body>
</html>