<div id="content">
    <ul class="breadcrumb">
    </ul>
    <div class="heading-buttons">
        <h3 class="glyphicons display"><i></i>Quản lý thông báo</h3>
        <div class="buttons pull-right">
            <a class="glyphicons" href="Notice.php"><< Quay lại</a>
        </div>
        <div class="clearfix" style="clear: both;"></div>
    </div>
    <div class="widget widget-gray widget-body-white">
        <div class="widget-head">
            <h4 class="heading"> Sửa thông báo</h4>
        </div>
    </div>
    <div class="form-news">
        <?php
        $use = new Class_ClassTableNotice();
        $use->id = $_REQUEST['id'];
        $array = $use->SelectId();
        foreach($array as $arrayItem){
            ?>
            <form name="formNews" id="formNews" action="NoticeUpdateAction.php" method="post" enctype="multipart/form-data">
                <div><input type="hidden" name="id" value="<?php echo $arrayItem->no_id;?>"/></div>
                <div class="form">
                    <div class="form-group ">
                        <label>Title: </label>
                        <input type="text" placeholder="Title..." name="title" id="title" class="form-control" value="<?php echo $arrayItem->no_title; ?>">
                    </div>
                    <div class="form-group ">
                        <label>Author: </label>
                        <input type="text" placeholder="Author..." name="author" id="author" class="form-control" value="<?php echo $arrayItem->no_author; ?>">
                    </div>
                    <div class="form-group width"><label>Date: </label><input class="form-control" type="text" name="datepicker"
                                                                              id="datepicker" placeholder="yy/mm/dd" value="<?php echo $arrayItem->no_date;?>"/></div>
                    <div><label>Content: </label>
                        <div class="editor">
                            <textarea class="ckeditor" name="content" id="content">
                                <?php echo $arrayItem->no_content;?>
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group width">
                        <label>Status: </label>
                        <select class="form-control" name="state">
                            <option value="0">--Status--</option>
                            <option value="0" <?php if($arrayItem->no_state==0){?>selected="selected" <?php }?>>Không hiệu lực</option>
                            <option value="1" <?php if($arrayItem->no_state==1){?>selected="selected" <?php }?>>Hiệu lực</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" name="sub" id="sub" value="Save"/>
                    </div>
                </div>
            </form>
        <?php } ?>
    </div>
</div>
