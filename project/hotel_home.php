<?php session_start();?>
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
    color: #ff0000 !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
       color: #ff0000
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



<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="hot1.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Hotel Hilton</h3>
          <p>Welcome to the Hotel Hilton Coimbatore</p>
        </div>      
      </div>

      <div class="item">
        <img src="hot2.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3> 24 hours service</h3>
          <p>Thank you for Choosing us.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="hot3.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Hotel Hilton</h3>
          <p>Welcome to the Hotel Hilton Coimbatore</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>



<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>OUR PHILOSOPHY</h3>
 
  <p><em>Welcome to The Hotel Hilton Experience.</em></p>
  <p>We are a hotel brand providing genuinely warm, caring, consistent, cultured hospitality for the evolving guest. From the airport pick up to departure and every moment in between, we are proud to deliver an authentic hospitality experience. Our philosophy of hospitality with heart ensures that ???tradition??? meets ???tomorrow??? to deliver memorable experiences.
We are Caring, Anticipating, Inspiring and Evolving.</p>
  <br>
  <h3>OUR HOTEL</h3>
  <p><em>HOSPITALITY WITH HEART</em></p>
  <p>The Hotel Hilton Coimbatore is one of the significant landmarks of Coimbatore with an easy access to the airport and the railway station. The hotel has been extensively refurbished and continues to be the city???s epitome of elegance and luxury.

Equipped with 135 well-appointed rooms, dining experiences and leisure facilities, The Residency Towers is how you can experience South Indian hospitality at its best.</p>
  <br>

   <h3>OUR FACILITIES</h3>
   <p><em>Go on and relish our hotel features, where indulgence and warm hospitality meet elegance.</em></p>
  <div class="row">
  <div class="col-sm-4">
      <p class="text-center"><strong>SWIMMING POOL</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="pool.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Relax with a long tall drnk by our poolside</p>
        <p>Surrounded by sun loungers and parasols</p>
        <p>Evening swim under the beautiful night sky</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>WELLNESS</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="spa.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
      
        <p>Our spacious and comfortable wellness center</p>
        <p>strives to achieve your wellness goals </p>
         <p>Dabbling in luxury</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>DINING </strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="dining.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>With options ranging from authentic</p>
        <p>south indian cuisine to continental</p>
        <p>choose whatever flies your fancy at that moment</p>
      </div>
    </div>
  </div>
</div>


<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">ROOMS TYPES</h3>
    <p class="text-center"><br> Book your room here!</p>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="standard.jpg" alt="Paris" width="400" height="300">
          <p><strong>STANDARD</strong></p>
          <p>$2000</p>
          <button class="btn" data-toggle="modal" data-target="#myModal"><a href="standard.php">View room details</a></button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="deluxe.jpg" alt="New York" width="400" height="300">
          <p><strong>DELUXE</strong></p>
          <p>$3000</p>
          <button class="btn" data-toggle="modal" data-target="#myModal"><a href="deluxe.php">View room details</a></button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="sdeluxe.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>SUPER DELUXE</strong></p>
          <p>$4000</p>
          <button class="btn" data-toggle="modal" data-target="#myModal"><a href="superdeluxe.php">View room details</a></button>
        </div>
      </div>
    </div>
  </div>
  




<!-- Container (Contact Section) -->
<div class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We look forward to hear from you!</em></p>
  <div class="row test">
    <div class="col-md-4">
     
      <p><span class="glyphicon glyphicon-map-marker"></span>Coimbatore</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 123456789</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: hotelhitlon@gmail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<img src="map.jpg" class="img-responsive" style="width:100%">

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Made By Aksharaa and Iswarya</p> 
</footer>


<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>


</body>
</html>