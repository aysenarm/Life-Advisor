<div id="main">
    <div>
<h1>Promotions</h1>
        <div class="photos">


            <?php foreach ($promotions as $promotion) : ?>
            <div class="col-md-6">
                <div class="well">
                    <img class="img-responsive" src="../../Admin/Images/photo_gallery/<?php echo $promotion->getImage();?>" alt="Cover of <?php echo $promotion->getTitle();?>" width="304" height="236" >
                    <h3><?php echo $promotion->getTitle();?></h3>
                    <h5>Available : <?php echo $promotion->getDateValid();?></h5>
                    <h4>Promotion Code :<?php echo  $promotion->getKey();?></h4>
                </div>
            </div>
            <?php endforeach; ?>

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