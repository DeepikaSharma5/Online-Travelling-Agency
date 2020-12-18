<?php include('server one.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Taprobane Tours-Sri Lanka</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="shortcut icon" type="image/x-icon" href="css/images/favi.ico" />

<style>
body {
 background-image:url("images/hotel.jpg");
 background-repeat: no-repeat;
background-size: cover;
}
</style>

</head>
<body>
<form class = "formBox" method="post" action="page2.php">
<?php include('errors.php')?>
<div class="header">
  <div class="shell">
    <h1 id="logo"><a href="#">Taprobane Tours<span>SRI LANKA</span></a></h1>
    <div id="navigation">
      <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Locations</a></li>
        <li><a href="#">Tours</a></li>
        <li><a href="#">Excursions</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Login/ Register</a></li> 
      </ul>
    </div>
  </div>
</div>




	
<center> <h2> <u> contact user </u> </h2> </center> <br/> <br/>


<form action = " " method ="post" >
  
<center> <h2> Fullname	:<input type ="text" name="name"> <br/> <br/></h2></center> <br/><br/>
<center><h2> Email		:<input type = "text">   <br/> <br/></h2> </center> <br/><br/>
<center><h2> Telephone	:<input type = "text">   <br/> <br/></h2> </center> <br/><br/>
<center> <h2>Nationality	:<input type = "text">   <br/> <br/> </h2></center> <br/><br/>
<center> <h2>Country	:<select><option> Sri lanka </option>
				 <option> India  </option>
				 <option> France </option>
				 <option> Spain  </option>
				 <option> China  </option>
				 <option> Italy    </option>
				 <option> Turkey </option>
				 <option> Canada </option>
			 </select>		 <br/> <br/> </h2></center> <br/><br/>

<center> <h2>Tour Name	:<select>
				 <option> tour 1 </option>
				 <option> tour 2 </option>
			 </select>		 <br/><br/></h2> </center> <br/><br/>
<center><h2> Intended travel date:
			<input type = "Date" min="1940.12.01 max="2019.12.30"> <br/> <br/></h2> </center> <br/><br/>

<center> 		<input type ="Submit" name = "send" value="Send Inquiry"> 
         		<input type ="Reset" name ="Reset"> </center> <br/><br/>
 

</form>

<div class="shell">
 
</div>


<div class="footer">
  <div class="shell2">
    <h3>Home &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Locations&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Tours&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Excursions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        About Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
      </h3>
        <h3 align="right">Our Payment Partners</h3>
        
        <img align="right" src="css/images/card.png" width=15% height=45%>
   <h1 align="left" id="logo"><a href="#">Taprobane Tours<span>SRI LANKA</span></a></h1>

   <h3 align="center">Contact Details: Tel +94 77 123 5432 | travelme@gmail.com</h3>
   <h3 align="center">Follow Us&nbsp;&nbsp;<img align="center" src="css/images/facebook.png" width=5% height=10%><img align="center" src="css/images/insta.png" width=4% height=8%>&nbsp;&nbsp;<img align="center" src="css/images/twitter.png" width=4% height=5%></h3>
  </div>
</div>
</body>
</html>