<div id="content">
    <ul class="breadcrumb">
    </ul>
    <div class="heading-buttons">
        <h3 class="glyphicons display"><i></i>Quản lý tin tức</h3>
        <div class="buttons pull-right">
            <a class="glyphicons" href="News.php"><< Quay lại</a>
        </div>
        <div class="clearfix" style="clear: both;"></div>
    </div>
    <div class="widget widget-gray widget-body-white">
        <div class="widget-head">
            <h4 class="heading"> Sửa tin tức</h4>
        </div>
    </div>
    <div class="form-news">
        <?php
        $use = new Class_ClassTableNews();
        $use->id = $_REQUEST['id'];
        $array = $use->SelectId();
        foreach($array as $arrayItem){
        ?>
        <form name="formNews" id="formNews" action="NewUpdateAction.php" method="post" enctype="multipart/form-data">
            <div><input type="hidden" name="id" value="<?php echo $arrayItem->ne_id;?>"/></div>
            <div class="form">
                <div class="form-group ">
                    <label>Title: </label>
                    <input type="text" placeholder="Title..." name="title" id="title" class="form-control" value="<?php echo $arrayItem->ne_title; ?>">
                </div>
                <div class="form-group ">
                    <label>Author: </label>
                    <input type="text" placeholder="Author..." name="author" id="author" class="form-control" value="<?php echo $arrayItem->ne_author; ?>">
                </div>
                <div class="form-group width"><label>Date: </label><input class="form-control" type="text" name="datepicker"
                                                                          id="datepicker" placeholder="yy/mm/dd" value="<?php echo $arrayItem->ne_date;?>"/></div>
                <div><label>Description: </label>

                    <div class="editor">
                        <textarea class="ckeditor" name="description" id="description">
                            <?php echo $arrayItem->ne_destion;?>
                        </textarea>
                    </div>
                </div>
                <div><label>Content: </label>

                    <div class="editor">
                        <textarea class="ckeditor" name="content" id="content">
                            <?php echo $arrayItem->ne_content;?>
                        </textarea>
                    </div>
                </div>
                <div><label>Upload Image: </label><input type="file" name="image" id="image"/></div>
                <div class="form-group">
                    <label>Catalog: </label>
                    <select class="form-control" name="catalogID">
                        <option value="0">--Catalog--</option>
                        <?php
                        $select = new Class_ClassTableCatalog();
                        $catalogArray = $select->SelectNumberCatalog();
                        foreach ($catalogArray as $catalogItem) {
                            ?>
                            <option
                                value="<?php echo $catalogItem->catalogid;?>" <?php if($arrayItem->catalogid==$catalogItem->catalogid){?>selected="selected" <?php }?>><?php echo $catalogItem->ca_name; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group width">
                    <label>Status: </label>
                    <select class="form-control" name="state">
                        <option value="0">--Status--</option>
                        <option value="0" <?php if($arrayItem->ne_state==0){?>selected="selected" <?php }?>>Không hiệu lực</option>
                        <option value="1" <?php if($arrayItem->ne_state==1){?>selected="selected" <?php }?>>Hiệu lực</option>
                    </select>
                </div>
                <div class="form-group width">
                    <label>Focus: </label>
                    <select class="form-control" name="focus">
                        <option value="0">--Focus--</option>
                        <option value="0" <?php if($arrayItem->ne_focus==0){?>selected="selected" <?php }?>>Không phải tin tiêu điểm</option>
                        <option value="1" <?php if($arrayItem->ne_focus==1){?>selected="selected" <?php }?> >Tiêu điểm</option>
                    </select>
                </div>
                <div>
                    <button type="submit">Save</button>
                </div>
            </div>
        </form>
        <?php } ?>
    </div>
</div>
