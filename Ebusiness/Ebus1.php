<!DOCTYPE html>
<html>
    
    <head>
        <!-- Title of the form -->
        <title>Select Product</title>
        
        
        
        <style>
  
  body{
    text-align: center
  }
          
        </style>

        
        
    </head>
    
    <body>
        <!-- Heading -->
        <h4><strong>Select a Product</strong></h4>
        <br/>
        
        <!-- Layout of the page and proceed to Ebus2 when all actions completed -->
        <form method="POST" action="Ebus2.php">

            <!-- Saleforce radio button -->
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SaleForce @ $100
            </label>
            <br/>
            <br/>
            
            <!-- Cloud 9 radio button -->
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            <br/>
            <br/>
            
            <!-- AWS radio button -->
            <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
            </label>
            <br/>
            <br/>
            
            <!-- Gmail radio button -->
            <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            <br/>
            <br/>
           
            <!-- Subtotal textbox -->
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
            
            <!-- Discount textbox -->
            <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
            
            <!-- VAT textbox -->
            <label for="vat">
                VAT @ 10%
                <input type="text" id="vat" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
           
            <!-- Total textbox -->
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
        
            <!-- Button to submit -->
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            <br/>
            <br/>
            
        </form>
        
       <!-- Calls the calcSub function once button is clicked -->
    <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
            <a href="../homepage.html" class="button">Home</a>
    </body>
</html>