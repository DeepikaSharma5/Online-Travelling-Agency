<!DOCTYPE html>
<html>
<head>
<title>Taprobane Tours-Sri Lanka</title>

<link rel="shortcut icon" type="image/x-icon" href="booknow\booknow_css\images\favi.ico" />
<link rel="stylesheet" href="booknow\booknow_css\booknow.css" type="text/css" media="all" />
<link rel="stylesheet" href="booknow\booknow_css\style.css" type="text/css" media="all" />

</script>
</head>

<body>
<!-- Header Section-->
<?php
    include("header.php");
?>
<!-- End-Header-->
<link rel = "stylesheet" type ="text/css" href = "booknow\booknow_css\booknow.css">
<div class="bimage">
<div class="shell">
	<br><br><br><br><br><br>
      <form method="POST" action="submitDetails.php">
			<br><br>
			<h2 align="center">Book Now</h2><br><br>
            <div class="input1">
			Date:<br><br>
			<input type="date" name="bdate">
			<br>
			Adult(Age 13+):
			<br><br>
			<select name='adult' id='adult' value="adultAge">
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
				<option value='5'>5</option>
				<option value='6'>6</option>
				<option value='7'>7</option>
				<option value='8'>8</option>
				<option value='9'>9</option>
				<option value='10'>10</option>
				<option value='11'>11</option>
				<option value='12'>12</option>
			</select>
			<br>
			Child(Age 4-12):
			<br><br>
			<select name='child' id='child' value="childAge">
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
				<option value='5'>5</option>
				<option value='6'>6</option>
				<option value='7'>7</option>
				<option value='8'>8</option>
				<option value='9'>9</option>
				<option value='10'>10</option>
				<option value='11'>11</option>
				<option value='12'>12</option>
			</select>
			<br>
			Number of days:
			<br><br>
			<select name='days' id='days' value="noDays">
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
				<option value='5'>5</option>
				<option value='6'>6</option>
				<option value='7'>7</option>
				<option value='8'>8</option>
				<option value='9'>9</option>
				<option value='10'>10</option>
				<option value='11'>11</option>
				<option value='12'>12</option>
			</select>
			<input type="button" id="update" onclick="updateDetail()" value="Update details" class="btn">
			</div>
			<br><br>
			Number of adults:
			<br><br>
			<h2 align="center" id="adult1"></h2>
			Number of Children:
			<br><br>
			<h2 align="center" id="child1"></h2>
			Total Number of Guests:<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<h2 align="center" id="tGuests"></h2>
			<br><br>
			Total price(USD):
			<br><br>
			<h2 align="center" id="price"></h2>
			<input type="submit" value="Proceed for Booking Details" class="btn">
			<br><br>

      </form>

</div>

<br><br><br><br><br><br><br><br><br><br>

</div>
<!-- Footer Section-->
<?php
    include("footer.php");
?>
<!-- End-Footer-->


<script src="booknow\booknow_js\booknow.js"></script>
</body>
</html>