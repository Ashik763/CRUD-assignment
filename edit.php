<?php
	include "dbconnect.php";
	
	$id=$_GET['d_id'];
	
	$name=$_POST['f_name'];
	$designation=$_POST['f_designation'];
	$phone=$_POST['f_phone'];
	$date=$_POST['f_date'];

	echo $name,$designation,$phone,$date;
	
	$sql="UPDATE teacher SET name='$name', designation='$designation' ,
	phone='$phone', date_of_birth='$date'
	 where id='$id'";
	
	if($conn->query($sql)){
		
		header('location:index.php');

		//echo "updated succesfully";
		}
	else 
	echo "update failed";

	$conn->close();
?>