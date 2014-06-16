<div id="content">
    <ul class="breadcrumb">
        <li><a href="Index.php?lang=en" class="glyphicons home"><i></i> AdminPlus</a></li>
        <li class="divider"></li>
        <li>Form Advert</li>
    </ul>
<div class="form-advert">
    <form name="formCatalog" id="formCatalog" action="InsertAdvert.php" method="post" enctype="multipart/form-data">
        <div class="form">
            <div class="form-group">
                <label>Name: </label>
                <input type="text" placeholder="Name..." id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Link: </label>
                <input type="text" placeholder="Link..." id="link" name="link" class="form-control">
            </div>
            <div class="form-group width"><label>Date: </label><input class="form-control" type="text" name="datepicker"
                                                                      id="datepicker" placeholder="yy/mm/dd"/></div>
            <div><label>Upload Image: </label><input type="file" name="image" id="image"/></div>
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