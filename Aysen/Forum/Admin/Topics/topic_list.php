<?php include '../../../view/header.php'; ?>

<div id="main">

    <h1>Topic List of <?php echo $category->getName(); ?></h1>
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>UserID</th>
                <th>Category</th>
                <th>Publishing Date</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Details</th>
            </tr>
            <?php foreach ($topics as $topic) : ?>
            <tr onclick='showComments(<?php echo $topic->getID(); ?>,<?php echo $categoryID;?>)'>
                <td><?php echo $topic->getID(); ?></td>
                <td><?php echo $topic->getName(); ?></td>
                <td><?php echo $topic->getUserID(); ?></td>
                <td><?php echo $category->getName(); ?></td>
                <td><?php echo $topic->getDatePublished(); ?></td>
                <td><form action=".?category_id=<?php echo $categoryID;?>" method="post" id="delete_topic_form">
                    <input type="hidden" name="action" value="delete_topic" />
                    <input type="hidden" name="topic_id" value="<?php echo $topic->getID(); ?>" />
                    <input type="submit" value="Delete" class="btn btn-default"  />
                </form></td>
                <td><form action=".?category_id=<?php echo $categoryID;?>" method="post" id="edit_topic_form">
                    <input type="hidden" name="action" value="show_edit_form" />
                    <input type="hidden" name="topic_id" value="<?php echo $topic->getID(); ?>" />
                    <input type="submit" value="Edit" class="btn btn-default"  />
                </form></td>
                <td><form action=".?category_id=<?php echo $categoryID;?>" method="post" id="detail_topic_form">
                    <input type="hidden" name="action" value="show_detail_form">
                    <input type="hidden" name="topic_id" value="<?php echo $topic->getID(); ?>" />
                    <input type="submit" value="Details" class="btn btn-default" />
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
        <p><a href="?action=show_add_form&category_id=<?php echo $categoryID;?>" class="btn btn-info" role="button">Add Topic</a></p>
    </div>
    <script>
        function showComments(rowId,categoryId) {
            window.location.assign("<?php
                    $url  = "http://";
                    $url .= $_SERVER['SERVER_NAME'];
                    $url .= htmlspecialchars($_SERVER['REQUEST_URI']);
                    $themeurl = dirname(dirname($url)) . "/Comments";
                    echo $themeurl;?>" + "?action=list_comments&category_id="+categoryId+"&topic_id="+rowId);
        }
    </script>
    <p><a href="../Categories?action=list_categories" class="btn btn-info" role="button">View Category List</a></p>

</div>
<?php include '../../../view/footer.php'; ?>