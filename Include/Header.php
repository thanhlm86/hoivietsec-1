<link rel="stylesheet" href="Css/Style.css">
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

                <li>
                    <a href="#">Tin tức, sự kiện</a>
                </li>
                <li>
                    <a href="#">Hoạt động của hội</a>
                </li>
                <li>
                    <a href="#">Quan hệ Việt - Séc</a>
                </li>
                <li>
                    <a href="#">Người Việt tại Séc</a>
                </li>
                <li>
                    <a href="#">Cộng hòa Séc</a>
                </li>
                <li>
                    <a href="#">Việt Nam - Đất nước - Con người</a>
                </li>
                <li>
                    <a href="#">Cầu nối doanh nghiệp Việt-Séc</a>
                </li>
                <li>
                    <a href="#">Trang văn học-nghệ thuật</a>
                </li>
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
<!--        <li style="display: block;">-->
<!--            <a href="/news/view/2767/giua-long-chau-au-nghe-bai-hat-bdquo-viet-nam-que-huong-toi-ldquo-.html">Giữa lòng-->
<!--                châu Âu nghe bài hát „Việt Nam quê hương tôi“</a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2766/tet-thieu-nhi-mung-1-6-va-thi-tai-nang-viet-nhi-tai-tttm-sapa.html">Tết thiếu nhi-->
<!--                mùng 1.6 và thi Tài năng Việt Nhí tại TTTM Sapa</a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2765/dai-le-phat-dan-va-mung-chua-giac-vien-ra-doi-tai-teplice.html">Đại lễ phật đản và-->
<!--                mừng chùa Giác Viên ra đời tại Teplice</a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2764/sokolov-canh-sat-sec-dau-bong-voi-cong-dong-nguoi-viet.html">Sokolov: Cảnh sát Séc-->
<!--                đấu bóng với cộng đồng người Việt</a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2763/lu-lut-o-cong-hoa-sec-gay-thiet-hai-hang-trieu-usd.html">Lũ lụt ở Cộng hòa Séc gây-->
<!--                thiệt hại hàng triệu USD</a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2762/giao-luu-ca-nhac-hat-ve-bien-dao-cua-cong-dong-nguoi-viet-tai-karlovy-vary.html">Giao-->
<!--                lưu ca nhạc: Hát về biển đảo của Cộng đồng người Việt tại Karlovy Vary</a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2761/chi-so-niem-tin-vao-nen-kinh-te-cong-hoa-sec-tang-nhe.html">Chỉ số niềm tin vào nền-->
<!--                kinh tế Cộng hòa Séc tăng nhẹ</a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2760/nguoi-viet-tai-sec-gop-quy-huong-ve-bien-dao-que-huong.html">Người Việt tại Séc góp-->
<!--                quỹ Hướng về biển đảo quê hương</a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2759/cong-dong-nguoi-viet-o-sec-thanh-cong-tu-the-he-thu-hai-.html">Cộng đồng người Việt-->
<!--                ở Séc - thành công từ thế hệ thứ hai </a>-->
<!--        </li>-->
<!--        <li style="display: none;">-->
<!--            <a href="/news/view/2758/ban-cha-p-ha-nh-tw-ho-i-hu-u-nghi-vie-t-nam-se-c-kho-a-iii-tie-n-ha-nh-ky-ho-p-thu-3.html">Ban-->
<!--                Chấp hành TW Hội hữu nghị Việt Nam - Séc khóa III tiến hành kỳ họp thứ 3</a>-->
<!--        </li>-->
<!---->
<!--    </ul>-->
</div>