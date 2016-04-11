<?php include '../../../view/header.php'; ?>
<div id="main">
    <h1>Edit Image</h1>
    <form action="index.php" method="post" id="edit_image_form">
        <input type="hidden" name="action" value="edit_image" />

        <label>Name:</label>
        <input type="input" name="name" value= "<?php echo $image->getName();?>" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Edit Image" />
        <br />
        
        <input type="hidden" name="edited_image_id"
                           value="<?php echo $_POST['image_id']; ?>" />
    </form>
    <p><a href="index.php?action=list_images">View Image List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>