<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <style type="text/css">
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
        <h4>PAYMENT RECEIPT</h4>
        
        
         <?php
            //Echo session variables that were set on previous page
            echo "Name" . $_SESSION["user_name"] . ".";
            echo "Total is " . $_SESSION["total"] . ".";
            ?>
            
    </body>
    
   
</html>