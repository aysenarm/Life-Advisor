<div id="main">
    <h3>Add New Gallery</h3>

    <form class="form-horizontal" action="index.php?action=list_galleries" method="post" id="add_gallery_form" enctype="multipart/form-data">
        <input type="hidden" name="action" value="add_gallery" />

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-2 control-label" style="color: black">Name:</label>
            <div class="col-sm-10">
                <input type="input" class="col-sm-2 form-control" name="name"/>
            </div>
            <br />
        </div>

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-2 control-label" style="color: black">Cover Photo:</label>
            <div class="col-sm-10">
                <input type="file" name="cover"/>
            </div>
            <br />
        </div>

        <br />
        <br />

        <input type="submit" value="Add Gallery" class="btn btn-default"/>
        <br />
    </form>
    <hr>
    <p><a href="index.php?action=list_galleries" class="btn btn-default" role="button">Back</a></p>
</div>
