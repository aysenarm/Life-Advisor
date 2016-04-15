<?php require_once '../content_top.php'; ?>

    <title>Contact Us</title>

<?php require_once('database.php') ?>

    <link rel="stylesheet" href="scripts/contactus.css">

<?php

$question_id = $_POST['question_id'];

$query = 'SELECT * FROM contactus WHERE questionID = :question_id';
$statement = $db->prepare($query);
$statement->bindValue(':question_id', $question_id);
$statement->execute();
$row = $statement->fetch();
$statement->closeCursor();

?>

<form action="contactus_update_admin.php" method="post">

    <h3>Answer the question or/and update it</h3>


            <input type="hidden" name="question_id" readonly value="<?php echo $row['questionID'] ?>"/>
            <input type="hidden" name="answer_date" value="<?php echo strftime("%Y-%m-%d") ?>"/>

    <div class="contactus_form_field">
        <div class="contactus_form_lable">
            <label>Category: </label>
        </div>
        <div class="contactus_form_input">
            <input type="text" name="category" readonly value="<?php echo $row['category'] ?>" style="background-color:#d3d3d3;"/>
        </div>
    </div>

    <div class="contactus_form_field">
        <div class="contactus_form_lable">
            <label>User ID: </label>
        </div>
        <div class="contactus_form_input">
            <input type="text" name="user_id" readonly value="<?php echo $row['userID'] ?>" style="background-color:#d3d3d3;"/>
        </div>
    </div>

    <div class="contactus_form_field">
        <div class="contactus_form_lable">
            <label>Question: </label>
        </div>
        <div class="contactus_form_input">
            <textarea cols="40" rows="5" name="question" readonly style="background-color:#d3d3d3;"><?php echo $row['question'] ?></textarea>
        </div>
    </div>

    <div class="contactus_form_field">
        <div class="contactus_form_lable">
            <label>Answer: </label>
        </div>
        <div class="contactus_form_input">
            <textarea cols="40" rows="5" name="answer"></textarea>
        </div>
    </div>

    <div class="contactus_form_button">
        <label>&nbsp;</label>
        <input type="submit" value="Answer / Update the answer" />
    </div>
</form>

<?php require_once '../content_bottom.php'; ?>