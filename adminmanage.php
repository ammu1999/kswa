<?php
include 'Connect.php';
if (isset($_SESSION["id"]) != session_id()) {

    echo ("<script LANGUAGE='JavaScript'>
        window.alert('Login first');
        window.location.href='userlogin.php';
      </script>");
} else {
?>
<?php
    if (isset($_POST["register"])) {
        include 'Connect.php';
        if ($_POST["name"]) {
            // code...
        }
        $r_name = $_POST["name"];
        $r_email = $_POST["username"];
        $r_phone = $_POST["email"];
        $r_password = md5($_POST["consumerno"]);
        $r_role = $_POST["roletype"];


        $query = "SELECT phone FROM  tbl_user WHERE phone = '$r_phone' OR email = '$r_email'";
        $result1 = mysqli_query($conn, $query);
        if (mysqli_num_rows($result1) > 0) {
            $_SESSION['errorMessage'] = 'Oops, seems like you are already registered! Please login.';
        } else {
            $sql = "INSERT INTO tbl_user (name,email,phone,password,status) VALUES ('$r_name' , '$r_email' , '$r_phone' , '$r_password', '$r_role' )";
            echo $sql;
            #$sql1 = "INSERT INTO tbl_login (phone,password) VALUES ('$r_phone' , '$r_password' )";
            $res = mysqli_query($conn, $sql);
            $res1 = mysqli_query($conn, $sql1);
            echo ("<script LANGUAGE='JavaScript'>
              window.alert('User added successfully.');
              window.location.href='adminmanage.php';
            </script>");
        }
    }
}
?>

<style>

#contactForm{
background:black;
height:70%;
width:40%;
margin-left:30%;
margin-top:7%;
border-radius:5px;
}
.form-control
{
color:black;
background:white;
height:4%;
width:40%;
margin-left:30%;
}


#contactForm input[type="text"], #contactForm input[type="password"] ,#contactForm select{
    border:none;
	border-bottom:1px solid #fff;
	background-color:#e6ffff;
	outline:none;
	height:40px;
	color:black;
	font-size:16px;
margin-bottom:2.5%;
border-radius:5px;
}
#contactForm select{
    border:none;
	border-bottom:1px solid #fff;
	background-color:#e6ffff;
	outline:none;
	height:40px;
	color:black;
	font-size:16px;
margin-bottom:2.5%;
border-radius:5px;
margin-left:40%;
margin-top:3%;
}
#contactForm input[type="submit"] {
    
	border:none;
	outline:none;
	width:40%;
	height:40px;
	background:Maroon;
	color:White;
	font-size:18px;
	border-radius:20px;
margin-left:30%;
}
#contactForm input[type="submit"]:hover
{
	cursor:pointer;
	color:blue;
}



</style>





<script type="text/javascript">
    function valRegister() {
        var name = document.getElementById("name").value;
        var letters = /^[a-zA-Z\s]*$/;
        var pphone = document.getElementById("phone").value;
        var ph = /^(9|8|7|6)[0-9]{9}$/;
        var eemail = document.getElementById("email").value;
        var pat = /^[a-z.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (document.getElementById('name').value.length == 0 || document.getElementById('email').value.length == 0 || document.getElementById('phone').value.length == 0 || document.getElementById('password').value.length == 0 || document.getElementById('repassword').value.length == 0) {
            alert('Fill all the fields');
            return false;
        } else if (!name.match(letters)) {
            alert("Please enter name correctly without a number");
            return false;
        } else if (!eemail.match(pat)) {
            alert("Please enter valid email");
            return false;
        } else if (!pphone.match(ph)) {
            alert("enter valid consumerno number");
            return false;
        } else if (document.getElementById('password').value != document.getElementById('repassword').value) {
            alert('Password doesnt match');
            return false;
        } else {
            return true;
        }
    }
</script>
<div class="my-5">
    <div class="container my-5 px-5">
        <div class="text-center mb-5">
            <h2 class="sectionhead" style="margin-left:45%;">REGISTER</h2>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <form id="contactForm" method="post" onsubmit="return valRegister()">

                    <!-- Name input-->
                    <div class="form-group mb-3">
                        <!-- <label class="mb-1" for="exampleFormControlInput1">Repair type</label> -->
                        <select class="form-select" aria-label="Default select example" name="roletype" id="roletype" required />
                        <option selected>User role</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                        <option value="3">Technician</option>
                        <option value="4">Staff</option>
                        </select>
                    </div>

                    <!-- <div class="form-group mb-3">
                        <div class="form-group mb-4">
                            <label for="usr" class="mb-1">IMEI</label>
                            <input type="text" class="form-control" id="name" name="name" />
                        </div>
                    </div> -->

                    <div class="form-floating mt-sm-3 mb-1">
                        <input class="form-control" name="name" id='name' type="text" placeholder="Enter your name..." onblur="validate()" required />
                        <label for="name">Name</label>
                        <span class="warBox"></span>
                    </div>
                    <div style="display:none; color: red; padding-left: 10px;">
                        * Name can only be alphabets!
                    </div>
                    <!-- user name-->
                    <div class="form-floating mt-sm-3  mb-1 ">
                        <input class="form-control" name="username" id='username' type="text" placeholder="Enter your username..." onfocusout="validate9()" required />
                        <label for="name">Username</label>
                    </div>
                    <!-- Email input-->
                    <div class="form-floating mt-sm-3  mb-1 ">
                        <input class="form-control" name="email" id='email' type="text" placeholder="Enter your email..." onfocusout="validate9()" required />
                        <label for="name">Email</label>
                    </div>
                    <!--Consumer no-->
                    <div class="form-floating mt-sm-3  mb-1 ">
                        <input class="form-control" name="consumerno" id='consumerno' type="text" placeholder="Enter your consumer no..." onfocusout="validate9()" required />
                        <label for="name">Consumerno</label>
                    </div>
                    <!-- Password input-->
                    <div class="form-floating mt-sm-3 mb-1">
                        <input class="form-control" name="password" id='password' type="password" placeholder="Enter your password..." required />
                        <label for="name">Password</label>
                    </div>
                    <!-- Re-enter input-->
                    <div class="form-floating mt-sm-3">
                        <input class="form-control" name="repassword" id='repassword' type="password" placeholder="Re-enter your password..." onblur="checkPass()" required />
                        <label for="name">Re-enter password</label>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid mt-sm-3">
                        <input type="submit" name="register" class="btn btn-primary btn-lg" value="ADD">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html		