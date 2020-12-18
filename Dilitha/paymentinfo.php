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

			<br><br>

			<h2 align="center">Thank you for you Booking</h2><br>
			<p align="center">Please select a payment method and proceed with your payment.</p>
			<br><br><br><br>
            <div class="input1">

            <?php
			$sql = "SELECT total_price FROM bookingdetails order by booking_id DESC limit 1";
			$result = $conn->query($sql);

			while ($row = $result->fetch_assoc()) {
    			$payment = $row['total_price'];
			}

		?>

			<i> Amount to Pay (Rs.): <?php echo $payment ?>.00
			<br><br><br>
			
			Accepted Cards </i>
			<br><br>
			<img src="homepage\images\card.png" width=15% height=45%><br><br><hr>
			<br>
			Select Card Type: *
			<br><br>
			<select name='cardtype' id='cardtype' value="-Please select-" required="">
				<option value='visa'>VISA Card</option>
				<option value='master'>Master Card</option>
			</select>
			<br><br>
			Name on Card: *
			<br><br>
			<input type="text" id="name" name='name' placeholder="Your name" required style="width: 60%">
			<br>
			Card Number: *
			<br><br>
			<input type="text" id="number" name='number' placeholder="XXXX-XXXX-XXXX-XXXX" pattern="^\d{4}-\d{4}-\d{4}-\d{4}$" required style="width: 25%">
			<br>
			Card Expiry: *
			<br><br>
			<input type="text" id="exdate" name='exdate' placeholder="MM/YY" pattern="^\d{2}/\d{2}$" required style="width: 20%">
			<br>
			CVV: *
			<br><br>
			<input type="text" id="exdate" name='exdate' placeholder="XXX" pattern="^\d{3}$" required style="width: 20%">
			<br>
			<input type="checkbox" name="accept" value="accept" id="checkBox">
			&nbsp;&nbsp;&nbsp;<h6><i>I agree with the Booking Terms.</i></h6>
			<br>
			<br>
			<input type="submit" value="Pay Now" class="btn" id="pay"><br><br>
			</div>
      </form>

</div>



</div>
<!-- Footer Section-->
<?php
    include("footer.php");
?>
<!-- End-Footer-->

<script src="bookingInfo\bookingInfo_js\bookinginfo.js"></script>

</body>
</html>