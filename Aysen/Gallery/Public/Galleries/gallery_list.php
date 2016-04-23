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

</div>
<style>

    ul {
        list-style-type: none;
    }

    li img {
        float: left;
        margin: 5px;
        border: 5px solid #333;
        -moz-transition: all 0.2s ease-in-out;
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    li img:hover {
         border: 5px solid #F15123;
     }
</style>