<?php include '../../../view/header.php'; ?>

<div id="main">

    <h1>Topic List of <?php echo $category->getName(); ?></h1>
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>Title</th>
                <th>User</th>
                <th>Date</th>
                <th>Comments</th>
            </tr>
            <?php foreach ($topics as $topic) : ?>
            <tr onclick='showComments(<?php echo $topic->getID(); ?>,<?php echo $categoryID;?>)'>
                <td><?php echo $topic->getName(); ?></td>
                <td><?php echo $topic->getUserID(); ?></td>
                <td><?php echo $topic->getDatePublished(); ?></td>
                <td><span class="badge"><?php echo topicDB::countComments($topic->getID()); ?></span></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
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