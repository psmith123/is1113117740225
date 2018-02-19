/* global $ */
//We must calculate VAT and discount ourself

function calcSub()
{
    var argSubTotal; //Creates Variable
    
    if(document.getElementById('salesforce').checked)
    {
        argSubTotal = 100; //If salesforce is checked the variable = 100
    }
    else if(document.getElementById('aws').checked)
    {
        argSubTotal = 300; //If Amazon Web Service is checked the variable = 300
    }
    else if(document.getElementById('Cloud 9').checked)
    {
        argSubTotal = 200; //If Cloud 9 is checked the variable = 200
    }
   else (document.getElementById('Gmail').checked);
    {
        argSubTotal = 400; //If Gmail is checked the variable = 400
    }
    display(argSubTotal); //Passing variable in the display function
}
function display(parm1) //parm1 equals value of argSubTotal
{
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("total").value = parm1;
    
    enablebtnProceed();
}


function enablebtnProceed()
{
    $('#btnProceed').prop('disabled', false);//find btnProceed go into properties and enable btn
}

function disablebtnProceed()
{
    $('#btnProceed').prop('disabled', true);
}



