<?php include '../../../view/header.php'; ?>
<div id="main">
    <h1>Add a New Category</h1>
    <div class="form-group">
    <form action="?action=list_categories" method="post" id="add_category_form">
        <input type="hidden" name="action" value="add_category" />

        <label>Name:</label>
        <input type="input" name="name" class="form-control" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Category" class="btn btn-default"/>
        <br />
    </form>
        </div>
    <p><a href="?action=list_categories" class="btn btn-info" role="button">View Category List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>