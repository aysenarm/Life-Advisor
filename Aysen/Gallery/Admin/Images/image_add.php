<?php include '../../../view/header.php'; ?>
<div id="main">
    <h1>Add a New Image</h1>
    <form action="index.php" method="post" id="add_image_form" enctype="multipart/form-data">
        <input type="hidden" name="action" value="add_image" />

        <label>Name:</label>
        <input type="input" name="name" />
        <br />
        <label>Upload a Photo</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <label>&nbsp;</label>
        <input type="submit" value="Add Image" />
        <br />
    </form>
    <p><a href="index.php?action=list_images">View Image List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>