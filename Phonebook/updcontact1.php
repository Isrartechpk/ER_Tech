<?php
require_once 'dbconnect.php'; 
if (isset($_SESSION['userSession'])!="") {
	header("Location: login.php");
	exit;
}
?>
<?php
include 'dbconnect.php';
	if (isset($_GET['ID'])){		
		$id = $_GET['ID'];	
		$getcontact = "select * from `contactinfo` where ID='$id'";
		$result = mysqli_query($conn, $getcontact);
		$row= mysqli_fetch_array($result);
	}
?>

<?php 

	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$fname= $_POST ['fname'];
		$lname= $_POST ['lname'];
		$gender= $_POST ['gender']; 
		$contactno= $_POST ['contactno'];

		$update_contact =  "UPDATE `contactinfo` SET `firstname` = '$fname', `lastname` = '$lname', `gender` = '$gender', `contact` = '$contactno' WHERE `contactinfo`.`ID` = $id;"; 
		
		$sql_update_contact = $conn->query($update_contact);

		if ($sql_update_contact == true) {
			header("Location: index.php");
		}
	}
 ?>


<html>
<head>
<title> My Phonebook</title>
<link rel="stylesheet" type="text/css" href="style.css" title="style" />
</head>
<body align="center">

	<h1>Phonebook Example Using PHP and MySQL</h1>
	<h3>Update Contact Details</h3>
		<form action="updcontact1.php?ID=<?php echo $row['ID']; ?>" method="post">
		<input class="input" type="hidden" name="id" Value="<?php echo $row['ID'] ?>"><br><br>
		First Name: <br><input class="input" type="text" name="fname" Value="<?php echo $row['firstname'] ?>"><br><br>
		Last Name: <br><input class="input type="text" name="lname" Value="<?php echo $row['lastname'] ?>"> <br><br>
		Gender: <br><input class="input type="text" name="gender" Value="<?php echo $row['gender'] ?>"><br><br>
		Contact No:<br><input class="input type="text" name="contactno" Value="<?php echo $row['contact'] ?>"><br><br>
		<input class="submit" type="submit" name="submit" Value="Update Contact" >
	</form>
</body></html>
