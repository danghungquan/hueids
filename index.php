<?php
const INDEX = __DIR__;
include(INDEX . "backEnd/join_data.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="./css/css-header.css">
    <link rel="stylesheet" href="./css/css-menu.css">
    <link rel="stylesheet" href="./css/css-nav.css">
    <link rel="stylesheet" href="./css/css-content.css">
    <link rel="stylesheet" href="./css/css-footer-w.css">
    <link rel="stylesheet" href="./css/css-footer.css">
    <link rel="stylesheet" href="./css/css-contact_us.css">
    <link rel="stylesheet" href="./css/css-training.css">
    <link rel="stylesheet" href="./css/css-new.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include("./view/layout/header.php") ?>
    <?php include("./view/layout/menu.php") ?>
    <div class="main">
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : null;
        switch ($page) {
            case 'contact_us':
                include("./view/contact_us/contact_us.php");
                break;
            case 'training':
                include("./view/training/training.php");
                break;
            case 'new':
                include("./view/news/new.php");
                break;
            case null:
            default:
                include("./view/index/content.php");
                include("./view/layout/nav.php");
                break;
        }
        ?>
    </div>
    <div class="clear"></div>

    <?php include("./view/layout/footer-wrapper.php") ?>
    <?php include("./view/layout/footer.php") ?>
</body>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>