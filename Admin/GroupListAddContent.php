<?php include_once("Class/GroupListClass.php"); ?>
<div id="content">
    <ul class="breadcrumb">
        <li><a href="Index.php" class="glyphicons home"><i></i>Trang quản trị</a></li>
        <li class="divider"></li>
        <li><a href="GroupList.php">Quản lý chi hội</a></li>
        <li class="divider"></li>
        <li>Thêm mới chi hội</li>
    </ul>
    <div class="heading-buttons" style="background: #ECECEC; padding: 2px;">
        <h3 class="glyphicons display"><i></i>Thêm mới chi hội</h3>
        <a href="javascript:void(0)" style="float: right; margin-right: 10px; margin-top: 15px;" onclick="goBack()"><img
                src="Image/circle_back_arrow.png"
                alt=""/>Trang trước</a>

        <div class="clearfix"></div>
        <div class="separator"></div>
    </div>
    <div class="form-news">
        <form name="FaqEditForm" id="FaqEditForm" action="GroupListAddAction.php?id=<?php echo $_REQUEST['id'] ?>"
              method="post" enctype="multipart/form-data" accept-charset="utf-8">

            <div class="form">
                <div class="form-group ">
                    <label>Tên chi hội * </label>
                    <input type="text" placeholder="Tên chi hội..." name="data[Group][name]" id="title"
                           class="form-control">
                </div>
                <div class="form-group width">
                    <label>Số thự tự hiển thị </label>
                    <select class="form-control" name="data[Group][number]" style="width: 150px">
                        <option value="1">1
                        </option>
                        <option value="0">2
                        </option>
                    </select>
                </div><div class="form-group width">
                    <label>Trạng thái đăng trang chủ: </label>
                    <select class="form-control" name="data[Group][status]" style="width: 150px">
                        <option value="1">Đăng
                        </option>
                        <option value="0">Không đăng
                        </option>
                    </select>
                </div>
                <div>
                    <input type="submit" value="Lưu kết quả "/>
                </div>
            </div>
        </form>
    </div>
</div>
