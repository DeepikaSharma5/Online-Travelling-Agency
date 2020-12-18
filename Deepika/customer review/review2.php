<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Taprobane Tours-Sri Lanka</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="shortcut icon" type="image/x-icon" href="css/images/favi.ico" />
<link rel="stylesheet" href="reviews1.css">
<script src="reviews1.js"></script>
   
</head>
<body>
<div class="header">
  <div class="shell">
    <h1 id="logo"><a href="../../Dilitha/index.php">Taprobane Tours<span>SRI LANKA</span></a></h1>
    <div id="navigation">
      <ul>
         <li><a href="../../Dilitha/index.php" >Home</a></li>
        <li><a href="../../Lathu/locations.html">Locations</a></li>
        <li><a href="../../Vikashna/page one.html">Tours</a></li>
        <li><a href="../../Tharmikan/excursions.html">Excursions</a></li>
        <li><a href="../../Tharmikan/aboutus.html">About Us</a></li>
        <li><a href="../../Kajan/tou.php">Contact</a></li>
        <li><a href="../../Lathu/login.php">Login/ Register</a></li>
      </ul>
    </div>
  </div>
</div>

 
    <div class="page">
      <div class="review">
        <h1 class="re">Reviews</h1><br><br>
			<img src="profile4.jpg" alt="image1" width="100px" height="100px">
			<p><strong>We spent a magic holiday in a wonderful country. A special mention
			to Piyal Sanjaya our driver and guide, always on time </p>
				<br><br>
			<img src="profile5.jpg" alt="image2" width="100px" height="100px">
			<p>Best tourist agency.Good accomodation. great food. Enjoyed alot. Guide was very friendly.</p>
				<br><br>
			<img src="profile6.jpg" alt="image3" width="100px" height="100px">
			<p> I choose this agency for my wedding annaversary trip...... Enjoyed alot with my wife. Will go a family
			trip with this agency soon...... :) .</strong></p>
				<br></br>
			
      </div>
			<form method="post" action="review2.php">
			<div class="comment">
				<h2 class="re">*******Write a new review*******</h2>
			
			</div>
			<?php include('error.php')?>
			<strong>Name :</strong>
			<input type="text" name="Name" placeholder="Your name..." required>
			<br>
			<strong>E-mail :</strong>
			<input type="text" name="E-mail" id="E-mail"  placeholder="Your given email address..." required>
			<br>
			<strong>Title :</strong>
			<input type="text" name="Title" id="Title" placeholder="locations/Services/communication/other"required>
			<br>
			<strong>Country :</strong>
			<input type="text" name="Country" placeholder="Your country..."required>
			<br>
			<strong>Comment :</strong>
			<input type="text" name="comment" placeholder="Write your review..." required>
			<br>
			<p><strong>Do you like our tour locations?</strong></p>			
				<div class="rating">
					<input type="radio" name="rating1" id="star-1" value="5"> <label for="star-1"></label>
					<input type="radio" name="rating1" id="star-2" value="4"> <label for="star-2"></label>
					<input type="radio" name="rating1" id="star-3" value="3"> <label for="star-3"></label>
					<input type="radio" name="rating1" id="star-4" value="2"> <label for="star-4"></label>
					<input type="radio" name="rating1" id="star-5" value="1"> <label for="star-5"></label>			
				</div>	
			<br><br>
			
			
			<p><strong>Do you like our communication method and sending replying speed?</strong></p>
				<div class="rating">
					<input type="radio" name="rating2" id="star-6" value="5"> <label for="star-6"></label>
					<input type="radio" name="rating2" id="star-7" value="4"> <label for="star-7"></label>
					<input type="radio" name="rating2" id="star-8" value="3"> <label for="star-8"></label>
					<input type="radio" name="rating2" id="star-9" value="2"> <label for="star-9"></label>
					<input type="radio" name="rating2" id="star-10" value="1"> <label for="star-10"></label>
			
				</div>		
				<br><br>
				
			<p><strong>How much you like our services?</strong></p>	
				<div class="rating">
					<input type="radio" name="rating3" id="star-11" value="5"> <label for="star-11"></label>
					<input type="radio" name="rating3" id="star-12" value="4"> <label for="star-12"></label>
					<input type="radio" name="rating3" id="star-13" value="3"> <label for="star-13"></label>
					<input type="radio" name="rating3" id="star-14" value="2"> <label for="star-14"></label>
					<input type="radio" name="rating3" id="star-15" value="1"> <label for="star-15"></label>
				</div>
			
				<br><br>
			<button onclick="myFunction()" type="submit" href="/">Add Review</button>
			</form>
		</div>
		<div class="BTNSUB">
		<a href="review1.php"><button class="button">1</button>
		<a href="review2.php"><button class="button">2</button>
		<a href="review3.php"><button class="button">3</button>
		</div>
	</div>
 
<div class="footer">
  <div class="shell2">
    <h3><a href="../../Dilitha/index.php">Home &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <a href="../../Lathu/locations.html">Locations&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <a href="../../Vikashna/page one.html">Tours&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <a href="../../Tharmikan/excursions.html">Excursions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <a href="../../Tharmikan/aboutus.html">About Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <a href="../../Kajan/tou.php">Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
		<a href="../customer review/review1.php">Reviews</a>
        
      </h3>
        <h3 align="right">Our Payment Partners</h3>
        
        <img align="right" src="css/images/card.png" width=15% height=45%>
   <h1 align="left" id="logo"><a href="../../Dilitha/index.php">Taprobane Tours<span>SRI LANKA</span></a></h1>

   <h3 align="center">Contact Details: Tel +94 77 123 5432 | travelme@gmail.com</h3>
   <h3 align="center">Follow Us&nbsp;&nbsp;<img align="center" src="css/images/facebook.png" width=5% height=10%><img align="center" src="css/images/insta.png" width=4% height=8%>&nbsp;&nbsp;<img align="center" src="css/images/twitter.png" width=4% height=5%></h3>
  </div>
</div>
</body>
</html>