<?php
include("../connectionDB.php");

if (isset($_POST["btn_send_contact"])) {
    if (!empty($_POST["full_name"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["content"]) && !empty($_POST["message_details"])) {
        $full_name = $_POST["full_name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $content = $_POST["content"];
        $message_details = $_POST["message_details"];
        $create = date("Y/m/d");
        $sql = "INSERT INTO `contact_work` (`id`, `full_name`, `email`, `phone`, `content`, `message_details`, `create_at`)VALUES (NULL, '$full_name', '$email', '$phone', '$content', '$message_details', '$create')";
        if ($conn->query($sql) === TRUE) {
            $message_detail = "
            Title : $content
            Content: $message_details
            Name: $full_name
            Phone: $phone
            Email:  $email";
            $title = "HueIDS";
            $my_emaiil = "quandang097@gmail.com";
            $send_mail_admin = mail($my_emaiil, $title, $message_detail);
            $send_mail_guest = mail($email, $title, "Thanks! you have contacted us HueIDS.
We will contact you as soon as possible.");
            if (($send_mail_admin == true) && ($send_mail_guest == true)) {
                header("location: http://localhost/3s/?page=contact_us&success=1");
            } else {
                header("location: http://localhost/3s/?page=contact_us&success=0");
            }
        } else {
            header("location: http://localhost/3s/?page=contact_us&success=0");
        }
    }
}
