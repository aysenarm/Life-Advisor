<?php include '../../../view/header.php'; ?>
<div id="main">
    <div id="sidebar">
    </div>
    <div id="content">
        <h1><?php echo $image->getName(); ?></h1>

            <p><b>ID:</b> <?php echo $image->getID(); ?></p>
            <p><b>Title:</b> <?php echo $image->getName() ?></p>
<p><a href="index.php?action=list_images">View Image List</a></p>
    </div>
</div>
<?php include '../../../view/footer.php'; ?>