<?php
session_start();
$uname=$_SESSION['uname'];	
$cno=$_SESSION['cno'];
$pay=$_SESSION['pay'];
$date=$_SESSION['date'];
$tot=$pay*10;

include'Connect.php';

 
    $payment_status="Completed";
 
    mysqli_query($conn,"insert into tbl_payments(uname,consumer,reading,amount,date) values('$uname','$cno','$pay','$tot','$date')");
?>