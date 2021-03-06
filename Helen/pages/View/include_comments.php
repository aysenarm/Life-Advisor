<?php
if ($_POST) {
    $page_id = $_POST['page_id'];
}
else {
    $page_id = $_COOKIE['page_id'];
}

?>

<!-- ADD COMMENTS PART -->
<!-- IF user is not logged in show message that only registered users can comment,
offer to log in or register -->
<form name="comment" action="../Controller/add_comment.php" method="post">
    <p>
        <!-- IF user is logged in - send INTO POST ID_user as below-->
        <input type="hidden" name="name" value="<?php if(isset($_SESSION['user_session'])){echo $_SESSION['user_session'];}else echo "1";?>"/>

    <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea name="text_comment" class="form-control" rows="5" id="comment" placeholder="Please note that your comment will only be shown after admin checking" required></textarea>
    </div>
    </p>

    <p>
        <!-- ID_page get from the shown page  -->
        <input type="hidden" name="page_id" value="<?php echo $page_id;?>"/>
        <!-- it should be hidden so we don't need to specify it by hands on the page-->
      <input type="submit" class="btn btn-danger" value="Add comment"/>
    </p>
</form>

<!-- LIST COMMENTS PART -->

<?php
// ID_page get from the shown page

require_once('../Model/interactiondb.php');

$pdb =  new CommentDB();
$comments = $pdb->listPageComments($page_id);


foreach ($comments as $comment) : ?>
    <!-- SHOW comments in a good way -->
        <div style="background-color: #e6e6e6; border-radius:6px; padding: 5px;  margin: 10px;"><?php
            $a = $pdb->ShowUsername($comment['ID_user']);
           // var_dump($a);
            echo "<i>".$a[0]['Username']."</i>";
            ?>
        <p><?php echo $comment['Text']; ?></p>
        </div>


<?php endforeach; ?>