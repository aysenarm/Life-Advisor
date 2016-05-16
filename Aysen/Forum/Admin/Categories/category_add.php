<div id="main">
    <h3>Add a New Category</h3>
    <div class="form-group">
    <form action="?action=list_categories" method="post" id="add_category_form" class="form-horizontal">
        <input type="hidden" name="action" value="add_category" />

        <div class="form-group" style="margin-left: 10px;">
            <label class="col-sm-2 control-label">Name:</label>
            <div class="col-sm-10">
                <input type="input" class="col-sm-2 form-control" name="name"/>
            </div>
            <br />
        </div>

        <br />
        <input type="submit" value="Add Category" class="btn btn-default" />
        <br />
    </form>
    </div>
    <hr>
    <p><a href="?action=list_categories" class="btn btn-default" role="button">Back</a></p>

</div>