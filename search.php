<body bgcolor="skyblue">
<h1 align="center">User Details</h1>
<table border="1" align="center">
<tr>
<th>ID</th>
<th>username</th>
<?php
include 'Database/connection.php';
if (isset($_POST["submit"]))
{
$get=$_POST['username'];
if($get)
{
	$show="SELECT * FROM `login` WHERE `username`='$get'";
	$res=mysqli_query($con,$show);
	while($rows=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>";
		 echo $rows['ID'];
		 echo "</td>";
		echo "<td>";
		 echo $rows['username'];
		 echo "</td>";
		 echo "</tr>";
	}
}
else
{
	echo "NO DATA FOUND";
}
}
?>