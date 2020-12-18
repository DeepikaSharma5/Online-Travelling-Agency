<?php
$User_Name = $_POST['User_Name'];
$User_Email = $_POST['User_Email'];
$User_num = $_POST['User_num'];
$User_nation = $_POST['User_nation'];
$Date = $_POST['Date'];
$Inquiry = $_POST['Inquiry'];
if (!empty($User_Name) || !empty($User_Email) || !empty($User_num) || !empty($User_nation) || !empty($Date) || !empty($Inquiry)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "travel";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT User_Email From records Where User_Email = ? Limit 1";
     $INSERT = "INSERT Into records (User_Name,User_Email,User_num,User_nation,Date,Inquiry) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $User_Email);
     $stmt->execute();
     $stmt->bind_result($User_Email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssisss", $User_Name,$User_Email,$User_num, $User_nation, $Date,$Inquiry);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>