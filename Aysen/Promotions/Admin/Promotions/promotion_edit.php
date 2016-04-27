<div id="main">
    <h1>Edit Promotion</h1>
    <div class="form-group">
    <form action="?action=list_promotions" method="post" id="edit_promotion_form" enctype="multipart/form-data">
        <input type="hidden" name="action" value="edit_promotion" />

        <label>Title:</label>
        <input type="input" name="title" value= "<?php echo $promotion->getTitle();?>"  class="form-control" />
        <br />
        <label>Last Valid Date:</label>
        <input type="date" name="valid" value= "<?php echo $promotion->getDateValid();?>"  class="form-control" />
        <br />
        <label>Promotion Key:</label>
        <input type="input" name="key" value= "<?php echo $promotion->getKey();?>"  class="form-control" />
        <br />
        <label>Upload A Photo</label>
        <label>&nbsp;</label>
        <input type="file" name="cover" class="btn btn-default"/>
        <br/>


        <label>&nbsp;</label>
        <input type="submit" value="Edit Promotion" class="btn btn-default"/>
        <br />
        
        <input type="hidden" name="edited_promotion_id"
                           value="<?php echo $_POST['promotion_id']; ?>" />
    </form>
        </div>
    <p><a href="?action=list_promotions" class="btn btn-info" role="button">View Promotion List</a></p>

</div>
