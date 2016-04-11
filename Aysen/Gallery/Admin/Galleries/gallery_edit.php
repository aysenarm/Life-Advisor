<?php include '../../../view/header.php'; ?>
<div id="main">
    <h1>Edit Gallery</h1>
    <form action="index.php" method="post" id="edit_gallery_form">
        <input type="hidden" name="action" value="edit_gallery" />

        <label>Name:</label>
        <input type="input" name="name" value= "<?php echo $gallery->getName();?>" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Edit Gallery" />
        <br />
        
        <input type="hidden" name="edited_gallery_id"
                           value="<?php echo $_POST['gallery_id']; ?>" />
    </form>
    <p><a href="index.php?action=list_galleries">View Gallery List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>