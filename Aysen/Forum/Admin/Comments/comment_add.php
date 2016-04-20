<?php include '../../../view/header.php'; ?>
<div id="main">
    <h1>Add a New Comment</h1>
    <div class="form-group">

    <form action="?action=list_comments&category_id=<?php echo $categoryID;?>&topic_id=<?php echo $topicID;?>" method="post" id="add_comment_form">
        <input type="hidden" name="action" value="add_comment" />

        <label>Name:</label>
        <input type="input" name="name" class="form-control" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Comment" class="btn btn-default" />
        <br />
    </form>
        </div>
    <p><a href="?action=list_comments&category_id=<?php echo $categoryID;?>&topic_id=<?php echo $topicID;?>" class="btn btn-info" role="button">View Comment List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>