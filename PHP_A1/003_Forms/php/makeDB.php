<?php
		
		// Create database
		$sql = "DROP DATABASE IF EXISTS DBa1";
		if ($conn->query($sql) === TRUE) {
			echo "<br>Database dropped successfully<br>";
		} else {
			echo "Error dropping database: " . $conn -> error . "<br>";
		}
		$sql = "CREATE DATABASE DBa1";
		if ($conn->query($sql) === TRUE) {
			echo "<br>Database created successfully<br>";
		} else {
			echo "<br>Error creating database: " . $conn -> error . "<br>";
		}

?>