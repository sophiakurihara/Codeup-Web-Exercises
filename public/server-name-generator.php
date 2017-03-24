<?php
	$adjectives = ['happy', 'grumpy', 'sleepy', 'dopey', 'tiny', 'silly',
		'sneezy', 'noisy', 'fluffy', 'ugly'];
	$nouns = ['puppy', 'kitty', 'fishy', 'bunny', 'birdy', 'bear', 'piggy',
		'turtle', 'pony', 'aardvark'];

	function randomAdjective($first) {
		$a = array_rand($first);
		$b = $first[$a];

		return($b);
	}

	function randomNoun($second) {
		$c = array_rand($second);
		$d = $second[$c];

		return($d);

	}
?>
<!-- HTML Document -->
<!DOCTYPE html>
<html>
	<head>
		<title>Server Name Generator</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC:700" rel="stylesheet">
		<style>
			body {
				background-image: url("/img/cute_animals.jpg");
				background-repeat: repeat-x;
			}
			h2 {
				margin-top: 0;
				margin-bottom: 65px;
				font-size: 45px;
			}

			h3 {
				font-size: 35px;
			}
			.container {
				font-size: 25px;
				font-family: 'Amatic SC', cursive;
				color: #fff;
				background-color: #000;
				border-radius: 15px;
				padding: 15px;
				position: absolute;
				left: 25%;
				top: 25%;
				width: 600px;
			}
		
			.result {
				font-size: 30px;
				text-align: center;
				color: #000;
				background-color: #80d4ff;
				border-radius: 10px;
				border-style: dotted;
				border-width: 5px;
				border-color: #eee;
				max-width: 75%;
				margin-bottom: 25px;
			}

			button {
				color: #fff;
				background-color: #000;
				border-radius: 8px; 
			}

			button:hover {
				color: #000;
				background-color: #fff;
			}


		</style>
	</head>
	<body><center>
		<div class="container">
			<section class="banner">
				<h2> Welcome to the random name generator!</h2>
			</section>
			<section class="heading">
				<h3>Your Random Name:</h3>
			</section>
			<section class="result">
				<?php echo randomAdjective($adjectives);?>
				<?php echo randomNoun($nouns);?>
			</section>
			<section>
				<button id="refresh" name="refresh">Generate</button>
			</section>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script>
		$(document).ready(function () {
			"use strict";

			$("#refresh").click(function () {
				location.reload(true);
			});
		});
		</script>
	</center></body>
</html>