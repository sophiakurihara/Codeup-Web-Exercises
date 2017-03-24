<?php
$favoriteThings = ['Bean', 'guitar', 'MacBook', 'pillow', 'headphones'];
?>
<!-- HTML Document -->
<!DOCTYPE html>
<html>
	<head>
		<title>My Favorite Things</title>
		<link rel="stylesheet" href="/css/bootstrap.min.css">

		<style>

		body {
			position: absolute;
			left: 35%;
			top: 15%;
		}
		</style>
	</head>
	<body><center>
		<h2>My Favorite Things?</h2>
		<h3>Some of them are...</h3>
		<div class="table-responsive">
			<table class="table table-bordered table-condensed">
				<tr>
					<th>#</th>
					<th>Thing</th>
				</tr>
			<?php foreach($favoriteThings as $key => $value) {
				echo "<tr>
						<td>" . ($key+1) . "</td>
						<td>" . $value . "</td>
					</tr>";
			}?>
			</table>
		</div>
	</center></body>
</html>