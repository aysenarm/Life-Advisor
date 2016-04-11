<?php include '../../../view/header.php'; ?>
<div id="main">

    <h1>Category List</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>UserID</th>
                <th>Publishing Date</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Details</th>
            </tr>
            <?php foreach ($categories as $category) : ?>
            <tr>
                <td><?php echo $category->getID(); ?></td>
                <td><?php echo $category->getName(); ?></td>
                <td><?php echo $category->getUserID(); ?></td>
                <td><?php echo $category->getDatePublished(); ?></td>
                <td><form action="." method="post" id="delete_category_form">
                    <input type="hidden" name="action" value="delete_category" />
                    <input type="hidden" name="category_id" value="<?php echo $category->getID(); ?>" />
                    <input type="submit" value="Delete" />
                </form></td>
                <td><form action="." method="post" id="edit_category_form">
                    <input type="hidden" name="action" value="show_edit_form" />
                    <input type="hidden" name="category_id" value="<?php echo $category->getID(); ?>" />
                    <input type="submit" value="Edit" />
                </form></td>
                <td><form action="." method="post" id="detail_category_form">
                    <input type="hidden" name="action" value="show_detail_form">
                    <input type="hidden" name="category_id" value="<?php echo $category->getID(); ?>" />
                    <input type="submit" value="Details" />
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <p><a href="?action=show_add_form">Add Category</a></p>
    </div>

</div>
<?php include '../../../view/footer.php'; ?>