<div id="main">
    <h3>Edit Category</h3>
    <div class="form-group">
    <form action="?action=list_categories" method="post" id="edit_category_form" class="form-horizontal">
        <input type="hidden" name="action" value="edit_category" />

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-2 control-label">Name:</label>
            <div class="col-sm-10">
                <input type="input" class="col-sm-2 form-control" name="name" value= "<?php echo $category->getName();?>"/>
            </div>
            <br />
        </div>

        <br />
        <br />


        <input type="submit" value="Edit Category" class="btn btn-default"/>
        <br />
        
        <input type="hidden" name="edited_category_id" value="<?php echo $_POST['category_id']; ?>" />
    </form>
        </div>
    <hr>
    <p><a href="?action=list_categories" class="btn btn-default" role="button">Back</a></p>

</div>
