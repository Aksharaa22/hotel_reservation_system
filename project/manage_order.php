<?php
session_start();
include_once('connection.php');
    
?>
<html>
<head>

  <title>MANAGE ORDER</title>
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



  * {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 6px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
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
       <li><a href="admin_homepage.html">HOME</a></li>
            <li><a href="manage_rooms.php">MANAGE ROOMS</a></li>
            <li><a href="addroom.php">ADD ROOMS</a></li>
           <li><a href="deleteroom.php">DELETE ROOMS</a></li>   
         <li><a href="manage_order.php">MANAGE ORDERS</a></li>
        <li><a href="hotel_home.php">LOGOUT</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<br><br>
<h2>Manage order</h2>





<table id="myTable">
  <tr class="header">
    <th style="width:30%;">BOOKING ID</th>
    <th style="width:30%;">MEMBER</th>
    <th style="width:30%;">ROOMS</th>
      <th style="width:30%;">DAYS</th>
     <th style="width:30%;">AMOUNT</th>
        <th style="width:30%;">TYPE</th>


  </tr>
<?php
       $sql = "SELECT * FROM cart";
       $result = $conn->query($sql);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?>
<form method="POST" action="manage_order.php">
<tr>
            <td> <?php echo $row["bookingid"]; ?></td>
            <td> <?php echo $row["members"]; ?></td>
            <td> <?php echo $row["rooms"]; ?></td>
             <td> <?php echo $row["days"]; ?></td>
              <td>$<?php echo $row["amt"]; ?></td>
              <td><?php echo $row["type"]; ?></td>

               <input type="hidden" name="hidden_bookingid" value="<?php echo $row["bookingid"]; ?>" />
             <input type="hidden" name="hidden_members" value="<?php echo $row["members"]; ?>" />
            <input type="hidden" name="hidden_rooms" value="<?php echo $row["rooms"]; ?>" />
            
             <input type="hidden" name="hidden_days" value="<?php echo $row["days"]; ?>" />
             <input type="hidden" name="hidden_amt" value="<?php echo $row["amt"]; ?>" />
                <input type="hidden" name="hidden_type" value="<?php echo $row["type"]; ?>" />

        
</tr>
        </form>

        <?php
          }
        }
      ?>


  </table>



</body>
</html>