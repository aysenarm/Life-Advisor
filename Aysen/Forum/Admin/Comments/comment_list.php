<div id="main">

    <h1>Comment List of <?php echo $topic->getName(); ?></h1>
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>UserID</th>
                <th>Publishing Date</th>
                <th>Topic</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Details</th>
            </tr>
            <?php foreach ($comments as $comment) : ?>
            <tr>
                <td><?php echo $comment->getID(); ?></td>
                <td><?php echo $comment->getName(); ?></td>
                <td><?php echo $comment->getUserID(); ?></td>
                <td><?php echo $comment->getDatePublished(); ?></td>
                <td><?php echo $topic->getName();  ?></td>

                <td><form action=".?category_id=<?php echo $categoryID;?>&topic_id=<?php echo $topicID;?>" method="post" id="delete_comment_form">
                    <input type="hidden" name="action" value="delete_comment" />
                    <input type="hidden" name="comment_id" value="<?php echo $comment->getID(); ?>" />
                    <input type="submit" value="Delete" class="btn btn-default" />
                </form></td>
                <td><form action=".?category_id=<?php echo $categoryID;?>&topic_id=<?php echo $topicID;?>" method="post" id="edit_comment_form">
                    <input type="hidden" name="action" value="show_edit_form" />
                    <input type="hidden" name="comment_id" value="<?php echo $comment->getID(); ?>" />
                    <input type="submit" value="Edit" class="btn btn-default" />
                </form></td>
                <td><form action=".?category_id=<?php echo $categoryID;?>&topic_id=<?php echo $topicID;?>" method="post" id="detail_comment_form">
                    <input type="hidden" name="action" value="show_detail_form">
                    <input type="hidden" name="comment_id" value="<?php echo $comment->getID(); ?>" />
                    <input type="submit" value="Details" class="btn btn-default" />
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
        
        <p><a href="?action=show_add_form&category_id=<?php echo $categoryID;?>&topic_id=<?php echo $topicID;?>" class="btn btn-info" role="button">Add Comment</a></p>
    </div>
    <p><a href="../Topics?action=list_topics&category_id=<?php echo $categoryID;?>" class="btn btn-info" role="button">View Topic List</a></p>

</div>