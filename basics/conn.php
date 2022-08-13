<?php


$hostName = "localhost";
$userName = "root";
$password = "";
$database = "moiz";
// Create connection
$conn = mysqli_connect($hostName, $userName, $password,$database );
// Check connection
if (!$conn) {
    echo("Connection failed: " . mysqli_connect_error());
}
echo 'Connected successfully';

