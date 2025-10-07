<?php

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_DATABASE');

$db = mysqli_connect($host, $user, $password, $database) or die("Ingen kontakt med database-serveren.");

?>