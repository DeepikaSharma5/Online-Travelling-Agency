<?php
    include_once 'config.php';
?>

<?php
	// Escape user inputs for security
	$bdate = $_POST["bdate"];
	$adult = $_POST["adult"];
	$child = $_POST["child"];
	$days = $_POST["days"];
	$total = $_POST["adult"] + $_POST["child"];
	$totprice = $total * 2500;
	
	 
	// Attempt insert query execution
	$sql = "INSERT INTO bookingDetails (booking_id,booking_date,no_of_adults,no_of_children,no_of_days,total_price) VALUES ('','$bdate', '$adult', '$child','$days','$totprice')";
	if(mysqli_query($conn, $sql)){
		//echo "<script> alert('Records added successfully!!!!')</script>";
		header("Location:bookinginfo.php");
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}
	 
	// Close connection
	mysqli_close($conn);

?>