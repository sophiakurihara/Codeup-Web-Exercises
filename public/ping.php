<?php
require_once 'functions.php';

function pageController() {
	$hits = [];

	if(inputHas('hit')) {
		$hits['count'] = inputGet('hit');
	} else {
		$hits['count'] = 0;
	}
	return $hits;
}

extract(pageController());
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PING</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/css/bootstrap.css">
		<style>
			body {
				background-image: url("/img/pingpong.jpg");
				background-repeat: no-repeat;
				background-position: center;
			}
			h1 {
				position: absolute;
				left: 45px;
			}
			.container {
				position: relative;
				left: 300px;
				top: 35px;
				margin-top: 150px;
			}
			.paddle>img {
				position: relative;
				width: 100px;
				height: 100px;
				margin-top: 50px;
			}
			.player>img {
				position: relative;
				width: 150px;
				height: 150px;
			}
		</style>
	</head>
	<body>
		<h1>Player 1</h1>
		<div class="container">
			<h2>HIT: <?= escape($count); ?></h2>
			<form method="GET" action="/pong.php">
				<button type="submit" name="hit" value="<?= escape($count) + 1 ?>">Hit</button>
				<button type="submit" name="miss">Miss</button>
		
			<div class="paddle">
				<img src="/img/paddlevector.png">
			</div>
			</form>
		</div>
		<div class="player">
			<img src="/img/pingpongplayer.jpg">
		</div>

	</body>
</html>