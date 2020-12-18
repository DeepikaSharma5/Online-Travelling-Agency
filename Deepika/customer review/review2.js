function myFunction() 
{
	if(Name.length > 30){
		alert("Please enter valid Name");
		return false;
	}
	else if(Country.length < 3 ){
		alert("Please enter your Country name");
		return false;
	}
	else if(comment.length < 10 ){
		alert("Please enter review about us");
		return false;
	}
	else{
		alert("THANKYOU FOR YOUR REVIEW...YOUR REVIEW WILL BE ADDED SOON"); 
		return true;
	}
}