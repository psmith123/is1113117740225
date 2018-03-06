<?php
//Start the session
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
          <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
         <!--Link for the icon beside the address, phone, and email-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <!--Link for the icon beside the address, phone, and email-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <style>
           
    input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
          
          body{ background-image: url(http://www.powerpointhintergrund.com/uploads/light-gray-background-images-hd-2.jpeg);
                background-size: cover;
                text-align:center;
          }
        </style>
    </head>
  
    <body>
     <ul>
  <li><a href="../homepage.html">Home</a></li>
  <li><a href="../AboutCloud.html">About Cloud</a></li>
  <li class="dropdowns">
    <a class="dropbtns">Curriculum Vitae</a>
    <div class="dropdown-contents">
      <a href="cv_page1.html">Personal</a>
      <a href="cv_page2.html">Education</a>
      <a href="cv_page3.html">Work</a>
    </div>
  </li>
  
    <li class="dropdowns">
    <a class="dropbtns">Interests</a>
    <div class="dropdown-contents">
      <a href="interests/sports.html">Sports</a>
      <a href="interests/travel.html">Travel</a>
      <a href="interests/CloudServices.html">Cloud Services</a>
    </div>
  </li>
  <li><a href="Ebus1.php">Products</a></li>
  <li><a href="https://github.com/psmith123/is1113117740225" class="fa fa-github"></a></li> 
  <li><a href="https://is1113117740225.herokuapp.com/"><img src="https://png.icons8.com/color/1600/heroku.png" style="width: 20px;"></a></li>
</ul>
      
      
      <h1 class="mainheading" >Please enter your payment details</h1>
        
          <form action="Ebus3.php" method="POST">
            <br/>
            <br/>
            <br/>
            <br/>
         
            <label for="Name"><i class="fa fa-user-circle-o" style="font-size:24px"></i></label> 
              Name
               <!--Adding the text box, id, place holder, and validating the name-->
              <input type="text"  id="user_name" name="user_name" placeholder="Enter Name" pattern="[A-Za-z}" maxlength = "25" required>
            </label>
            
            <br/>
            <br/>
            <label for="Email"><i class="fa fa-envelope"></i></label>
              Email 
              <!--Adding the text box, id, place holder, and validating the email address-->
              <input type="text"  id="user_email" name="user_email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required> 
              
            </label>
            
            <br/>
            <br/>
            
            <label for="user_pin"><i class="fa fa-asterisk"></i></label>
             PIN
            <input type="password" id="user_pin" placeholder="Card PIN" pattern="[0-9]{4}" maxlength = "4" required>
            <br/>
            <br/>
          
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            
          </form>
            
            <br/>
            <br/>
            <button onClick="validateDetails()">Validate</button>
        
           <script type="text/javascript" src="ebus2_validator.js"></script>
            
            
            <?php
            //Set session as variables
            $_SESSION["total"] = $_POST["total"];
        
            $_SESSION["discount"] = $_POST["discount"];
         
            $_SESSION["vat"] = $_POST["vat"];
            ?>

    </body>
</html>