<?php include '../../../view/header.php'; ?>
<div id="main">
    <div id="sidebar">
    </div>
    <div id="content">
        <h1><?php echo $category->getName(); ?></h1>

            <p><b>ID:</b> <?php echo $category->getID(); ?></p>
            <p><b>Title:</b> <?php echo $category->getName() ?></p>
            <p><b>UserID:</b> <?php echo $category->getUserID() ?></p>
             <p><b>Publishing Date:</b> <?php echo $category->getDatePublished() ?></p>
<p><a href="?action=list_categories" class="btn btn-info" role="button">View Category List</a></p>
    </div>
</div>
<?php include '../../../view/footer.php'; ?>