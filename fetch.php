<?php

session_start();
//$idd=$_SESSION['id'];
$name=$_SESSION["n"]=$_POST['uname'];
$pass=$_POST['pass'];

include 'Connect.php';
if($name=='admin' && $pass=='admin')
		   { 
			   header('location:adminview.php');
			   die();
		   }
		   if($name=='staff' && $pass=='staff')
		   { 
			   header('location:staff_home.php');
			   die();
		   }

$sql=" SELECT * FROM kswatable where username='".$name."'";
$result=mysqli_query($conn,$sql);	

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$password=$row['password'];

		$idd=$_SESSION['id']=$row['username'];
	}
}
else
{
	echo"<script> alert('Incorrect Attributes');
		window.location.href='logins.php';
		</script>";
}

if($password==$pass)
{
	$_SESSION["id"]=session_id();

	echo"<script> 
		window.location.href='KSWA home.php';
		</script>";
			
}
else
{
	echo"<script> alert('Incorrect Attributes');
		window.location.href='logins.php';
		</script>";
}
?>