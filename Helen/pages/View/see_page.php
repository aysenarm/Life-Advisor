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

$db = Dbclass::getDB();

$a = new PageDB();
$page = $a->listOnePage($page_id);




// показать страницу как html код
require_once '../../../content_top.php';
?>
    <form>
        <input type="submit" class="btn btn-info" value="Back" formaction="admin_pages.php"/>
    </form>
<h1><?php echo $page['Title']?></h1>
<div>
    <?php
    $image = $a->ShowImage($page['ID_image']);
    ?>
    <img src="<?php echo $image[0]['link'];?>">
</div>
<div><?php echo $page['Content']; ?></div>
<?php
include 'include_comments.php';
require_once '../../../content_bottom.php';