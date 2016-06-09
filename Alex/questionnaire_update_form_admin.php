<?php require_once '../content_top.php'; ?>

<title>Questionnaire</title>





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

<link rel="stylesheet" href="scripts/questionnaire_edit.css">

<?php

        require_once "Model/cl_questionnaire.php";
        $questionnaire_feature = new Questionnaire_feature();
        $row = $questionnaire_feature->qufa($db);
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


 <?php

    }

}
else {
    echo "<h2>We are sorry, but you have to be logged in to see this page,
please log in <a href='http://life-adviser.hryshkova.com/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
}

?>



<?php require_once '../content_bottom.php'; ?>