<?php
require __DIR__ . '/../db_connect.php';

// select all from parks
$select = 'SELECT * FROM national_parks';

$statement = $dbc->query($select);

$parks = $statement->fetchAll(PDO::FETCH_ASSOC); 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>National Parks</title>
	</head>
	<body>
		<h1>National Parks</h1>

		<table>
			<tr>
				<th>Name</th>
				<th>Location</th>
				<th>Date Established</th>
				<th>Area in Acres</th>
			</tr>
			<?php foreach($parks as $park): ?>
			<tr>
				<td><?= $park['name'] ?></td>
				<td><?= $park['location'] ?></td>
				<td><?= $park['date_established'] ?></td>
				<td><?= $park['area_in_acres'] ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	</body>
</html>