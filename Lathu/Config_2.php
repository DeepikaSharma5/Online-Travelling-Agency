<?php
session_start();

$first_name = "";
$last_name = "";
$email    = "";
$address = "";
$contact_no = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'travel');

// REGISTER USER
if (isset($_POST['reg_user'])) {
 
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $contact_no = mysqli_real_escape_string($db, $_POST['contact_no']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $cnfrmpwd = mysqli_real_escape_string($db, $_POST['cnfrmpwd']);
  
  if ($password != $cnfrmpwd) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM users WHERE email='$email' OR contact_no='$contact_no' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['contact_no'] === $contact_no) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO signup (first_name, last_name, email, address, contact_no, password) 
  			  VALUES('$first_name', '$last_nma	e', '$email', '$address', '$contact_no', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../Dilitha/index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ../Dilitha/index.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}

?>