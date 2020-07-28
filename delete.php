<?php
	$con=mysqli_connect("localhost","root","root","project") or die(mysqli_error($con));
	$rollno=$_GET['rn'];
	$select_query = "SELECT * FROM fileup";
	$select_query_result = mysqli_query($con, $select_query);
	while ($row = mysqli_fetch_array($select_query_result)) {
		if($row['id'] == $rollno) {
			$source="upload/".$row['file'];
		}
	}
	$query = "DELETE FROM fileup WHERE id = '$rollno'";
	$data=mysqli_query($con, $query);
	mysqli_query($con,"SET @id := 0;UPDATE fileup SET id = @id := (@id+1);ALTER TABLE fileup AUTO_INCREMENT = 1;");
	if(unlink($source) && $data) {
		header("location: show_database.php");
		
	}
?>