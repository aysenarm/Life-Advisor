<?php include '../../../view/header.php'; ?>
<div id="main">
    <h1>Edit Comment</h1>
    <form action="index.php" method="post" id="edit_comment_form">
        <input type="hidden" name="action" value="edit_comment" />

        <label>Name:</label>
        <input type="input" name="name" value= "<?php echo $comment->getName();?>" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Edit Comment" />
        <br />
        
        <input type="hidden" name="edited_comment_id"
                           value="<?php echo $_POST['comment_id']; ?>" />
    </form>
    <p><a href="index.php?action=list_comments">View Comment List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>