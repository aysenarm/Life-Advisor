<?php include '../../../view/header.php'; ?>
<div id="main">

    <h1>Image List</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Details</th>
            </tr>
            <?php foreach ($images as $image) : ?>
            <tr>
                <td><?php echo $image->getID(); ?></td>
                <td><?php echo $image->getName(); ?></td>
                <td><form action="." method="post" id="delete_image_form">
                    <input type="hidden" name="action" value="delete_image" />
                    <input type="hidden" name="image_id" value="<?php echo $image->getID(); ?>" />
                    <input type="submit" value="Delete" />
                </form></td>
                <td><form action="." method="post" id="edit_image_form">
                    <input type="hidden" name="action" value="show_edit_form" />
                    <input type="hidden" name="image_id" value="<?php echo $image->getID(); ?>" />
                    <input type="submit" value="Edit" />
                </form></td>
                <td><form action="." method="post" id="detail_image_form">
                    <input type="hidden" name="action" value="show_detail_form">
                    <input type="hidden" name="image_id" value="<?php echo $image->getID(); ?>" />
                    <input type="submit" value="Details" />
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <p><a href="?action=show_add_form">Add Image</a></p>
    </div>

</div>
<?php include '../../../view/footer.php'; ?>