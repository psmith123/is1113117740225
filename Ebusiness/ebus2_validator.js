/* global $ */

function validateDetails(){
    var pin;
    var name;
    var email;
    pin = document.getElementById("user_pin").value;
    name = document.getElementById("user_name").value;
    email = document.getElementById("user_email").value;
    
   
    if (name == ""){
        alert("Please enter your Name");
    }
    else if (email == ""){
        alert("Please enter your Email");
    }
    else if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
     else{
        enablebtnPurchase();
    }
    function enablebtnPurchase(){
    $('#btnPurchase').prop('hidden', false);
   }
    function disablebtnPurchase(){
    $('#btnPurchase').prop('hidden', true);
}
}