<?php include '../../../view/header.php'; ?>
<div id="main">
    <div id="sidebar">
    </div>
    <div id="content">
        <h1><?php echo $comment->getName(); ?></h1>

            <p><b>ID:</b> <?php echo $comment->getID(); ?></p>
            <p><b>Title:</b> <?php echo $comment->getName() ?></p>
        <p><b>UserID:</b> <?php echo $comment->getUserID(); ?></p>
        <p><b>TopicID:</b> <?php echo $comment->getTopicID() ?></p>
        <p><b>Publishing Date:</b> <?php echo $comment->getDatePublished() ?></p>
<p><a href="index.php?action=list_comments">View Comment List</a></p>
    </div>
</div>
<?php include '../../../view/footer.php'; ?>