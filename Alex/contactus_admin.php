<?php require_once '../content_top.php'; ?>

<title>Contact Us</title>


<?php

if(isset($_SESSION['user_session'])) {

    $rez = $user->userInfo($_SESSION['user_session']);
    $_SESSION['role'] = $rez['Rights'];
    if ($_SESSION['role'] == 2){
        echo "<h2>We are sorry, but you have to be ADMIN to see this page</h2><br/>";

    }
    else {

?>




        <?php require_once('database.php') ?>

        <link rel="stylesheet" href="scripts/contactus.css">


        <?php

        if(!isset($_GET['sort'])){
            $sort = 'all';
        }
        else $sort = $_GET['sort'];


        switch ($sort){
            case 'all':
                $query = 'SELECT * FROM contactus ORDER BY questionID DESC'; break;
            case 'answered':
                $query = 'SELECT * FROM contactus WHERE answer IS NOT NULL ORDER BY questionID DESC'; break;
            case 'unanswered':
                $query = 'SELECT * FROM contactus WHERE answer IS NULL ORDER BY questionID DESC'; break;
            default:
                $query = 'SELECT * FROM contactus ORDER BY questionID DESC';
        }


        $statement = $db->prepare($query);
        $statement->execute();
        $row = $statement->fetchAll();
        $statement->closeCursor();

        ?>


        <h3>Questions</h3>

        <div id="donation_search_conditions">
            <p><b>Sort questions:</b></p>
            <ul>
                <li><p> <a href="contactus_admin.php?sort=all">All questions</a></p></li>
                <li><p> <a href="contactus_admin.php?sort=answered">Answered questions</a></p></li>
                <li><p> <a href="contactus_admin.php?sort=unanswered">Unanswered questions</a></p></li>
            </ul>
        </div>


        <!---------- Questions and Answers ---------->

        <?php
        foreach ($row as $r) {
            ?>
            <div class="contactus_q_a">
                <div class="contactus_category">
                    <p><b>Category: </b><?php echo $r['category']; ?></p>
                    <p>| <?php echo $r['questionDate']; ?> |</p>
                </div>
                <div class="contactus_question">
                    <p><b>Question:</b></p>
                    <p><?php echo $r['question']; ?></p>
                </div>
                <div class="contactus_answer">
                    <p><b>Answer:</b></p>
                    <p><?php echo $r['answer']; ?></p>
                    <p><?php echo $r['answerDate']; ?></p>
                </div>
                <div class="contactus_admin_buttons">
                    <form class="contactus_admin_button_update" action="contactus_update_form_admin.php" method="post">
                        <input type="hidden" name="question_id" value="<?php echo $r['questionID']; ?>" />
                        <input type="submit" value="Answer / Update the answer" />
                    </form>
                    <form class="contactus_admin_button_delete" action="contactus_delete_admin.php" method="post">
                        <input type="hidden" name="question_id" value="<?php echo $r['questionID']; ?>" />
                        <input type="submit" value="Delete" />
                    </form>
                </div>
            </div>

            <?php
        }
        ?>



<?php

    }

}
else {
    echo "<h2>We are sorry, but you have to be logged in to see this page,
please log in <a href='http://localhost/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
}
?>


<?php require_once '../content_bottom.php'; ?>




