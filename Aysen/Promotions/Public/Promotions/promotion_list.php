<div id="main">
    <h1>Promotions</h1>
    <div class="row">
        <?php foreach ($promotions as $promotion) : ?>
            <div class="col-md-6">
                <div class="well">
                    <img class="img-responsive text-center" src="../../Admin/Images/photo_gallery/<?php echo $promotion->getImage();?>" alt="Cover of <?php echo $promotion->getTitle();?>" >
                    <h3><?php echo $promotion->getTitle();?></h3>
                    <h5>Available : <?php echo $promotion->getDateValid();?></h5>
                    <h4>Promotion Code :<?php echo  $promotion->getKey();?></h4>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>