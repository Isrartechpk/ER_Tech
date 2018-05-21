<?php
require_once 'dbconnect.php'; 
if (isset($_SESSION['userSession'])!="") {
	header("Location: login.php");
	exit;
}
?>
<?php	
		if (isset($_GET['ID'])){
		include 'dbconnect.php';
		
		$id= $_GET['ID'];
		
		$rem_contact = "delete from `contactinfo` where id= '$id'";}

if (mysqli_query($conn, $rem_contact)) {
    echo "Record Deleted successfully";
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