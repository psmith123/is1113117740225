<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
        
            <h4>Select a Product</h4>
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
              <!--Salesforce-->
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
               <!--Amazon Web Service-->
              <label for="Amazon Web Service">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Service @ $300
              </label>
              
              <br/>
               <!--Cloud 9-->
              <label for="Cloud 9">
                <input type="radio" id="Cloud 9" name="product" onClick="disablebtnProceed()"/>
               Cloud 9 @ $200
              </label>
              
              <br/>
               <!--Gmail-->
              <label for="Gmail">
                <input type="radio" id="Gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              
              <br/>
              <br/>
               <!--Subtotal-->
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              <br/>
               <!--Discount-->
              <label for="Discount">
                Discount @ 5%
                <br/>
                (-Discount)
                <input type="text" id="Discount" value="0.00" readonly/>
              </label>
              
              <br/>
              <br/>
              
              <!--VAT-->
              <label for="VAT">
                VAT @ 10%
                <input type="text" id="VAT" value="0.00" readonly/>
              </label>
              
              <br/>
              <br/>
              
               <!--Total-->
              <label for="total">
                Total
                <br/>
                (-Discount + VAT)
                <input type="text" id="total" value="0.00" readonly/>
              </label>
              <br/>
              <br/>
              
              <button type="submit" id="btnProceed"  disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php"  >Clear Choice</a>
            
    
    </body>
</html>