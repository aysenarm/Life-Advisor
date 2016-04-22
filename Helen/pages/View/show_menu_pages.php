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
    <body style="margin-left: 10px; margin-right: 10px;">

    <?php
    foreach ($page as $p) {
        ?>
        <div>
            <p>Title : <?php echo $p['Title'] ?></p>
            <p>Content : <?php echo substr($p['Content'], 0, 200) ?> ...</p><br/>
            <p>Rank : <?php echo $p['Rank'] ?></p>
            <p>Tags : <?php echo $p['Tags'] ?></p>
            <form action="see_page.php" method="post">
                <input type="hidden" name="page_id" value="<?php echo $p['ID_page']; ?>">
                <button type='submit' class='btn btn-info'>Read more</button>
            </form>
        </div>
        <hr>

        <?php
    }
    require_once '../../../content_bottom.php';   ?>

    </body>
</html>
