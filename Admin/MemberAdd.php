<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">	<title>
        Hội hữu nghị Việt Nam - Cộng hòa Séc	</title>
    <meta content="Hội hữu nghị Việt - Séc, Việt - Séc, Cộng Hòa Séc, Tiệp Khắc" name="description">

    <meta content="Hội hữu nghị Việt - Séc, Việt - Séc, Cộng Hòa Séc, Tiệp Khắc" name="keywords">
    <meta name="author" content="Hoàng Minh Hiền, hienhm@iforce.com.vn, hoangminhhienvn@gmail.com, 091 298 8696">
    <meta name="copyright" content="I.F.S.C, iForce Systems">

    <link href="/favicon.ico" type="image/x-icon" rel="icon"><link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui-1.8.17.custom.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/skin.css">
    <link rel="stylesheet" type="text/css" href="/css/homestyle.css">

    <script type="text/javascript" src="/js/site/jquery-1.7.1.min.js"></script><style type="text/css"></style>
    <script type="text/javascript" src="/js/site/jquery-ui-1.8.17.custom.min.js"></script>
    <script type="text/javascript" src="/js/site/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="/js/site/jquery.timers.js"></script>
    <script type="text/javascript" src="/js/site/jquery.easyticker.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#easyticker').easyticker();
        });
    </script>
    <script type="text/javascript">
        $(function(){
            $('#tab-news1').tabs();
            $('#tab-news2').tabs();
            $('#tab-news3').tabs();
            $('#tab-news4').tabs();
            $('#tab-news5').tabs();
            $('#tab-news6').tabs();
            $('#tab-gall').tabs();
        });

        //thu vien anh

    </script>

    <script type="text/javascript">

        function mycarousel_initCallback(carousel)
        {
            // Disable autoscrolling if the user clicks the prev or next button.
            carousel.buttonNext.bind('click', function() {
                carousel.startAuto(0);
            });

            carousel.buttonPrev.bind('click', function() {
                carousel.startAuto(0);
            });

            // Pause autoscrolling if the user moves with the cursor over the clip.
            carousel.clip.hover(function() {
                carousel.stopAuto();
            }, function() {
                carousel.startAuto();
            });
        };

        jQuery(document).ready(function() {
            jQuery('#mycarousel').jcarousel({
                auto: 5,
                wrap: 'last',
                initCallback: mycarousel_initCallback
            });
        });

    </script>

    <!-- fix chieu cao cua content va sidebar -->
    <script>
        $(document).ready(function () {
            $hside = $("#main-content").height();
            $('#sidebar').css('min-height', $hside);
        });

    </script>

</head>
<body>

<div id="container">
<div id="header">

