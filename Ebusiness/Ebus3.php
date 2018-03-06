<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    
     <style>
         
        body { background-image: url(http://www.powerpointhintergrund.com/uploads/light-gray-background-images-hd-2.jpeg) 
            }
        body { background-size: cover;
            }
        body{  text-align: center
        }
        
    </style>
    
    <head>
        <title> RECEIPT </title>
        
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        <br/>
        <br/>
        <h2>PAYMENT RECEIPT</h2>
        <br/>
        <br/>
        
        <?php
        $_SESSION["user_name"] = $_POST["user_name"];
        
        $_SESSION["user_email"] = $_POST["user_email"];
        
        ?>
        
         <?php
            //Echo session variables that were set on previous page
            echo "Name: " . $_SESSION["user_name"] . "<br/>" ."<br/>";
        
            echo "Email: " . $_SESSION["user_email"]. "<br/>" ."<br/>";
            
            echo "Discount: " .  $_SESSION["discount"] ."<br/>"."<br/>";
            
            echo "VAT: " .  $_SESSION["vat"] ."<br/>"."<br/>";
             
            echo "Total: " . $_SESSION["total"] . "<br/>"."<br/>";
            ?>
            
        <a href="../homepage.html"><button class="button">Finish</button></a>
    </body>
    
   
</html>