<div id="content">
    <ul class="breadcrumb">
        <li><a href="Index.php?lang=en" class="glyphicons home"><i></i> AdminPlus</a></li>
        <li class="divider"></li>
        <li>Form Notice</li>
    </ul>
    <div class="form-notice">
        <form name="formCatalog" id="formCatalog" action="InsertNotice.php" method="post">
            <div class="form">
                <div class="form-group">
                    <label>Title: </label>
                    <input type="text" placeholder="Title..." id="title" name="title" class="form-control">
                </div>
                <div class="form-group width"><label>Date: </label><input class="form-control" type="text"
                                                                          name="datepicker"
                                                                          id="datepicker" placeholder="yy/mm/dd"/></div>
                <div><label>Content: </label>

                    <div class="editor">
                        <textarea class="ckeditor" name="content" id="content">

                        </textarea>
                    </div>
                </div>
                <div class="form-group width">
                    <label>Status: </label>
                    <select class="form-control" name="state">
                        <option value="0">--Status--</option>
                        <option value="0">Không hiệu lực</option>
                        <option value="1">Hiệu lực</option>
                    </select>
                </div>
                <div>
                    <button type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
