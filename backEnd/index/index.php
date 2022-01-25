<?php
require_once("./backEnd/connectionDB.php");
$sql = "SELECT p.`id`, p.`title`,p.`content`,p.`image`,p.`I_page`,p.`hot`,p.`create_at`,p.`update_at`,p.`status`,p.`is_delete` ,COUNT(c.id) AS total FROM `posts` AS p LEFT JOIN `comment` AS c ON p.id = c.id_ports WHERE p.`is_delete` = 1 AND p.`status` = 1 GROUP BY p.id LIMIT 7";
$ports_select = mysqli_query($conn, $sql);

if (isset($_GET["nav_key_search"])) {
    $key = $_GET['nav_key_search'];
    $sql = "SELECT * FROM `posts` WHERE `title` LIKE '%" . $key . "%' ORDER BY `create_at` DESC LIMIT 5";
    $ports_select_selectNewest = mysqli_query($conn, $sql);
} else {
    $sql = "SELECT * FROM `posts` ORDER BY `create_at` DESC LIMIT 5";
    $ports_select_selectNewest = mysqli_query($conn, $sql);
}
$sql = "SELECT * FROM `posts` ORDER BY `create_at` DESC LIMIT 5";
$ports_select_selectNewest_blog = mysqli_query($conn, $sql);

// select tin của viện (i_page = 1);
$sql = "SELECT * FROM `posts`  WHERE `i_page` = 1 AND `status` = 1 LIMIT 1";
$ports_select_news_of_my = mysqli_query($conn, $sql);

$sql = "SELECT * FROM `posts`  WHERE `i_page` = 1 AND `status` = 1 ORDER BY `create_at` DESC";
$ports_select_news_of_my_time = mysqli_query($conn, $sql);

// select tin liên quan đến viện (i_page = 2);
$sql = "SELECT * FROM `posts`  WHERE `i_page` = 2 AND `status` = 1 LIMIT 1";
$ports_select_news_invovle = mysqli_query($conn, $sql);

$sql = "SELECT * FROM `posts`  WHERE `i_page` = 2 AND `status` = 1 ORDER BY `create_at` DESC";
$ports_select_news_of_invovle_time = mysqli_query($conn, $sql);

// select các tin tức hot (hot = 1)
$sql = "SELECT * FROM `posts`  WHERE `hot` = 1 AND `status` = 1 ORDER BY `create_at` DESC LIMIT 2";
$ports_select_news_hot = mysqli_query($conn, $sql);
