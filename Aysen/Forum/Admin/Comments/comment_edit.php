<?php include '../../../view/header.php'; ?>
<div id="main">
    <h1>Edit Comment</h1>
    <div class="form-group">
    <form action=?action=list_comments&category_id=<?php echo $categoryID;?>&topic_id=<?php echo $topicID;?>" method="post" id="edit_comment_form">
        <input type="hidden" name="action" value="edit_comment" />

        <label>Name:</label>
        <input type="input" class="form-control"  name="name" value= "<?php echo $comment->getName();?>" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Edit Comment" class="btn btn-default"/>
        <br />
        
        <input type="hidden" name="edited_comment_id"
                           value="<?php echo $_POST['comment_id']; ?>" />
    </form>
        </div>
    <p><a href="?action=list_comments&category_id=<?php echo $categoryID;?>&topic_id=<?php echo $topicID;?>" class="btn btn-info" role="button">View Comment List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>