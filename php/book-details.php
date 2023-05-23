<?php
// Check if user is logged in and has a unique ID 
// session_start();
include_once "config.php";
if(!isset($_SESSION['unique_id'])){
  header("location: login2.php");
}

//read all row from database table
$sql = "SELECT * FROM rooms";
$result = mysqli_query($conn, $sql);

//check if data is read in the database
if (!$result) {
    die('Could not fetch food data from the database: ' . mysqli_error($conn));
}

//read data of each row
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $room_id = $row['room_id'];
        
        
        //print data of each row
        echo "
        <ul class='bookings'>
            <li>$row[check_in]</li>
            <li>$row[check_out]</li>
            <li>$row[email]</li>
            <li>0$row[phone]</li>
            <li>
                <a style='color:white' href='delete.php?room_id=$row[room_id]'>Delete</a>
            </li>
        </ul>";                    
    }
}else{
    echo "<p class='styled-text'>You Haven't booked any hotel</p>";
}
?>