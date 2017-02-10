<!DOCTYPE html>
<html>
	<head>
		<title>User Registration</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
	<form method="POST" action="/user_registration.php" enctype="multipart/form-data">
		<h2>Please enter your information:</h2>
		<label for="first">First Name</label>
		<input type="text" name="first" id="first" autofocus>
		<label for="last">Last Name</label>
		<input type="text" name="last" id="last">
		<p>
			<label for="email">Email Address</label>
			<input type="text" name="email" id="email">
			<label for="email_confirm">Confirm Email Address</label>
			<input for="text" name="email_confirm" id="email_confirm">
		</p>
		<p>
			<label for="user">Username</label>
			<input type="text" name="user" id="user">
		</p>
		<p>
			<label for="pass">Password</label>
			<input type="password" name="pass" id="pass">
			<label for="pass_confirm">Confirm Password</label>
			<input type="password" name="pass_confirm" id="pass_confirm">
		</p>
		<p>
			Upload a profile picture:
		</p>
		<p>
			<input type="file" name="fileToUpload" id="fileToUpload">
    		<input type="submit" value="Upload Image" name="submit">
		</p>

		<p>
			<label for="news">Sign me up for your newsletter!</label>
			<input type="checkbox" name="news" id="news">
		</p>
		<p>
			<button type="submit" name="sign_up" id="sign_up">Sign Up</button>
		</p>
	</form>
	</body>
</html>