<?php

// Check if user is logged in and has a unique ID 
  session_start();
  include_once "config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login2.php");
  }

// Get the user's unique ID from the session
$unique_id = mysqli_real_escape_string($conn, $_SESSION['unique_id']);

//this values will store the values from the table
$check_in = mysqli_real_escape_string($conn, $_POST['check-in']);
$check_out = mysqli_real_escape_string($conn, $_POST['check-out']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);


if(!empty($check_in) && !empty($check_out) && !empty($email) && !empty($phone)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        do{
            if(strlen($phone) != 10){
                echo "Phone must be 10 numbers and valid ";
            }else{
                $sql = "INSERT INTO rooms (check_in, check_out, email, phone)" . 
                        "VALUES ('$check_in', '$check_out', '$email', '$phone')";
                $result = $conn->query($sql);
    
                if(!$result){
                    echo "Invalid query: " . $conn->error;
                }else{
                    echo"success";
                }
            }            
        }while(false);
    }else{
        echo "$email is not a valid email!";
    }
}else{
    echo "All input fields are required!";
}
?>