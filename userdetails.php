<DOCTYPE html>
    <html>
    <head>
	<title>index Page </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <style>
        /* typography */

html {
    background: #d5d6d8;
}

table {
  border-collapse: collapse;
  margin-bottom:5%;
  font-family: 'helvetica neue', helvetica, arial, sans-serif;
}

td, th {
  border: 1px solid #999;
  padding: 0.5rem;
  text-align: left;
}
th{
    background-color:#dfd3c5;
    align-items: center;
}
</style>
</head>
<body>
 
    
        <h4 class="overview">Users Details</h4>
        <p id="dash_date"></p>
        <script>
    var today = new Date();
    var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
    document.getElementById("dash_date").innerHTML = date;
        </script>



<?php
include 'Connect.php';

?>

<table  border="1"class="userdetailtable" >
<tr>
    <th> Id</th> 
    <th> Name</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Consumer Number</th>
    <th>Address</th>  
    <th>Locality</th>  
   <th>Send Mail</th> 
    
    
</tr>

    <?php
        $result=mysqli_query($conn,"SELECT * FROM `kswatable` ORDER BY `id`");
        while($row=mysqli_fetch_array($result))
        {
    ?>
<form action='#' method=post>
        <tr>
        <td id="tdtbl"><center><?php echo $row["id"];?></td>   
        <td><?php echo $row["name"];?></td>   
        <td><?php echo $row["username"];?></td>
        <td><?php echo $row["email"];?></td>
        <td><?php echo $row["consumerno"];?></td>
        <td><?php echo $row["address"];?></td>
        <td><?php echo $row["locality"];?></td>
<td style="text-align:center;">
	<input type="submit" style="background:grey;color:white;padding:8px 10px; width:47%;border-radius:3px;" value='<?php echo $row["email"];?>' name="compose">
</td>
        </tr>
        
      
    <?php
    }
    ?>
</table>



</div>
<?php

if(isset($_POST["compose"]))
{

  $id = $_POST["compose"];
  
  $subject="Login Details"; 
  $message= 'Welcome to Water Authority';
  
  echo ("<script LANGUAGE='JavaScript'>
  window.open('https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=$id&Subject=$subject&body=$message', '_blank');
  </script>");

 
}
?>

</body>

</html>