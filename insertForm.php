<?php 
session_start();

$email = 	$_SESSION["email"];
$password = $_SESSION["password"];


if(empty($email) || empty ($password)){
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Insert Form</h1>
		<form method="POST" action="insertData.php">
			<label>Name</label>
			<input type="text" placeholder="Enter name" name="f_name" required> <br> <br>
			<label>Designation</label>
			<input type="text" placeholder="Designation" name="f_designation" required> <br> <br>
			<label>Phone</label>
			<input type="text"  placeholder="Enter phone no. " name="f_phone"  required> <br> <br>
			<label>Date of Birth</label>
			<input type="date"  placeholder="Enter date of birth " name="f_date" required > <br> <br>
			<input type="submit" value="INSERT">
		</form>
	</center>	
	
</body>
</html>