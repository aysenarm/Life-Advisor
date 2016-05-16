<div id="main">
    <h3>Edit Promotion</h3>
    <div class="form-group">
        <form action="?action=list_promotions" method="post" id="edit_promotion_form" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" name="action" value="edit_promotion" />

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-3 control-label">Title:</label>
                <div class="col-sm-9">
                    <textarea type="input" class="col-sm-2 form-control" name="title" rows="3"><?php echo $promotion->getTitle();?></textarea>
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-3 control-label">Last Valid Date:</label>
                <div class="col-sm-9">
                    <input type="input" class="col-sm-2 form-control" name="valid" value="<?php echo $promotion->getDateValid();?>" />
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-3 control-label">Promotion Key:</label>
                <div class="col-sm-9">
                    <input type="input" class="col-sm-2 form-control" name="key" value="<?php echo $promotion->getKey();?>" />
                </div>
                <br />
            </div>

            <div class="form-group" style="margin-left: 10px;">
                <label class="col-sm-3 control-label">Upload Photo:</label>
                <div class="col-sm-9">
                    <input type="file" name="cover"/>
                </div>
                <br />
            </div>

            <br />
            <br />

            <input type="submit" value="Edit Promotion" class="btn btn-default"/>
            <br />

            <input type="hidden" name="edited_promotion_id" value="<?php echo $_POST['promotion_id']; ?>" />
        </form>
    </div>
    <hr>
    <p><a href="?action=list_promotions" class="btn btn-default" role="button">Back</a></p>

</div>
