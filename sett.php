<!-- settings page's main php file -->
<?php 
session_start();
$con=mysqli_connect("localhost","root","root","project") or die(mysqli_error($con));

 
$old_password=mysqli_real_escape_string($con, $_POST['old-pwd']);
$new_password=mysqli_real_escape_string($con, $_POST['new-pwd']);
$re_password=mysqli_real_escape_string($con, $_POST['re-pwd']);

$old_pass=md5($old_password);
$new_pass=md5($new_password);
$re_pass=md5($re_password);

$user_id= $_SESSION['id'];
$user_pass= $_SESSION['password'];

if($old_pass == $user_pass)
{
	if($new_pass == $re_pass)
	{
		$update_query="update users set password = '$new_pass' where id = '$user_id'";
		$update_result=mysqli_query($con, $update_query) or die(mysqli_error($con));
		$_SESSION['password']= $new_pass;
		header("location:index.php");
?>
<div style="font-size: 18px;">
	<?php echo "<br><br><center>Password Updated Successfully</center><br><br>";  ?>
</div>

<?php
	}
	else
	{
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div align="center" style="font-size: 18px;">
		<p>
			<?php echo "<br><br><center>Re-Entered password didn't match the newly entered password.</center><br><br>";  ?>
			<a href="settings.php"><button class="btn btn-primary">Try Again</button> <br></a>
		</p>
	</div>
<?php
	}
}
else
{
?>
	<div align="center" style="font-size: 18px;">
		<p>
			<?php echo "<br><br><center>Old Password entered is wrong..</center><br><br>";  ?>
			<a href="settings.php"><button class="btn btn-primary">Try Again</button> <br></a>
		</p>
	</div>
</body>
</html>
<?php
}
?>
