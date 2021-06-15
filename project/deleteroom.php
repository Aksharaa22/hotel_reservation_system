<?php

	/*--- We have created a variables to display error message ------*/
	$error = "";

	if (isset($_POST["btn_delete"]))
	{
	
		/*-- we included connection files--*/
		$host ="localhost";
        $uname = "root";
        $pwd = '';
        $db_name = "managerooms";

        $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());


		$id = $_POST["id"];
		
		$result = mysqli_connect($host, $uname, $pwd) or die("Connection error: ". mysqli_error());
		mysqli_select_db($result, $db_name) or die("Could not Connect to Database: ". mysqli_error());
		$res=mysqli_query($result,"SELECT id FROM rooms");
		$row=mysqli_fetch_array($res);
	
		if($id == ""){
			$error = "Please enter the id.";
		}
		else
		{
			$result = mysqli_connect($host, $uname, $pwd) or die("Connection error: ". mysqli_error());
			mysqli_select_db($result, $db_name) or die("Could not Connect to Database: ". mysqli_error());
			mysqli_query($result,"delete from rooms where id = '" . $id ."'") or die("Could not Connect to table: ". mysqli_error());
			
			//this code will delete image from folder
			//unlink($row['img_path']);
			//$error = "<p align=center>email user ".$row["email"].""."<br /> has been deleted from table.</p>";
		}
	}

	?>
<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title></title>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
    background: #ececec;color: #333;
   
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }

.main{text-align: center;margin-top: 20px;}
    .main .login-box{margin-top: 30px;}
    .main .tb{width: 70%; height: 40px; margin-bottom: 5px; padding-left: 5px;}
    .main .file_input{margin-top: 10px; margin-bottom: 10px;}
    .main .btn{width: 50%; background: grey; color: #fff;padding: 10px;border-radius: 3px;}
    .main .msg{color: #d14269;}
     .error{color: #d14269; font-size: 0.9rem; padding-top: 5px; display: block;}
     .success{color: #23a465; font-size: 0.9rem; padding-top: 5px; display: block; text-align: center;}
     .topnav {
        overflow: hidden;
        background-color: #333;
      }

  .container {
    padding: 80px 120px;
  }
    .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }


.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" onload="resetSelection()">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">HOTEL HILTON</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin_homepage.html">HOME</a></li>
     
            <li><a href="manage_rooms.php">MANAGE ROOMS</a></li>
            <li><a href="addroom.php">ADD ROOMS</a></li>
           <li><a href="deleteroom.php">DELETE ROOMS</a></li>
         
              
         <li><a href="manage_order.php">MANAGE ORDERS</a></li>
        <li><a href="hotel_home.html">LOGOUT</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="home">

	<div class="container main" >
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<h2>Delete room from Database</h2>

			<form method="POST" action="" enctype="multipart/form-data">
				<div class="col-sm-12 login-box">
					<input type="text" placeholder="Enter  id" name="id" class="tb" />
					<input type="submit" value="Delete" name="btn_delete" class="btn" />
				</div>
				<div class="col-lg-12">
					<div class="msg">
						
					</div>
				</div>
			</form>

		</div>
		<div class="col-sm-4"></div>
	</div>
	</body>
	</html>