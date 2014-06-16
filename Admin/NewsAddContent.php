<div id="content">
    <ul class="breadcrumb">
        <li><a href="Index.php?lang=en" class="glyphicons home"><i></i> AdminPlus</a></li>
        <li class="divider"></li>
        <li>Form News</li>
    </ul>
   <div class="form-news">
       <form name="formNews" id="formNews" action="NewsAddAction.php" method="post" enctype="multipart/form-data">
           <div class="form">
               <div class="form-group ">
                   <label>Title: </label>
                   <input type="text" placeholder="Title..." name="title" id="title" class="form-control">
               </div>
               <div class="form-group ">
                   <label>Author: </label>
                   <input type="text" placeholder="Author..." name="author" id="author" class="form-control">
               </div>
               <div class="form-group width"><label>Date: </label><input class="form-control" type="text" name="datepicker"
                                                                         id="datepicker" placeholder="yy/mm/dd"/></div>
               <div><label>Description: </label>

                   <div class="editor">
                       <textarea class="ckeditor" name="description" id="description">

                       </textarea>
                   </div>
               </div>
               <div><label>Content: </label>

                   <div class="editor">
                       <textarea class="ckeditor" name="content" id="content">
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
                               value="<?php echo $catalogItem->catalogid; ?>"><?php echo $catalogItem->ca_name; ?></option>
                       <?php } ?>
                   </select>
               </div>
               <div class="form-group width">
                   <label>Status: </label>
                   <select class="form-control" name="state">
                       <option value="0">--Status--</option>
                       <option value="0">Không hiệu lực</option>
                       <option value="1">Hiệu lực</option>
                   </select>
               </div>
               <div class="form-group width">
                   <label>Focus: </label>
                   <select class="form-control" name="focus">
                       <option value="0">--Focus--</option>
                       <option value="0">Không phải tin tiêu điểm</option>
                       <option value="1">Tiêu điểm</option>
                   </select>
               </div>
               <div>
                   <button type="submit">Save</button>
               </div>
           </div>
       </form>
   </div>
</div>
