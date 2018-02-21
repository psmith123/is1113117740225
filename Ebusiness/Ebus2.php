<?php
//Start the session
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
  
    <body>
      <h4>Please enter your payment details</h4>
        
          <form action="Ebus3.php" method="POST">
            
            <label for="Name">
              Name
               <!--Adding the text box, id, place holder, and validating the name-->
              <input type="text"  id="user_name"  placeholder="Enter Name" pattern="[A-Za-z}" maxlength = "25" required>
            </label>
            
            <br/>
            <br/>
            <label for="Email">
              Email 
              <!--Adding the text box, id, place holder, and validating the email address-->
              <input type="text"  id="user_email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required> 
              
            </label>
            
            <br/>
            <br/>
            
            <label for="user_pin">PIN</label>
            <input type="password" id="user_pin" placeholder="Card PIN" pattern="[0-9]{4}" maxlength = "4" required>
            <br/>
            <br/>
          
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            
          </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
           <script type="text/javascript" src="ebus2_validator.js"></script>
            
            
            <?php
            //Set session as variables
            $_SESSION["total"] = $_POST["total"];
            ?>

    </body>
</html>