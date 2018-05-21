
<html>
<head>
<title> My Phonebook</title>
<link rel="stylesheet" type="text/css" href="style.css" title="style" />
</head>


<?php 
require_once 'dbconnect.php'; 

	$name= $_POST ['name'];
	$password= $_POST ['password'];
	$email= $_POST ['emailid']; 
	$phoneno= $_POST ['phoneno'];

	$sql = "INSERT INTO `users` (`userid`, `username`, `password`, `emailid`, `phonenumber`) VALUES (NULL, '$name', '$password', '$email', '$phoneno')";

if (mysqli_query($conn, $sql)) {
    echo "Sign Up Successful";
	header("location: index.php");
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}	
?>
<html>
<body align="center">
<form action="login.php" method="post"><br><br>
<input class="submit" type="submit" name="" Value="Back"></form>
</body>
</html>
