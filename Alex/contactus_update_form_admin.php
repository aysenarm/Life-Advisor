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

$question_id = $_POST['question_id'];

require_once "Model/cl_contactus.php";
$contactus_feature = new Contactus_feature();
$row = $contactus_feature->cufa($question_id, $db);

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



<?php

    }

}
else {
    echo "<h2>We are sorry, but you have to be logged in to see this page,
please log in <a href='http://life-adviser.hryshkova.com/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
}
?>


<?php require_once '../content_bottom.php'; ?>