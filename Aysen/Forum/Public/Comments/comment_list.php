<?php include '../../../view/header.php'; ?>
<div id="main">

    <h1>Comment List of <?php echo $topic->getName(); ?></h1>

            <?php foreach ($comments as $comment) : ?>
    <div style="border: double;">
        <p>
            <span style="font-style: italic; font-size: medium; font-weight: bold;">
                <?php echo $comment->getUserID(); ?>
            </span>
        <span style="float: right;">
            <?php echo $comment->getDatePublished(); ?>
        </span>
        </p>
        <p><?php echo $comment->getName(); ?></p>

    </div>
                <br/>
            <?php endforeach; ?>



    <div class="form-group">
    <form method="post" action="?action=add_comment&category_id=<?php echo $categoryID;?>&topic_id=<?php echo $topic->getID();?>">
        <label for="comment">Comment:</label>
        <textarea name="name" class="form-control" rows="5" id="name"  required></textarea>
       <br/>
        <input type="submit" class="btn btn-default"  value="Add comment" />
    </form>
    </div>

    <p><a href="../Topics?action=list_topics&category_id=<?php echo $categoryID;?>" class="btn btn-info" role="button">View Topic List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>