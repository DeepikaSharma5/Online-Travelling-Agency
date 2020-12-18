<?php
    include_once 'config.php';
?>

<?php
	// Escape user inputs for security
	$id = $_POST["id"];
	$name = $_POST["name"];
	$country = $_POST["country"];
	$mail1 = $_POST["mail1"];
	$mobile = $_POST["mobile"];
	$description = $_POST["request"];

	// Attempt insert query execution
	$sql = "UPDATE bookingdetails SET fullname = '$name', country = '$country', email = '$mail1', mobile = '$mobile', description = '$description' WHERE booking_id = '$id'";
	if(mysqli_query($conn, $sql)){
		//echo "<script> alert('Records added successfully!!!!')</script>";
		header("Location:paymentinfo.php");
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}
	 
	// Close connection
	mysqli_close($conn);

?>