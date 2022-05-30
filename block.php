<?php
$username="root";
$servername="localhost";
$password="";
$db="kswa";
$conn=mysqli_connect($servername,$username,$password,$db);
$yy=$_GET['ss'];
$sql = "update  kswatable set status='blocked' where `id`=$yy ";
$result = mysqli_query($conn, $sql);
header('location:..\watersupply\adminview.php');