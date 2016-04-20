<?php include '../../../view/header.php'; ?>
<div id="main">
    <h1>Add a New Gallery</h1>
    <div class="form-group">
    <form action="index.php?action=list_galleries" method="post" id="add_gallery_form" enctype="multipart/form-data">
        <input type="hidden" name="action" value="add_gallery" />

        <label>Name:</label>
        <input type="input" name="name" class="form-control" />
        <br />
        <label>Upload Cover Photo</label>
        <label>&nbsp;</label>
        <input type="file" name="cover" class="btn btn-default"/>
        <br/>

        <input type="submit" value="Add Gallery" class="btn btn-default"/>
        <br />
    </form>
        </div>
    <p><a href="index.php?action=list_galleries" class="btn btn-info" role="button">View Gallery List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>