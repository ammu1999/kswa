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
  <li><a href="#">Metre reading</a></li>
  <li><a href="Paynow.php">Pay Now</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="logins.php">Login</a></li>
  <li><a href="index.php">Home</a></li>
  
</ul>
<!--PHP CONNECTION & FETCH USER DETAILS-->
<?php
include('Connect.php');
session_start();
$var=$_SESSION['n'];
$res= mysqli_query($conn,"SELECT * FROM `kswatable` where username='$var'");
while($r = mysqli_fetch_array($res))
{
$uname=$r['username'];  //username from table field & $uname is a random name
$uemail=$r['email']; 
$name=$r['name'];
$cono=$r['consumerno'];
$address=$r['address'];
$locality=$r['locality'];
$password=$r['password'];
   //email from table field & $uemail is a random name
}


?>

<!--PHP CODE FOR UPDATE PROFILE-->
<?php
    if(isset($_POST['update']))
    {
    include 'Connect.php';
    $uname=$_POST['username'];
    $uemail=$_POST['email'];
    $password=$_POST['password'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$locality=$_POST['locality'];
    $query="UPDATE `kswatable` SET `username`='$uname',`password`='$password',`name`='$name',`address`='$address',
	`locality`='$locality' WHERE `email`='$uemail'";
    $query_run = mysqli_query($conn,$query);
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous"/>
   
    
    <title>Profile</title> 
    <style>
        table{
            width: 30%;
  height:fit-content;
  margin: -40px auto;
  padding: 20px;
  border: 2px solid rgba(33, 92, 131, 0.788);
  background: white;
  border-radius: 20px 20px 20px 20px;
  margin-left: 457px;
        }
        .btn{
           background-color: rgba(33, 92, 131, 0.788); 
           width:70px;
           align:center;
           margin-left:90%;
           padding:10px;
           height:80%;
           border-radius: 20px;
           font-family: "Lucida Console", "Courier New", monospace;
           border:2px;
           
        }
        .input-group {
  margin: 10px 0px 10px 0px;
  font-size:20px;
  font-family: "Lucida Console", "Courier New", monospace;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width:fit-content;
  padding: 0px 5px;
  font-size: 16px;
  border-radius: 5px;
  border: 2px solid gray;
  font-family: "Lucida Console", "Courier New", monospace;
}

.fcc-btn {
  background-color: black;
  color: white;
  padding: 15px 25px;
  text-decoration: none;
  border-radius:20px;
}
    </style>
    <script>
function myFunction() {
  alert(" changed!");
}
</script>
</head>

<body>
<!--Header-->
<header id="header">
      
      <div>
        <i class="fas fa-user-alt"></i>
        <span><b><?php
	echo $var;
	?></b> </span>
      </div>
    </header>
    <br>
<a href="staff_home.php">
         <img alt="Qries" src=https://cdn-icons-png.flaticon.com/512/25/25694.png
         width="30" height="30">
</a>  <br> <br>
<div>
  <a class="fcc-btn" href="logout.php">logout</a>
</div>


    <center>
    
    
    <form action="profile.php" method="POST">
    <div class="input-group">
        <table width="50%"  align="center" cellspacing="24px">
            <tr>
                <th><div >Username</div></th>
                <td> <div class="input-group">
                <input type="text" name="username"  required value="<?php echo $uname ?>" readonly />
            </div></td>
            </tr>
            <tr>
                <th><div >Name</div></th>
                <td> <div class="input-group">
                <input type="text" name="name" value="<?php echo $name ?>" />
            </div></td>
            </tr>
            <tr>
                <th><div >Email</div></th>
                <td> <div class="input-group">
                <input type="email" name="email" value="<?php echo $uemail ?>" readonly />
            </div></td>
            </tr>
<tr>
                <th><div >Consumer number</div></th>
                <td> <div class="input-group">
                <input type="text" name="cono" value="<?php echo $cono ?>" readonly />
            </div></td>
            </tr>
			<tr>
                <th><div >Address</div></th>
                <td> <div class="input-group">
                <input type="text" name="address" value="<?php echo $address ?>" />
            </div></td>
            </tr>
			<tr>
                <th><div >Locality</div></th>
                <td> <div class="input-group">
                <input type="text" name="locality" value="<?php echo $locality ?>" />
            </div></td>
            </tr>
            <tr>
                <th><div >Password</div></th>
                <td> <div class="input-group">
                <input type="text" name="password" value="<?php echo $password ?>" />
            </div></td>
            </tr>
            
            <tr>
                <td>
                    <div class="input-group">
                    <div class="btns-group">
                    <input  type="submit" name="update" value="Update" class="btn" onclick="myFunction()" />
                    </div>
                    </div>
                </td>
            </tr>
        </table>
</div>
    </form>
    </center>
  
</body>
</html>

