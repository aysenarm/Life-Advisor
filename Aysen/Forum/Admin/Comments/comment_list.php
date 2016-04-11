<?php include '../../../view/header.php'; ?>
<div id="main">

    <h1>Comment List</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>UserID</th>
                <th>Publishing Date</th>
                <th>TopicID</th>
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
                <td><?php echo $comment->getTopicID(); ?></td>

                <td><form action="." method="post" id="delete_comment_form">
                    <input type="hidden" name="action" value="delete_comment" />
                    <input type="hidden" name="comment_id" value="<?php echo $comment->getID(); ?>" />
                    <input type="submit" value="Delete" />
                </form></td>
                <td><form action="." method="post" id="edit_comment_form">
                    <input type="hidden" name="action" value="show_edit_form" />
                    <input type="hidden" name="comment_id" value="<?php echo $comment->getID(); ?>" />
                    <input type="submit" value="Edit" />
                </form></td>
                <td><form action="." method="post" id="detail_comment_form">
                    <input type="hidden" name="action" value="show_detail_form">
                    <input type="hidden" name="comment_id" value="<?php echo $comment->getID(); ?>" />
                    <input type="submit" value="Details" />
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <p><a href="?action=show_add_form">Add Comment</a></p>
    </div>

</div>
<?php include '../../../view/footer.php'; ?>