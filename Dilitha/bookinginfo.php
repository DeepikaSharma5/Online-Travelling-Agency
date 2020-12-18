<?php
    		include_once 'config.php';
		?>

<!DOCTYPE html>
<html>
<head>
<title>Taprobane Tours-Sri Lanka</title>
<script src="js/bookinginfo.js">
        </script>
<link rel="stylesheet" href="bookingInfo\bookingInfo_css\style.css" type="text/css" media="all" />
<link rel="shortcut icon" type="image/x-icon" href="bookingInfo\images\favi.ico" />
<link rel="stylesheet" href="bookingInfo\bookingInfo_css\bookinginfo.css" type="text/css" media="all" />
<style>


</style>
</head>
<body>
<!-- Header Section-->
<?php
    include("header.php");
?>
<!-- End-Header-->
<link rel = "stylesheet" type ="text/css" href = "bookingInfo\bookingInfo_css\booknow.css">
<div class="bimage";>
<div class="shell">
	<br><br>

      <form action="submitBookingInfo.php" method="POST">

      	

		<?php
			$sql = "SELECT * FROM bookingdetails order by booking_id DESC limit 1";
			$result = $conn->query($sql);

			while ($row = $result->fetch_assoc()) {
    			$id = $row['booking_id'];
			}

		?>
			<br><br>

			<h2 align="center">Booking Details</h2><br><br>
            <div class="input1">

            <input type="hidden" id="id" name="id" style="width: 50%" value=<?php echo $id ?>>
			Title:
			<br><br>
			<select name='title' id='title' value="Mr.">
				<option value='1'>Mr.</option>
				<option value='2'>Mrs.</option>
				<option value='3'>Ms.</option>
				<option value='4'>Rev.</option>
			</select>
			<br><br>
			Full Name: *
			<br><br>
			<input type="text" id="name" name='name' placeholder="Your name" required style="width: 90%">
			<br>
			Your Country: *
			<br><br>
			<select name='country' id='country' value="-Please select-" required="">
				<option value='Afghanistan'>Afghanistan</option>
				<option value='Australia'>Australia</option>
				<option value='Bangladesh'>Bangladesh</option>
				<option value='Brazil'>Brazil</option>
				<option value='China'>China</option>
				<option value='France'>France</option>
				<option value='Germany'>Germany</option>
				<option value='India'>India</option>
				<option value='Japan'>Japan</option>
				<option value='UnitedKingdom'>United Kingdom</option>
				<option value='USA'>USA</option>
				<option value='SriLanka'>Sri Lanka</option>
			</select>
			<br><br>
			E-mail: *
			<br><br>
			<input type="text" id="mail1" name='mail1' placeholder="emailaddress@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required style="width: 60%">
			<br>
			Mobile No: *
			<br><br>
			<input type="phone" name="mobile" pattern="[0-9]{10}" placeholder="0987654321" required>
			<br><br>
			Special Request:
			<br><br>
			<textarea rows ="7" cols = "150" id="request" name="request" placeholder="Write something..">
			</textarea>
			<br><br>
			<input type="checkbox" name="accept" value="accept" id="checkBox">
			&nbsp;&nbsp;&nbsp;<h6><i>Accept privacy policy and terms.</i></h6>
			<br>
			<br>
			<input type="submit" value="Proceed to Pay" class="btn" id="pay"><br><br>
			</div>
      </form>

</div>
<?php
	// Close connection
	mysqli_close($conn);

?>


</div>
<!-- Footer Section-->
<?php
    include("footer.php");
?>
<!-- End-Footer-->

<script src="bookingInfo\bookingInfo_js\bookinginfo.js"></script>

</body>
</html>