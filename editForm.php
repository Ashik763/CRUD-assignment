<?php
	include "dbconnect.php";
	session_start();
	$id=$_GET['edit_id'];

	$email = $_SESSION["email"];
	$password = $_SESSION["password"];
	

	if(empty($email) || empty ($password)){
		header("location:login.php");
	}
	$sql="SELECT * FROM teacher where id='$id'";
	$result=$conn->query($sql);
	
	$arr=$result->fetch_assoc();
	
	$nam=$arr['name'];
	$designation=$arr['designation'];
	$phone=$arr['phone'];
	$date=$arr['date_of_birth'];
?>


<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Edit Form</h1>
		<form method="POST" action="edit.php?d_id=<?php echo $id?>">
			<label>Name</label>
			<input type="text" value= " <?php echo $nam ?> " name="f_name" required> <br> <br>
			<label>Designation</label>
			<input type="text" placeholder="Designation" value= " <?php echo $designation ?> " name="f_designation" required> <br> <br>
			<label>Phone</label>
			<input type="text"  placeholder="Enter phone no. " value= " <?php echo $phone ?> " name="f_phone"  required> <br> <br>
			<label>Date of Birth</label>
			<input type="date"  placeholder="Enter date of birth " value= " <?php echo $date ?> " name="f_date" required > <br> <br>
			<input type="submit" value="update">
		</form>
	</center>	
	
</body>
