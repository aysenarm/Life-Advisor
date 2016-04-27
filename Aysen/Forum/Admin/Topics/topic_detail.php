<div id="main">
    <div id="sidebar">
    </div>
    <div id="content">
        <h1><?php echo $topic->getName(); ?></h1>

            <p><b>ID:</b> <?php echo $topic->getID(); ?></p>
            <p><b>Title:</b> <?php echo $topic->getName(); ?></p>
            <p><b>UserID:</b> <?php echo $topic->getUserID(); ?></p>
            <p><b>Category:</b> <?php echo $category->getName(); ?></p>
            <p><b>Publishing Date:</b> <?php echo $topic->getDatePublished(); ?></p>
<p><a href="?action=list_topics&category_id=<?php echo $categoryID;?>" class="btn btn-info" role="button">View Topic List</a></p>
    </div>
</div>
