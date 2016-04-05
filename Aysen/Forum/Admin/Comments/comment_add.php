<?php include '../../../view/header.php'; ?>
<div id="main">
    <h1>Add a New Comment</h1>
    <form action="index.php" method="post" id="add_comment_form">
        <input type="hidden" name="action" value="add_comment" />

        <label>Name:</label>
        <input type="input" name="name" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Comment" />
        <br />
    </form>
    <p><a href="index.php?action=list_comments">View Comment List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>