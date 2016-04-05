<?php include '../../../view/header.php'; ?>
<div id="main">
    <h1>Add a New Category</h1>
    <form action="index.php" method="post" id="add_category_form">
        <input type="hidden" name="action" value="add_category" />

        <label>Name:</label>
        <input type="input" name="name" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Category" />
        <br />
    </form>
    <p><a href="index.php?action=list_categories">View Category List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>