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
include 'dbconnect.php';
$sql="SELECT * from contactinfo";
$result = mysqli_query($conn, $sql);

echo "<table border='1' align='center'>
<tr><th>ID</th><th>First Name</th><th>Last name</th><th>Gender</th><th>Contact No.</th></tr>";
while ($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" .$row['ID']. "</td>";
	echo "<td>" .$row['firstname']. "</td>";
	echo "<td>" .$row['lastname']. "</td>";
	echo "<td>" .$row['gender']. "</td>";
	echo "<td>" .$row['contact']. "</td>";
	echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>

<body align="center">
<form action="index.php" method="post"><br><br>
<input class="submit" type="submit" name="" Value="Back"></form>
</body>
</html>