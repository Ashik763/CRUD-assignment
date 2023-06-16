<?php
	include "dbconnect.php";
	
	session_start();
	$s="SELECT * FROM teacher";
	$result=$conn->query($s);

	$email = $_SESSION["email"];
	$password = $_SESSION["password"];
	// echo $_SESSION["email"];

	if(empty($email) || empty ($password)){
		header("location:login.php");
	}
	
	//echo "<h1>adhhd</h1>";
	/*
	while($r = $result->fetch_assoc())
	{
		$name=$r['name'];
		echo $name;
		echo "ajgdsdjk";
	}
	*/
	//echo $r['email'];
	//echo gettype($r);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		table, td, th{
			border-collapse:collapse;
			border:2px solid black;
		}
		table{
			width:80%;
			margin: 0 auto;
		}
		td, th{
			padding:15px;
			text-align:center;
		}
		#logout{
			position:absolute;
			right:20px;

		}
		
	</style>
</head>
<body>	
<div id="logout" >
	<?php echo "$email"  ?>	<a href="logout.php" >
		Logout  </a>
	
	
</div> 

	
		<center>
			<h1> Teacher List</h1>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Designation</th>
					<th>Date of birth</th>
					<th>EDIT</th>
					<th>Delete</th>
				</tr>
				<?php
				//$i=1;
				while($r = $result->fetch_assoc())
				{
					$idd=$r['id'];
					$nam=$r['name'];
					$designation=$r['designation'];
					$date=$r['date_of_birth'];
					echo "<tr>";
						echo "<td>". $idd . "</td>";
						echo "<td>". $nam . "</td>";
						echo "<td>". $designation . "</td>";
						echo "<td>". $date . "</td>";
						echo "<td> <a href='editForm.php?edit_id=$idd'>Edit</a></td>";
						echo "<td> <a href='delete.php?del_id=$idd'>Delete</a></td>";
					echo "</tr>";
				}
				?>
				
				<tr>
					<td colspan="5"><a href="insertForm.php">Insert Record</a></td>
				</tr>
			</table>
		</center>
	
</body>
</html>




