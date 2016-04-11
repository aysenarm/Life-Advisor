<?php include '../../../view/header.php'; ?>
<div id="main">
    <div id="sidebar">
    </div>
    <div id="content">
        <h1><?php echo $topic->getName(); ?></h1>

            <p><b>ID:</b> <?php echo $topic->getID(); ?></p>
            <p><b>Title:</b> <?php echo $topic->getName() ?></p>
            <p><b>UserID:</b> <?php echo $topic->getUserID() ?></p>
            <p><b>CategoryID:</b> <?php echo $topic->getCategoryID() ?></p>
            <p><b>Publishing Date:</b> <?php echo $topic->getDatePublished() ?></p>
<p><a href="index.php?action=list_topics">View Topic List</a></p>
    </div>
</div>
<?php include '../../../view/footer.php'; ?>