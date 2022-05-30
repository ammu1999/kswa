<?php
$username="root";
$servername="localhost";
$password="";
$db="kswa";
$conn=mysqli_connect($servername,$username,$password,$db);
$yy=$_GET['ff'];
$sql = "update  kswatable set status='approved' where `id`=$yy ";
$result = mysqli_query($conn, $sql);
header('location:..\watersupply\adminview.php');