<html>
<head>
<title>Login Form Design</title>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<title>KSWA</title>
<link href="stylesheet/KSWA.css" rel="stylesheet" type="text/css">
<body>
<img src="images\Banner_Ed1.gif" style="width:100%">
</style>
</head>
<body>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="admin_approved.php">Approved</a></li>
  <li><a href="display_message"> Messages</a></li>
  <li><a href="admin_rejected.php">Rejected</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
	
<form action="post">

	<table cellpadding="10" cellspacing="10" border=1" style="width: 90%;">
		<tr><th>ID</th><th>Name</th><th>Username</th><th>Email</th><th>ConsumerNo</th><th>Address</th><th>Locality</th><th>Approve/Reject</th><th colspan="2">Action</th></tr>
		<?php
$username="root";
$servername="localhost";
$password="";
$db="kswa";
$conn=mysqli_connect($servername,$username,$password,$db);
$sql = "SELECT * FROM kswatable ";
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
   	<td><a href="block.php?ss=<?php echo $row['id'];?>"><input type="button" name="block" value="block"></a>
   		<td><a href="approve.php?ff=<?php echo $row['id'];?>"><input type="button" name="approve" value="approve"></a>
   </tr>
   <?php
    }
    ?>
	</table>
</form>
</div>
</body>
</html>