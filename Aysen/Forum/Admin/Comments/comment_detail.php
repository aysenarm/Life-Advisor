<?php include '../../../view/header.php'; ?>
<div id="main">
    <div id="sidebar">
    </div>
    <div id="content">
        <h1><?php echo $comment->getName(); ?></h1>

            <p><b>ID:</b> <?php echo $comment->getID(); ?></p>
            <p><b>Title:</b> <?php echo $comment->getName(); ?></p>
        <p><b>UserID:</b> <?php echo $comment->getUserID(); ?></p>
        <p><b>Topic:</b> <?php echo $topic->getName(); ?></p>
        <p><b>Publishing Date:</b> <?php echo $comment->getDatePublished(); ?></p>
<p><a href="?action=list_comments&category_id=<?php echo $categoryID;?>&topic_id=<?php echo $topicID;?>" class="btn btn-info" role="button">View Comment List</a></p>
    </div>
</div>
<?php include '../../../view/footer.php'; ?>