</div>
<div id="main-menu">
    <ul id="nav">
        <li><a href="/index.php">Trang chủ</a></li>
        <li><a href="/gioithieu.html">Giới thiệu</a>
            <ul class="subnav" id="subnav-news">
                <li>
                    <a href="/intros/index/7/gioi-thieu-chung.html">Giới thiệu chung</a>                             </li>
                <li>
                    <a href="/intros/index/1/dieu-le-hoi.html">Điều lệ hội</a>                             </li>
                <li>
                    <a href="/banchaphanh.html">Danh sách ban chấp hành</a>                             </li>

            </ul>
        </li>

        <li><a href="/thanhvien.html">Hội viên</a>					<ul class="subnav">
                <li><a href="/members/add">Đăng ký hội viên</a></li>
                <li><a href="/thanhvien.html">Danh sách hội viên</a></li>
            </ul>
        </li>
        <li><a href="/news.html">Tin tức</a>                <ul class="subnav" id="subnav-news">

                <li>
                    <a href="/news/catenews/103/tin-tuc-su-kien.html">Tin tức, sự kiện</a>
                </li><li>
                    <a href="/news/catenews/1/hoat-dong-cua-hoi.html">Hoạt động của hội</a>
                </li><li>
                    <a href="/news/catenews/2/quan-he-viet-sec.html">Quan hệ Việt - Séc</a>
                </li><li>
                    <a href="/news/catenews/95/nguoi-viet-tai-sec.html">Người Việt tại Séc</a>
                </li><li>
                    <a href="/news/catenews/97/cong-hoa-sec.html">Cộng hòa Séc</a>
                </li><li>
                    <a href="/news/catenews/104/viet-nam-dat-nuoc-con-nguoi.html">Việt Nam - Đất nước - Con người</a>
                </li><li>
                    <a href="/news/catenews/100/cau-noi-doanh-nghiep-viet-sec.html">Cầu nối doanh nghiệp Việt-Séc</a>
                </li><li>
                    <a href="/news/catenews/101/trang-van-hoc-nghe-thuat.html">Trang văn học-nghệ thuật</a>
                </li></ul>
        </li>
        <li><a href="/thuvienanh.html">Thư viện ảnh</a>				</li>
        <li><a target="_blank" href="/#">Diễn đàn</a></li>
        <li><a href="/hoidap.html">Hỏi đáp</a>
            <ul class="subnav">
                <li><a href="/questions/add">Gửi câu hỏi</a></li>
                <li><a href="/hoidap.html">Danh sách các câu hỏi đã trả lời</a></li>
            </ul>
        </li>
        <li><a href="/lienhe.html">Liên hệ</a></li>
        <li>
        </li><li><a href="/sitemap.html">Sơ đồ trang</a></li>
        <li>
            <a href="#">Cesky</a>
        </li>
        <li> <form controller="news" id="NewSearchForm" method="post" action="/news/search" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div><div class="input text"><input name="data[New][title]" type="text" id="NewTitle"></div><div class="submit"><input type="submit" value="Tìm"></div></form></li>

    </ul>

</div>
<div id="feature-news">
    <span>Tin mới</span>
    <ul id="easyticker">
        <li style="display: none;">
            <a href="/news/view/2777/nguoi-viet-tai-sec-ung-ho-50-000-usd-vi-bien-dao-que-huong.html">Người Việt tại Séc ủng hộ 50.000 USD vì biển đảo quê hương</a>
        </li>
        <li style="display: none;">
            <a href="/news/view/2776/doan-dai-bieu-bo-quoc-phong-viet-nam-do-thuong-tuong-nguyen-chi-vinh-dan-dau-tham-ch-sec.html">Đoàn đại biểu Bộ quốc phòng Việt Nam do Thượng tướng Nguyễn Chí Vịnh dẫn đầu thăm CH Séc</a>
        </li>
        <li style="display: none;">
            <a href="/news/view/2775/thuong-tuong-nguyen-chi-vinh-tham-ch-sec.html">Thượng tướng Nguyễn Chí Vịnh thăm CH Séc</a>
        </li>
        <li style="display: none;">
            <a href="/news/view/2774/dai-hoi-lan-hai-hoi-van-hoc-va-nghe-thuat-viet-nam-tai-sec-.html">Đại hội lần hai Hội Văn học và nghệ thuật Việt Nam tại Séc </a>
        </li>
        <li style="display: none;">
            <a href="/news/view/2773/tung-bung-le-hoi-bong-da-danh-cho-nguoi-ham-mo-tai-sec.html">Tưng bừng lễ hội bóng đá dành cho người hâm mộ tại Séc</a>
        </li>
        <li style="display: none;">
            <a href="/news/view/2772/hoi-dong-huong-bac-ninh-tai-sec-doi-dieu-suy-ngam-truoc-cuoc-gap-lon-dau-tien.html">Hội đồng hương Bắc Ninh tại Séc - Đôi điều suy ngẫm trước cuộc gặp lớn đầu tiên</a>
        </li>
        <li style="display: none;">
            <a href="/news/view/2771/u-nejsme-jen-stanka-i-ika-prvni-vietnamsky-politik-v-esku.html">Už nejsme jen stánkaři, říká první vietnamský politik v Česku</a>
        </li>
        <li style="display: none;">
            <a href="/news/view/2770/dai-su-truong-manh-son-tham-va-lam-viec-tai-thanh-pho-znojmo.html">Đại sứ Trương Mạnh Sơn thăm và làm việc tại thành phố Znojmo</a>
        </li>
        <li style="display: list-item;">
            <a href="/news/view/2769/dai-su-truong-manh-son-tham-va-lam-viec-tai-thanh-pho-pardubice.html">Đại sứ Trương Mạnh Sơn thăm và làm việc tại thành phố Pardubice</a>
        </li>
        <li style="display: none;">
            <a href="/news/view/2768/khanh-thanh-tuong-dai-thi-hao-nga-pushkin-tai-cong-hoa-sec.html">Khánh thành tượng đại thi hào Nga Pushkin tại Cộng hòa Séc</a>
        </li>

    </ul>		</div>


