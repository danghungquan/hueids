<?php
require_once("./backEnd/connectionDB.php");

$sql = "SELECT * FROM `contact_us`";
$contact_us_select = mysqli_fetch_assoc(mysqli_query($conn, $sql));
