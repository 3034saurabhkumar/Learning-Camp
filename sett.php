<!-- settings page's main php file -->
<?php 
session_start();
$con=mysqli_connect("localhost","id14333383_techtuberrj","Ramakantstm18@","id14333383_techtuber") or die(mysqli_error($con));

 
$old_password=mysqli_real_escape_string($con, $_POST['old-pwd']);
$new_password=mysqli_real_escape_string($con, $_POST['new-pwd']);
$re_password=mysqli_real_escape_string($con, $_POST['re-pwd']);
// $old_pass=md5($old_password);
// $new_pass=md5($new_password);
// $re_pass=md5($re_password);

$old_pass=$old_password;
$new_pass=$new_password;
$re_pass=$re_password;

$user_id= $_SESSION['id'];
$user_pass= $_SESSION['password'];

if($old_pass == $user_pass)
{
	if($new_pass == $re_pass)
	{
		$update_query="update users set password = '$new_pass' where id = '$user_id'";
		$update_result=mysqli_query($con, $update_query) or die(mysqli_error($con));
		$_SESSION['password']= $new_pass;
		echo "Password Updated Successfully<br>";
?>
<a href="index.php">Continue</a>
<?php
	}
	else
	{
		echo "Re-Entered password didn't match the newly entered password.";
	}
}
else
{
	echo "Old Password entered is wrong.";
}
?>