<div id="content">
<div id="main-content">
<div class="members form">
<div id="breadcrumb"><span class="breadcrumb-home"><a href="/">Trang chủ</a></span>››
    <a href="/members/add">Đăng ký làm hội viên </a> </div>
<div class="content">
<form id="fregister" name="fregister" onsubmit="return checkForm()" enctype="multipart/form-data" method="post" action="/members/add" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div> 	<div class="input text required"><label for="MemberHotendem">Họ tên đệm<span>*</span></label><input name="data[Member][hotendem]" type="text" maxlength="50" id="MemberHotendem"></div><div class="input text required"><label for="MemberTen">Tên<span>*</span></label><input name="data[Member][ten]" type="text" maxlength="50" id="MemberTen"></div><div class="input text required"><label for="MemberNamsinh">Năm sinh (4 số năm sinh) <span>*</span></label><input name="data[Member][namsinh]" type="text" class="fnumber" maxlength="4" id="MemberNamsinh"></div><div class="label">Giới tính<span>*</span></div><input type="hidden" name="data[Member][gioitinh]" id="MemberGioitinh_" value=""><input type="radio" name="data[Member][gioitinh]" id="MemberGioitinh1" value="1"><label for="MemberGioitinh1">  Nam   </label><input type="radio" name="data[Member][gioitinh]" id="MemberGioitinh2" value="2"><label for="MemberGioitinh2">  Nữ</label><div class="input text"><label for="MemberChucvu">Chức vụ</label><input name="data[Member][chucvu]" type="text" maxlength="100" id="MemberChucvu"></div><div class="input text"><label for="MemberCoquancongtac">Cơ quan công tác</label><input name="data[Member][coquancongtac]" type="text" maxlength="255" id="MemberCoquancongtac"></div><div class="input text"><label for="MemberDiachicoquan">Địa chỉ cơ quan</label><input name="data[Member][diachicoquan]" type="text" maxlength="255" id="MemberDiachicoquan"></div><div class="input text"><label for="MemberDienthoaicoquan">Điện thoại cơ quan</label><input name="data[Member][dienthoaicoquan]" type="text" maxlength="100" id="MemberDienthoaicoquan"></div><div class="input text"><label for="MemberDiachi">Địa chỉ nhà riêng</label><input name="data[Member][diachi]" type="text" maxlength="300" id="MemberDiachi"></div><div class="input text"><label for="MemberDienthoainha">Điện thoại nhà</label><input name="data[Member][dienthoainha]" type="text" maxlength="20" id="MemberDienthoainha"></div><div class="input text"><label for="MemberDidong">Điện thoại di động</label><input name="data[Member][didong]" type="text" maxlength="20" id="MemberDidong"></div><div class="input text"><label for="MemberEmail">Email</label><input name="data[Member][email]" type="text" maxlength="100" id="MemberEmail"></div><div class="input select required"><label for="MemberWorksId">Đã <span>*</span></label><select name="data[Member][works_id]" id="MemberWorksId">
        <option value="1">Học đại học</option>
        <option value="2">Công tác</option>
        <option value="3">Nghiên cứu sinh</option>
        <option value="4">Học nghề</option>
        <option value="5">Lao động</option>
        <option value="6">Khác</option>
    </select></div>Tại Cộng hòa Séc  <select name="data[Member][tunam][year]" class="fnumber" id="MemberTunamYear">
    <option value="">Từ năm</option>
    <option value="2014">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option value="2000">2000</option>
    <option value="1999">1999</option>
    <option value="1998">1998</option>
    <option value="1997">1997</option>
    <option value="1996">1996</option>
    <option value="1995">1995</option>
    <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
