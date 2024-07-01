<?php

//main connection file for both admin & front end
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "onlinefoodphp";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
if ($db) {
    echo "connected";
} else {
    echo "not connected";
}

?>
