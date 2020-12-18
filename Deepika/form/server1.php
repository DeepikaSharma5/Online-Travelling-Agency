<?php
session_start();

$id = "";
$name   = "";
$image   = "";
$details   = "";
$category   = "";
$location   = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'travel');


if (isset($_POST['id'])) {
 
	$id = mysqli_real_escape_string($db, $_POST['id']);
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$image = mysqli_real_escape_string($db, $_POST['image']);
	$details = mysqli_real_escape_string($db, $_POST['details']);
	$category = mysqli_real_escape_string($db, $_POST['category']);
	$location = mysqli_real_escape_string($db, $_POST['location']);

  if (empty($id)) { array_push($errors, "Admain ID is required"); }
  if (empty($name)) { array_push($errors, "Package name is required"); }
  if (empty($image)) { array_push($errors, "Image is required"); }
  if (empty($details)) { array_push($errors, "Detail of package is required"); }
  if (empty($category)) { array_push($errors, "Category is required"); }
  if (empty($location)) { array_push($errors, "Location is required"); }
 

  if (count($errors) == 0) {
  
  	$query = "INSERT INTO package (id, name, image, details, category, location) 
  			  VALUES('$id', '$name', '$image', '$details', '$category', '$location')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "New package is added";
  	header('location: form.php');
  }
}

?>