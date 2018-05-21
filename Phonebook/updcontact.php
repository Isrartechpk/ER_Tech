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
<body><h2>Update Contact</h2></body>

<?php
include 'dbconnect.php';
$sql="SELECT * from contactinfo";
$result = mysqli_query($conn, $sql);
?>
<html><br><table border='1' align="center" width="90%">
<tr><th>ID</th><th>First Name</th><th>Last name</th><th>Gender</th><th>Contact No.</th><th>Action</th></tr></html>
<?php
while ($row=mysqli_fetch_array($result))
{ ?>
	<tr>
	<td> <?php echo $row['ID'] ?> </td>
	<td> <?php echo $row['firstname'] ?> </td>
	<td> <?php echo $row['lastname'] ?> </td>
	<td> <?php echo $row['gender'] ?> </td>
	<td> <?php echo $row['contact'] ?> </td>
	<td> <a href="updcontact1.php?ID=<?php echo $row['ID'] ?>">Update </a> </td>
	</tr>
<?php } ?>
</table>


<body align="center">
<form action="index.php" method="post"><br><br>
<input class="submit" type="submit" name="" Value="Back" align="center"></form>
</body>
</html>