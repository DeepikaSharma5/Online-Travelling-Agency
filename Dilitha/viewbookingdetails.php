

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
<div class="header">
  <div class="shell">
    <h1 id="logo"><a href="#">Taprobane Tours<span>SRI LANKA</span></a></h1>

    <!-- Navigation-->
    <div id="navigation">
      <ul>
        <li><a href="#" class="active">View Booking Details</a></li>
		<li><a href="../Deepika/form/form.php">Add Packages</a></li>
        <li><a href="../Kajan/index1.php">Add Tour Details</a></li>
        <li><a href="#">Logout</a></li> 
      </ul>
    </div>
    <!-- End-Navigation-->
  </div>
</div>
<!-- End-Header-->
<link rel = "stylesheet" type ="text/css" href = "bookingInfo\bookingInfo_css\booknow.css">
<div class="bimage" style="height: 800px" ;>
<div class="shell" style="width: 1400px">
	<br><br>
      <form action="" method="POST">
			<br><br>
			<h2 align="center">View Booking Details</h2><br><br>
            <div>
	<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								
								<th class="column100 column2" data-column="column2">Name</th>
								<th class="column100 column2" data-column="column2">Country</th>
								<th class="column100 column2" data-column="column2">Date</th>
								<th class="column100 column2" data-column="column2">Email</th>
								<th class="column100 column2" data-column="column2">Contact</th>
								<th class="column100 column3" data-column="column3">No.of Adults</th>
								<th class="column100 column4" data-column="column4">No.of Children</th>
								<th class="column100 column5" data-column="column5">No.of Days</th>
								<th class="column100 column2" data-column="column2">Total Price</th>
								<th class="column100 column2" data-column="column2">Special Request</th>
							
							</tr>
						</thead>
						<tbody>

							<?php
							    include_once 'config.php';
							?>

							<!--get data from table-->
							<?php
							$sql = "SELECT * FROM bookingdetails";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {
							        echo "<tr class='row100'><td class='column100 column1' data-column='column1'>".$row["fullname"]."</td><td class='column100 column1' data-column='column1'>".$row["country"]."</td><td class='column100 column1' data-column='column1'>".$row["booking_date"]."</td><td class='column100 column1' data-column='column1'>".$row["email"]."</td><td class='column100 column1' data-column='column1'>".$row["mobile"]."</td><td class='column100 column1' data-column='column1'>".$row["no_of_adults"]."</td><td class='column100 column1' data-column='column1'>".$row["no_of_children"]."</td><td class='column100 column1' data-column='column1'>".$row["no_of_days"]."</td><td class='column100 column1' data-column='column1'>".$row["total_price"]."</td><td class='column100 column1' data-column='column1'>".$row["description"]."</td>";
							        
							    }
							} else {
							    echo "0 results";
							}
							echo "</tbody>";
							echo "</table>";
							$conn->close();
							?>
						
						
					<br><br>
				</div>
      </form>

</div>


</div>


<script src="bookingInfo\bookingInfo_js\bookinginfo.js"></script>

</body>

</html>