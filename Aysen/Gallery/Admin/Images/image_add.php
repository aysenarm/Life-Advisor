<div id="main">
    <h3>Add a New Image</h3>
    <div class="form-group">
    <form action="?gallery_id=<?php echo $gallery->getID();?>" method="post" id="add_image_form" enctype="multipart/form-data" class="form-horizontal">
        <input type="hidden" name="action" value="add_image" />

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-2 control-label" style="color: black">Name:</label>
            <div class="col-sm-10">
                <input type="input" name="name" class="form-control"/>
            </div>
            <br />
        </div>

        <div class="form-group" style="margin-left: 10px;">
            <label  class="col-sm-2 control-label">Image:</label>
            <div class="col-sm-10">
                <input type="file" multiple name="fileToUpload[]" id="fileToUpload">
            </div>
            <br />
        </div>

        <br />
        <input type="submit" value="Add Image" class="btn btn-default"/>
        <br />

    </form>
        </div>
    <hr>
    <p><a href="?gallery_id=<?php echo $gallery->getID();?>" class="btn btn-default" role="button">Back</a></p>

</div>
