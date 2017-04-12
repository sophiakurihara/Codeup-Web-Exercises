<?php

require_once 'db_connect.php';

$dropTable = 'DROP TABLE IF EXISTS national_parks';

$dbc->exec($dropTable);

$createTable = 'CREATE TABLE IF NOT EXISTS national_parks(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	location VARCHAR(150) NOT NULL,
	date_established DATE NOT NULL, 
	area_in_acres DOUBLE NOT NULL,
	description VARCHAR(500) NOT NULL,
	PRIMARY KEY (id)
)';

$dbc->exec($createTable);
?>