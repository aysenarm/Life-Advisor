<?php include '../../../view/header.php'; ?>
<div id="main">
    <div id="sidebar">
    </div>
    <div id="content">
        <h1><?php echo $image->getName(); ?></h1>

            
        <img src="photo_gallery/<?php echo $gallery->getID();?>/<?php echo $image->getName();?>" alt="<?php echo $image->getAlt();?>">
        <br/>
        <br/>
        <br/>
<p><a href="index.php?action=list_images&gallery_id=<?php echo $gallery->getID();?>" class="btn btn-info" role="button">View Image List</a></p>
    </div>
</div>
<?php include '../../../view/footer.php'; ?>