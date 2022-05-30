<?php
include 'Database/connection.php';
if (isset($_POST["submit"]))
{
	$uname=$_POST["username"];
	$dbs="DELETE FROM `kswatable` WHERE `username`='$uname'";
				$res=mysqli_query($con,$dbs);
				if($res)
	{
			header('location:..\water_supply\main.php');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Delete</title>
<link href="stylesheet/forgot.css" rel="stylesheet" type="text/css">
<body>
<div id="forgotbox">
<font color="white">
<h1>Delete your account</h1><br><br>
</font>
<form action="delete.php" method="post">
<b>Enter username<b><br><input type="text" name="username" placeholder="Enter Username" required="required"><br><br><br><br>
<b>Enter password<b><br><input type="password" name="password" placeholder="Enter Password" required="required"><br><br><br><br>
<b>Enter Mobile Number<b><br><input type="text" name="mobile" placeholder="Enter Mobile Number" required="required"><br><br><br><br>
<input type="submit" name="submit" value="Delete Account" >
</form>
</body>
</head>
</html>