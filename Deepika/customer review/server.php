<?php
session_start();

$Name = "";
$Email = "";
$Title = "";
$Country = "";
$Comment = "";
$rating1 = "";
$rating2 = "";
$rating3 = "";
$error = array(); 

$db = mysqli_connect('localhost', 'root', '', 'travel');

if (isset($_POST['Email'])) {
 
  $Name = mysqli_real_escape_string($db, $_POST['Name']);
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
  $Title = mysqli_real_escape_string($db, $_POST['Title']);
  $Country  = mysqli_real_escape_string($db, $_POST['Country']);
  $Comment = mysqli_real_escape_string($db, $_POST['Comment']);
  $rating1 = mysqli_real_escape_string($db, $_POST['rating1']);
  $rating2 = mysqli_real_escape_string($db, $_POST['rating2']);
  $rating3 = mysqli_real_escape_string($db, $_POST['rating3']);
  
  if (empty($Name)) { array_push($error, "Username is required"); }
  if (empty($Email)) { array_push($error, "Email is required"); }
  if (empty($Title)) { array_push($error, "Title is required"); }
  if (empty($Country)) { array_push($error, "Country name is required"); }
  if (empty($Comment)) { array_push($error, "Please add your comment"); }
 
  if (count($error) == 0) {

  	$query = "INSERT INTO review (Name, Email, Title, Country, Comment, rating1, rating2, rating3) 
  			  VALUES('$Name', '$Email', '$Title', '$Country', '$Comment','$rating1', '$rating2', '$rating3')";
  	mysqli_query($db, $query);
  	$_SESSION['Name'] = $Name;
  	$_SESSION['success'] = "Your review will be added soon";
  	header('location: review1.php');
  }
}
?>