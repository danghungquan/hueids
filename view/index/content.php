<div class="content">
    <?php while ($row = mysqli_fetch_assoc($ports_select)) {
    ?>
        <div class="content-img">
            <img src=" <?php echo $row['image']; ?> " alt="">
        </div>
        <div class="content-title">
            <div class="content-tile-day">
                <table>
                    <tr>
                        <td class="td-day"><?php echo date("d", strtotime($row['create_at'])); ?></td>
                    </tr>
                    <tr>
                        <td class="td-month"><?php echo date("M", strtotime($row['create_at'])); ?></td>
                    </tr>
                </table>
            </div>
            <div class="content-title-name">
                <a href="http://">
                    <b>
                        <?php echo ($row['title']); ?>
                    </b>
                </a>
            </div>
        </div>
        <div class="content-content">
            <span>
                <?php
                if (strlen($row['content']) > 500) {
                    $str = substr($row['content'], 0, 500);
                    echo $str . "...";
                } else {
                    echo strlen($row['content']) < 1 ? "" : $row['content'] . "...";
                } ?>
            </span>
        </div>
        <div class="content-link">
            <div class="content-by">
                <i style="margin-left:7px;" class="fa fa-user"></i>
                <span>By</span>
                <a href="">Hueids</a>
            </div>
            <div class="content-training">
                <i style="margin-left:7px; " class="fa fa-folder"></i>
                <a href="">Training consulting</a>
            </div>
            <div class="content-comments">
                <i style="margin-left:7px; " class="fa fa-comments"></i>
                <a href=""><?php echo ($row['total']); ?> Comments</a>
            </div>

        </div>
        <div class="content-more">
            <div class="content-more-hr">
                <hr>
            </div>
            <div class="content-more-click">
                <span> READ MORE...</span>
            </div>
        </div>
    <?php } ?>
</div>