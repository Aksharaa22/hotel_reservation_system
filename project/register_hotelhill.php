<?php
require "connection.php";
if(isset($_POST["fname"]) && isset($_POST["uname"]) && isset($_POST["email"]) && isset($_POST["pwd"]) && isset($_POST["repwd"]))
{
  $fname = $_POST["fname"];
  $uname = $_POST["uname"];
  $email = $_POST["email"];
  $pwd  = $_POST["pwd"];
  $repwd  = $_POST["repwd"];
  if(strcmp($pwd,$repwd)==0)
  {
    $mysql_qry = "insert into register values('$fname','$uname','$email','$pwd','$repwd');";
    $result = mysqli_query($conn,$mysql_qry);
    if($result== 1) 
    {
     echo "sign up success !!!!! Welcome "; 
	 header("Location:http://localhost/project/login.php");
    }
    else 
    {
     echo "login not success";
    }
  }
}  
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTER</title>
    <link rel="stylesheet" href="github2.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">


    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  

   background-image: url("registerpic.jpg");
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
background-color:white;
height:auto;
width:50%;
padding-left:4%;
padding-top:4%;
padding-bottom:4%;
margin-top:1%;
margin-left:26%;
opacity: 0.9;
}
.i1{
     background-color: white;
    outline: 1px solid black;
    width:200px;
    height:15px;
    border:0;
    border-radius: 2px;
    text-align: center;
}


/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}


</style>
</head>

<body>
    <main>
    
               <div class="container">
             
              <form class="form" method="post" action="register_hotelhill.php" name="login" onsubmit="return validateform()">

                  <h1><center>HOTEL HILTON</center></h1>
                  <h1>Register</h1>
                 <p>Please fill in this form to create an account.</p>
                 <hr>
                 
                     <label for="fname"><font  color="black" size="4"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></label>
                    <input  class="i1" type="text" placeholder="Full Name" name="fname"   required><br>


                      <br><label for="uname"><font  color="black" size="4"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USERNAME *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></label>
                    <input  class="i1" type="text" placeholder="Username" name="uname"   required><br>

                      <br><label for="email"><font  color="black" size="4"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMAIL ID *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></label>
                     <input  class="i1"  type="email" placeholder="someone@abc.com"  name="email"     required><br>

                  
                     <br><label for="pwd"><font  color="black" size="4"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;PASSWORD *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></label>
                    <input  class="i1" type="password"   placeholder="Password"    name="pwd"    required><br>
             
                   

                   <br><label for="repwd"><font  color="black" size="4"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REPEAT PASSWORD *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></label>
                    <input  class="i1"  type="password"  placeholder="Confirm Password" name="repwd"  required><br>

                  
                   
                     <center><button type="submit" class="registerbtn">Register</button></center> 

                      <br><br>
                     <p><center>Already have an account? <a href="login.php">Sign in</a>.</center></p>
               </div>
  
              </form>


        
 
	<script>
	function validateform()
	{
		var f_name=document.login.fname.value;  
		var user_name=document.login.uname.value;
		var mail_id=document.login.email.value;  
		var pwd=document.login.pwd.value; 
		var c_pwd=document.login.repwd.value; 
		var alphaExp = /^[a-zA-Z]+$/;
		var numExp = /^[0-9]+$/;
		var alphanumExp = /^[a-zA-Z0-9-\_]+$/;
		var emailExp = /^([a-zA-Z0-9_]+)@([a-zA-Z]+).([a-zA-Z]{2,5})$/;
		if(!(f_name.match(alphaExp)))
		{
			alert("Name must be alphabets");
			return false;
		}
		if(!(user_name.match(alphanumExp)))
		{
			alert("User name must be alphanumerical");
			return false;
		}
		if(!(mail_id.match(mailExp)))
		{
			alert("Enter valid Email");
			return false;
		}
		if(!(pwd.match(alphanumExp)))
		{
			alert("Enter valid password");
			return false;
		}
		if(!(c_pwd.match(alphanumExp)))
		{
			alert("Enter Valid Password");
			return false;
		}
}	
	</script>
</body>
</html>