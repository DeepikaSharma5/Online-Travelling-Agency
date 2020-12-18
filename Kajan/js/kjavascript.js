function validation() {
    var name = document.getElementById("name").value;
     var mobile = document.getElementById("mobile").value;
     var email= document.getElementById("email").value;
     var nationality  = document.getElementById("nationality").value;
     var inquiry= document.getElementById("inquiry").value;
     var error_message= document.getElementById("error_message");
     var text;
    
    
    
    
    if(name.length < 5){
        text="please Enter Valid Name";
        error_message.innerHTML=text;
        return false;
    }
    
    if(email.indexOf("@")== -1|| email.length<6){
        text="please Enter Valid Email";
        error_message.innerHTML=text;
        return false;
    }
    
    
    if(mobile.pattern!="[0-9]{10}"){
        text="please Enter Valid mobile number";
        error_message.innerHtml= text;
        return false;
    }
    alert("Form Submitted Successfully");
    return true;
   
    
}


