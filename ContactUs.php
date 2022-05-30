
<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:black;
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
#header {
    height: 136px;
    background-image: url('1.jpg');
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
header {
  padding: 80px;
  text-align: center;
    background-image: url("1.jpg");
	
  color: white;
}
</style>
<title>payment</title>
<br><br><br><br>
<link href="stylesheet/paynow.css" rel="stylesheet" type="text/css">
<body>
<img src="images\Banner_Ed1.gif" style="width:50%">
<ul>

<li> <a href="ContactUs.php">Contact Us</a></li>
  <li><a href="Meter Related.php">Meter Related</a></li>
  <li><a href="Paynow.php">Pay Now</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="logins.php">Login</a></li>
  <li><a href="KSWA home.php">Home</a></li>
  <li><a href="metre reading.php">Meter Readings</a></li>
  <li><a href="index.php">Home</a></li>
 
</ul>

<body background="images\1.jpg">
</div>
<link href="stylesheet/Contact.css" rel="stylesheet"type="text/css">
<center>
<div id="contactbox">
<font color="white">
<h1>Contact Us</h1><br><br><br>
</font>
<form action="Loginned.php" method="post">
<b>
Enter the Contact Number<b><br><input type="text" name="mobile" placeholder="Enter your Contact Number" required="required"><br><br>
Enter email<br><input type="email" name="email" placeholder="Enter your email" required="required"><br><br>
Enter Description<br><input type="text" name="description" placeholder="Enter enquiry" required="required"><br><br>
<input type="submit" name="submit" value="Contact" ><br><br><br>
</form>
</center>
</body>
</head>
</html>