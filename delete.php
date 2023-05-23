<?php
if(isset($_GET['id'])){
    // Get the ID of the row to delete from the URL parameter
    $id = $_GET["id"];

    include_once "php/config.php";
    // Delete the row from the database
    $sql = "DELETE FROM rooms WHERE id=$id";
    $conn->query($sql);
}
header("Location: book.php");
?>