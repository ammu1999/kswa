<?php
include 'Database/connection.php';
if (isset($_POST["submit"]))
{
	$uname=$_POST["username"];
	$pass=$_POST["password"];						
	{						
	$dbs="UPDATE `kswatable` SET `password`='$pass' WHERE `username`='$uname'";
				$res=mysqli_query($con,$dbs);
				if($res)
				{
					header('location:..\water_supply\main.php');
				}				
}  }
				
?>
<!DOCTYPE html>
<html>
<head>
<title>Forgot</title>
<link href="stylesheet/forgot.css" rel="stylesheet" type="text/css">
<body>
<div id="forgotbox">
<font color="white">
<h1>Reset Password</h1><br><br>
</font>
<form action="forgot.php" method="post">
<b>Enter username<b><br><input type="text" name="username" placeholder="Enter Username" required="required"><br><br>
Create Password<br><input type="password" name="password" placeholder="Enter New Password" required="required"><br><br>
Re-Enter Password <br><input type="password" name="confirm" placeholder="Confirm Password" required="required"><br><br>
<input type="submit" name="submit" value="Change Password" >
<font color="white">
</form>
</body>
</head>
</html>