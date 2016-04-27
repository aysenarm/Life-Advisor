<div id="main">
    <h1>Add a New Promotion</h1>
    <div class="form-group">
    <form action="index.php?action=list_promotions" method="post" id="add_promotion_form" enctype="multipart/form-data">
        <input type="hidden" name="action" value="add_promotion" />

        <label>Title:</label>
        <input type="input" name="title" class="form-control" />
        <br />
        <label>Last Valid Date:</label>
        <input type="date" name="valid" class="form-control" />
        <br />
        <label>Promotion Key:</label>
        <input type="input" name="key" class="form-control" />
        <br />
        <label>Upload A Photo</label>
        <label>&nbsp;</label>
        <input type="file" name="cover" class="btn btn-default"/>
        <br/>

        <input type="submit" value="Add Promotion" class="btn btn-default"/>
        <br />
    </form>
        </div>
    <p><a href="index.php?action=list_promotions" class="btn btn-info" role="button">View Promotion List</a></p>

</div>
