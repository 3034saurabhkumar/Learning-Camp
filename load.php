<?php 
    $con=mysqli_connect("localhost","root","root","project") or die(mysqli_error($con));
	$select_query = "SELECT * FROM fileup";
	$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));

	if(isset($_POST['submit'])) {
 	
		$file = $_FILES["file"];
		$title = $_POST["title"];
	 	$temp = $file["name"];
 		$f="null";
        while ($row = mysqli_fetch_array($select_query_result)) {
            $f="none";
            if($temp == $row['file']) {
                $f = $row['file'];
            }
        }
			
		if($temp != $f) {
		    move_uploaded_file($file["tmp_name"], "upload/".$file["name"]);
            // $query = "Insert INTO fileup(title,name) VALUES('$title','$file')";
    		$query = "INSERT INTO fileup (title, file) VALUES ('$title','$temp')";
    	
    		// Check extension
    		if(mysqli_query($con,$query)) {
    		  
    		    // Upload file
    		    header("location: upload.php?r=file uploaded sucessfully");
    		    
	        }
        } else {
            header("location: upload.php?r=File already exists change file name");
        }
	}
?>
	