</select><select name="data[Member][dennam][year]" class="fnumber" id="MemberDennamYear">
    <option value="">Đến năm</option>
    <option value="2014">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option value="2000">2000</option>
    <option value="1999">1999</option>
    <option value="1998">1998</option>
    <option value="1997">1997</option>
    <option value="1996">1996</option>
    <option value="1995">1995</option>
    <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
</select><div class="input text"><label for="MemberTaicoquan">Tại Trường/Cơ quan</label><input name="data[Member][taicoquan]" type="text" maxlength="255" id="MemberTaicoquan"></div><div class="input text"><label for="MemberThanhpho">Thành phố</label><input name="data[Member][thanhpho]" type="text" maxlength="50" id="MemberThanhpho"></div><div class="input text"><label for="MemberChuyennganh">Chuyên ngành</label><input name="data[Member][chuyennganh]" type="text" maxlength="50" id="MemberChuyennganh"></div><div class="input textarea"><label for="MemberThongtinthem">Hiện tại đang sinh hoạt/<br>tham dự Ban liên lạc  <br>Trường/Thành phố/Khóa
        <br>nào?</label><textarea name="data[Member][thongtinthem]" cols="30" rows="6" id="MemberThongtinthem"></textarea></div><div class="input file"><label for="MemberAnhdaidien">Ảnh chân dung</label><input type="file" name="data[Member][anhdaidien]" id="MemberAnhdaidien"></div><div class="input select required"><label for="MemberCityId">Hội viên thuộc chi hội: <span>*</span></label><select name="data[Member][city_id]" id="MemberCityId">
        <option value="1">An Giang</option>
        <option value="2">Bà Rịa - Vũng Tàu</option>
        <option value="3">Bạc Liêu</option>
        <option value="4">Bắc Kạn</option>
        <option value="5">Bắc Giang</option>
        <option value="6">Bắc Ninh</option>
        <option value="7">Bến Tre</option>
        <option value="8">Bình Dương</option>
        <option value="9">Bình Định</option>
        <option value="10">Bình Phước</option>
        <option value="11">Bình Thuận</option>
        <option value="12">Cà Mau</option>
        <option value="13">Cao Bằng</option>
        <option value="14">Cần Thơ</option>
        <option value="15">Đà Nẵng</option>
        <option value="16">Đắc Lắc</option>
        <option value="17">Đắc Nông</option>
        <option value="18">Điện Biên</option>
        <option value="19">Đồng Nai</option>
        <option value="20">Đồng Tháp</option>
        <option value="21">Gia Lai</option>
        <option value="22">Hà Giang</option>
        <option value="23">Hà Nam</option>
        <option value="24">Hà Nội</option>
        <option value="25">Hà Tĩnh</option>
        <option value="26">Hải Dương</option>
        <option value="27">Hải Phòng</option>
        <option value="28">Hậu Giang</option>
        <option value="29">Hòa Bình</option>
        <option value="30">Hưng Yên</option>
        <option value="31">Khánh Hòa</option>
        <option value="32">Kiên Giang</option>
        <option value="33">Kon Tum</option>
        <option value="34">Lai Châu</option>
        <option value="35">Lâm Đồng</option>
        <option value="36">Lạng Sơn</option>
        <option value="37">Lào Cai</option>
        <option value="38">Long An</option>
        <option value="39">Nam Định</option>
        <option value="40">Nghệ An</option>
        <option value="41">Ninh Bình</option>
        <option value="42">Ninh Thuận</option>
        <option value="43">Phú Thọ</option>
        <option value="45">Phú Yên</option>
        <option value="46">Quảng Bình</option>
        <option value="47">Quảng Nam</option>
        <option value="48">Quảng Ngãi</option>
        <option value="49">Quảng Ninh</option>
        <option value="50">Quảng Trị</option>
        <option value="51">Sóc Trăng</option>
        <option value="52">Sơn La</option>
        <option value="53">Tây Ninh</option>
        <option value="54">Thái Bình</option>
        <option value="55">Thái Nguyên</option>
        <option value="56">Thanh Hóa</option>
        <option value="57">Thừa Thiên Huế</option>
        <option value="58">Tiền Giang</option>
        <option value="59">Thành phố Hồ Chí Minh</option>
        <option value="60">Trà Vinh</option>
        <option value="61">Tuyên Quang</option>
        <option value="62">Vĩnh Long</option>
        <option value="63">Vĩnh Phúc</option>
        <option value="64">Yên  Bái</option>
        <option value="65">CH Séc</option>
        <option value="66">CH Pháp</option>
    </select></div><div class="label">Đã có thẻ hội viên<span>*</span></div><input type="hidden" name="data[Member][thehoivien]" id="MemberThehoivien_" value=""><input type="radio" name="data[Member][thehoivien]" id="MemberThehoivien1" value="1"><label for="MemberThehoivien1">  Có   </label><input type="radio" name="data[Member][thehoivien]" id="MemberThehoivien2" value="2"><label for="MemberThehoivien2">  Chưa</label>	<p>Nhập mã: <span class="check">*</span></p>
