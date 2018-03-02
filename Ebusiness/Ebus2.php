<?php
//Start the session
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
         <!--Link for the icon beside the address, phone, and email-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <!--Link for the icon beside the address, phone, and email-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <style type="text/css">
           
           input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

          
          body{ background-image: url(https://media.istockphoto.com/photos/manila-file-folder-on-white-background-picture-id147073576?k=6&m=147073576&s=612x612&w=0&h=7h8vJ9Wyd6mkfHda7yIGNcRN9CoVIBOgslzhySTk2UQ=);
          }
          body{ background-size: cover;
          }
          body{ text-align:center;
          }
        </style>
    </head>
  
    <body>
      
      
    
      <br/>
      <div>
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
          </div>
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