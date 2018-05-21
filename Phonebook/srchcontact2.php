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
<body><h2>Search Results</h2></body>
<?php
require_once 'dbconnect.php';

if(isset($_POST['submit']))
	{
		$fname= $_POST ['fname'];
		$lname= $_POST ['lname'];
		$gender= $_POST ['gender']; 
		$contactno= $_POST ['contactno'];
		$sql= "SELECT * FROM `contactinfo` WHERE `firstname` LIKE '%".$fname."%'";
		$query = mysqli_query($conn, $sql);

		if (mysqli_num_rows($query) > 0) 
			{
			echo "<table border='1' align='center' width='90%'>
			<tr><th>ID</th><th>First Name</th><th>Last name</th><th>Gender</th><th>Contact No.</th></tr>";	
				while($row = mysqli_fetch_assoc($query)) 
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
			}
		else 
			{ 
			echo "0 results";
			}
	}
echo "</table>";
mysqli_close($conn);
?>
<body align="center">
<form action="index.php" method="post"><br><br>
<input class="submit" type="submit" name="" Value="Back"></form>
</body>
</html>