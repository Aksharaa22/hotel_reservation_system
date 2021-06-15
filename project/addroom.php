 <?php
     /*-- we included connection file--*/
     $host ="localhost";
        $uname = "root";
        $pwd = '';
        $db_name = "managerooms";

     if(isset($_POST["btn_insert"]) == "Insert")
     {
        /*---creating variables-----*/
        $name = $_POST["name"];
        $totnum=$_POST["num"];
        $tarffif = $_POST["tar"];
       

        /* creating connection between php to mysql */
        $result  = mysqli_connect($host, $uname, $pwd) or die("Could not connection to MySQL.". mysqli_error());

        /* selecting database */
        mysqli_select_db($result, $db_name) or die("Could not connect to Database.". mysqli_error());

        /*inserting the data using mysql insert command using php mysql query function */
        mysqli_query($result,"INSERT INTO rooms(name,totalroom,tariff) VALUES('$name','$totnum','$tarffif')") or die("could not insert the record.". mysqli_error($result));
        $success = "Data Inserted Successfuly.";
     }
    ?>



<!DOCTYPE html>
<html lang="en">
<head>

  <title>ADMIN HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

  <div class="container main" >
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        
         <h3>ADD ROOMS</h3>
         <div class="control-box">
          <form method="post" id="myform" enctype="multipart/form-data">
             <div class="col-sm-12 login-box">
               <input type="text" placeholder="Enter name" name="name" class="tb" />
             </div>
             <div class="col-sm-12 login-box">
               <input type="text" placeholder="Enter number of room" name="num" class="tb" />
             </div>
             <div class="col-sm-12 login-box">
               <input type="text" placeholder="Enter tarrif" name="tar" class="tb" />
             </div>
              
            
              
             <div class="col-sm-12 login-box">
               <input type="submit" id="insert" value="Insert" name="btn_insert" class="btn" />
             </div>

             <div class="success">
                <div class="msg">
            
          </div>
             </div>
          </form>
          </div>
     </div>
   </div>


</body>
</html>