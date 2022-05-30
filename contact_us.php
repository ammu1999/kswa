<?php
include 'Connect.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>contact form</title>
	<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Styles -->
<link rel="stylesheet" href="table.css" >

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<style>
        .indexcontent {
  width: 13%;
 padding: 20px;
  border: 1px solid rgba(33, 92, 131, 0.788);
  background: white;
  border-radius: 0px 0px 10px 10px;
  margin-left: 85%;
  margin-top: -50px;
  height: 24px;

}
		.topnav {
  overflow: hidden;
  background-color: rgba(33, 92, 131, 0.788);
}

.topnav a {
  float: left;
  display: block;
  color: #333;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ffff;
  color: black;
}

.topnav a.active {
  background-color: #ffff;
  color: #333;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
	</style>
</head>

<body>
<div class="topnav" id="myTopnav">
  <a href="profile.php">Profile</a>
  
   <a href="Paynow.php">Pay Now</a>
 <a href="about.php">About</a>
  <a href="contact_us.php">Contact Us</a>
  <a href="KSWA home.php">Home</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script> 
<body>

	
	<div class="main">
		<h2>Contact Now</h2>
    <form action="contact_data.php" method="post" enctype="multipart/form-data">
   
    <br>

<label for="username">Username:</label>&nbsp;&nbsp;&nbsp;
<input type="text"  name="username" id="username" >
<br>	<br>			

<p>
				<label for="emailAddress">Email Address:</label>
				<input type="email" name="email" id="emailAddress">
				
			</p><br>
            <p>

	
				<label for="Address">Message:</label>&nbsp;&nbsp;&nbsp;
				<input type="textarea" name="address" id="Address">
	
</p>

	
	<br><input type="submit" name="submit" value="submit" onclick="myFunction()" >
</form>
</div>
<script>
function myFunction() {
  alert("Message send");
}
</script>
</body>

</html>

