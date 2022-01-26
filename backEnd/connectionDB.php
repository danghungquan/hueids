<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "3s";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
