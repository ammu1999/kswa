<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
      table, th, td{
  border: 1px solid black;
  padding: 15px;


}
table :hover{
  background-color: #ffff;
}

.container {
  padding: 40px;

}
body{
  background-color: #ffff;
}
button{
  background-color: #ffffe6;
  border-radius:10px;
  height:80px;
  width:100px;

}
th{
  background-color:#ecc6d9;
}
.edit_button{
  background-color: #ffffe6;
  border-radius:10px;
  height:80px;
  width:100px;
}
h1{
  text-align:center;
}
    </style>
  </head>
  <body>
  <form action='#' method=post>
  <a href="adminview.php">
         <img alt="Qries" src=https://cdn-icons-png.flaticon.com/512/93/93634.png
         width="70" height="70">
    </a>
    <h1>Message</h1>
    <div class="container">
    <table >
      <th>Username</th>
      <th>Email</th>
      <th>Address</th>
      <th>Date</th>
      <th id="thtbl">Contact Now<br>
        <span class="material-icons" >
        </span>
    </th>
      
    <?php include "Connect.php";
$displayQuery = "SELECT * FROM `contactus`";
$result = mysqli_query($conn,$displayQuery);

while ($row = mysqli_fetch_assoc($result)) {
  
$username= $row['username'];
$email = $row['email'];
$address = $row['address'];
$ArrivalDate = $row['ArrivalDate'];

?>

<tr>
  <td> <?php echo $username; ?></td>
  <td> <?php echo $email ?></td>
  <td><?php echo $address ?></td>
  <td><?php echo $ArrivalDate?></td>
  <td style="text-align:center;">
            <input type="submit" style="background:grey;color:white;padding:8px 10px; width:250px;border-radius:3px;" value='<?php echo $row["email"];?>' name="compose">
        </td>

</tr>
<?php
if(isset($_POST["compose"]))
{

  $id = $_POST["compose"];
  
  $subject="Thanks..."; 
  $message= 'we will contact soon';
  $login_details="we will contact soon.";
  echo ("<script LANGUAGE='JavaScript'>
  window.open('https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=$id&Subject=$subject&body=$message, '_blank');
  </script>");

 
}
?>
<script>
  //add active class in selected list item.
let list=document.querySelectorAll('.list');
for(let i=0;i<list.length;i++){
    list[i].onclick=function(){
        let j=0;
        while(j<list.length){
            list[j++].className='list';
        }
        list[i].className='list active';
    }
}
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<?php } ?>


    </table>
  </div>

</form>
  </body>
</html>