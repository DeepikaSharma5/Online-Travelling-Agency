<?php include('Config_2.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Taprobane Tours-Sri Lanka</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="shortcut icon" type="image/x-icon" href="css/images/favi.ico" />
<script src="js/login.js"></script>

</head>
<body>
<div class="header">
  <div class="shell">
    <h1 id="logo"><a href="../Dilitha/index.php">Taprobane Tours<span>SRI LANKA</span></a></h1>
    <div id="navigation">
      <ul>
       <li><a href="../Dilitha/index.php" >Home</a></li>
        <li><a href="../Lathu/locations.html">Locations</a></li>
        <li><a href="../Vikashna/page one.html">Tours</a></li>
        <li><a href="../Tharmikan/excursions.html">Excursions</a></li>
        <li><a href="../Tharmikan/aboutus.html">About Us</a></li>
        <li><a href="../Kajan/tou.php">Contact</a></li>
        <li><a href="login.php" class="active">Login/ Register</a></li> 
      </ul>
    </div>
  </div>
</div>
<div class="shell">
 
</div>
 
<link rel = "stylesheet" type ="text/css" href = "css/login.css">

<div class = "loginBox" >

<h2> Log in </h2>

<form class = "loginBoxForm" method= "post" action="login.php">
<?php include('errors.php'); ?>

Username : <br><br>
<input type = "text" name = "uname" pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder = "Email address" required><br><br>

Password : <br><br>
<input type = "password" name = "psw" " placeholder = "Password" required> <br><br>

<input onclick="myfunction()" type = "submit"  value = "Log in" name = "login_user"><br>

<center>
Not registered? <a href = "signup.php" >Sign up</a>
</center>
</div>











<br><br><br><br><br><br>



<div class="footer">
  <div class="shell2">
    <h3><a href="../Dilitha/index.php">Home &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <a href="locations.html">Locations&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <a href="../Vikashna/page one.html">Tours&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <a href="../Tharmikan/excursions.html">Excursions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <a href="../Tharmikan/aboutus.html">About Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <a href="../Kajan/tou.php">Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    <a href="../Deepika/customer review/review1.php">Reviews</a>
        
      </h3>
        <h3 align="right">Our Payment Partners</h3>

	<img align="right" src="css/images/card.png" width=15% height=45%>
   <h1 align="left" id="logo"><a href="../Dilitha/index.php">Taprobane Tours<span>SRI LANKA</span></a></h1>

   <h3 align="center">Contact Details: Tel +94 77 123 5432 | travelme@gmail.com</h3>
   <h3 align="center">Follow Us&nbsp;&nbsp;<img align="center" src="css/images/facebook.png" width=5% height=10%><img align="center" src="css/images/insta.png" width=4% height=8%>&nbsp;&nbsp;<img align="center" src="css/images/twitter.png" width=4% height=5%></h3>
  </div>
</div>
</body>
</html>


        