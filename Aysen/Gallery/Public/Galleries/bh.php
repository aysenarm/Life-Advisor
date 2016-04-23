<?php include '../../../view/header.php'; ?>
<div id="main">
    <div>
        <h1>Galleries</h1>
        <ul>
            <?php foreach ($galleries as $gallery) : ?>
                <li><a href="<?php
                    $url  = 'http://';
                    $url .= $_SERVER['SERVER_NAME'];
                    $url .= htmlspecialchars($_SERVER['REQUEST_URI']);
                    $themeurl = dirname($url) . '/Images';
                    echo $themeurl.'?action=list_images&gallery_id='.$gallery->getID();?>">
                        <img src="../../Admin/Images/photo_gallery/<?php echo $gallery->getImage();?>" alt="Cover of <?php echo $gallery->getName();?>"  class="img-thumbnail" style="height: 236px; width: 304px;">
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="pic">
        <div class="text">
            The tiger is the largest cat species,
        </div>
    </div>

</div>
<style>

    .pic
    {
        width:236px;
        height:304px;
        background: url(http://www.corelangs.com/css/box/img/tiger.png) no-repeat;
    }
    .text
    {
        width:236px;
        height:304px;
        background:#FFF;
        opacity:0;
    }
    .pic:hover .text
    {
        opacity:0.6;
        text-align:justify;
        color:#000000;
        font-size:20px;
        font-weight:bold;
    }
</style>