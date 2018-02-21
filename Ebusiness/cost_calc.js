/* global $ */

//Function that calculates the subtotal
function calcSub(){
    
    var argSubTotal;
    /* If statements that change the argSubTotal value depending on which radio button is selected*/
    if(document.getElementById("salesforce").checked){
        argSubTotal = 100; 
    }
    else if(document.getElementById("cloud9").checked){
        argSubTotal = 200; 
    }
    else if(document.getElementById("aws").checked){
        argSubTotal = 300; 
    }
    else{
        argSubTotal = 400;
    }
    
    calcDisVatTotal(argSubTotal); 
}

//Calculates the discount and vat depending on surrent subtotal and then calculates the total price
function calcDisVatTotal(parmSubTotal){
    
    //Declaing variables
    var subTotal;
    var discountrate = 0.05;
    var discountAmt;
    var vatrate = 0.1;
    var vatAmt;
    var totalPrice;
    
    subTotal = parmSubTotal; //Pass the parameter value into a variable
    discountAmt = (subTotal * discountrate); //Calculate the discount
    vatAmt = ((subTotal - discountAmt) * vatrate); //Calculate the vat
    totalPrice = (subTotal - discountAmt + vatAmt ); //Calculate the total
    
    display(subTotal, discountAmt, vatAmt, totalPrice); //Pass the value to complete the function display() next
}

//Function to display subTotal, discountAmt, vatAmt, totalPrice
function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value = parm1; //Display subtotal
    document.getElementById("discount").value = parm2; //Display discount
    document.getElementById("vat").value = parm3; //Display vat
    document.getElementById("total").value = parm4; //Display total
    
    enablebtnProceed();
}

//Function that enables the proceed button
function enablebtnProceed(){
    $("#btnProceed").prop("disabled", false);
}

//Function that disable the proceed button
function disablebtnProceed(){
    $("#btnProceed").prop("disabled", true);
}