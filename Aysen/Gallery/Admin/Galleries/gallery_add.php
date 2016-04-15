<?php include '../../../view/header.php'; ?>
<div id="main">
    <h1>Add a New Gallery</h1>
    <form action="index.php" method="post" id="add_gallery_form">
        <input type="hidden" name="action" value="add_gallery" />

        <label>Name:</label>
        <input type="input" name="name" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Gallery" />
        <br />
    </form>
    <p><a href="index.php?action=list_galleries">View Gallery List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>