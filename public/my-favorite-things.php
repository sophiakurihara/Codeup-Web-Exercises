<?php
$favoriteThings = ['Bean (not a thing, but my puppy.)', 'My guitars', 'My MacBook', 'My bed', 'FOOD'];
?>
<!-- HTML Document -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>My Favorite Things</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC:700" rel="stylesheet">

		<style>

		body {
			position: absolute;
			left: 35%;
			top: 15%;
		}
		h2 {
			font-size: 50px;
		}

		h3 {
			font-size: 150%;
		}
		h2, h3 {
			font-family: 'Amatic SC', cursive;
		}
		</style>
	</head>
	<body><center>
		<h2>My Favorite Things?</h2>
		<h3>Some of them are...</h3>
		<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<tr>
					<th>#</th>
					<th>Thing</th>
				</tr>
			<?php foreach($favoriteThings as $key => $value): ?>
					<tr>
						<td><?= ($key+1); ?></td>
						<td><?= $value; ?></td>
					</tr>
			<?php endforeach; ?>
			</table>
		</div>
	</center></body>
</html>