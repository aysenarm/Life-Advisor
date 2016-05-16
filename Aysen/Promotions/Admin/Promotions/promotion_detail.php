<div id="main">

    <div id="content" class="form-horizontal">
        <h3><?php echo $promotion->getTitle(); ?></h3>

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-3 control-label" style="color: black">ID:</label>
            <div class="col-sm-9">
                <input type="input" class="col-sm-2 form-control" name="tags" value="<?php echo $promotion->getID(); ?>" readonly/>
            </div>
            <br />
        </div>

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-3 control-label" style="color: black">Image:</label>
            <div class="col-sm-9">
                <img src="../Images/photo_gallery/<?php echo $promotion->getImage();?>" alt="Cover of <?php echo $promotion->getTitle();?>" style="width: auto; height: auto;">
            </div>
            <br />
        </div>

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-3 control-label" style="color: black">Title:</label>
            <div class="col-sm-9">
                <input type="input" class="col-sm-2 form-control" name="tags" value="<?php echo $promotion->getTitle() ?>" readonly/>
            </div>
            <br />
        </div>

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-3 control-label" style="color: black">Key:</label>
            <div class="col-sm-9">
                <input type="input" class="col-sm-2 form-control" name="tags" value="<?php echo $promotion->getKey() ?>" readonly/>
            </div>
            <br />
        </div>

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-3 control-label" style="color: black">Last Valid Date:</label>
            <div class="col-sm-9">
                <input type="input" class="col-sm-2 form-control" name="tags" value="<?php echo $promotion->getDateValid() ?>" readonly/>
            </div>
            <br />
        </div>

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-3 control-label" style="color: black">UserID:</label>
            <div class="col-sm-9">
                <input type="input" class="col-sm-2 form-control" name="tags" value="<?php echo $promotion->getUserID() ?>" readonly/>
            </div>
            <br />
        </div>

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-3 control-label" style="color: black">Publishing Date:</label>
            <div class="col-sm-9">
                <input type="input" class="col-sm-2 form-control" name="tags" value="<?php echo $promotion->getDatePublished() ?>" readonly/>
            </div>
            <br />
        </div>
        <br />

        <p><a href="?action=list_promotions" class="btn btn-default" role="button">Back</a></p>

    </div>
</div>
