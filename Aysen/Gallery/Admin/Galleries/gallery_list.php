<?php include '../../../view/header.php'; ?>
<div id="main">

    <h1>Gallery List</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Details</th>
            </tr>
            <?php foreach ($galleries as $gallery) : ?>
            <tr>
                <td><?php echo $gallery->getID(); ?></td>
                <td><?php echo $gallery->getName(); ?></td>
                <td><form action="." method="post" id="delete_gallery_form">
                    <input type="hidden" name="action" value="delete_gallery" />
                    <input type="hidden" name="gallery_id" value="<?php echo $gallery->getID(); ?>" />
                    <input type="submit" value="Delete" />
                </form></td>
                <td><form action="." method="post" id="edit_gallery_form">
                    <input type="hidden" name="action" value="show_edit_form" />
                    <input type="hidden" name="gallery_id" value="<?php echo $gallery->getID(); ?>" />
                    <input type="submit" value="Edit" />
                </form></td>
                <td><form action="." method="post" id="detail_gallery_form">
                    <input type="hidden" name="action" value="show_detail_form">
                    <input type="hidden" name="gallery_id" value="<?php echo $gallery->getID(); ?>" />
                    <input type="submit" value="Details" />
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <p><a href="?action=show_add_form">Add Gallery</a></p>
    </div>

</div>
<?php include '../../../view/footer.php'; ?>