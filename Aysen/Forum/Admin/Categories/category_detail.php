<div id="main">
    <div id="sidebar">
    </div>
    <div id="content" class="form-horizontal">
        <h3><?php echo $category->getName(); ?></h3>

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-3 control-label" style="color: black">ID:</label>
            <div class="col-sm-9">
                <input type="input" class="col-sm-2 form-control" value="<?php echo $category->getID(); ?>" readonly/>
            </div>
            <br />
        </div><div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-3 control-label" style="color: black">Title:</label>
            <div class="col-sm-9">
                <input type="input" class="col-sm-2 form-control" value="<?php echo $category->getName() ?>" readonly/>
            </div>
            <br />
        </div>

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-3 control-label" style="color: black">UserID:</label>
            <div class="col-sm-9">
                <input type="input" class="col-sm-2 form-control" value="<?php echo $category->getUserID() ?>" readonly/>
            </div>
            <br />
        </div><div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-3 control-label" style="color: black">Publishing Date:</label>
            <div class="col-sm-9">
                <input type="input" class="col-sm-2 form-control" value="<?php echo $category->getDatePublished() ?>" readonly/>
            </div>
            <br />
        </div>

        <br />
        <br />

        <p><a href="?action=list_categories" class="btn btn-default" role="button">Back</a></p>

    </div>
</div>