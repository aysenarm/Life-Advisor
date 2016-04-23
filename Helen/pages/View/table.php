<table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>ID page</th>
                    <th>User</th>
                    <th>State</th>
                    <th>Text</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>

                </tr>
                <?php foreach ($comments as $comment) : ?>
    <tr>
        <td><?php echo $comment['ID_page']; ?></td>
        <td><?php echo $comment['ID_user'];?></td>
        <td><?php echo $comment['state']; ?></td>
        <td><?php echo $comment['Text']; ?></td>
        <td><form action="../Controller/delete_comment.php" method="post" id="delete_com_form">

                <input type="hidden" name="com_id" value="<?php echo $comment['ID_comment']; ?>" />
                <input type="submit" class="btn btn-danger btn-xs" value="Delete" />

            </form></td>

        <td><form action="update_comments_form.php" method="post" id="update_page_form">

                <input type="hidden" name="com_id" value="<?php echo $comment['ID_comment']; ?>" />
                <input type="submit" class="btn btn-info btn-xs" value="Update" />

            </form></td>

    </tr>
<?php endforeach; ?>
</table>