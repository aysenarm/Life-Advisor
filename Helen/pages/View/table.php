<table>
                <tr>
                    <th>ID page</th>
                    <th>User</th>
                    <th>State</th>
                    <th>Text</th>
                    <th>Delete</th>
                    <th>Update</th>

                </tr>
                <?php foreach ($comments as $comment) : ?>
    <tr>
        <td><?php echo $comment['ID_page']; ?></td>
        <td><?php echo $comment['ID_user'];?></td>
        <td><?php echo $comment['state']; ?></td>
        <td><?php echo $comment['Text']; ?></td>
        <td><form action="../Controller/delete_comment.php" method="post" id="delete_com_form">

                <input type="hidden" name="com_id" value="<?php echo $comment['ID_comment']; ?>" />
                <input type="submit" class="btn btn-default" value="Delete" />

            </form></td>

        <td><form action="update_comments_form.php" method="post" id="update_page_form">

                <input type="hidden" name="com_id" value="<?php echo $comment['ID_comment']; ?>" />
                <input type="submit" class="btn btn-default btn-md" value="Update" />

            </form></td>

    </tr>
<?php endforeach; ?>
</table>