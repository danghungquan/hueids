<?php
$host = "sql213.epizy.com";
$username = "epiz_30897982";
$password = "KbN8GQZQsjHI";
$dbname = "epiz_30897982_hueids";

// Create connection
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$conn = connect();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
