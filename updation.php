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
<ul>

 <li> <a href="ContactUs.php">Contact Us</a></li>
  <li><a href="Meter Related.php">Meter Related</a></li>
  <li><a href="Paynow.php">Pay Now</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="logins.php">Login</a></li>
  <li><a href="KSWA home.php">Home</a></li>
  <li><a href="metre reading.php">Readings</a></li>
</ul>
</div>
<div class="slideshow-container">

    <link rel="stylesheet" type="text/css" href="login.css">
    <script>
        function check(){
            if(document.getElementById("uname").value.length==0 || document.getElementById("pass").value.length==0)
            {
                alert("Fill The page");
                return false;
            }
        }
    </script>
</head>
<body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form method="post">
            <p>Username</p>
            <input type="text" id="uname" name="uname" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" id="pass" name="pass" placeholder="Enter Password">
            <input type="submit" name="submit" value="Update" onclick="check()">
        </form>
         <?php
if(isset($_POST["submit"]))
{
session_start();
$servername="localhost";
$username="root";
$password="";
$db="kswa";
$conn= mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
	echo("Error in connection");
	echo mysqli_error($conn);
}
$e=$_POST['uname'];
$f=$_POST['pass'];
$sql="UPDATE `kswatable` SET password='$f' WHERE username='$e'";
$result= mysqli_query($conn,$sql);
if($result>0)
				{
					header('location:KSWA home.php');
				}
}
?>
    </div>

</body>
</head>
</html>
















































