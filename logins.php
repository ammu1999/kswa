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
<script>
window.history.forward(1);
</script>
<title>KSWA</title>
<link href="stylesheet/KSWA.css" rel="stylesheet" type="text/css">
<body>
<img src="images\Banner_Ed1.gif" style="width:100%">
<ul>

 <li> <a href="ContactUs.php">Contact Us</a></li>
  <li><a href="#">Metre reading</a></li>
  <li><a href="Paynow.php">Pay Now</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="logins.php">Login</a></li>
  <li><a href="index.php">Home</a></li>
  
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
        <form method="post"action="fetch.php">
            <p>Username</p>
            <input type="text" id="uname" name="uname" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" id="pass" name="pass" placeholder="Enter Password">
            <a href="updation.php">Forgot password</a><br>
			
            <a href="Register.php">Don't have an account?</a>
            <input type="submit" name="btn" value="Login" onclick="check()">
        </form>
		
		
         <?php
         session_start();
		//$var=$_SESSION["n"]=$_POST{'uname'];
$username="root";
$servername="localhost";
$password="";
$db="kswa";
$conn=mysqli_connect($servername,$username,$password,$db);
if(isset($_POST["btn"]))
        {
		   
           $username=$_POST['uname'];
           $password=$_POST['pass'];
		   if($username=='admin' && $password=='admin')
		   { 
			   header('location:adminview.php');
		   }
		   else
		   {
				$query="select * from kswatable where username='$username' and password='$password'";
				$result=mysqli_query($conn,$query);
				//$row=mysqli_fetch_array($result);
					//$idd=$_SESSION['id']=$row['id'];
				$total=mysqli_num_rows($result);
					

					if ($total==1)
					{
						while($ar=mysqli_fetch_array($result))
						{
							$_SESSION['aa']=$ar['consumerno'];
													
							header('location:KSWA home.php');
						}
					
					}
					else
					{
						echo"INVALID USERNAME/PASSWORD";
						
					}	
			}
		}
			?>
			
    </div>

</body>
</head>
</html>