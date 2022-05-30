
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
$sql="UPDATE `kswatable` SET `password`='$f', WHERE 'username'='$e'";
$result= mysqli_query($conn,$sql);
if($result)
				{
					header('location:KSWA home.php');
				}
}
?>
</form>
</body>
</html>  