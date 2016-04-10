<?php require_once '../content_top.php'; ?>

<title>Questionnaire</title>

<?php require_once('database.php') ?>

<link rel="stylesheet" href="scripts/questionnaire.css">


<?php

$query_q = 'SELECT * FROM questionnaire_questions';
$statement_q = $db->prepare($query_q);
$statement_q->execute();
$row_q = $statement_q->fetchAll();
$statement_q->closeCursor();

$query_a = 'SELECT * FROM questionnaire_answers ORDER BY aDate DESC';
$statement_a = $db->prepare($query_a);
$statement_a->execute();
$row_a = $statement_a->fetchAll();
$statement_a->closeCursor();

?>

<h3>List of answers</h3>


<!------------------ List of questions ------------------>

<div>

    <div class="list_questions_admin">

        <h4>Questions</h4>

        <?php foreach ($row_q as $r_q) { ?>

            <?php echo "<p> <b>Question #" . $r_q['questionID'] . "</b>: " . $r_q['question'] . "</p>"?>

        <?php } ?>

            <div class="answers_button_delete">
                <input type="button" value="Edit questions" onClick='location.href="questionnaire_update_form_admin.php"'>
            </div>

    </div>


<!------------------ List of answers ------------------>


    <div class="list_answers_admin">

        <h4>Answers</h4>

        <?php foreach ($row_a as $r_a) { ?>

            <div class="answers_one_ten">
                <p><?php echo "<b>Date: </b>" . $r_a['aDate']; ?></p>
                <p><?php echo "<b>User ID: </b>" . $r_a['userID']; ?></p>
                <p><?php echo "<b>Answer #1: </b>" . $r_a['answer1']; ?></p>
                <p><?php echo "<b>Answer #2: </b>" . $r_a['answer2']; ?></p>
                <p><?php echo "<b>Answer #3: </b>" . $r_a['answer3']; ?></p>
                <p><?php echo "<b>Answer #4: </b>" . $r_a['answer4']; ?></p>
                <p><?php echo "<b>Answer #5: </b>" . $r_a['answer5']; ?></p>
                <p><?php echo "<b>Answer #6: </b>" . $r_a['answer6']; ?></p>
                <p><?php echo "<b>Answer #7: </b>" . $r_a['answer7']; ?></p>
                <p><?php echo "<b>Answer #8: </b>" . $r_a['answer8']; ?></p>
                <p><?php echo "<b>Answer #9: </b>" . $r_a['answer9']; ?></p>
                <p><?php echo "<b>Answer #10: </b>" . $r_a['answer10']; ?></p>

                <form class="answers_button_delete" action="questionnaire_delete_admin.php" method="post">
                    <input type="hidden" name="user_id" value="<?php echo $r_a['userID']; ?>" />
                    <input type="submit" value="Delete" />
                </form>
            </div>


        <?php } ?>

    </div>

</div>



<!---------------------------------------------------->

<?php require_once '../content_bottom.php'; ?>