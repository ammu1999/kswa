<!DOCTYPE html>
<html>
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
</div>
<script type="text/javascript">
		function chk()
		{
		

				var ch=/^([a-z A-Z_\-])+$/;
				var num=/^([0-9_\-])+$/;
				if(document.getElementById("cdno").value.match(num))
				{
					if(document.getElementById('cdno').value.length==16)
					{
					
					}
				  else
				  {
				  	alert("Enter Valid Number");
					document.getElementById("cdno").focus();
					return false;
				  }
				}
				else
				{
					alert("Enter Valid Number");
					document.getElementById("cdno").focus();
					return false;
				}
				if(document.getElementById("name").value.match(ch))
				{
				window.open("payment1.php");
				}
				else
				{
					alert("Invaild Name");
					document.getElementById("name").focus();
					return false;
				}
				if(document.getElementById("cvv").value.match(num))
				{
					if(document.getElementById('cvv').value.length==3)
					{
					 window.open("payment1.php");
					}
				  else
				  {
				  	alert("Enter Valid CVV");
					document.getElementById("cvv").focus();
					return false;
				  }
				}
				else
				{
					alert("Enter Valid CVV");
					document.getElementById("cvv").focus();
					return false;
				}
				
		}
	</script>
<head>
</head>
<br>
<body>
	<div class="pay" style="margin-right: 231px;margin-left:433px;padding-top: 33px;padding-bottom:30px;padding-left:75px;border:6px solid black; box-shadow:5px 5px 5px 5px ">
		<center><img src="klarnapaynow.png" width="25%"></center>
		<form method="post" onsubmit="chk()">
<table  cellpadding="20px">
<?php
                 	session_start();
					include 'Connect.php';
                 	
//$user=$_SESSION['aa'];
$cno=$_SESSION['cno'];
$sql="select * from readings where uid='$cno' ";
$res=mysqli_query($conn,$sql);
$arr=mysqli_fetch_array($res);
?>
                             <tr>
								<td>Consumer no :</td>
								<td colspan="4"><input type="text" id="cono" value="<?php echo $arr['consumerno'];?>"required style="width: 300px;height:25px"></td>
							</tr>
							 <tr>
								<td>Amount:</td>
								<td colspan="4"><input type="text" id="amt" value="<?php echo $arr['amount'];?>"required style="width: 300px;height:25px"></td>
							</tr>
	                         
							<tr>
								<td style="font-size: 15px">Card Type :</td>
								<td colspan="2"><input type="radio" name="r1">VISA</td>
								<td colspan="2"><input type="radio"name="r1">MasterCard</td>
							</tr>
							<tr>
								<td>Card Number :</td>
								<td colspan="4"><input type="text" id="cdno" required style="width: 300px;height:25px"></td>
							</tr>
							<tr>
								<td>Card Holder Name :</td>
								<td colspan="4"><input type="text" id="name" style="width: 300px;height:25px" required></td>
							</tr>
							<tr>
								<td>Expiry Date :</td>
								<td>MM :</td>
								<td>
									<select name="MM" style="width: 55px;height:25px" required>
										<option>Jan</option>
										<option>Feb</option>
										<option>Mar</option>
										<option>Apr</option>
										<option>May</option>
										<option>Jun</option>
										<option>Jul</option>
										<option>Aug</option>
										<option>Sep</option>
										<option>Oct</option>
										<option>Nov</option>
										<option>Dec</option>
									</select>
								</td>
								<td>YYYY :</td>
								<td>
									<select name="YYYY" style="width: 55px;height:25px" required>
										<option>19</option>
										<option>20</option>
										<option>21</option>
										<option>22</option>
										<option>23</option>
										<option>24</option>
										<option>25</option>
										<option>26</option>
										<option>27</option>
										<option>28</option>
										<option>29</option>
										<option>30</option>
										<option>31</option>
										<option>32</option>
										<option>33</option>
										<option>34</option>
										<option>35</option>
										<option>36</option>
										<option>37</option>
										<option>38</option>
										<option>39</option>
										<option>40</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>CVV :</td>
								<td colspan="4"><input type="password" style="width: 115px;height:25px" id="cvv"required></td>
							</tr>
						</table>
						<center><input type="submit" name="pay" style=" width:268px;height:50px; background-color: blue;border-radius: 30px" value="PAY NOW" ></center>
						
					</form>
					</div>
					</body>
					</html>