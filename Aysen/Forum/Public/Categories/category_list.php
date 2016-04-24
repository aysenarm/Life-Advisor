<?php include '../../../view/header.php'; ?>




<div id="main">

    <h1>Category List</h1>
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>Category</th>
                <th>Topics</th>
            </tr>
            <?php foreach ($categories as $category) : ?>
            <tr onclick='showTopics(<?php echo $category->getID(); ?>)'>
                <td><?php echo $category->getName(); ?></td>
                <td><span class="badge"><?php echo categoryDB::countTopics($category->getID()); ?></span></td>
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
                $themeurl = dirname($url) . "/Topics";
                echo $themeurl;?>" + "?action=list_topics&category_id="+rowId);
        }
    </script>
</div>

<?php include '../../../view/footer.php'; ?>