<p>
    <input name="textcode" type="text" id="textcode" size="10" value="">
    &nbsp;
    <img align="absmiddle" src="/img/05.gif"><img align="absmiddle" src="/img/05.gif"><img align="absmiddle" src="/img/03.gif"><img align="absmiddle" src="/img/00.gif"><img align="absmiddle" src="/img/00.gif"><img align="absmiddle" src="/img/05.gif">              <input name="hidecode" type="hidden" id="hidecode" value="553005">
</p>
<br>
<br>
<div class="submit"><input type="submit" value="Đăng ký"></div></form>    <br>
<br>
</div>

</div>
<script>
    function checkForm(){
        if(document.fregister.textcode.value == ""){

            alert("Bạn phải nhập mã xác nhận!");

            document.fregister.textcode.focus();

            return false;

        }
        if(document.fregister.textcode.value != document.fregister.hidecode.value){

            alert("Mã xác nhận không chính xác!");

            document.fregister.textcode.value="";

            document.fregister.textcode.focus();

            return false;

        }

        return true;

    }

</script>			</div>
<div id="sidebar" style="min-height: 1132px;">
    <div id="notice-sidebar">
        <div id="title-notice-s"><span>
<a href="/thongbao.html">Thông báo</a>    </span></div>
        <div id="content-notice-s">
            <div id="title-cont-s">
                <a href="/news/view/2745/moi-hop-bch-hoi-huu-nghi-viet-nam-sec-.html">Mời họp BCH Hội hữu nghị Việt Nam-Séc </a>         </div>
            <div id="desc-cont-s">
                Thừa ủy quyền của Đồng chí Nguyễn Minh Hồng, Chủ tịch Hội hữu nghị Việt Nam-Séc.		</div>
        </div>
    </div>
    <div id="video_2">
        <div align="center" id="container1" style="z-index:0"><embed type="application/x-shockwave-flash" src="/player.swf" width="260" height="220" style="undefined" id="ply" name="ply" bgcolor="#FFFFFF" quality="high" flashvars="file=/files/uploads/videos/QUOCCA_SEC_x264.mp4&amp;image=/files/uploads/videos/02.11.12-s1.jpg&amp;backcolor=0x000000&amp;frontcolor=0xCCCCCC&amp;lightcolor=0x557722&amp;shuffle=false&amp;autostart=false&amp;repeat=list&amp;plugins=embed-1&amp;embed.code=" allowfullscreen="true">
        </div>
        <p style="margin:8px;"><b>Quốc ca CH Séc</b></p>
        <div class="video_others_content" style="margin-left:8px; margin-bottom:5px;">
            <ul>
                <li><a id="video_2" href="#" onclick="video_2(13); return false;">
                        Ten kdo ma te rad Lucie Vondrackova</a>
                </li>
            </ul>
        </div>
    </div>
    <!--<div id="hitnew-sidebar">
        <div id="title-hitnew-s"><span><a href="/news.html">Tin xem nhiều</a></span></div>
        <div id="content-hitnew-s">
            <div id="title-cont-s">
            <ul>

        <div class="fi-content" style="padding:4px 2px; ">

        <h4><a href="/news/view/317/lanh-dao-hoi-huu-nghi-viet-nam-ndash-sec-moi-com-than-mat-dai-su-ch-sec-tai-viet-nam.html">Lãnh đạo Hội Hữu nghị Việt Nam – Séc mời cơm thân...</a> </h4>
        </div>
    <div style="clear:both"></div>

        <div class="fi-content" style="padding:4px 2px; ">

        <h4><a href="/news/view/631/fra-a-sramek-nha-tho-lon-tiep-khac.html">Fráňa Šrámek, nhà thơ lớn Tiệp Khắc </a> </h4>
        </div>
    <div style="clear:both"></div>

        <div class="fi-content" style="padding:4px 2px; ">

        <h4><a href="/news/view/988/thong-bao-tuyen-sinh-du-hoc-tai-ch-sec-nam-2010.html">Thông báo tuyển sinh du học tại CH Séc năm 2010 </a> </h4>
        </div>
    <div style="clear:both"></div>

        <div class="fi-content" style="padding:4px 2px; ">

        <h4><a href="/news/view/658/ky-hop-dong-uy-nhiem-giua-cong-ty-co-phan-zvu-potez-ndash-ch-sec-va-cong-ty-co-phan-hop-tac-sec-viet-sevico-viet-nam.html">Ký hợp đồng ủy nhiệm giữa Công ty cổ phần ZVU POTEZ...</a> </h4>
        </div>
    <div style="clear:both"></div>

        <div class="fi-content" style="padding:4px 2px; ">

        <h4><a href="/news/view/1024/60-nam-quan-he-sec-viet-marcel-winter-nguoi-ban-chung-thuy-voi-viet-nam.html">60 năm quan hệ Séc-Việt: Marcel Winter người bạn chung thủy với...</a> </h4>
        </div>
    <div style="clear:both"></div>
            </ul>
             </div>

        </div>
    </div>-->
    <div id="links">
        <select style="width:220px;margin:10px;margin-left:30px" onchange="window.location=this.value">
            <option value="">---Liên kết website---</option>

            <option value="http://mic.gov.vn/">Bộ Thông tin và Truyền Thông</option>

            <option value="http://www.hnvn.cz/">Hội người Việt Nam tại Séc</option>

            <option value="http://www.vietpeace.org.vn/">Liên hiệp các tổ chức hữu nghị Việt Nam</option>

            <option value="http://www.vietnamembassy-czech.org/vi/">Đại sứ quán Việt Nam tại Cộng hòa Séc</option>

            <option value="http://www.mzv.cz/hanoi/vi">Đại sứ quán Cộng hòa Séc tại Hà Nội</option>

            <option value="http://www.vcci.com.vn/">Phòng Thương mại Công nghiệp Việt Nam</option>

            <option value="http://www.toquoc.gov.vn/">Báo Điện tử Tổ quốc</option>

            <option value="http://tiengnuocngoai.vietsens.info/Czesk/vietSens.asp">Học tiếng Séc</option>

            <option value="http://quehuongonline.vn/VietNam/Home/">Tạp chí Quê hương</option>

            <option value="http://www.cvs-praha.cz/">Hội Hữu nghị Séc - Việt Nam</option>

            <option value="http://vietnamnet.vn/">Báo Việt Nam Net</option>

            <option value="http://www.idnes.cz/">Báo IDNES - CH Séc</option>

            <option value="http://www.novinky.cz/">Báo Tin tức CH Séc</option>

            <option value="http://www.mofa.gov.vn/vi/">Bộ Ngoại giao Việt Nam</option>

            <option value="http://www.czechtrade.vn/">Cục xúc tiến thương mại CH Séc tại Việt Nam</option>

            <option value="http://tuoitre.vn/">Báo tuổi trẻ</option>

            <option value="http://cestina-pro-cizince.cz/index.php?hl=cs_CZ">Tiếng Séc cho người nước ngoài</option>

            <option value="http://vietkieu.vietnamplus.vn/">Trang thông tin về người Việt Nam ở nước ngoài</option>

            <option value="http://www.hoivietsechcm.com/">Hội hữu nghị Việt - Séc TP. Hồ Chí Minh</option>

            <option value="http://www.tgvn.com.vn/">Báo Thế giới &amp; Việt Nam</option>

            <option value="http://www.hdn.cz">Hội doanh nghiệp Việt nam tại CH Séc</option>
        </select>

        <div style="border-bottom:#CCC 1px dotted;">
            <p>Số lượt truy cập:
    <span id="luongtruycap">3258860<span>
    </span></span></p>
        </div>
        <br>
    </div>
    <div id="advertising">
        <a title="SAO THỦY TINH BOHEMIA" href="http://gs-bohemia.blogspot.com/" target="_blank">
            <img src="/files/uploads/banners/GSB_1329896469.jpg"></a>
        <a title="INCO" href="http://inco-p.cz/" target="_blank">
            <img src="/files/uploads/banners/INCO_Hai_1329896579.png"></a>
        <a title="Bochemie" href="http://www.bochemie.cz/" target="_blank">
            <img src="/files/uploads/banners/bochemie_moi1.jpg"></a>
        <a title="Nhà hàng nấu bia Hoa Viên" href="http://www.hoavien.vn" target="_blank">
            <img src="/files/uploads/banners/Logo_hoavien_HN.jpg"></a>
        <a title="Nhà hàng nấu bia hơi Tiệp" href="http://www.pragoldbeer.com.vn/" target="_blank">
            <img src="/files/uploads/banners/Pragold_web1.jpg"></a>
        <a title="Nhà hàng nấu bia tươi CH Séc" href="http://www.goldmalt.com.vn/" target="_blank">
            <img src="/files/uploads/banners/GoldMalt1_1329897228.jpg"></a>
        <a title="GoldMalt" href="http://goldmalt-hc.blogspot.com/" target="_blank">
            <img src="/files/uploads/banners/Goldmalt_9_H.Cau.jpg"></a>
        <a title="Vinh Gia Lương" href="http://www.vinhgialuong.com/" target="_blank">
            <img src="/files/uploads/banners/Morava.VGLuong.jpg"></a>
        <a title="D&amp;H" href="http://www.vinasme.cz/" target="_blank">
            <img src="/files/uploads/banners/DH.jpg"></a>
        <a title="Bí quyết gia truyền của dòng họ TKA đến từ CH Séc" href="http://www.onggiaika.com/" target="_blank">
            <img src="/files/uploads/banners/IKA.jpg"></a>
        <a title="Công ty Hoa Viên" href="http://www.original.vn" target="_blank">
            <img src="/files/uploads/banners/08.03.13-PU.jpg"></a>
    </div>


    <script language="javascript">
        function video_2(video_2){
            $("#video_2").load("/videos/ajax_video/"+video_2);
        }
    </script>			</div>
