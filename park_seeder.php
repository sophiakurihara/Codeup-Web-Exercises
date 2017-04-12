<?php

require_once 'db_connect.php';

$clearTable = 'TRUNCATE national_parks';

$dbc->exec($clearTable);

$insertData = [
	['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => 48995.91, 
		'description' => 'Covering most of Mount Desert Island and other coastal islands, Acadia features the tallest mountain on the Atlantic coast of the United States, granite peaks, ocean shoreline, woodlands, and lakes.
						There are freshwater, estuary, forest, and intertidal habitats.'],
	
	['name' => 'American Samoa', 'location' => 'American Samoa', 'date_established' => '1988-10-31', 'area_in_acres' => 8256.67, 
		'description' => 'The southernmost national park is on three Samoan islands and protects coral reefs, rainforests, volcanic mountains, and white beaches.
							The area is also home to flying foxes, brown boobies, sea turtles, and 900 species of fish.'],
	
	['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1971-11-12', 'area_in_acres' => 76678.98, 
		'description' => '1,585,718	This site features more than 2,000 natural sandstone arches, with some of the most popular arches in the park being Delicate Arch, Landscape Arch and Double Arch.
							Millions of years of erosion have created these structures located in a desert climate where the arid ground has life-sustaining biological soil crusts and potholes that serve as natural water-collecting basins.
							Other geologic formations include stone pinnacles, fins, and balancing rocks.'],
	
	['name' => 'Bad Lands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => 242755.94, 
		'description' => '996,263	The Badlands are a collection of buttes, pinnacles, spires, and mixed-grass prairies. The White River Badlands contain the largest assemblage of known late Eocene and Oligocene mammal fossils.
									The wildlife includes bison, bighorn sheep, black-footed ferrets, and prairie dogs.'],
	
	['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => 801163.21, 
		'description' => '388,290	Named for the prominent bend in the Rio Grande along the US–Mexico border, this park encompasses a large and remote part of the Chihuahuan Desert. Its main attraction is backcountry recreation in the arid Chisos Mountains and in canyons along the river.
									A wide variety of Cretaceous and Tertiary fossils as well as cultural artifacts of Native Americans also exist within its borders.'],
	
	['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-06-28', 'area_in_acres' => 172971.11, 
		'description' => 'Located in Biscayne Bay, this park at the north end of the Florida Keys has four interrelated marine ecosystems: mangrove forest, the Bay, the Keys, and coral reefs.
							Threatened animals include the West Indian manatee, American crocodile, various sea turtles, and peregrine falcon.'],
	
	['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_established' => '1999-10-21', 'area_in_acres' => 30749.75, 
		'description' => 'The park protects a quarter of the Gunnison River, which slices sheer canyon walls from dark Precambrian-era rock. The canyon features some of the steepest cliffs and oldest rock in North America, and is a popular site for river rafting and rock climbing.
							The deep, narrow canyon is composed of gneiss and schist which appears black when in shadow.'],

	['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' => '1928-02-25', 'area_in_acres' => 35835.08, 
		'description' => 'Bryce Canyon is a geological amphitheater on the Paunsaugunt Plateau with hundreds of tall, multicolored sandstone hoodoos formed by erosion.
							The region was originally settled by Native Americans and later by Mormon pioneers.'],

	['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1964-09-12', 'area_in_acres' => 337597.83, 
		'description' => 'This landscape was eroded into a maze of canyons, buttes, and mesas by the combined efforts of the Colorado River, Green River, and their tributaries, which divide the park into three districts.
							The park also contains rock pinnacles and arches, as well as artifacts from Ancient Pueblo peoples.'],

	['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' => '1971-12-18', 'area_in_acres' => 241904.26, 
		'description' => 'The Waterpocket Fold is a 100-mile (160 km) monocline that exhibits the earths diverse geologic layers.
							Other natural features include monoliths, cliffs, and sandstone domes shaped like the United States Capitol.']
];

$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) 
			VALUES (:name, :location, :date_established, :area_in_acres, :description)";

$stmt = $dbc->prepare($query);

foreach ($insertData as $data) {
	$stmt->bindValue(':name', $data['name'], PDO::PARAM_STR);
	$stmt->bindValue(':location', $data['location'], PDO::PARAM_STR);
	$stmt->bindValue(':date_established', $data['date_established'], PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres', $data['area_in_acres'], PDO::PARAM_STR);
	$stmt->bindValue(':description', $data['description'], PDO::PARAM_STR);

	$stmt->execute();

}

// foreach ($insertData as $park) {
// 	$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) 
// 	VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

// 	$dbc->exec($query);

// 	echo 'Inserted ID:' . $dbc->lastInsertId() . PHP_EOL;
// }

