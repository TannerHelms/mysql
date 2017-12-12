<!DOCTYPE html>

<html>

	<head>

		<meta charset="UTF-8">
		<title>Full Stack Tanner H</title>

		<!-- CSS -->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" type="text/css" href="css/forms.css">
		<link rel="stylesheet" type="text/css" href="css/balls.css">

		<!--  JQuery -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/forms.js"></script>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
		<style>
			body {
				background-image: url(" images/wood1.jpg");
			}
		</style>
	</head>

	<body>
		<div id="fullbody">

			<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
				<button id="hellos" class="w3-bar-item w3-button w3-large" onclick="w3_close()">
					Close &times;
				</button>

				<a href="#" class="w3-bar-item w3-red button">Operational Links</a>

				<a href="http://westada.net/a1/gavinb" class="w3-bar-item w3-button">Gavin B</a>
				<a href="http://westada.net/a1/jpm" class="w3-bar-item w3-button">Joseph Mu</a>
				<a href="http://westada.net/a1/zacharys" class="w3-bar-item w3-button">Zachary S</a>

				<a href="http://westada.net/a1/bryanh" class="w3-bar-item w3-button">Bryan H</a>
				<a href="http://westada.net/a1/josephm" class="w3-bar-item w3-button">Joseph Mo</a>
				<a href="http://westada.net/a1/kenisons" class="w3-bar-item w3-button">Kenison S</a>

				<a href="http://westada.net/a1/chases" class="w3-bar-item w3-button">Chase S</a>
				<a href="http://westada.net/a1/davidb" class="w3-bar-item w3-button">David B</a>
				<a href="http://westada.net/a1/connorc" class="w3-bar-item w3-button">Connor C</a>

				<a href="http://westada.net/a1/peterc" class="w3-bar-item w3-button">Peter C</a>
				<a href="http://westada.net/a1/andrewh" class="w3-bar-item w3-button">Andrew H</a>

				<a href="http://westada.net/a1/jamesr" class="w3-bar-item w3-button">James R</a>
				<a href="http://westada.net/a1/alysec" class="w3-bar-item w3-button">Alyse C</a>
				<a href="http://westada.net/a1/michaelc" class="w3-bar-item w3-button">Michael C</a>

				<a href="http://westada.net/a1/heathers" class="w3-bar-item w3-button">Heather S</a>
				<a href="http://westada.net/a1/briellel" class="w3-bar-item w3-button">Brielle L</a>
				<a href="http://westada.net/a1/tannerh" class="w3-bar-item w3-button">Tanner H</a>
				<a href="http://westada.net/a1/richardm" class="w3-bar-item w3-button">Richard M</a>

				<a href="#" class="w3-bar-item w3-red button">Development Links</a>

				<a href="http://192.168.1.102/a1gavinb" class="w3-bar-item w3-button">Gavin B</a>
				<a href="http://192.168.1.103/a1jpm" class="w3-bar-item w3-button">Joseph Mu</a>
				<a href="http://192.168.1.104/a1zacharys" class="w3-bar-item w3-button">Zachary S</a>

				<a href="http://192.168.1.105/a1bryanh" class="w3-bar-item w3-button">Bryan H</a>
				<a href="http://192.168.1.106/a1josephm" class="w3-bar-item w3-button">Joseph Mo</a>
				<a href="http://192.168.1.107/a1kenisons" class="w3-bar-item w3-button">Kenison S</a>

				<a href="http://192.168.1.109/a1chases" class="w3-bar-item w3-button">Chase S</a>
				<a href="http://192.168.1.110/a1davidb" class="w3-bar-item w3-button">David B</a>
				<a href="http://192.168.1.111/a1connorc" class="w3-bar-item w3-button">Connor C</a>

				<a href="http://192.168.1.114/a1peterc" class="w3-bar-item w3-button">Peter C</a>
				<a href="http://192.168.1.115/a1andrewh" class="w3-bar-item w3-button">Andrew H</a>

				<a href="http://192.168.1.117/a1jamesr" class="w3-bar-item w3-button">James R</a>
				<a href="http://192.168.1.118/a1alysec" class="w3-bar-item w3-button">Alyse C</a>
				<a href="http://192.168.1.119/a1hunterf" class="w3-bar-item w3-button">Hunter F</a>
				<a href="http://192.168.1.120/a1michaelc" class="w3-bar-item w3-button">Michael C</a>

				<a href="http://192.168.1.121/a1heathers" class="w3-bar-item w3-button">Heather S</a>
				<a href="http://192.168.1.122/a1briellel" class="w3-bar-item w3-button">Brielle L</a>
				<a href="http://192.168.1.123/a1tannerh" class="w3-bar-item w3-button">Tanner H</a>
				<a href="http://192.168.1.124/a1richardm" class="w3-bar-item w3-button">Richard M</a>

			</div>
			<div>
				<button class="w3-button w3-red w3-xxlarge" onclick="w3_open()">
					&#9776;
				</button>
			</div>
			<h1 id="topH1">Yeah! We are starting *FULL STACK* !!!</h1>
			<h2>Created by tanner Helms/ period A1 </h2>
			<h3>Started 03 Nov 2017</h3>
			<div class="topnav">
				<a class="active" href="#home">Home</a>
				<a id="a1" href="#news">News</a>
				<a href="#contact">Contact</a>
				<a href="#about">About</a>
			</div>


			<hr>

			<h4 id="a1">... Click to reveal one of my FAV pics! ...</h4>
			<h5 id="a2" onclick="animationFunction()">... Click to start/stop some cool animation i made! ...</h5>

			<hr>
			<img id="F14" src="images/F14.jpg" alt="F14">

			<br>

			<br>

			<div id="formone">
				<div id="circleball">
					<div class="container">
						<div class="ball"></div>
						<div class="ball"></div>
						<div class="ball"></div>
						<div class="ball"></div>
						<div class="ball"></div>
						<div class="ball"></div>
						<div class="ball"></div>
					</div>
				</div>
				<form id="NameEmailForm" action="php/DBaddRecords.php" method="post">

					<h4 id="a1"> First Name: </h4>
					<br>
					<input type="text" name="firstname">
					<br>
					<h4 id="a1"> Last Name: </h4>
					<br>
					<input type="text" name="lastname">
					<br>
					<h4 id="a1"> E-mail: </h4>
					<br>
					<input type="text" name="email">
					<br>
					<br>
					<input id="click" type="submit">
					<input id="click" type="button" onclick="clearForm()" value="Clear form">
				</form>

			</div>
			<hr>

			<br>

			<h1>View Records (Intern Code Project)</h1>

			<p>
				<b>View All</b> | <a href="internView/view-paginated.php">View Paginated</a>
			</p>

			<?php
			// connect to the database
			include ('internView/connect-db.php');

			// get the records from the database
			if ($result = $mysqli -> query("SELECT * FROM MyGuests ORDER BY id")) {
				// display records if there are records to display
				if ($result -> num_rows > 0) {
					// display records in a table
					echo "<table border='1' cellpadding='10'>";

					// set table headers
					echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>E-mail</th><th></th><th></th></tr>";

					while ($row = $result -> fetch_object()) {
						// set up a row for each record
						echo "<tr>";
						echo "<td>" . $row -> id . "</td>";
						echo "<td>" . $row -> firstname . "</td>";
						echo "<td>" . $row -> lastname . "</td>";
						echo "<td>" . $row -> email . "</td>";
						echo "<td><a href='internView/records.php?id=" . $row -> id . "'>Edit</a></td>";
						echo "<td><a href='internView/delete.php?id=" . $row -> id . "'>Delete</a></td>";
						echo "</tr>";
					}

					echo "</table>";
				}
				// if there are no records in the database, display an alert message
				else {
					echo "No results to display!";
				}
			}
			// show an error if there is an issue with the database query
			else {
				echo "Error: " . $mysqli -> error;
			}

			// close database connection
			$mysqli -> close();
			?>

			<a href="internView/records.php">Add New Record</a>

			<hr>

			<script>
				function clearForm() {
					document.getElementById("NameEmailForm").reset();
				}
			</script>

			<script>
				function w3_open() {
					document.getElementById("mySidebar").style.display = "block";
				}

				function w3_close() {
					document.getElementById("mySidebar").style.display = "none";
				}
			</script>
	</body>

</html>