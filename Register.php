<!DOCTYPE html>
<html>
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
  background-color: rgba(1,0,0,0.43);
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
  background-color: black;
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

body {
			color:white;
		
		height: 100%;

  /* Center and scale the image nicely */
 background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    font-family:Lucida Calligraphy;
	}
	.welcome-button a {
    font-size: 12px;
    color:white;
    background:rgba(1,0,0,0.45) ;
    padding: 10px 20px;
    text-transform: capitalize;
    letter-spacing: 2px;
    display: inline-block;
}
.welcome-button a:hover {
	background: white;
	color:red;
}

		.form-w3ls {
	background:rgba(1,0,0,0.43);/*--form purple --*/
	padding: 40px 50px;
	height : 20%;
	width:30%;/*--purple form width --*/
	margin:0 auto;
	margin-top:25px;
	float : center;
}
		
		.header {
			
    font-size: 20px;
    color: black;
    letter-spacing: 1px;
    text-transform: uppercase;
		}
		div#signin-agile input[type="text"],div#signin-agile input[type="button"],div#signin-agile input[type="date"],div#signin-agile input[type="password"],div#signup-agile input[type="text"],div#signup-agile input[type="tel"],div#signup-agile input[type="email"],div#signup-agile input[type="password"] 
		{
	padding: 10px;
    width: 100%;
    border: 1px solid rgba(30, 0, 41, 0);
    color: white;
    font-size: 16px;
    background-color:rgba(1,0,0,0.44);/*--type space color --*/
    margin-top: 1em;
    margin-bottom: 2em;
   font-family:Lucida Calligraphy;
		}
		
		div#signin-agile .sign-in, div#signin-agile .join-us
{
	padding:10px;
	background-color:rgba(1,0,0,0.43);
	width:100%;
	border:0;
	margin-top: 1em;
    margin-bottom: 2em;
    color:white;
    letter-spacing:1px;
	font-family:arial;
    font-size:18px;
    text-transform:uppercase;
}
/*--//sing in button color and letter color--*/
div#signin-agile .sign-in:hover,div#signin-agile .join-us:hover {
	background-color :black;
	color:black;
	
	}
	div#signin-agile .button{
padding:10px;
	background-color:rgba(1,0,0,0.43);
	width:100%;
	border:0;
    color:;
    letter-spacing:1px;
	
    font-size:20px;
    text-transform:uppercase;}
font-family:Lucida Calligraphy;
	div#signin-agile .login100-form-btn:hover {
	background-color :gray;
	color:black;
	
	} 
</style>
<title>Registration_page</title>
<br><br><br><br>
<body>
<img src="images\Banner_Ed1.gif" style="width:75%">
<ul>
<li> <a href="ContactUs.php">Contact Us</a></li>
  <li><a href="Meter Related.php">Meter Related</a></li>
  <li><a href="Paynow.php">Pay Now</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="logins.php">Login</a></li>
  <li><a href="KSWA home.php">Home</a></li>
  <li><a href="metre reading.php">Meter Readings</a></li>
</ul>
<body background="images\1.jpg">
<title>Register</title>
<script type="text/javascript">
        function chk()
        {
                var name=/^[a-zA-Z\s]+$/;
                var ch=/^([a-z A-Z 0-9_\-\.])+\@([a-z A-Z 0-9_\-])+\.([a-z A-Z]{2,4}).$/;
                var num=/^([0-9_\-])+$/;
                
                if(document.getElementById("name").value.match(name))
                {}
                else
                {
                    alert("Invaild Name");
                    document.getElementById("name").focus();
                    return false;
                }
                if(document.getElementById("pass1").value==document.getElementById("pass2").value)
                {}
                else
                {
                    alert("Password Missmatch");
                    document.getElementById("pass2").focus();
                    return false;
                }
        }
    </script>
</head>
<link href="stylesheet/style.css" rel="stylesheet" type="text/css">
<body><center>
<div id="content" style="margin-top:-5px;width:550px;">
    <br>
    <div id="Register" style="margin-top:-105px;"> 	
        <form method="post" action="Register.php">
            <table align="center">
                <tr>
                    <td>
					<div id="Registerbox" align="center"><font size="5 px"><b>Register</b></font></div>
                    </td>
                </tr>
				
                <tr>
                    <td>
                      <input type="text" name="fname" required placeholder="Enter your name"/>
						<br><br>
                    </td>
                </tr>
				<tr>
                    <td>
                      <input type="text" name="username" required placeholder="Enter your username"/>
						<br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                      <input type="text" name="email" required placeholder="Enter your email"/>
						<br><br>
                    </td>
                </tr>
				
				 <tr>
                    <td>
					<input type="text" name="address" required placeholder="Enter your address"/>
                      <br><br>
                    </td>
                </tr>
				 
				<tr>
                    <td>
					<input type="text" name="locality" required placeholder="Enter your locality"/>
                      <br><br>
                    </td>
                </tr>
                <tr>
				<td>
					<input type="password" name="password" required placeholder="Enter your Password"/><br><br>
				</td>
                </tr>
				
                <tr>
                    <td style="text-align:center;">
                        <input type="submit" name="submit" value="Register" onclick="chk()"/><br><br><br>
                    </td>
                </tr>
            </table>
			
        </form>
    </div>
</div>
</div>
</center>
</body>
</html>

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
	$sql="INSERT INTO `kswatable`(`name`, `username`, `email`, `address`, `locality`, `password`) VALUES('$sname','$fname','$lname','$c','$u','$p')";
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