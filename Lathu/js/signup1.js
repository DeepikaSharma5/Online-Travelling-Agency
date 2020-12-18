function validateForm{
	var a = document.forms["signup"]["fname"],value;
	var b = document.forms["signup"]["lname"],value;
	var c = document.forms["signup"]["uname"],value;
	var d = document.forms["signup"]["address"],value;
	var e = document.forms["signup"]["mobileNumber"],value;
	var f = document.forms["signup"]["psw"],value;
	var g = document.forms["signup"]["cnfrmPwd"],value;
	
	if(a =="" || b == || c =="" || d == || e =="" || f == || g ==""){
		alert("Missed out field!");
		return false;
	}
}