<?php
  require "connection.php";
    if(isset($_POST["username"]) && isset($_POST["password"]))
  {
  $username = $_POST["username"];
  $password  = $_POST["password"];
  $mysql_qry = "select username,password from admin where username='$username' and password='$password';";
  $result = mysqli_query($conn,$mysql_qry);
    if(mysqli_num_rows($result) > 0) 
  {
     echo "login success !!!!! Welcome user";
   header("Location:http://localhost/project/admin_homepage.html");
  }
  else 
  {
     echo "login not success";
  }
  }
?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("hotel_admin_pic.jpg");

  min-height: 480px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #adad85;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<style>
body {
    font-family: 'Abel';font-size: 22px;
}
</style>
<script>

var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "admin" && password == "admin"){
alert ("Login successfully");
window.location = "admin_homepage.html"; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
alert("You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}



</script>
</head>
<body>

<center><h2>HOTEL HILTON</h2></center>
<center><h3>WELCOME ADMIN</h3></center>
<div class="bg-img">
 <form action="admin_homepage.html" class="container" id="form_id" method="post" name="myform">
    <h1>Login</h1>

    <label for="username"><b>USERNAME</b></label>
    <input type="text" placeholder="Enter username"  name="username" id="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password"  name="password" id="password" required>

   <label for="psw"><b>Forget the Password?</b></label>
   
    <button type="submit" class="btn"  id="submit" onclick="validate()" ><a href="admin_homepage.html">Login</a></button>
  </form>
</div>



</body>
</html>