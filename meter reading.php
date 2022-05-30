<!DOCTYPE html>
<html>
<head>
<title>metre reading</title>
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
	background-image:url("image/banner2.jpg");
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
	font-family:Lucida Calligraphy;
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
<title>KSWA</title>
</head>
 <?php
          session_start();
                 	$username="root";
$servername="localhost";
$password="";
$db="kswa";
$conn=mysqli_connect($servername,$username,$password,$db);
$yy=$_SESSION['consumerno'];
if(isset($_POST['bill']))
{
 $cno=$_POST['cnum'];
$un=$_POST['meterpay'];
$dt=$_POST['date'];
$cnum=$_POST['calamt'];
        
            $add="INSERT INTO `readings`(`consumerno`, `reading`, `date1`, `amount`, `status`) VALUES ('$cno','$un','$dt','$cnum','unpaid')";
            mysqli_query($conn,$add);
			header('location:\water_supply_php\Paynow.php');
        }
?>
<body>
<center>
<img src="images\Banner_Ed1.gif" style="width:100%">
<ul>

 <li> <a href="ContactUs.php">Contact Us</a></li>
   <li><a href="meter related.php">Meter Related</a></li>
    <li><a href="metre reading.php">Meter Readings</a></li>
  <li><a href="Paynow.php">Pay Now</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="Logins.php">Login</a></li>
  <li><a href="index.php">Home</a></li>
  
</ul>
<body background="images\1.jpg">
<div class="form-w3ls">
  
    <div class="tab-content">
        <div id="signin-agile"> 
		<form  method="POST" >
            <table align="center">
                <tr>
                    <td>
					<div id="metre readingbox" align="center"><font size="5 px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>METER READING</b></font></div>
					<br>
                    </td>
                </tr>
				
                
<tr>
                 <td><input type="text" id="cnum" name="cnum" value="<?php echo $yy ?>" required placeholder="Enter your consumerno" readonly >
                      <br><br>
                    </td>	
                </tr>
				<tr>
                    <td>
					<input type="text" id="meterpay" name="meterpay" required placeholder="Enter your meter reading" />
                      <br><br>
                    </td>
                </tr>
				<tr>
								<td><input type="date" name="date" required placeholder="date"/>
								</td>
							</tr>
				<tr>
								<td>
								<input type="button" name="amt" value="calculate" onclick="amt()">
								</td>
							</tr>
							
							<tr>
							<div class="welcome-button mt-4">
								<td><input type="text" id="cal" name="calamt" value="">
								</td>
								</div>
							</tr>
							<script >
            function amt(){
            var first_number = Number(document.getElementById("meterpay").value);
            alert(first_number);
            var result = first_number * 10;
            alert(result);
            Number(document.getElementById("cal").value) = result;    
            }
        </script>

				</table> <br><br>
				<div class="welcome-button mt-4">
					<input type="submit" value="Bill" name="bill">
					</form>
				</div></div></div>
			
	
</center>
</body>
</html>