<?php
if (isset($_GET["success"])) {
    if ($_GET["success"] == 1) {
?>
        <div style="font-size: 20px; height: 40px; text-align: center; width: 100%; background-color: #34D213; color: white;" class="success">
            <b>Thành Công !!!</b>
        </div>
    <?php } else {
    ?>
        <div style="font-size: 20px; height: 40px; text-align: center; width: 100%; background-color: #E60A06; color: white;" class="success">
            <b>Thất Bại !!!</b>
        </div>
<?php
    }
} ?>

<div class="contact_us">
    <div class="contact_us-top">
        <div class="contact_us-top-title">
            <p>CONTACT US</p>
        </div>
    </div>
    <div class="contact_us-content">
        <div class="contact_us-content-ts">
            <div class="contact_us-content-ts-icon">
                <i style="font-size: 200%" class="fa fa-map-marker"></i>
                <div class="contact_us-content-hr2">
                    <div class="contact_us-content-hr"></div>
                </div>
                <p>TRỤ SỞ </p>
                <span><?php echo $contact_us_select['address-headquarters']; ?></span><br>
                <span> <?php echo $contact_us_select['headquarters']; ?></span>
            </div>
        </div>
        <div class="contact_us-content-dt">
            <div class="contact_us-content-dt-icon">
                <i style="font-size: 200%" class="fa fa-phone"></i>
                <div class="contact_us-content-hr2">
                    <div class="contact_us-content-hr"></div>
                </div>
                <p>ĐIỆN THOẠI </p>
                <span><?php echo $contact_us_select['phone']; ?></span><br>
            </div>
        </div>
        <div class="contact_us-content-e">
            <div class="contact_us-content-e-icon">
                <i style="font-size: 200%" class="fa fa-envelope"></i>
                <div class="contact_us-content-hr2">
                    <div class="contact_us-content-hr"></div>
                </div>
                <p>EMAIL </p>
                <span><?php echo $contact_us_select['email']; ?></span><br>
            </div>
        </div>
    </div>
    <div class="wpb_map_wraper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3826.290413866985!2d107.58302128083145!3d16.460826070694484!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a1378ed5b859%3A0xccdcd5a75a229562!2zMyBMw6ogTGFpLCBWxKluaCBOaW5oLCBUaMOgbmggcGjhu5EgSHXhur8sIFRo4burYSBUaGnDqm4gSHXhur8sIFZp4buHdCBOYW0!5e0!3m2!1svi!2sus!4v1642412833141!5m2!1svi!2sus" width="100%" height="534" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <form action="BackEnd/contact_us/insert_contact.php" method="POST">
        <div class="contact_us-send">
            <div class="contact_us-send-title">
                <span>LIÊN HỆ CÔNG TÁC</span>
                <div class="y-menu"></div>
            </div>
            <div class="contact_us-send-4-input">
                <div class="contact_us-send-input">
                    <input name="full_name" type="text" placeholder="FULL NAME" required>
                </div>
                <div class="contact_us-send-input">
                    <input name="email" type="email" placeholder="EMAIL ADDRESS" required>
                </div>
                <div class="contact_us-send-input">
                    <input name="phone" type="text" placeholder="PHONE NO." required>
                </div>
                <div class="contact_us-send-input">
                    <input name="content" type="text" placeholder="TITLE" required>
                </div>
            </div>
            <div class="contact_us-send-textarea">
                <div class="contact_us-send-textarea-in">
                    <textarea name="message_details" placeholder="MESSAGE DETAILS" required></textarea>
                </div>
            </div>
            <div class="contact_us-send-submit">
                <button type="submit" name="btn_send_contact"><i class="fa fa-envelope"></i> SEND MESSAGERS</button>
            </div>
        </div>
</div>