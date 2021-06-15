
<?php
    require_once "connection.php";
     if(isset($_POST["btn_insert"]) == "Insert")
     {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $fb = $_POST["fb"];
       
        mysqli_query($conn,"INSERT INTO feedback(fname,lname,fb) VALUES('$fname','$lname','$fb')") or die("could not insert the record.". mysqli_error($result));
        $success = "Data Inserted Successfuly.";
     }
?>



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
.hdr{
margin-left:280px;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
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

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2 class="hdr">Feedback Form</h2>

<div class="container">
  <form action="feedback.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" placeholder="Your last name..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="subject">Feedback</label>
      </div>
      <div class="col-75">
        <textarea id="fb" name="fb" placeholder="Write your Feedback.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
 

         <center><button id="insert"  name="btn_insert"  class="registerbtn"  >SUBMIT</button></center>  

    </div>
  </form>
</div>

</body>
</html>