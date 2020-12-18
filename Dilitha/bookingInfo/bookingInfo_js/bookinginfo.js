 function checkEmail() {
        if(document.getElementById("mail1").value != document.getElementById("mail2").value){
        alert("Email Mismatch!");
		return false;
    }else{
        alert("Success!");
		return true;
    }	
            } 
			
function enableButton(){
		if(document.getElementById("checkBox").checked){
			document.getElementById("pay").disabled=false;
		}
		else{
			document.getElementById("pay").disabled=true;
		}
	}

	