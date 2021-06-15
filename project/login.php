<?php
	require "connection.php";
	session_start();
    if(isset($_POST["uname"]) && isset($_POST["pwd"]))
	{
	$uname = $_POST["uname"];
	$pwd  = $_POST["pwd"];
	$mysql_qry = "select uname,pwd from register where uname='$uname' and pwd='$pwd';";
	$result = mysqli_query($conn,$mysql_qry);
    if(mysqli_num_rows($result) > 0) 
	{
		$_SESSION['uname']=$uname;
     //echo "login success !!!!! Welcome user";
	 header("Location:http://localhost/project/hotel_home.php");
	}
	else 
	{
     echo "login not success";
	}
  }
?>
<html>
<head>
<title>Login Form</title>
<!-- Include CSS File Here -->
<link rel="stylesheet" href="login_style.css"/>
<!-- Include JS File Here -->

</head>
<body>
	<div class="container">
<div class="main">
<h2>Login Form </h2>
   <p>No Account? <a href="register_hotelhill.php">Sign up</a></p>
<form id="form_id" method="post" name="myform">
<label>User Name :</label>
<input type="text" name="uname"  placeholder="Username"  id="uname"/>
<label>Password :</label>
<input type="password" name="pwd" placeholder="Password"  id="pwd"/>
 <input type="submit" class="button" value="Login">
</form>

</div>
</div>
</body>
</html>