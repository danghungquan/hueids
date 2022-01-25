<div class="nav">
    <div class="nav-pd">
        <b>
            BÀI VIẾT GẦN NHẤT
        </b>
        <hr style="margin: 0px;">
    </div>
    <div id="list_search">
        <?php

        while ($row = mysqli_fetch_assoc($ports_select_selectNewest)) { ?>
            <table>
                <tr>
                    <td class="block-gd-td">
                        <div class="block-gd">
                            <div class="block-img">
                                <img src="<?php echo $row['image']; ?>" alt="">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="block-block">
                            <a href="">
                                <?php echo $row['title']; ?>
                            </a>
                        </div>
                        <div class="block-day">
                            <?php echo date("d M, Y", strtotime($row['create_at'])); ?>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="nav-hr">
                <hr>
            </div>
        <?php } ?>
    </div>
    <div class="nav-form">
        <form method="GET" action="">
            <div class="nav-form-search">
                <div class="input">
                    <input type="text" value="<?php echo isset($_GET["nav_key_search"]) ? $_GET["nav_key_search"] : '' ?>" name="nav_key_search" placeholder="Search...">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>