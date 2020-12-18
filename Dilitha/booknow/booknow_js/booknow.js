function updateDetail()
{
	var p1= document.getElementById("adult").value;
	var p2= document.getElementById("child").value;
	var total=parseFloat(p1)+parseFloat(p2);
	var price=parseFloat(total)*2500;
	document.getElementById("adult1").innerHTML = p1;
	document.getElementById("child1").innerHTML = p2;
	document.getElementById("tGuests").innerHTML = total;
	document.getElementById("price").innerHTML = price;
}
