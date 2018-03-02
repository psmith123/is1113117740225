<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    
     <style type="text/css">
            .topnav {
            overflow: hidden;
            background-color: #b4b4b4;
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
                
            .topnav .active {
            background-color: #70708F;
            color: white;
            }
        body { background-image: url(https://cdn-rainbowresource.netdna-ssl.com/products/052387i1.jpg) 
            }
        body { background-size: cover;
            }
        body{  text-align: center
        }
        
    </style>
    
    <head>
        <title> RECEIPT </title>
    </head>
    <body>
        
        <div class="topnav">
        <a href="../homepage.html">Home</a>
      <a class="active" href="cv_page1.html">Personal</a>
      <a href="cv_page2.html">Education</a>
      <a href="cv_page3.html">Work</a>
    </div>
    
        <h4>PAYMENT RECEIPT</h4>
        
        
        <?php
        $_SESSION["user_name"] = $_POST["user_name"];
        $_SESSION["user_email"] = $_POST["user_email"];
        ?>
        
         <?php
            //Echo session variables that were set on previous page
            echo "Name" . $_SESSION["user_name"] . "<br/>";
            echo "Total is " . $_SESSION["total"] . "<br/>";
            echo "Email" . $_SESSION["user_email"]. "<br/>";
            ?>
            
    </body>
    
   
</html>