<div id="main">
    <h1>Edit Topic</h1>
    <div class="form-group">
    <form action="?action=list_topics&category_id=<?php echo $categoryID;?>" method="post" id="edit_topic_form">
        <input type="hidden" name="action" value="edit_topic" />

        <label>Name:</label>
        <input type="input" class="form-control"  name="name" value= "<?php echo $topic->getName();?>" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Edit Topic" class="btn btn-default" />
        <br />
        
        <input type="hidden" name="edited_topic_id"
                           value="<?php echo $_POST['topic_id']; ?>" />
    </form>
    <div class="form-group">
    <p><a href="?action=list_topics&category_id=<?php echo $categoryID;?>" class="btn btn-info" role="button">View Topic List </a></p>

</div>
