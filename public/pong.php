<?php
function pageController() {
	var_dump($_GET);

	$hits = [];

	if(isset($_GET['hit'])) {
		$hits['count'] = $_GET['hit'];
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
		<title>PONG</title>
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
				left: 1125px;
			}
			.container {
				position: relative;
				left: 700px;
				top: 35px;
			}
			.paddle>img {
				position: relative;
				width: 100px;
				height: 100px;
				margin-top: 50px;
			}
			.player>img {
				position: relative;
				left: 1120px;
				width: 150px;
				height: 150px;
				margin-top: -50;

			}
		</style>
	</head>
	<body>
		<h1>Player 2</h1>
		<div class="container">
			<h2>HIT: <?= $count; ?></h2>
			<form method="GET" action="/ping.php">
				<button type="submit" name="hit" value="<?= $count + 1 ?>">Hit</button>
				<button type="submit" name="miss">Miss</button>

			<div class="paddle">
				<img src="/img/paddlevector.png">
			</div>
			</form>
		</div>
		<div class="player">
			<img src="/img/pingpongplayer.jpg">
		</div
	</body>
</html>