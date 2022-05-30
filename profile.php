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
<a href="KSWA home.php">
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

