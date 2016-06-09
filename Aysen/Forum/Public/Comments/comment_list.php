
<div id="main">

    <h1>Comment List of <?php echo $topic->getName(); ?></h1>

            <?php foreach ($comments as $comment) : ?>
    <div style="border: double;">
        <p>
            <span style="font-style: italic; font-size: medium; font-weight: bold;">
                <?php echo $comment->getUserID(); ?>
            </span>
        <span style="float: right;">
            <?php echo $comment->getDatePublished(); ?>
        </span>
        </p>
        <p><?php echo $comment->getName(); ?></p>

    </div>
                <br/>
            <?php endforeach; ?>



    <div class="form-group">
        <?php

        if(isset($_SESSION['user_session'])) {
         echo  "<form action='?action=add_comment&category_id=".$categoryID."&topic_id=".$topicID."' method='post'";
       echo "<label for='comment'>Comment:</label>";
       echo "<textarea name='name' class='form-control' rows='5' id='name' required></textarea>";
       echo "<br/>";
       echo "<input type='submit' class='btn btn-default'  value='Add comment' />";
        echo "</form>";

        }
        else {
            echo "<h2>We are sorry, but you have to be logged in to add comments this page,
please log in <a href='http://life-adviser.hryshkova.com/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
        }
        ?>

    </div>

    <p><a href="../Topics?action=list_topics&category_id=<?php echo $categoryID;?>" class="btn btn-info" role="button">View Topic List</a></p>

</div>
