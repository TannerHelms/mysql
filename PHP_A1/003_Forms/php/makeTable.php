<?php
		
		// sql to create table
		$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		reg_date TIMESTAMP
		)";
		
		if ($conn->query($sql) === TRUE) {
		    echo "<br>Table MyGuests created successfully<br>";
		} else {
		    echo "<br>Error creating table: " . $conn->error . "<br>";
		}
?>
