<?php
require_once '../../../content_top.php';
require_once('../Model/interactiondb.php');


$menu = $_POST['menu'];

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
        echo '<div>';
        echo "Title : " . $p['Title'] . "<br/>";
        echo "Content : " . $p['Content'] . "<br/>";
        echo "Rank : " . $p['Rank'] . "<br/>";
        echo "Tags : " . $p['Tags'] . "<br/>";
        echo '</div>  <hr>';
        echo '';

    }



    require_once '../../../content_bottom.php';   ?>

    </body>
</html>
