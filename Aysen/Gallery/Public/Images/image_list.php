<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="../css/bootstrap-image-gallery.min.css">

</head>
<body>
<h1>Gallery : <?php echo $galleryName;?></h1>
<br/>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">&#8249;</a>
    <a class="next">&#8250;</a>
    <a class="close">&#215;</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="main">
<div id="links">
    <?php foreach ($images as $image) : ?>
        <a href="../../Admin/Images/photo_gallery/<?php echo $galleryID;?>/<?php echo $image->getName();?>" title="<?php echo $image->getAlt();?>" data-gallery>
            <img src="../../Admin/Images/photo_gallery/<?php echo $galleryID;?>/<?php echo $image->getName();?>" alt="<?php echo $image->getAlt();?>" class="img-thumbnail" style="height: 118px; width: 152px;">
        </a>
    <?php endforeach; ?>
</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="js/bootstrap-image-gallery.min.js"></script>


</body>
<style>
    .img-thumbnail:hover {
        border: 5px solid #F15123;
    }
</style>