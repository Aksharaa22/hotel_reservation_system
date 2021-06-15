<?php 
require "connection.php";
if(isset($_POST["cname"]) && isset($_POST["cnumber"]) && isset($_POST["cvv"]) && isset($_POST["exp_month"]) && isset($_POST["exp_year"]))
{
	 header("Location:http://localhost/project/hotel_home.php");
}
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Page</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
</head>
<style>
.body {
  background-image: url('pay.jpg');
}
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 595px; 
}

.container
{
background-color:white;
height:auto;
width:50%;
padding-left:4%;
padding-top:4%;
padding-bottom:4%;
margin-top:1%;
margin-left:26%;
}

.sty
{
border-radius:15px;
background:white;
width:200px;
height:25px;
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


.header
{
	width:100%;
	background-color:black;
}
.header ul
{
	text-align:center;
}
.header ul li
{
	list-style:none;
	display:inline-block;
}
.header ul li a
{
	display:block;
	font-size:22px;
	letter-spacing:3px;
	padding:25px;
	color:#fff;
	
}
.header ul li a:hover
{
	background-color:#211b4385;
}


</style>
<body>	
<body bgcolor="gray" >
    <main>
    	<div class="header">
	<ul>
		<li><a href="#">HOTEL HILTON</a></li>
		<li><a href="hotel_home.php">LOGOUT</a></li>
	</ul>
</div>
        <div class="container">
            <div class="text">
                <h1>Payment Details</h1>
            </div>
            <div class="box">
                <form class="form" method="post" action="" name="pay" onsubmit="return validateform()">
                	


                    <input type="text" class="cname" name="cname" placeholder="Card Holder Name(BLOCK)" required>
                    <input type="number" class="cnumber" name="cnumber" placeholder="Card Number" required>
                    <input type="number" class="exp_month" name="exp_month" placeholder="Expire Month" required>
                    <input type="number" class="exp_year" name="exp_year" placeholder="Expire Year" required>
                    <input type="password" class="cvv" name="cvv" placeholder="CVV" required>
					<br><p>Amount:<?php echo $_SESSION['amt']?></p>
                    <input type="submit" class="button" value="Pay Now">
                </form>
            </div>
        </div>
    </main>
	<script>
	function validateform()
	{
		var cname=document.pay.cname.value;  
		var cnumber=document.pay.cnumber.value;
		var exp_month=document.pay.exp_month.value;  
		var exp_year=document.pay.exp_year.value; 
		var cvv=document.pay.cvv.value; 
		var alphaExp = /^[A-Z\s]+$/;
		var cardExp = /^[0-9]{16}$/;
		var cvv_v=/^[0-9]{3}$/;
		if(!(cname.match(alphaExp)))
		{
			alert("Name must be alphabets in block letters");
			return false;
		}
		if(!(cnumber.match(cardExp)))
		{
			alert("Card number must have 16 digits");
			return false;
		}
		if(!(cvv.match(cvv_v)))
		{
			alert("Enter valid cvv number");
			return false;
		}
}	
	</script>
</body>
</html>