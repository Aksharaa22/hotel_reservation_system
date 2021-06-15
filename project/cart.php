<?php
session_start();
include_once('connection.php');
  if(isset($_POST['delete'])){
        $del = "DELETE FROM cart WHERE rooms='".$_POST["hidden_rooms"]."'";
          $result= mysqli_query($conn,$del);
    }
?>
<html lang="en">
<head>
 
  <title>Hotel reservation</title>
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
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
   /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
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
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">


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
        <li><a href="hotel_home.php">HOME</a></li>
        <li><a href="register_hotelhill.php">REGISTER</a></li>
        <li><a href="login.php">LOGIN</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">ROOMS
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
             <li><a href="superdeluxe.php">Super deluxe</a></li>
            <li><a href="deluxe.php">Deluxe</a></li>
            <li><a href="standard.php">Standard</a></li> 
          </ul>
        </li>
       
           <li><a href="#tour">CONTACT US</a></li>
          <li><a href="feedback.php">FEEDBACK</a></li>
            <li><a href="cart.php">RESERVED</a></li>
          <li><a href="login_admin.php">ADMIN</a></li>
               <li><a href="login.php">LOGOUT</a></li>
      
        <li><a><p>Hi <?php  echo $_SESSION['uname']?></p></a></li>

       
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>




<table align='center' class='table' style='background-color:rgba(0,0,0,.1)'>
        <tr>
          <td>BOOKING ID</td>
          <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
          <td>MEMBERS</td>
          <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
          <td>ROOMS</td>
          <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
           <td>DAYS</td>
          <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
             <td>AMOUNT</td>
          <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
          <td>TYPE</td>
          <td></td><td></td><td>

          <td>CANCEL</td>
        </tr>
</table>
<?php
$result = mysqli_query($conn,"SELECT * FROM cart");
$total=0;
  while($row=mysqli_fetch_assoc($result)){
    echo "  <form method='post' action=''>
              <table align='center' class='table'>
        <tr>






              <input type='hidden' name='hidden_bookingid' value='".$row['bookingid']."' />
          <input type='hidden' name='hidden_members' value='".$row['members']."' />
          <input type='hidden' name='hidden_rooms' value='".$row['rooms']."' />
          <input type='hidden' name='hidden_days' value='".$row['days']."' />
          <input type='hidden' name='hidden_amt' value='".$row['amt']."' />
          <input type='hidden' name='hidden_type' value='".$row['type']."' />


          <td>".$row['bookingid']."</td>
          <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
          <td>".$row['members']."</td>
          <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
          <td>".$row['rooms']."</td>
          <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
          <td>".$row['days']."</td>
          <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
          <td>".$row['amt']."</td>
          <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
           <td>".$row['type']."</td>
          <td></td><td></td>

          <td><button type='submit' name='delete' class='button'>CANCEL</button></td>


    
        
        
        </tr>
        </table>
        </form>";
        $total=$total+$row["amt"];
        }
  mysqli_close($conn);
  $_SESSION['amt']=$total;
?>

<p align="center">Total=<?php echo number_format($total, 2); ?><button><a href="pay.php">PAY</a></button></p>


<br><br><br><br><br><br>
<br><br><br>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Made By Aksharaa and Iswarya</p> 
</footer>
</body>
</html>