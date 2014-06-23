<?php include_once("Admin/Class/ClassConnectDatabase.php");
include_once("Admin/Class/ClassTableNews.php"); ?>
<div class="body_left">
    <div id="lastest-new">
        <?php
        $use1 = new Class_ConnectDatabase();
        $use2 = new Class_ClassTableNews();
        $use2->numberNews = 1;
        $array = $use2->SelectNumberNews();
        //        echo "<pre>";
        //        print_r($array);die;
        foreach ($array as $arrayItem) {
            ?>
            <div id="main-lastest">
                <img width="370" src="Admin/Image/<?php echo $arrayItem->ne_image; ?>">

                <div class="main-title-lastest">
                    <a><?php echo $arrayItem->ne_title; ?></a>
                </div>
                <div class="desc-lastest">
                    <span><?php echo $arrayItem->ne_destion; ?></span>
                </div>
            </div>
        <?php } ?>
        <div id="feature-lastest">
            <div id="title-feature-lastest">
                <span><a>Tin nổi bật</a></span>
            </div>
            <ul id="ul-lastestnews">
                <?php
                $use2->numberNews = 6;
                $array =  $use2->SelectNumberNews();
                foreach ($array as $arrayItem) {
                ?>
                <li>
                    <img alt="" src="Admin/Image/<?php echo $arrayItem->ne_image;?>">
                    <a href="">
                        <?php echo $arrayItem->ne_title;?>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="crl"></div>
    </div>
    <div class="crl"></div>
    <div class="adv-cent" align="center"></div>
    <div class="new-tab-block">
            <div class="vs_blocks">
                <div class="vs_title">
                    <a><span></span></a>
                </div>
                <div class="vs_content_block">
                    <img width="100" height="80" src="">
                    <div class="vs_title_content">
                        <a href=""></a>
                    </div>
                    <p><span></span></p>
                    <div class="crl"></div>
                    <ul class="vs_others_content">
                        <li><a href=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="crl"></div>
    </div>
</div>