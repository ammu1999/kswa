<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0px;
  overflow: hidden;
  background-color: lightgray;
}

li {
  float: left;
}

li a {
  display: block;
  color: blue;
 font-size:20px;
  text-align: center;
  padding: 10px 20px;
  text-decoration: none;
}
.active{
background-color: gray;
color: white;
}
li a:hover {
  background-color: orange;
  color: white;
}
</style>
</head>
<body>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="admin_approved.php">Approved</a></li>
  <li><a href="display_message.php">Display Message</a></li>
  <li><a href="admin_rejected.php">Rejected</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
	
<form action="post">

	<table cellpadding="10" cellspacing="10" border=1" style="width: 90%;">
		<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Username</th>
		<th>Email</th>
		<th>ConsumerNo</th>
		<th>Address</th>
		<th>Locality</th>
		<th>Approved</th>
		
		<?php
$username="root";
$servername="localhost";
$password="";
$db="kswa";
$conn=mysqli_connect($servername,$username,$password,$db);
$sql = "SELECT * FROM kswatable where `status`='approved' ";
$result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result))
  {
   ?>
   <tr>
   	<td><?php echo $row['id'];?></td>
   	<td><?php echo $row['name'];?></td>
   	<td><?php echo $row['username'];?></td>
   	<td><?php echo $row['email'];?></td>
   	<td><?php echo $row['consumerno'];?></td>
   	<td><?php echo $row['address'];?></td>
   	<td><?php echo $row['locality'];?></td>
   	<td><?php echo $row['status'];?></td>
   	  </tr>
   <?php
    }
    ?>
	</table>
</form>
</div>
</body>
</html>