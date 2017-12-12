<!DOCTYPE html>

<html>

	<head>

		<meta charset="UTF-8">
		<title>Full Stack Tanner H</title>

		<!-- CSS -->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" type="text/css" href="../css/forms.css">
		<link rel="stylesheet" type="text/css" href="../css/balls.css">

		<!--  JQuery -->
		<script src="../js/jquery-3.2.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="../js/forms.js"></script>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
		<style>
			body {
				background-image: url(" ../images/wood1.jpg");
			}
		</style>
	</head>

	<body>
		<div id="fullbody">
			<h1>Add Record</h1>
		<h4><?php
include 'DBconnect_4parm.php';
echo "<br><hr><br>";

$fname = $_POST["firstname"];
echo "First name: " . "$fname" . "<br>" ;

$lname = $_POST["lastname"];
echo "Last name: " . "$lname" . "<br>" ;

$email = $_POST["email"];
echo "E-mail: " . "$email" . "<br>" ;

echo "<br><hr><br>";

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
		VALUES ('$fname','$lname', '$email')";
if ($conn -> query($sql) === TRUE) {
	echo "<br>New single record created successfully<br>";
} else {
	echo "<br>Error: " . sql . "<br>" . $conn -> error . "<br>";
}
echo "<br>Closing DB connection<br>";
$conn -> close();
?></h4></div>
</body>
</html>