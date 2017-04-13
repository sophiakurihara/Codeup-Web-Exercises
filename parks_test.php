<?php
require_once 'Park.php';

$parks = Park::all();

echo count($parks) . PHP_EOL;
?>