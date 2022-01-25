<?php
include('./backEnd/connectionDB.php');

$sql = "SELECT * FROM `training_partners`";
$training_partners = mysqli_query($conn, $sql);

$sql = "SELECT * FROM `student` WHERE `is_delete` = 1 LIMIT 3";
$student_select = mysqli_query($conn, $sql);

$sql = "SELECT * FROM `training_slide_img` LIMIT 4";
$training_slide_img_select = mysqli_query($conn, $sql);

$sql = "SELECT * FROM `posts` WHERE `id` = 1 ";
$training_port_involve = mysqli_query($conn, $sql);
