<?php
$servername = "sql213.epizy.com";
$username = "epiz_30897982";
$password = "KbN8GQZQsjHI";
$dbname = "epiz_30897982_XXX";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
