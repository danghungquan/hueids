<div class="training">
    <div class="training-top">
        <div class="training-top-slide">
            <div class="w3-content w3-display-container">

                <?php while ($row = mysqli_fetch_assoc($training_slide_img_select)) { ?>
                    <div class="w3-display-container mySlides">
                        <img src="<?php echo $row['image']; ?>" style="width:100%; height: 332px;">
                    </div>
                <?php } ?>

                <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
                <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
            </div>
        </div>
        <div class="training-top-nav">
            <?php while ($row = mysqli_fetch_assoc($training_port_involve)) { ?>
                <div class="training-top-nav-img">
                    <img src=" <?php echo $row['image']; ?>" alt="">
                </div>
                <div class="training-top-nav-docs">
                    <span class="training-top-nav-docs-title">
                        <?php echo $row['title'] ?>
                    </span>
                    <p>
                        <?php if (strlen($row['content']) > 250) {
                            $str = substr($row['content'], 0, 250);
                            echo $str . "...";
                        } else {
                            echo $row['content'] . "...";
                        }
                        ?>
                        <span class="training-top-nav-docs-Read-more"> Read more </span>
                    </p>
                <?php } ?>
                </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="training-Trending-courses">
        <span>Trending courses</span>
    </div>
    <div class="clear"></div>
    <div class="training-list-5">
        <div class="training-list-51">
            <span>TRAINING</span>
            <p>
                Short term training courses in improving knowledge and skills on
                business administration, IT, innovation, etc. for businesses,
                organizations, individuals...
            </p>
            <img src="https://hueids.vn/wp-content/uploads/2020/06/%C4%90%C3%A0o-t%E1%BA%A1o-1.png" alt="">
            <div class="training-button">
                <button>
                    <i class="vc_btn3-icon fa fa-tags"></i>
                    Read more
                </button>
            </div>
        </div>
        <div class="training-list-52">
            <span>COACHING</span>
            <p>
                Coaching and mentoring the youth, university students on practicing,
                developing new skills, coping with personal challenges, setting and
                achieving goals, etc…
            </p>
            <img src="https://hueids.vn/wp-content/uploads/2020/06/Hu%E1%BA%A5n-luy%E1%BB%87n-1.png" alt="">
            <div class="training-button">
                <button>
                    <i class="vc_btn3-icon fa fa-tags"></i>
                    Read more
                </button>
            </div>
        </div>
        <div class="training-list-53">
            <span>SOFT SKILLS</span>
            <p>
                Soft skills training for businesses, organizations, individuals:
                Communication skills, Teamwork skills, Presentation skills, Skills in applying IT…
            </p>
            <img src="https://hueids.vn/wp-content/uploads/2020/06/K%E1%BB%B9-n%C4%83ng-m%E1%BB%81m-1.png" alt="">
            <div class="training-button">
                <button>
                    <i class="vc_btn3-icon fa fa-tags"></i>
                    Read more
                </button>
            </div>
        </div>
        <div class="training-list-54">
            <span>INNOVATIONS</span>
            <p>
                Training, coaching, mentoring project teams, startups, businesses in innovation
                field improving knowledge and skills for following topics:Legal…
            </p>
            <img src="https://hueids.vn/wp-content/uploads/2020/06/Kh%E1%BB%9Fi-nghi%E1%BB%87p-1.png" alt="">
            <div class="training-button">
                <button>
                    <i class="vc_btn3-icon fa fa-tags"></i>
                    Read more
                </button>
            </div>
        </div>
        <div class="training-list-55">
            <span>OTHERS</span>
            <p>
                Training programs for students in end- year students universities, colleges and
                training institutions; Training and incubating young leaders…
            </p>
            <img src="https://hueids.vn/wp-content/uploads/2020/06/L%C4%A9nh-v%E1%BB%B1c-kh%C3%A1c-1.png" alt="">
            <div class="training-button">
                <button>
                    <i class="vc_btn3-icon fa fa-tags"></i>
                    Read more
                </button>
            </div>
        </div>
    </div>
    <div class="training-Trending-courses">
        <span>What our student have to say?</span>
    </div>
    <div class="training-say">
        <?php while ($row = mysqli_fetch_assoc($student_select)) { ?>
            <div class="training-say-1">
                <div class="training-say-1-border">
                    <div class="training-say-1-img">
                        <img src="<?php echo $row['image']; ?>" alt="">
                    </div>
                </div>
                <div class="training-say-1-name">
                    <span>
                        <?php echo $row['name']; ?>
                    </span>
                    <p>
                        <?php echo $row['cmt']; ?>
                    </p>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="clear"></div>
    <div class="training-join">
        <div class="training-join-top">REGISTER FOR TRAINING/COACHING PROGRAM</div>
        <div class="training-join-center">
            HueIDS often launch training / coaching programs for businesses,
            organizations, students and interested individuals through Hue Innovation Hub
        </div>
        <div class="training-join-button">
            <button href="submit">
                <i class="vc_btn3-icon fa fa-exclamation-triangle"></i> Join in this coure
            </button>
        </div>
    </div>
    <div class="training-Trending-courses">
        <span>Training partners</span>
    </div>
    <div class="training-buttom-slide">
        <?php while ($row = mysqli_fetch_assoc($training_partners)) { ?>
            <div class="training-buttom-slide-img-1">
                <img src="<?php echo $row['image']; ?>" alt="">
            </div>
        <?php } ?>
    </div>
</div>