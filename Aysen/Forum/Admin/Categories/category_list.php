<div id="main">

    <h3>Category List</h3>
    <p  style="padding-bottom: 10px"><a href="?action=show_add_form" class="btn btn-default" role="button">Add Category</a></p>
    <div class="table-responsive">
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
            <tr onclick='showTopics(<?php echo $category->getID(); ?>)'>
                <td><?php echo $category->getID(); ?></td>
                <td><?php echo $category->getName(); ?></td>
                <td><?php echo $category->getUserID(); ?></td>
                <td><?php echo $category->getDatePublished(); ?></td>
                <td><form action=".?action=list_categories" method="post" id="delete_category_form">
                    <input type="hidden" name="action" value="delete_category" />
                    <input type="hidden" name="category_id" value="<?php echo $category->getID(); ?>" />
                    <input type="submit" value="Delete" class="btn btn-default btn-md" />
                </form></td>
                <td><form action=".?action=list_categories" method="post" id="edit_category_form">
                    <input type="hidden" name="action" value="show_edit_form" />
                    <input type="hidden" name="category_id" value="<?php echo $category->getID(); ?>" />
                    <input type="submit" value="Edit" class="btn btn-default btn-md" />
                </form></td>
                <td><form action=".?action=list_categories" method="post" id="detail_category_form">
                    <input type="hidden" name="action" value="show_detail_form">
                    <input type="hidden" name="category_id" value="<?php echo $category->getID(); ?>" />
                    <input type="submit" value="Details"class="btn btn-default btn-md" />
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
        

    </div>
    <script>
        function showTopics(rowId) {
            window.location.assign("<?php
                $url  = "http://";
                $url .= $_SERVER['SERVER_NAME'];
                $url .= htmlspecialchars($_SERVER['REQUEST_URI']);
                $themeurl = dirname(dirname($url)) . "/Topics/";
                echo $themeurl;?>" + "?action=list_topics&category_id="+rowId);
        }
    </script>
</div>