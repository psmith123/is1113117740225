<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        <!-- Title of the form -->
        <title>Select Product</title>
        
        <style>
        body{ background-image: url(http://www.diarioonline.com.br/app/painel/modulo-noticia/img/imagensdb/original/destaque-464105-t5.jpg)
        }
        body{ background-size:cover;
        }
        
        body{
         text-align: center
        }
          
        </style>
        
    </head>
    
    
    
    <body>
        <!-- Addong a heading -->
        <h4><strong>Select a Product</strong></h4>
        <br/>
        
        <!-- This will bring across infomration when going to the next page -->
        <form method="POST" action="Ebus2.php">

            <!-- Adding a radio button for salesforce -->
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SaleForce @ $100
            </label>
            <br/>
            <br/>
            
            
            <!-- Adding a radio button for Amazon Web Services -->
            <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
            </label>
            <br/>
            <br/>
            
            <!-- Adding a radio button for Cloud 9 -->
            <label for="Cloud 9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            <br/>
            <br/>
            
            <!-- Adding a radio button for Gmail -->
            <label for="Gmail">
                <input type="radio" id="Gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            <br/>
            <br/>
           
            <!--Adding a textbox for the Subtotal  -->
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
            
            <!-- Adding a textbox for the Discount  -->
            <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
            
            <!-- Adding a textbox for the VAT  -->
            <label for="vat">
                VAT @ 10%
                <input type="text" id="vat" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
           
            <!-- Adding a textbox for the total -->
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
        
            <!-- Adding the button to proceed -->
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            <br/>
            <br/>
            
        </form>
        
             <!--Calls the calcSub function -->
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
            <a href="../homepage.html" class="button">Home</a>
            
            <?php
            //Set session as variables
            $_SESSION["total"] = $_POST["total"];
             $_SESSION["user_name"] = $_POST["user_name"];
            ?>
    </body>
</html>