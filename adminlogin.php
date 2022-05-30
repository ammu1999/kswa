
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="login2.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}


.header {
 
  background:white;
  color: black;
	font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";
	font-size: 50PX;
	padding: 20 30PX;
}
	.head {
  padding: 20px 16px;
  background:BLACK ;
  
}
	.header-right {
    float: none;
  }
	
.head-right {
    float: none;
  }
	
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}


</style>
</head>
<body>

<div class="header" id="myHeader">
 <img src= "images/Banner_Ed1.gif" align="center"weight="180px"height="120 px"><strong></strong>
</div>
	
	<div class="head" id="myHeader"></div>


<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
	<div class="form-w3ls">
  <form method="POST"action="adminlogin.php">
    <div class="tab-content">
        <div id="signin-agile"> 
			<center><h2>Admin Login </h2></center>
			
		<input type="text"name=un id=""value="Email_id" onfocus="this.value = '';" onblur="if (this.value == '') ">
	    <input type="text"name=pd id=""value="password" onfocus="this.value = '';" onblur="if (this.value == '')">
		<center><input name="btn"type="submit" value="Login"></center>
			
				
			 
		</div>
		</div>
		</form>
    </div>
				

</body>
</html>
