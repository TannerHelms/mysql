<?php
$servername = "localhost";
$username = "root";
$password = "toor";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
	die("<br>Connection failed: " . $conn->connect_error . "<br>");
} 
echo "Connected successfully using the 3 parm method<br>";
?>