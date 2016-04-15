<?php include '../../../view/header.php'; ?>
<div id="main">
    <div id="sidebar">
    </div>
    <div id="content">
        <h1><?php echo $gallery->getName(); ?></h1>

            <p><b>ID:</b> <?php echo $gallery->getID(); ?></p>
            <p><b>Title:</b> <?php echo $gallery->getName() ?></p>
<p><a href="index.php?action=list_galleries">View Gallery List</a></p>
    </div>
</div>
<?php include '../../../view/footer.php'; ?>