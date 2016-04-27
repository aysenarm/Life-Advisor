<div id="main">
    <div>
<h1>Promotions</h1>
        <div class="photos">


        <ul>
            <?php foreach ($promotions as $promotion) : ?>
                <li>
                    <img src="../../Admin/Images/photo_gallery/<?php echo $promotion->getImage();?>" alt="Cover of <?php echo $promotion->getTitle();?>" width="304" height="236" >
                    <span class="title"><?php echo $promotion->getTitle();?></span>
                    <span class="date">Available : <?php echo $promotion->getDateValid();?></span>
                    <span class="key">Promotion Code : <?php echo $promotion->getKey();?></span>

                </li>
            <?php endforeach; ?>
        </ul>
        </div>
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