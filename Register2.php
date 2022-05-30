<?php
if(isset($_POST["submit"]))
{
	$sname=$_POST["fname"];
	$fname=$_POST["username"];
	$lname=$_POST["email"];
	$c=$_POST["address"];
	$u=$_POST["locality"];
	$p=$_POST["password"];

	include "Connect.php";
	echo $sql="INSERT INTO `kswatable`(`name`, `username`, `email`, `address`, `locality`, `password`) VALUES('$sname','$fname','$lname','$c','$u','$p')";
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Registration Success..');
		window.location.href='logins.php';
		</script>";
	}
	else
	{
		echo "<script>alert('Registration Failed..!');
		window.location.href='Register.php';
		</script>";
	}
}
?>	