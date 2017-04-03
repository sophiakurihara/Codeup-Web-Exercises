<?php
	var_dump($_POST);
	session_start();

	function pageController() {
		$data = [];
	// set default classname and placeholders for login inputs
		$data['inputClass'] = "Please enter username and password:";
		$data['usernamePlaceholder'] = "Username";
		$data['background'] = "";

		if(isset($_SESSION['logged_in_user']) && $_SESSION['logged_in_user'] == "guest") {
			header("Location: http://codeup.dev/authorized.php");
			die();
		}

		if(!empty($_POST)) {
			$user = isset($_POST['user']) ? $_POST['user'] : "";
			$pass = isset($_POST['pass']) ? $_POST['pass'] : "";

		if($user == "guest" && $pass == "password") {
			$_SESSION['logged_in_user'] = $username;
			header("Location: http://codeup.dev/authorized.php");
			die();
		} else {
			$data['inputClass'] = "Login failed, please try again.";
			$data['usernamePlaceholder'] = "Username or password is incorrect";
			$data['background'] = "error";
		}
	}
	return $data;
}

extract(pageController());
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		
		<meta charset="utf-8">
	</head>
	<body>
		<div class="container">
			<h2>Welcome to your login page!</h2>
			<p><?= $inputClass ?></p>
		</div>
		<form method="POST">
			<label>Username</label>
				<input type="text" name="user" placeholder="<?= $usernamePlaceholder ?>" autofocus required><br>
			<label>Password</label>
				<input type="text" name="pass" placeholder="Password" required><br>
			<label>
				<input type="checkbox" name="stay_logged_in" value="1" checked>Stay logged in
			</label>
			<p><input type="submit"></p>
		</form>
	</body>
</html>