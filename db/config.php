<?php

$servername = "mysql3.000webhost.com";
$username = "a1182581_admin";
$password = "adminuser1";
$database = "a1182581_student";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
