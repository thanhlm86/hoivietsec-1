<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html> <!--<![endif]-->
<head>
    <title>AdminPlus - Premium Bootstrap Admin Template (v1.1)</title>

    <?php
    include 'Includes/LinksHeader.php';
    ?>
</head>
<body>

<!-- Start Content -->
<div class="container-fluid fixed">

    <?php
    include 'Includes/Header.php'
    ?>

    <div id="wrapper">
        <?php
        include 'Includes/SideBar.php';
        ?>
        <!--        Bat dau contenrt-->
        <div id="content">
            <ul class="breadcrumb">
                <li><a href="index.html?lang=en" class="glyphicons home"><i></i> AdminPlus</a></li>
                <li class="divider"></li>
                <li>Online Shop</li>
                <li class="divider"></li>
                <li>Add product</li>
            </ul>
            <div class="separator"></div>

            <div class="heading-buttons">
                <h3 class="glyphicons cart_in"><i></i> Thêm mới chi hội</h3>

                <div class="buttons pull-right">
                    <a href="" class="btn btn-default btn-icon glyphicons share"><i></i> Preview</a>
                    <a href="" class="btn btn-primary btn-icon glyphicons ok_2"><i></i> Save</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="separator"></div>
            <form>
                <div class="widget widget-2 widget-tabs">
            </form>
            <div class="widget-head">
                <ul>
                    <li class="active"><a href="#productDescriptionTab" data-toggle="tab"
                                          class="glyphicons font"><i></i>Thêm mới chi hội</a></li>

                </ul>
            </div>
            <div class="widget-body" style="padding: 10px;">
                <div class="tab-content">

                    <!-- Description -->
                    <div class="tab-pane active" id="productDescriptionTab">
                        <div class="row-fluid">
                            <div class="span9">
                                <label for="inputTitle">Tên chi hội</label>
                                <input type="text" id="inputTitle" class="span9" value=""
                                       placeholder="Điền tác giả ..."/>

                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom"/>
                        <div class="row-fluid">
                            <div class="span9">
                                <div class="control-group">
                                    <label for="inputTitle">Số thứ tự hiển thị</label>
                                    <select class="selectpicker span3">
                                        <option value="1">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                    </select>
                                </div>
                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom"/>
                        <div class="row-fluid">
                            <div class="span9">
                                <div class="control-group">
                                    <label for="inputTitle">Ngày tạo</label>
                                    <select class="selectpicker span3">
                                        <option value="1">Đăng</option>
                                        <option value="0">Không Đăng</option>
                                    </select>
                                </div>
                                <div class="separator"></div>
                            </div>
                        </div>
                        <hr class="separator bottom"/>

                    </div>
                    <!-- Description END -->

                    <!-- Photos -->
                    <div class="tab-pane" id="productPhotosTab">

                    </div>
                    <!-- Photos END -->

                    <!-- Attributes -->
                    <div class="tab-pane" id="productAttributesTab">

                    </div>
                    <!-- Attributes END -->

                    <!-- Price -->
                    <div class="tab-pane" id="productPriceTab">

                    </div>
                    <!-- Price END -->

                    <!-- SEO -->
                    <div class="tab-pane" id="productSeoTab">

                    </div>
                    <!-- SEO END -->

                </div>
            </div>
        </div>
        <div class="heading-buttons">
            <div class="buttons pull-right" style="margin-top: 0;">
                <a href="" class="btn btn-default btn-icon glyphicons share"><i></i> Preview</a>
                <a href="" class="btn btn-primary btn-icon glyphicons ok_2"><i></i> Save</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <br/>

        <!--        them moi bang-->
        <div class="widget widget-2" style="margin: 0;">
            <div class="widget-head">
                <h4 class="heading glyphicons list"><i></i>Danh sách lời giới thiệu</h4>
            </div>
            <div class="widget-body">
                <div class="separator bottom form-inline small">
                    Total products: 26
			<span class="pull-right">
				<label class="strong">Sort by:</label>
				<select class="selectpicker" data-style="btn-default btn-small">
                    <option>Option</option>
                    <option>Option</option>
                    <option>Option</option>
                </select>
			</span>
                </div>
                <table
                    class="table table-bordered table-condensed table-striped table-primary table-vertical-center checkboxs js-table-sortable">
                    <thead>
                    <tr>
                        <th style="width: 1%;" class="uniformjs"><input type="checkbox"/></th>
                        <th style="width: 1%;" class="center">No.</th>
                        <th>Tác giả</th>
                        <th style="width: 1%;" class="center">Drag</th>
                        <th class="center">Ngày tạo</th>
                        <th class="center">Price</th>
                        <th class="center" style="width: 60px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="selectable">
                        <td class="center uniformjs"><input type="checkbox"/></td>
                        <td class="center">1</td>
                        <td class="important">Lorem Dolor Ipsum</td>
                        <td class="center js-sortable-handle"><span class="glyphicons btn-action single move"
                                                                    style="margin-right: 0;"><i></i></span></td>
                        <td class="center"><span class="glyphicons btn-action single picture"
                                                 style="margin-right: 0;"><i></i></span>2 photos
                        </td>
                        <td class="center">&euro;11</td>
                        <td class="center">
                            <a href="product_edit.html?lang=en" class="btn-action glyphicons pencil btn-success"><i></i></a>
                            <a href="#" class="btn-action glyphicons remove_2 btn-danger"><i></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="separator top form-inline small">
                    <div class="pull-left checkboxs_actions hide">
                        <label class="strong">With selected:</label>
                        <select class="selectpicker" data-style="btn-default btn-small">
                            <option>Action</option>
                            <option>Action</option>
                            <option>Action</option>
                        </select>
                    </div>
                    <div class="pagination pagination-small pull-right" style="margin: 0;">
                        <ul>
                            <li class="disabled"><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </div>
    <!-- End Wrapper -->
</div>

<!-- Sticky Footer, them neu muon hien vao day -->


</div>

<?php
include 'Includes/Script.php';
?>

</body>
</html>