<div class="clr"></div>
</div>
<div id="footer">
    <div id="bottom-menu">
        <ul>
            <li><a href="/index.php">Trang chủ</a></li>
            <li><a href="/intros/">Giới thiệu</a></li>
            <li><a href="/thanhvien.html">Hội viên</a></li>
            <li><a href="/news.html">Tin tức</a></li>
            <li><a href="/diendan/">Diễn đàn</a></li>
            <li><a href="/hoidap.html">Hỏi đáp</a></li>
            <li><a href="/lienhe.html">Liên hệ</a></li>
        </ul>
    </div>
    <div id="site-copyright">
        <p><span>Trang tin điện tử Hội hữu nghị Việt Nam - Séc (Copyright © 2012)</span></p>
        <p>	Cơ quan chủ quản: Hội hữu nghị Việt Nam - Séc </p>
        <p>	Giấy phép số: 216/GP-TTĐT ngày 22/10/2008 của Cục quản lý PT,TT và TTĐT – Bộ Thông tin và Truyền thông </p>
        <p>	Người chịu trách nhiệm chính: TS. Nguyễn Minh Hồng - Chủ tịch Hội</p>
        <p>	Địa chỉ: 105A Quan Thánh - Hà Nội; Điện thoại: (84) 08044136 Fax: (84-4) 38432756</p>
        <p>Website: <a href="http://www.hoivietsec.org.vn"> http://www.hoivietsec.org.vn</a></p>
        <p>Email: <a href="mailto:vanphong@hoivietsec.org.vn"> vanphong@hoivietsec.org.vn</a></p>
    </div>
    <div class="clr"></div>
</div>
</div>

</body></html>