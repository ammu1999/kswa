
<?php
include 'Database/connection.php';
if (isset($_POST["submit"]))
{
$uname=$_POST["username"];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Search</title>
<link href="stylesheet/search.css" rel="stylesheet" type="text/css">
<body>
<div id="searchbox">
<font color="blue">
<h1>Search User</h1><br><br>
</font>
<form action="search.php" method="post">
<b>Enter username<b><br><input type="text" name="username" placeholder="Enter Username" required="required"><br><br>
<input type="submit" name="submit" value="Search" >
<font color="white">
</form>
</body>
</head>
</html>