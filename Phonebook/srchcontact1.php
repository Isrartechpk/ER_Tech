<?php
require_once 'dbconnect.php'; 
if (isset($_SESSION['userSession'])!="") {
	header("Location: login.php");
	exit;
}
?>
<html>
	<head>
		<title> My Phonebook</title>
		<link rel="stylesheet" type="text/css" href="style.css" title="style" />
	</head>

	<body align="center">

		<h1>Phonebook Example Using PHP and MySQL</h1>

		<h3>Search Conact</h3>

		<form action="srchcontact2.php" method="post">

		First Name: <br><input class="input" type="text" name="fname" Value=""><br><br>

		Last Name: <br><input class="input type="text" name="lname" Value=""> <br><br>

		Gender: <br><input class="input type="text" name="gender" Value=""><br><br>

		Contact No:<br><input class="input type="text" name="contactno" Value=""><br><br>

		<input class="submit" type="submit" name="submit" Value="Search Contact" >
	
	</form>
</body></html>
