<?php

$servername = "localhost";
$username = "mittalc_shop2";
$password = "test";
$db = "mittalc_shop2";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>