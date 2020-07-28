<?php
	$con=mysqli_connect("localhost","root","root","project") or die(mysqli_error($con));
	$rollno=$_GET['rn'];
	$query = "DELETE FROM driveup WHERE id = '$rollno'";
	$data=mysqli_query($con, $query);
// 	mysqli_query($con,"SET @id := 0;UPDATE fileup SET id = @id := (@id+1);ALTER TABLE fileup AUTO_INCREMENT = 1;");
	if($data) {
		header("location: show_database.php");
		
	}
?>