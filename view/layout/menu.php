<?php $i = isset($_GET['page']) ? $_GET['page'] : null ?>
<div class="menu">
    <div class="row">
        <b>
            <a id=" <?php echo $i == "Introduction" ? "color-menu" : ""; ?> " href="http://"> Introduction</a>
            <div class="<?php echo $i == "Introduction" ? "y-menu" : ""; ?>"></div>
        </b>
        <b>
            <a id="<?php echo $i == "new" ? "color-menu" : ""; ?>" href="/3s?page=new"> News</a>
            <div class="<?php echo $i == "new" ? "y-menu" : ""; ?>"></div>
        </b>
        <b>
            <a id="<?php echo $i == "research_consultancy" ? "color-menu" : ""; ?>" href="http://"> Research - Consultancy</a>
            <div class="<?php echo $i == "research_consultancy" ? "y-menu" : ""; ?>"></div>
        </b>
        <b>
            <a id="<?php echo $i == "training" ? "color-menu" : ""; ?>" href="/3s?page=training"> Training</a>
            <div class="<?php echo $i == "training" ? "y-menu" : ""; ?>"></div>
        </b>
        <b>
            <a id="<?php echo $i == "project-topicEvent" ? "color-menu" : ""; ?>" href="http://"> Project - TopicEvent</a>
            <div class="<?php echo $i == "project-topicEvent" ? "y-menu" : ""; ?>"></div>
        </b>
        <b>
            <a id="<?php echo $i == "registration" ? "color-menu" : ""; ?>" href="http://"> Registration</a>
            <div class="<?php echo $i == "registration" ? "y-menu" : ""; ?>"></div>
        </b>
        <b>
            <a id="<?php echo $i == "contact_us" ? "color-menu" : ""; ?>" href="/3s/?page=contact_us"> Contact us</a>
            <div class="<?php echo $i == "contact_us" ? "y-menu" : ""; ?>"></div>
        </b>
    </div>
</div>