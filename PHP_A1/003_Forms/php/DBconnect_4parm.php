<?php
    $servername = "localhost";
		$username = "root";
		$password = "toor";
		$dbname = "DBa1";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
    		die("<br>Connection failed: " . $conn->connect_error . "<br>");
		} 
		echo "<br>Connected successfully using the 4 parm method<br>";
?>