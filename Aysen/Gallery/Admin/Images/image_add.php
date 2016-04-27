<div id="main">
    <h1>Add a New Image</h1>
    <div class="form-group">
    <form action="?gallery_id=<?php echo $gallery->getID();?>" method="post" id="add_image_form" enctype="multipart/form-data">
        <input type="hidden" name="action" value="add_image" />

        <label>Name:</label>
        <input type="input" name="name" class="form-control"  />
        <br />
        <label>Upload Photos</label>
        <label>&nbsp;</label>
        <input type="file" multiple name="fileToUpload[]" id="fileToUpload" class="btn btn-default"/>
        <br/>
        <input type="submit" value="Add Image" class="btn btn-default"/>
        <br />
    </form>
        </div>
    <p><a href="?gallery_id=<?php echo $gallery->getID();?>" class="btn btn-info" role="button">View Image List</a></p>

</div>
