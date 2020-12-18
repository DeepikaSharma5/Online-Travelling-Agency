<?php
$conn = new mysqli("localhost", "root","", "travel") OR die("Error: " . mysqli_error($conn));

session_start();
//code to save user's data
if(isset($_POST['save'])) {
    if(!empty($_POST['Tourname']) && !empty($_POST['Days']) && !empty($_POST['Price']) && !empty($_POST['description'])) {
        $Tourname = $_POST['Tourname'];
        $Days = $_POST['Days'];
        $Price = $_POST['Price'];
        $description = $_POST['description'];
        $sQuery = "select * from packages limit 50";
        $result = $conn->query($sQuery);


        $iQuery = "INSERT INTO packages(tourname,days,price,description) values(?,?,?,?)";
        
        $stmt = $conn->prepare($iQuery);
        $stmt->bind_param("siis", $Tourname,$Days,$Price,$description);
        if($stmt->execute()) {
            $_SESSION['msg'] ="New record successfully inserted";
            $_SESSION['alert']="alert alert-success";
        }
        $stmt->close();
        $conn->close();
    }
    else {
        $_SESSION['msg'] ="You should able to fill all information";
        $_SESSION['alert']="alert alert-warning";
    }
    header("location: index1.php");
}

#delete data
if(isset($_POST['delete'])) {
    $id = $_POST['delete'];
    
    $dQuery = "DELETE FROM packages WHERE id = ?";
    $stmt = $conn->prepare($dQuery);
    $stmt-> bind_param('i',$id);
    if($stmt->execute()){
        $_SESSION['msg'] = "Selected record is deleted";
        $_SESSION['alert'] = "alert alert-danger";
        
    }
    $stmt->close();
    $conn->close();
    header("location: index1.php");
}

#update package data
if(isset($_POST['edit'])){
    if(!empty($_POST['tourname']) && !empty($_POST['days']) && !empty($_POST['price']) && !empty($_POST['description'])){
        $Tourname = $_POST['Tourname'];
        $Days = $_POST['Days'];
        $Price = $_POST['Price'];
        $description = $_POST['description'];
        $id = $_POST['edit'];
        
        $uQuery = "UPDATE packages SET tourname=?, days=?,price=?, description=? WHERE id=?";
        
        $stmt = $conn->prepare($uQuery);
        $stmt->bind_param("siis", $Tourname,$Days,$Price,$description);
        if($stmt->execute()) {
            $_SESSION['msg'] ="New record successfully updated";
            $_SESSION['alert']="alert alert-success";
        }
        $stmt->close();
        $conn->close();
    }
    else {
         $_SESSION['msg'] ="You should able to fill all update";
         $_SESSION['alert']="alert alert-warning";
    }
     header("location: index1.php");
}

?>