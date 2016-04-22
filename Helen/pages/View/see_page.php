<?php
require_once('../Model/interactiondb.php');



if ($_POST){
    $page_id = $_POST['page_id'];

    if ($_COOKIE['page_id'] != NULL){
        setcookie("page_id", "" , time()- 3600,"/","localhost",false,true);
    }
    //setcookie(name, value, expire, path, domain, secure, httponly);
    $expire =  new DateTime('+1 month');
    setcookie("page_id",$page_id,$expire->getTimestamp(),"/","localhost",false,true);
}
else {
    $page_id = $_COOKIE['page_id'];
}

$a = new PageDB();
$page = $a->listOnePage($page_id);




// показать страницу как html код
require_once '../../../content_top.php';
?>
    <form>
        <input type="submit" class="btn btn-info" value="Back" formaction="<?php
        if (isset($_GET['l'])){
            echo "http://localhost/Life-Advisor/Helen/pages/View/admin_pages.php";
        }
        else
        echo $_SERVER['HTTP_REFERER'];
        ?>"/>
    </form>
<h1><?php echo $page['Title']?></h1>
<div>
    <?php
    $image = $page['ID_image'];
    if (!empty($image)){
    ?>
    <img src="http://localhost/Life-Advisor/Helen/pages/img/<?php echo $image;?>">
    <?php
    }
    ?>
</div>
<div><?php echo $page['Content']; ?></div>
<div><?php echo "Rank: ".$page['Rank']; ?></div>



  <?php  if (isset($_SESSION['user_session']) && !isset($_GET['l'])) {
    ?>
    <form id="rank" action="../Controller/like.php" method="post">
        <input type="hidden" name="id" value="<?php echo $page_id; ?>">
        <input name="like" type="submit" value="Like" class="btn btn-info">
    </form>

<?php
}

include 'include_comments.php';
require_once '../../../content_bottom.php';