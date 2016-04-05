<?php include '../../../view/header.php'; ?>
<div id="main">
    <h1>Edit Category</h1>
    <form action="index.php" method="post" id="edit_category_form">
        <input type="hidden" name="action" value="edit_category" />

        <label>Name:</label>
        <input type="input" name="name" value= "<?php echo $category->getName();?>" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Edit Category" />
        <br />
        
        <input type="hidden" name="edited_category_id"
                           value="<?php echo $_POST['category_id']; ?>" />
    </form>
    <p><a href="index.php?action=list_categories">View Category List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>