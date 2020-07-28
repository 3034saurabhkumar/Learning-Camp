<?php 
    $con=mysqli_connect("localhost","root","root","project") or die(mysqli_error($con));

	if(isset($_POST['submit'])) {
 	
		$file = $_POST["file"];
		$title = $_POST["title"];
		$url = $_POST["url"];
			
     	$query = "INSERT INTO driveup (title, file, url) VALUES ('$title','$file','$url')";
    	
		if(mysqli_query($con,$query)) {
		  
		    header("location: drive_upload.php?r=file uploaded sucessfully");
		    
        }
        else {
            header("location: drive_upload.php?r=File already exists change file name");
        }
	}
?>