
<!DOCTYPE html>
<html>

<head>
	<title>Deta</title>
</head>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js">
        </script>
  
    <style>
        .container {
            position: fixed;
            top: 35%;
            left: 45%;
            margin-top: -100px;
            margin-left: -100px;
			
            border-radius: 7px;
			text-align:20px;
			
        }
  
  
  
        h2 {
            text-align: center;
            color: #24650b;
        }
    
div {
  border-style: solid;
  border-color: #0A2558;;
  font-size:20px;
  padding:20px;
  
  
}
h3{
	color:red;
}
.mycss{
	color: 1px solid rgba(33, 92, 131, 0.788);
    border:1px solid #000;
    background: #ccc;
    padding: 10px;
}
</style>
<body>

<a href="contact_us" >
    
		<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAYFBMVEX///8AAABUVFTv7+/r6+tMTExcXFz19fUWFhYMDAzy8vL8/Py9vb3k5OTPz890dHRtbW2urq7GxsbV1dXb29siIiJ9fX2IiIhmZmalpaU7Ozunp6coKChOTk6UlJSMjIxeVR7fAAACPElEQVR4nO3d61IaURRE4TlGJYpchFHj/f3fMhUTTQrm7D9sqrOb9T1BrzrFQOnADAMAAAAAAAAAAAAAAABMLZabca4ecTzjqn24uFEvOZJ1+3I3qsccwfVV+
		5ffMV63HUv1omTfdgNb87rgTAS2e/WoTFOBVoc4HWh0sekEtgf1sCy9wPZDvSxJN9ClsB/YVuptKYLA9qgelyEKbAv1ugRh4JN6XYIw0OGDaRxocJ2JAy/U8w5HYHUEVkdgdXHgq3re4TjB6jjB6jjB6k78BAn8/xFYHYHVnXig/Rv9mXre4c4JLI7A6gisjsDqCKyOwOoIrI7A6gisjsDqCKyOwOrsA/e+XucWODy5B966Bw5X7oFb98Dh0T1wuO8GXqqnJVl1C9XLsvTP0OCf2B+e+69DgxsRfhn7hS6JL/aJN0GhSeKZfeL8u33ijEQDcaLFW3+caPERnET1vAwkq
		udlIFE9LwOJ6nkZZtGfT0ksgkT1vAwkqudlIFE9LwOJ6nkZSFTPyzCLCj0S/e+0IZHEGkhUz8tAonpeBhLV8zLEiRZ3wJGonpch/ikXEmsgUT0vA4nqeRlIVM/LQKJ6XoaTT7R4Ylf8rVOLx1iGiRY3FceJ5+p1KaLEW/W4HEGixbVmiBLX6mlZuokGz7T6o5f4ph6Wp5O4Ue9KNJ2oXpVqKvFdPSrXRKJ6Ura9xK16UbqdRKfLzKf55d++
		F4dnkE7Yrn/3vfo8r3rfYrkZjZ44DgAAAAAAAAAAAAAA4OYnY3QZcKXBAhkAAAAASUVORK5CYII=" alt=""
		width="50" height="50">
	</a><br><br>
	<div class="container">


	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$connection = mysqli_connect("localhost", "root", "", "kswa");
		
		// Check connection
		if($connection === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
       
		
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
       
		$username=$_REQUEST['username'];

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO `contactus`( `address`, `email`, `username`,`ArrivalDate`)
         VALUES ('$address','$email','$username',now())";
		
		if(mysqli_query($connection, $sql)){
			echo "<h3></h3>";

			echo nl2br("<p class='mycss'>Username: $username\n</p>"
				
				."<p class='mycss'>Email: $email \n</p>"
                ."<p class='mycss'>Message: $address\n</p>");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($connection);
		}
		
		// Close connection
		mysqli_close($connection);
		?>
	
    
</center>

</div>
</div>
 
</body>
</html>
