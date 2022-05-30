<html>
<head>
<script>
function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
</head>
<body>
<form name="myform" method="POST"onsubmit="return validateform()">
<table>
<tr>
<td>NAME:<input type="text" name="name"></td></tr>
<tr>
<td>ADDRESS:<input type="text" name="addr"></td></tr>
<tr><td>PHONENO:<input type="text" name="phoneno"></td></tr>
<tr><td>EMAIL:<input type="text" name="email"></td></tr>
<tr><td>password:<input type="text" name="password"></td></tr>
<tr><td>cofirm password:<input type="text" name="confirm"></td></tr>
<tr><td><input type="submit" value="submit" name="submit"></td></tr>
</table>
</form>
function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</body>
</html>
