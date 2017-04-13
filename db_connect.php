<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parkspass');

$dbc = new PDO(
	'mysql:host='. DB_HOST .';dbname='. DB_NAME,
	DB_USER,
	DB_PASS
);

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $dbc;