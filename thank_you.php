<h1></h1>
<h1></h1>
<h1></h1>
<br><br>
<a href="KSWA home.php" class="btn btn-primary" id="print-btn">BACK TO HOME</a><br><br>
<?php
// session_start();
// $uname=$_SESSION['uname'];	
// $cno=$_SESSION['cno'];
// $pay=$_SESSION['pay'];
// $tot=$pay*10;
// $date=$_SESSION['date'];

include'Connect.php';

$sql="select max(`id`) as id from `pay` ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$id=$row['id'];


$sql2="select * from `pay` where `id`='$id' ";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($result2);


$uname=$row2['uname'];	
$cno=$row2['cno'];
$pay=$row2['pay'];
$tot=$pay*10;
$date=$row2['date'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Print</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
     <style> 
table,
td {
  border: solid 2px black;
  text-align: center;
  border-collapse: collapse;
}



td {
  padding: 0.5em;
}

[colspan="4"][rowspan="2"] {
  height: 4em;
}
</style>


<table class="table table-bordered print">

    <tr>
    <td colspan="4" width="25%"rowspan="2"><h2>KSWA</h2></td>
    </tr>
        <tr>     
        </tr>
      
    <tr>
    <td>Name: </td>
    <td><?php echo $uname; ?></td>
    </tr>

    <tr>
    <td>Consumer No:</td>
    <td><?php echo $cno; ?></td>
    </tr>

    <tr>
    <td>Reading:</td>
    <td><?php echo $pay; ?> litre's</td>
    </tr>

    <tr>
    <td>Payable:</td>
    <td><?php echo $tot; ?> ₹</td>
    </tr>

    <tr>
    <td>Date:</td>
    <td><?php echo $date; ?></td>
    </tr>

</table>

      <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>