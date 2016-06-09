<?php require_once '../content_top.php'; ?>

<title>Questionnaire</title>



<?php
if(isset($_SESSION['user_session'])) {

    $rez = $user->userInfo($_SESSION['user_session']);
    $_SESSION['role'] = $rez['Rights'];

?>





<?php require_once('database.php') ?>

<link rel="stylesheet" href="scripts/questionnaire.css">

<?php  $user_id = $rez['ID_user']; ?>





<!--------------------------- Query --------------------------->

<?php


require_once "Model/cl_questionnaire.php";
$questionnaire_feature = new Questionnaire_feature();
$row = $questionnaire_feature->qafu($db);

?>

<!----------------------------------------------------------->

<h3>Questionnaire</h3>
<h4>Please help us make our website better. Answer for few questions.</h4>



<form action="questionnaire_add_user.php" method="post">

    <div class="q_a_field_main">

<!-------------------- List of questions -------------------->

        <?php
            foreach ($row as $r) {
                $q_num = $r['questionID'];
        ?>


            <div class="q_a_field_main_small">
                <div class="q_number">
                    <p><b><?php echo "Question #" . $q_num . ":"; ?></b></p>
                </div>
                <div class="q_field">
                    <p><?php echo $r['question']; ?></p>
                </div>
                <div class="a_field">
                    <textarea cols="40" rows="5" name="<?php echo "answer_$q_num"; ?>"></textarea>
                </div>
            </div>

        <?php
            }
        ?>

<!-------------------- Submit Button -------------------->

            <div class="q_a_button">
                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"/>
                <input type="hidden" name="answer_date" value="<?php echo strftime("%Y-%m-%d") ?>"/>

                <input type="submit" value="Send" />
            </div>

<!--------------------------------------------------------->

    </div>

</form>

<!-------------------- ------------------------------------>


<?php

}
else {
    echo "<h2>We are sorry, but you have to be logged in to see this page,
    please log in <a href='http://life-adviser.hryshkova.com/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
}

?>



<?php require_once '../content_bottom.php'; ?>