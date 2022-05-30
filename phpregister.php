<?php
if(isset($_POST["password"]))				/*extra*/
{
$name=$_POST['name'];
$uname=$_POST['username'];
$pass=$_POST['password'];
$cfps=$_POST['confirmpassword'];
$username="root";
$servername="localhost";
$password="";
$db="kswa";
$conn=mysqli_connect($servername,$username,$password,$db);
	$query = "SELECT `username` FROM  kswatable WHERE username = '$name' ";		/*extra*/
	$result = mysqli_query($conn,$query);										/*extra*/
if(mysqli_num_rows($result))
	{
		//echo"Error..";
		echo "<font color=red><center>Registration failed. Username exists<center></font>";
	}
else
	{
		if(isset($_POST["submit"]))
		{
		
			$add="INSERT INTO kswatable(name,username,password,confirmpassword) VALUES ('$name','$uname','$pass','$cfps')";
			mysqli_query($conn,$add);
			header('location:..\water_supply\main.php');
		}
	}
	
	
}
?>
