<?php include '../../../view/header.php'; ?>
<div id="main">

    <h1>Topic List</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Details</th>
            </tr>
            <?php foreach ($topics as $topic) : ?>
            <tr>
                <td><?php echo $topic->getID(); ?></td>
                <td><?php echo $topic->getName(); ?></td>
                <td><form action="." method="post" id="delete_topic_form">
                    <input type="hidden" name="action" value="delete_topic" />
                    <input type="hidden" name="topic_id" value="<?php echo $topic->getID(); ?>" />
                    <input type="submit" value="Delete" />
                </form></td>
                <td><form action="." method="post" id="edit_topic_form">
                    <input type="hidden" name="action" value="show_edit_form" />
                    <input type="hidden" name="topic_id" value="<?php echo $topic->getID(); ?>" />
                    <input type="submit" value="Edit" />
                </form></td>
                <td><form action="." method="post" id="detail_topic_form">
                    <input type="hidden" name="action" value="show_detail_form">
                    <input type="hidden" name="topic_id" value="<?php echo $topic->getID(); ?>" />
                    <input type="submit" value="Details" />
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <p><a href="?action=show_add_form">Add Topic</a></p>
    </div>

</div>
<?php include '../../../view/footer.php'; ?>