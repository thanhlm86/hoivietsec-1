<meta content="text/html" charset="utf-8">
<?php include_once("Class/ClassConnectDatabase.php");
include_once("Class/ClassTableNews.php");
include_once("Class/ClassTableCatalog.php");
include_once("Class/ClassTableNotice.php");
include_once("Class/ClassTableAdvert.php");
include_once("Class/ClassTableLink.php");
include_once("Class/ClassTableView.php");
$use1 = new Class_ConnectDatabase();?>
<link rel="stylesheet" href="Css/style.css">
<div class="banner">
</div>
<div class="main_menu">
    <ul class="nav">
        <li><a href="#">Trang chủ</a></li>
        <li><a href="#">Giới thiệu</a>
            <ul id="subnav_news" class="subnav">
                <li>
                    <a href="#">Giới thiệu chung</a></li>
                <li>
                    <a href="#">Điều lệ hội</a></li>
                <li>
                    <a href="#">Danh sách ban chấp hành</a></li>

            </ul>
        </li>

        <li><a href="#">Hội viên</a>
            <ul id="subnav_news" class="subnav">
                <li><a href="#">Đăng ký hội viên</a></li>
                <li><a href="#">Danh sách hội viên</a></li>
            </ul>
        </li>
        <li><a href="#">Tin tức</a>
            <ul id="subnav_news" class="subnav">
                <?php $use2 = new Class_ClassTableCatalog();
                    $array = $use2->SelectCatalogName();
                    foreach($array as $arrayItem){
                ?>
                <li>
                    <a href="NewsCatalogPage.php?ca_id=<?php echo $arrayItem->ca_id;?>"><?php echo $arrayItem->ca_name;?></a>
                </li>
                <?php } ?>
            </ul>
        </li>
        <li><a href="#">Thư viện ảnh</a></li>
        <li><a href="#" target="_blank">Diễn đàn</a></li>
        <li><a href="#">Hỏi đáp</a>
            <ul id="subnav_news" class="subnav">
                <li><a href="#">Gửi câu hỏi</a></li>
                <li><a href="#">Danh sách các câu hỏi đã trả lời</a></li>
            </ul>
        </li>
        <li><a href="#">Liên hệ</a></li>
        <li>
        </li>
        <li><a href="#">Sơ đồ trang</a></li>
        <li>
            <a href="#">Cesky</a>
        </li>
        <li>
            <form accept-charset="utf-8" action="" method="post" id="NewSearchForm" controller="news">
                <div style="display:none;"><input type="hidden" value="POST" name="_method"></div>
                <div class="input text"><input type="text" id="NewTitle" name="data[New][title]"></div>
                <div class="submit"><input type="submit" value="Tìm"></div>
            </form>
        </li>

    </ul>

</div>
<div id="feature-news">
    <span>Tin mới</span>
<!--    <ul id="easyticker">-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2782/thu-tuong-sobotka-cam-on-ong-marcel-winter.html">Thủ tướng Sobotka cảm ơn ông Marcel Winter</a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2781/dai-hoi-lan-thu-ii-va-ky-niem-5-nam-thanh-lap-hoi-dong-huong-vinh-phuc-tai-ch-sec.html">Đại hội lần thứ II và kỷ niệm 5 năm thành lập Hội Đồng Hương Vĩnh Phúc tại CH Séc</a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2780/nguoi-viet-cong-giao-tai-sec-huong-ve-bien-dao-que-huong.html">Người Việt Công giáo tại Séc hướng về biển đảo quê hương</a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2779/kieu-bao-ch-sec-ung-ho-ngu-dan-hoang-sa-truong-sa-100-trieu-dong.html">Kiều bào CH Séc ủng hộ ngư dân Hoàng Sa, Trường Sa 100 triệu đồng</a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2778/thong-diep-cua-nguoi-viet-tai-sec-gui-chinh-quyen-trung-quoc.html">Thông điệp của người Việt tại Séc gửi chính quyền Trung Quốc</a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2777/nguoi-viet-tai-sec-ung-ho-50-000-usd-vi-bien-dao-que-huong.html">Người Việt tại Séc ủng hộ 50.000 USD vì biển đảo quê hương</a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2776/doan-dai-bieu-bo-quoc-phong-viet-nam-do-thuong-tuong-nguyen-chi-vinh-dan-dau-tham-ch-sec.html">Đoàn đại biểu Bộ quốc phòng Việt Nam do Thượng tướng Nguyễn Chí Vịnh dẫn đầu thăm CH Séc</a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2775/thuong-tuong-nguyen-chi-vinh-tham-ch-sec.html">Thượng tướng Nguyễn Chí Vịnh thăm CH Séc</a>-->
<!--        </li>-->
<!--        <li style="display: list-item;">-->
<!--            <a href="/news/view/2774/dai-hoi-lan-hai-hoi-van-hoc-va-nghe-thuat-viet-nam-tai-sec-.html">Đại hội lần hai Hội Văn học và nghệ thuật Việt Nam tại Séc </a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2773/tung-bung-le-hoi-bong-da-danh-cho-nguoi-ham-mo-tai-sec.html">Tưng bừng lễ hội bóng đá dành cho người hâm mộ tại Séc</a>-->
<!--        </li>-->
<!---->
<!--    </ul>-->
</div>