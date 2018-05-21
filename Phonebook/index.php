<?php
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['userSession'])=="") {
	header("Location: login1.php");
	exit;
}?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" title="style" /> <!--stylesheet-->
<title> My Phonebook</title>

</head>
<body align="center" >

<h1>Phonebook Example Using PHP and MySQL</h1>

<h2>Select an option</h2>

<form action="addcontact.php" method="post">
<input class="submit" type="submit" name="addcontact" Value="Add Contact"><br></form>

<form action="updcontact.php" method="post">
<input class="submit" type="submit" name="updcontact" Value="Update Contact"><br></form>

<form action="srchcontact1.php" method="post">
<input class="submit" type="submit" name="srchcontact" Value="Search Contact"><br></form>

<form action="remcontact.php" method="post">
<input class="submit" type="submit" name="remcontact" Value="Remove Contact"><br></form>

<form action="logout.php" method="post">
<input class="submit" type="submit" name="logout" Value="Logout"><br>
</form>

</body>
</html>
