<div id="main">
    <h3>Add a New Promotion</h3>
    <div class="form-group">
    <form class="form-horizontal" action="index.php?action=list_promotions" method="post" id="add_promotion_form" enctype="multipart/form-data">
        <input type="hidden" name="action" value="add_promotion" />

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-3 control-label">Title:</label>
            <div class="col-sm-9">
                <input type="input" class="col-sm-2 form-control" name="title" />
            </div>
            <br />
        </div>

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-3 control-label">Last Valid Date:</label>
            <div class="col-sm-9">
                <input type="date" class="col-sm-2 form-control" name="valid" />
            </div>
            <br />
        </div>

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-3 control-label">Promotion Key:</label>
            <div class="col-sm-9">
                <input type="input" class="col-sm-2 form-control" name="key" />
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
        <input type="submit" value="Add Promotion" class="btn btn-default"/>
        <br />
    </form>
        </div>

    <hr>
    <p><a href="index.php?action=list_promotions" class="btn btn-default" role="button">Back</a></p>

</div>




