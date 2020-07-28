<?php 
	session_start();
	$con=mysqli_connect("localhost","root","root","project") or die(mysqli_error($con));
	$select_query = "SELECT * FROM fileup";
	$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
	$select_query1 = "SELECT * FROM driveup";
	$select_query_result1 = mysqli_query($con, $select_query1) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo_xCs_icon.ico">
</head>
<body>
	<?php
		if(isset($_SESSION['id'])){ 
			require 'include/header_logged_in.php'; 
	?><br><br><br>
	<a href="index.php">back</a>
	<div class="container">
    <div class="row">
        <div class="col-lg-12"><h2>Uploaded files</h2></div>
    </div><br/>
    <div class="row">
        <div class="col-xs-2"><h4><center>ID</center></h4></div>
        <div class="col-xs-2"><h4><center>Title</center></h4></div>
        <div class="col-xs-2"><h4><center>File Name</center></h4></div>
        <div class="col-xs-2"><h4><center>Download File</center></h4></div>
        <div class="col-xs-2"><h4><center>Time</center></h4></div>
        <div class="col-xs-2"><h4><center>Delete</center></h4></div> 
    </div>
    <hr/>
     <?php while ($row = mysqli_fetch_array($select_query_result)) { ?>
      <div class="row">
        <div class="col-xs-2"><?php echo "<center>".$row['id']."</center>"; ?></div>
        <div class="col-xs-2"><?php echo "<center>".$row['title']."</center>"; ?></div>
          <div class="col-xs-2"><?php echo "<center>".$row['file']."</center>"; ?></div>
          <div class="col-xs-2"><center><a href="upload/<?php echo $row['file']; ?>">Click here</a></center></div>
          <div class="col-xs-2"><?php echo "<center>".$row['Time']."</center>"; ?></div>
          <div class="col-xs-2"><a href=<?php echo "delete.php?rn=".$row['id']."" ?>><center>Delete</center></a></div>
      </div>
      <hr/>
    <?php } ?>
    <div class="row">
        <div class="col-lg-12"><h2>Google Drive Uploaded files</h2></div>
    </div>
    <?php while ($row1 = mysqli_fetch_array($select_query_result1)) { ?>
      <div class="row">
        <div class="col-xs-2"><?php echo "<center>".$row1['id']."</center>"; ?></div>
        <div class="col-xs-2"><?php echo "<center>".$row1['title']."</center>"; ?></div>
          <div class="col-xs-2"><?php echo "<center>".$row1['file']."</center>"; ?></div>
          <div class="col-xs-2"><center><a href="<?php echo $row1['url']; ?>">Click here</a></center></div>
          <div class="col-xs-2"><?php echo "<center>".$row1['Time']."</center>"; ?></div>
          <div class="col-xs-2"><a href=<?php echo "delete1.php?rn=".$row1['id']."" ?>><center>Delete</center></a></div>
      </div>
      <hr/>
    <?php } ?>
  </div>
	<?php } ?>
</body>
</html>