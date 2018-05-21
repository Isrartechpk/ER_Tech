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


<?php 
require_once 'dbconnect.php'; 
	$id = $_POST['ID'];
	$fname= $_POST ['fname'];
	$lname= $_POST ['lname'];
	$gender= $_POST ['gender']; 
	$contactno= $_POST ['contactno'];

	$sql = "UPDATE `contactinfo` SET `firstname` = '$fname', `lastname` = '$lname', `gender` = '$gender', `contact` = '$contactno' WHERE `contactinfo`.`ID` = $id;";

if (mysqli_query($conn, $sql)) {
    echo "Record Updated successfully";
	//header("location: index.php");
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}	
?>
<html>
<body align="center">
<form action="index.php" method="post"><br><br>
<input class="submit" type="submit" name="" Value="Back"></form>
</body>
</html>