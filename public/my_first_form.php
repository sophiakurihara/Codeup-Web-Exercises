<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>My First HTML Form</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<h3>User Login</h3>
		<form method="POST" action="/my_first_form.php">
    	<p>
        	<label for="username">Username</label>
        	<input id="username" name="username" type="text" placeholder="username" autofocus>
    	</p>
    	<p>
        	<label for="password">Password</label>
        	<input id="password" name="password" type="password" placeholder="password">
    	</p>
    	<p>
        	<button type="submit" name="login">Login</button> 
    	</p>
		</form>
		
		<h3>Search Duck Duck Go</h3>
		<form action="https://duckduckgo.com/" method="GET">
			<p>
				<label for="q">Search</label>
				<input type="text" name="q" id="q" placeholder="find anything">
			</p>
			<button type="submit">Find stuff!</button>
		</form>

		<h3>Compose an Email</h3>
		<form method="POST" action="/my_first_form.php">
			<p>
				<label for="to">To:</label>
				<input id="to" name="to" type="text" placeholder="recipient@email.com">
			</p>
			<p>
				<label for="from">From:</label>
				<input id="from" name="from" type="text" placeholder="sender@email.com">
 			</p>
 			<p>
 				<label for="subject">Subject:</label>
 				<input id="subject" name="subject" type="text" placeholder="Enter Subject Line Here">
 			</p>
 			<p>
 				<textarea id="body" name="body" rows="15" cols="60">Content Here</textarea>
 			</p>
			<p>
				<label for="copy_email">Send me a copy!</label>
				<input type="checkbox" name="copy_email" id="copy_email" value="yes">
			</p>
			<p>
 				<button type="submit" name="send">Send</button>
 			</p>
		</form>

		<h3>Multiple Choice Test</h3>
		<form method="POST" action="/my_first_form.php">
			<p>Which is the best animal?</p>
			<label>
				<input type="radio" name="q1" value="dog">
				Dog
			</label>
			<label>
				<input type="radio" name="q1" value="cat">
				Cat
			</label>
			<label>
				<input type="radio" name="q1" value="fish">
				Fish
			</label>
			<label>
				<input type="radio" name="q1" value="alpaca">
				Alpaca
			</label>

			<p>What's your fix?</p>
			<label>
				<input type="radio" name="q2" value="coffee">
				Coffee
			</label>
			<label>
				<input type="radio" name="q2" value="tea">
				Tea
			</label>
			<label>
				<input type="radio" name="q2" value="energy_drink">
				Energy Drink
			</label>
			<label>
				<input type="radio" name="q2" value="sports_drink">
				Sports Drink
			</label>

			<p>Favorite Color?</p>
			<label>
				<input type="radio" name="q3" value="black">
				Black
			</label>
			<label>
				<input type="radio" name="q3" value="blue">
				Blue
			</label>
			<label>
				<input type="radio" name="q3" value="red">
				Red
			</label>
			<label>
				<input type="radio" name="q3" value="green">
				Green
			</label>
			
			<p>
			<label for="instruments">Which instruments can you play?</label>
			<select id="instruments" name="instruments[]" multiple>
				<option value="guitar">Guitar</option>
				<option value="piano">Piano</option>
				<option value="bass">Bass</option>
				<option value="ukulele">Ukulele</option>
				<option value="none">None</option>
			</select>	
			</p>
			<p>
				<button type="submit" name="answers">Thanks!</button>
			</p>

			</form>

		<h3>Select Testing</h3>
		<form method="POST" action="/my_first_form.php">
			<p>
			<label for="html_question">Have you been enjoying learning about HTML?</label>
			<select id="html_question" name="html_question">
				<option value="0">No</option>
				<option value="1" selected>Yes</option>
			</select>
			</p>
		</form>

			<p>
				<button type="submit" name="answers">Thanks!</button>
			</p>

	</body>
</html>