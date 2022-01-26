<?php
include(__DIR__ . "/../connectionDB.php");

use PHPMailer\PHPMailer\PHPMailer;

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
            $message = "
            Title : $content
            Content: $message_details
            Name: $full_name
            Phone: $phone
            Email:  $email";
            $title = "HueIDS";
            $my_email = "quandang097@gmail.com";

            require_once(__DIR__ . "/../../PHPMailer/PHPMailer.php");
            require_once(__DIR__ . "/../../PHPMailer/SMTP.php");
            require_once(__DIR__ . "/../../PHPMailer/Exception.php");
            $mail = new PHPMailer();

            // smtp settings
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "clan999clan@gmail.com";
            $mail->Password = "Hq016936423701";
            $mail->Port = 465;
            $mail->SMTPSecure = "ssl";

            // setting email
            $mail->isHTML(true);
            $mail->setFrom($my_email, $full_name);
            $mail->addAddress("clan999clan@gmail.com");
            $mail->Subject = ("$my_email ($title)");
            $mail->Body = $message;
            if ($mail->send()) {
                header("location: http://hueids.42web.io/hueids/?page=contact_us&success=1");
            } else {
                header("location: http://hueids.42web.io/hueids/?page=contact_us&success=0");
            }
        } else {
            header("location: http://hueids.42web.io/hueids/?page=contact_us&success=0");
        }
    }
}
