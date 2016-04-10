<?php require_once '../content_top.php'; ?>

<title>Questionnaire</title>

<?php require_once('database.php') ?>

<link rel="stylesheet" href="scripts/questionnaire_edit.css">

<?php

$query = 'SELECT * FROM questionnaire_questions';
$statement = $db->prepare($query);
$statement->execute();
$row = $statement->fetchAll();
$statement->closeCursor();
?>

<h3>Change questions</h3>
<h4>Attention! If you change the questions, all users answers will be deleted from Database!</h4>


<form action="questionnaire_update_admin.php" method="post">
    <div class="main_field">

        <?php foreach ($row as $r) { ?>
            <div class="question_form">
                <p> <?php echo "<b>Question #" . $r['questionID'] . "</b>:"?> </p>
                <textarea cols="40" rows="3" name="q_<?php echo $r['questionID'];?>" title="Please fill this field" required><?php echo $r['question'] ?></textarea>
            </div>

        <?php } ?>

        <div class="button">
            <input type="submit" value="Edit" />
        </div>

    </div>
</form>

<?php require_once '../content_bottom.php'; ?>