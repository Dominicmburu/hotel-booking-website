<?php

//Connecting to Database
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Display error if failed to connect to database
if($db->connect_error){
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}
?>