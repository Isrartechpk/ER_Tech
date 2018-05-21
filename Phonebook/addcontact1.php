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

	$fname= $_POST ['fname'];
	$lname= $_POST ['lname'];
	$gender= $_POST ['gender']; 
	$contactno= $_POST ['contactno'];

	$sql = "INSERT INTO `contactinfo` (`ID`, `firstname`, `lastname`, `gender`, `contact`) VALUES (NULL, '$fname', '$lname', '$gender', '$contactno')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
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