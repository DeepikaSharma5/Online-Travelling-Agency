<?php include('Config_2.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Taprobane Tours-Sri Lanka</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="shortcut icon" type="image/x-icon" href="css/images/favi.ico" />
<script src="js/signup1.js"></script>
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

<link rel = "stylesheet" type ="text/css" href = "css/signup.css">
<script src = "js/signup.js"> </script>

<div class = "signupBox">
<h2> Sign up </h2>

<form method= "post" name="signup" class = "signupBoxForm"  onSubmit= "validateForm()" action="signup.php">
<?php include('errors.php'); ?>

First Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: 
<input type = "text" name = "first_name" id = "first_namename" value="<?php echo $first_name; ?>"><br><br>

Last Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: 
<input type = "text" name = "last_name" id = "last_name" value="<?php echo $last_name; ?>"><br><br>

Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: 
<input type = "text" name = "email" pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id = "email" value="<?php echo $email; ?>"><br><br>

Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: 
<textarea rows="2" cols="48" name="address" id ="add"></textarea><br><br>

Contact No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: 
<input type="text"  maxlength="10" name="contact_no" pattern="[0-9]{10}" id = "contact" value="<?php echo $contact_no; ?>"><br><br>

Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: 
<input type="password" name="password" id ="password"><br><br>

Confirm Password : 
<input type="password" name="cnfrmpwd" id = "cnfrmPwd"><br><br>

<center>
<p>By creating an account you agree to our Terms and Conditions.</p><br>
<p>
  		Already a member? <a href="login.php">Sign in</a>
</p>
<button type="submit" class="btn" name="reg_user">Register</button>
</center>
</div>
</form>
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