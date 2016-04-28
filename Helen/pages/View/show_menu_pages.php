<?php

require_once('../Model/interactiondb.php');


if ($_POST){
    $menu = $_POST['menu'];

    if (isset($_COOKIE['menu'])){
        setcookie('menu', "" , time()- 3600,"/","localhost",false,true);
    }
    //setcookie(name, value, expire, path, domain, secure, httponly);
    $expire =  new DateTime('+1 month');
    setcookie('menu',$menu,$expire->getTimestamp(),"/","localhost",false,true);
}
else {
    $menu = $_COOKIE['menu'];
}

require_once '../../../content_top.php';

//$menu = $_POST['menu'];

$a = new PageDB();
$page = $a->listMenuPages($menu);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <!-- the head section -->
    <head>
        <title>Pages of my website</title>
        <link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css' type='text/css' media='all'>
    </head>

    <!-- the body section -->
    <body>
    
    <?php
    foreach ($page as $p) {
        ?>
        <div class="col-md-6">
            <div class="well">
                <?php echo '<img class="img-responsive" src="http://'.$_SERVER['SERVER_NAME'].'/Life-Advisor/Helen/pages/img/' . $p['ID_image'] . '">' ?>
                <h3><?php echo $p['Title'] ?></h3><hr>
                <div>
                    <div class="col-xs-2">
                    <button type="button" class="btn btn-default btn-xs">
                        <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> <?php echo $p['Rank'] ?>
                    </button>
                    </div>
                    <div class="col-xs-10">
                        <h6>Tags: <span class="text-danger"><?php echo $p['Tags'] ?></span></h6>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div>
                    <p><?php echo substr($p['Content'], 0, 200) ?> ...</p><br/>
                </div>


                <form class="text-right" action="see_page.php" method="post">
                    <input type="hidden" name="page_id" value="<?php echo $p['ID_page']; ?>">
                    <button type='submit' class='btn btn-danger'>Read more</button>
                </form>
            </div>
        </div>

        <?php
    }
    require_once '../../../content_bottom.php';   ?>

    </body>
</html>
