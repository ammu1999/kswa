<?php
// session_start();
// $uname=$_SESSION['uname'];	
// $cno=$_SESSION['cno'];
// $pay=$_SESSION['pay'];
 
// $date=$_SESSION['date'];


?>
 <?php
      if(isset($_POST['bill']))
      {
        include 'Connect.php';
        $uname=$_POST['username'];	
        $cno=$_POST['cnum'];
        $pay=$_POST['meterpay'];
        $date=$_POST['date'];
        $tot=$pay*10;
        $id2=$_POST['id'];

        echo $sql3="INSERT INTO pay (`uid`, `uname`, `cno`, `pay`, `date`) VALUES ('$id2','$uname','$cno','$pay','$date')";
        $result3=mysqli_query($conn,$sql3);
        // if($result3)
        // {
        //   echo "<script>
        //   alert('Succes');
       
        //   </script>";
        // }      
      }
      ?>

<html>
<head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function pay_now(){
         jQuery.ajax({
               type:'post',
               url:'payment_process.php',
               data:"amt="+600,
               success:function(result){
                   var options = {
                        "key": "rzp_test_PJdxxmQY7rfadT", 
                        "amount": <?php echo $tot;?>00, 
                        "currency": "INR",
                        "name": "KSWA",
                        "description": "KSWA Payment Gateway",
                        "image": "../assets/images/head-logo.png",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_process.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="thank_you.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
</script>
</head>
<body onload="pay_now()">
</body>