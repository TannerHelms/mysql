<?php

// server info
$server = 'localhost';
$user = 'root';
$pass = 'toor';
$db = 'DBa1';

/* Ops version
 * $servername = "DBa1root.db.9259277.47b.hostedresource.net";
 * $username = "DBa1root";
 * $password = "DBa1@toor";
 * $dbname = "DBa1root";
 */

// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

?>