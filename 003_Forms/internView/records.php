<?php
/*
Allows the user to both create new records and edit existing records
*/

// connect to the database
include("connect-db.php");

// creates the new/edit record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
function renderForm($first = '', $last ='', $email = '', $error = '', $id = '')
{ ?>
	
	












<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>
<?php
	if ($id != '') { echo "Edit Record";
	} else { echo "New Record";
	}
 ?>
</title>

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
<h1><?php
	if ($id != '') { echo "Edit Record";
	} else { echo "New Record";
	}
 ?></h1>
<h5><?php
	if ($error != '') {
		echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error . "</div>";
	}
 ?></h5>

<form action="" method="post">
<div>
<h5><?php if ($id != '') { ?></h5>
<h5></h5><input type="hidden" name="id" value="<?php echo $id; ?>" />
<p>ID: <?php echo $id; ?></p>
<?php } ?></h5>

<strong><h5>First Name: *</h4></strong> <input type="text" name="firstname" 
value="<?php echo $first; ?>"/><br/>
<strong><h5>Last Name: *</h4></strong> <input type="text" name="lastname"
value="<?php echo $last; ?>"/><br>
<strong><h5>E-email: *</h4></strong> <input type="text" name="email"
value="<?php echo $email; ?>"/>
<p><h5>* required</h5></h5></p>
<input type="submit" name="submit" value="Submit" />
</div>
</form>
</div>
</body>
</html>

<?php }

	/*

	EDIT RECORD

	*/
	// if the 'id' variable is set in the URL, we know that we need to edit a record
	if (isset($_GET['id']))
	{
	// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit']))
	{
	// make sure the 'id' in the URL is valid
	if (is_numeric($_POST['id']))
	{
	// get variables from the URL/form
	$id = $_POST['id'];
	$firstname = htmlentities($_POST['firstname'], ENT_QUOTES);
	$lastname = htmlentities($_POST['lastname'], ENT_QUOTES);
	$email = htmlentities($_POST['email'], ENT_QUOTES);

	// check that firstname and lastname are both not empty
	if ($firstname == '' || $lastname == '' || $email == '')
	{
	// if they are empty, show an error message and display the form
	$error = 'ERROR: Please fill in all required fields!';
	renderForm($firstname, $lastname, $email, $error, $id);
	}
	else
	{
	// if everything is fine, update the record in the database
	if ($stmt = $mysqli->prepare("UPDATE MyGuests SET firstname = ?, lastname = ?, email = ?
	WHERE id=?"))
	{
	$stmt->bind_param("sssi", $firstname, $lastname, $email, $id);
	$stmt->execute();
	$stmt->close();
	}
	// show an error message if the query has an error
	else
	{
	echo "ERROR: could not prepare SQL statement.";
	}

	// redirect the user once the form is updated
	header("Location: ../index.php");
	}
	}
	// if the 'id' variable is not valid, show an error message
	else
	{
	echo "Error!";
	}
	}
	// if the form hasn't been submitted yet, get the info from the database and show the form
	else
	{
	// make sure the 'id' value is valid
	if (is_numeric($_GET['id']) && $_GET['id'] > 0)
	{
	// get 'id' from URL
	$id = $_GET['id'];

	// get the record from the database
	if($stmt = $mysqli->prepare("SELECT id,firstname,lastname, email FROM MyGuests WHERE id=?"))
	{
	$stmt->bind_param("i", $id);
	$stmt->execute();

	$stmt->bind_result($id, $firstname, $lastname, $email);
	$stmt->fetch();

	// show the form
	renderForm($firstname, $lastname, $email, NULL, $id);

	$stmt->close();
	}
	// show an error if the query has an error
	else
	{
	echo "Error: could not prepare SQL statement";
	}
	}
	// if the 'id' value is not valid, redirect the user back to the view.php page
	else
	{
	header("Location: ../index.php");
	}
	}
	}

	/*

	NEW RECORD

	*/
	// if the 'id' variable is not set in the URL, we must be creating a new record
	else
	{
	// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit']))
	{
	// get the form data
	$firstname = htmlentities($_POST['firstname'], ENT_QUOTES);
	$lastname = htmlentities($_POST['lastname'], ENT_QUOTES);
	$email = htmlentities($_POST['email'], ENT_QUOTES);

	// check that firstname and lastname are both not empty
	if ($firstname == '' || $lastname == '' || $email == '')
	{
	// if they are empty, show an error message and display the form
	$error = 'ERROR: Please fill in all required fields!';
	renderForm($firstname, $lastname, $email, $error);
	}
	else
	{
	// insert the new record into the database
	if ($stmt = $mysqli->prepare("INSERT MyGuests (firstname, lastname, email) VALUES (?, ?, ?)"))
	{
	$stmt->bind_param("sss", $firstname, $lastname, $email);
	$stmt->execute();
	$stmt->close();
	}
	// show an error if the query has an error
	else
	{
	echo "ERROR: Could not prepare SQL statement.";
	}

	// redirec the user
	header("Location: ../index.php");
	}

	}
	// if the form hasn't been submitted yet, show the form
	else
	{
	renderForm();
	}
	}

	// close the mysqli connection
	$mysqli->close();
?>