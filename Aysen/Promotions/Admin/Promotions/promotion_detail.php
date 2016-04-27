<div id="main">
    <div id="sidebar">
    </div>
    <div id="content">
        <h1><?php echo $promotion->getTitle(); ?></h1>

            <p><b>ID:</b> <?php echo $promotion->getID(); ?></p>
            <p><b>Image:</b>
                <img src="../Images/photo_gallery/<?php echo $promotion->getImage();?>" alt="Cover of <?php echo $promotion->getTitle();?>" style="width: auto; height: auto;">
            </p>
            <p><b>Title:</b> <?php echo $promotion->getTitle() ?></p>
            <p><b>Key:</b> <?php echo $promotion->getKey() ?></p>
            <p><b>Last Valid Date:</b> <?php echo $promotion->getDateValid() ?></p>
            <p><b>UserID:</b> <?php echo $promotion->getUserID() ?></p>
            <p><b>Publishing Date:</b> <?php echo $promotion->getDatePublished() ?></p>
<p><a href="?action=list_promotions" class="btn btn-info" role="button">View Promotion List</a></p>
    </div>
</div>
