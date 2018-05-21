<?php
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['userSession'])!="") {
	header("Location: login.php");
	exit;
}

if (isset($_POST['submit'])) {
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$email = $conn->real_escape_string($email);
	$password = $conn->real_escape_string($password);
	
	$query ="SELECT userid, emailid, password FROM users WHERE emailid='$email'"; //userid, email, password 
	
	$result = mysqli_query($conn, $query);
	
	$row= mysqli_fetch_assoc($result);

	$count = mysqli_num_rows($result);
	
	if (($password==$row['password']) && $count==1) {
		$_SESSION['userSession'] = $row['userid'];
		header("Location: index.php");
	} else {
		echo "Invalid Username or Password";
	}
	$conn->close();
	
}

?>
<html>
<head>
<title> My Phonebook</title>
<link rel="stylesheet" type="text/css" href="style.css" title="style" />
</head>
<body align="center">

<h1>Phonebook Example Using PHP and MySQL</h1>

<h3>Login or Sign Up</h3>

<form  method="post">

Email Address: <br><input class="input" type="text" name="email" Value=""><br><br>

Password: <br><input class="input" type="password" name="password" Value=""><br><br>

<input class="submit" type="submit" name="submit" Value="Login" ></form>
<h2>Don't have an Account?</h2>
<form  action="signup.php" method="post">
<input class="submit" type="submit" name="signup"Value="Sign Up">

</form>

</body></html>