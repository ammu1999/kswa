<body>
<h1 align="center">User Details</h1>
<table border="1" align="center">
<tr>
<th>username</th>
<?php
include 'Database/connection.php';
	$show="SELECT `username` FROM `kswatable`";
	$res=mysqli_query($con,$show);
	while($rows=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>";
		 echo $rows['username'];
		 echo "</td>";
		 echo "</tr>";
	}
?>