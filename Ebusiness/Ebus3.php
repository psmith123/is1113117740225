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
        $_SESSION["user_name"] = $_POST["user_name"];
        $_SESSION["user_email"] = $_POST["user_email"];
        ?>
        
         <?php
            //Echo session variables that were set on previous page
            echo "Name" . $_SESSION["user_name"] . "<br/>";
            echo "Total is " . $_SESSION["total"] . "<br/>";
            echo "Email" .    $_SESSION["user_email"]. "<br/>";
            ?>
            
    </body>
    
   
</html>