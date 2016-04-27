<div id="main">
    <h1>Edit Category</h1>
    <div class="form-group">
    <form action="?action=list_categories" method="post" id="edit_category_form">
        <input type="hidden" name="action" value="edit_category" />

        <label>Name:</label>
        <input type="input" class="form-control"  name="name" value= "<?php echo $category->getName();?>" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Edit Category" class="btn btn-default"/>
        <br />
        
        <input type="hidden" name="edited_category_id"
                           value="<?php echo $_POST['category_id']; ?>" />
    </form>
        </div>
    <p><a href="?action=list_categories" class="btn btn-info" role="button">View Category List</a></p>

</div>
