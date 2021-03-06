<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    
    <head>
        <!--Adding JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        <!-- Title of the form -->
        <title>Select Product</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!--Styling the page-->
        <!--Image from Google-->
         <style>
          
        body{ background-image: url(http://www.diarioonline.com.br/app/painel/modulo-noticia/img/imagensdb/original/destaque-464105-t5.jpg);
              background-size: cover;
              text-align: center;
        }
          
        </style>
        
    </head>
    
    
    
    <body>
        <!--Adding the navigation bar-->
    <ul>
  <li><a href="../homepage.html">Home</a></li>
  <li><a href="../AboutCloud.html">About Cloud</a></li>
  <li class="dropdowns">
    <a class="dropbtns">Curriculum Vitae</a>
    <div class="dropdown-contents">
      <a href="../CV/cv_page1.html">Personal</a>
      <a href="../CV/cv_page2.html">Education</a>
      <a href="../CV/cv_page3.html">Work</a>
    </div>
  </li>
  
    <li class="dropdowns">
    <a class="dropbtns">Interests</a>
    <div class="dropdown-contents">
      <a href="../interests/sports.html">Sports</a>
      <a href="../interests/travel.html">Travel</a>
      <a href="../interests/CloudServices.html">Cloud Services</a>
    </div>
  </li>
  <li><a href="Ebus1.php">Products</a></li>
  <li><a href="https://github.com/psmith123/is1113117740225" class="fa fa-github"></a></li> 
  <li><a href="https://is1113117740225.herokuapp.com/"><img src="https://png.icons8.com/color/1600/heroku.png" style="width: 20px;" alt="Logo"></a></li>
</ul>
    
        <!-- Adding a heading -->
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
            <label for="cloud9">
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
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
            
            <!-- Adding a textbox for the VAT  -->
            <label for="vat">
                VAT @ 10%
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
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
            <button type="submit" id="btnProceed" class="button" disabled>Add to Shopping Cart</button>
            <br/>
            <br/>
            
        </form>
        
             <!--Calls the calcSub function -->
            <button class="button" onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
            
           
            
            
    </body>
</html>