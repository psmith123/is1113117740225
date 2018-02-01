<!DOCTYPE html>
<html>
    <head>
        <title> Select Product </title>
        
        <!--jQuery-->
        <script scr="http://ajax.googlepis.com/ajax/libs/jquery.min.js"></script> 
        <script type="text/javascript" src"cost_calc.js"></script>
        
    </head>
    <body>
        
        <h4> Select Product </h4>
        <br/>
        <form method="POST" action="Ebus2.php">
            
      
        <label for="salesforce">
         <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()">
         salesforce @ $100
        </label>
             
        <label for="aws">
            <input type="radio" id="aws" name="product" onClick="disablebtnProceed()">
            AWS @ $300
        </label>
        
        <br/>
        <br/>
        
        <label for="subtotal">
        Sub Total 
        <input type="text" id="subtotal" value="0.00" readonly/>
        </label>
        
        <br/>
        <br/>
        
        <label for="Total">
            Total
      <input type="text" id="total" value="0.00" readonly/>
        </label>
        </label>
        
        
        
        <br/>
        
        <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Costs</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
    </body>
    
</html>