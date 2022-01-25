<div class="new">
    <div class="contact_us-top">
        <div class="contact_us-top-title">
            <p>BLOG</p>
        </div>
    </div>
    <div class="new-img-list">
        <?php while ($row = mysqli_fetch_assoc($ports_select_selectNewest_blog)) { ?>
            <div class="new-img-list-5">
                <img src="<?php echo $row['image']; ?>" alt="">
                <span><?php echo $row['title']; ?></span>
                <p><i class="fa fa-clock-o" aria-hidden="true"> </i> <?php echo date("d M, Y", strtotime($row['create_at'])); ?></p>
            </div>
        <?php } ?>
    </div>
    <div class="clear"></div>

    <div class="new-blog">
        <div class="new-blog-left">
            <div class="new-blog-left-title">
                TIN CỦA VIỆN
            </div>
            <div class="new-blog-left-y"></div>
            <?php while ($row = mysqli_fetch_assoc($ports_select_news_of_my)) { ?>
                <div class="new-blog-left-img">
                    <img src="<?php echo $row['image']; ?>" alt="">
                </div>
                <div class="new-blog-left-name">
                    <span><?php echo $row['title']; ?></span>
                    <p><i class="fa fa-clock-o" aria-hidden="true"> </i> <?php echo date("d M, Y h:i A", strtotime($row['create_at'])); ?></p>
                    <button>see more &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></button>
                </div>
            <?php } ?>
        </div>
        <div class="new-blog-right">
            <div class="new-blog-right-select">
                <span> View by:</span>
                <select name="" id="">
                    <option value="">Latest</option>
                    <option value="">Oldest</option>
                </select>
            </div>
            <?php while ($row = mysqli_fetch_assoc($ports_select_news_of_my_time)) { ?>
                <div class="new-blog-right-nav">
                    <div class="new-blog-right-nav-img">
                        <img src="<?php echo $row['image'] ?>" alt="">
                    </div>
                    <div class="new-blog-right-nav-name">
                        <span>
                            <?php
                            if (strlen($row['title']) > 80) {
                                $str = substr($row['title'], 0, 80);
                                echo $str . "...";
                            } else {
                                echo $row['title'] . "...";
                            }
                            ?>
                        </span>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;
                            <?php echo date("d M, Y h:i A", strtotime($row['create_at'])) ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="clear"></div>
        <hr>
        <div class="new-blog-pa">
            <button class="new-blog-pa-previous">
                PREVIOUS
            </button>
            <button class="new-blog-pa-1" id="on">1</button>
            <button class="new-blog-pa-1">2</button>
            <button class="new-blog-pa-next">
                NEXT
            </button>
        </div>
    </div>

    <div class="new-blog">
        <div class="new-blog-left">
            <div class="new-blog-left-title">
                TIN TIN LIÊN QUAN ĐẾN VIỆN
            </div>
            <div class="new-blog-left-y-2"></div>
            <?php while ($row = mysqli_fetch_assoc($ports_select_news_invovle)) { ?>
                <div class="new-blog-left-img">
                    <img src="<?php echo $row['image'] ?>" alt="">
                </div>
                <div class="new-blog-left-name">
                    <span>
                        <?php
                        if (strlen($row['title']) > 80) {
                            $str = substr($row['title'], 0, 80);
                            echo $str . "...";
                        } else {
                            echo $row['title'] . "...";
                        }
                        ?>
                    </span>
                    <p><i class="fa fa-clock-o" aria-hidden="true"> </i>
                        <?php echo date("d M, Y h:i A", strtotime($row['create_at'])) ?>
                    </p>
                    <button>see more &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></button>
                </div>
            <?php } ?>
        </div>
        <div class="new-blog-right">
            <div class="new-blog-right-select">
                <span> View by:</span>
                <select name="" id="">
                    <option value="">Latest</option>
                    <option value="">Oldest</option>
                </select>
            </div>
            <?php while ($row = mysqli_fetch_assoc($ports_select_news_of_invovle_time)) { ?>
                <div class="new-blog-right-nav">
                    <div class="new-blog-right-nav-img">
                        <img src="<?php echo $row['image'] ?>" alt="">
                    </div>
                    <div class="new-blog-right-nav-name">
                        <span>
                            <?php
                            if (strlen($row['title']) > 80) {
                                $str = substr($row['title'], 0, 80);
                                echo $str . "...";
                            } else {
                                echo $row['title'] . "...";
                            }
                            ?>
                        </span>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;
                            <?php echo date("d M, Y h:i A", strtotime($row['create_at'])) ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="clear"></div>
        <hr>
    </div>
    <div class="new-blog-pa">
        <button class="new-blog-pa-previous">
            PREVIOUS
        </button>
        <button class="new-blog-pa-1" id="on">1</button>
        <button class="new-blog-pa-1">2</button>
        <button class="new-blog-pa-next">
            NEXT
        </button>
    </div>
    <div class="clear"></div>
    <br>
    <div class="new-hot">
        <div class="new-hot-title">
            <i class="fa fa-caret-up" aria-hidden="true"></i><span>TIN NỔI BẬT</span>
        </div>
        <div class="new-hot-blog-all">
            <?php while ($row = mysqli_fetch_assoc($ports_select_news_hot)) { ?>
                <div class="new-hot-blog-right">
                    <div class="new-hot-blog-right-img">
                        <img src="<?php echo $row['image'] ?>" alt="">
                    </div>
                    <div class="new-hot-blog-right-name">
                        <span><?php echo $row['title'] ?></span>
                        <p><i class="fa fa-clock-o" aria-hidden="true"> </i> &nbsp;
                            <?php echo date("d M, Y h:i A", strtotime($row['create_at'])) ?>
                        </p>
                        <button>SEE MORE &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="clear"></div>
    <div class="new-video">
        <div class="new-video-new">
            <div class="new-video-left">
                VIDEO MỚI NHẤT
                <div class="new-blog-left-y-vedeo"></div>
                <br><br><br>
                <span>Updating</span>

            </div>
        </div>
        <div class="new-nav">
            <?php include('./view/layout/nav.php'); ?>
        </div>
    </div>
    <div class="space">.</div>
</div>