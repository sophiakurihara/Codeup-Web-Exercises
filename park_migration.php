<?php

require_once 'db_connect.php';

$dropTable = 'DROP TABLE IF EXISTS national_parks';

$dbc->exec($dropTable);

$createTable = 'CREATE TABLE national_parks(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	location VARCHAR(150) NOT NULL,
	date_established DATE UNKNOWN, 
	area_in_acres DOUBLE(),
	PRIMARY KEY (id)
)';


$dbc->exec($createTable);

$addDescription = 'ALTER TABLE national_parks ADD description VARCHAR(500)';

$dbc->exec($addDescription);