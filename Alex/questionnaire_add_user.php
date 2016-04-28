<?php

$user_id = $_POST['user_id'];
$answer_date = $_POST['answer_date'];
$answer_1 =  $_POST['answer_1'];
$answer_2 =  $_POST['answer_2'];
$answer_3 =  $_POST['answer_3'];
$answer_4 =  $_POST['answer_4'];
$answer_5 =  $_POST['answer_5'];
$answer_6 =  $_POST['answer_6'];
$answer_7 =  $_POST['answer_7'];
$answer_8 =  $_POST['answer_8'];
$answer_9 =  $_POST['answer_9'];
$answer_10 =  $_POST['answer_10'];


if (
    empty($user_id) || empty($answer_date)
) {
    $error = "Invalid data!";
    include('error.php');
}
else {

    require_once('database.php');


    require_once "Model/cl_questionnaire.php";
    $questionnaire_feature = new Questionnaire_feature();
    $row1 = $questionnaire_feature->qau1($db, $user_id);


    if ($row1){



        $questionnaire_feature = new Questionnaire_feature();
        $questionnaire_feature->qau2($db, $user_id, $answer_date, $answer_1, $answer_2, $answer_3, $answer_4, $answer_5, $answer_6, $answer_7, $answer_8, $answer_9, $answer_10);

        include('questionnaire_already_answered.php');
    }

    else {


        $questionnaire_feature = new Questionnaire_feature();
        $questionnaire_feature->qau3($db, $user_id, $answer_date, $answer_1, $answer_2, $answer_3, $answer_4, $answer_5, $answer_6, $answer_7, $answer_8, $answer_9, $answer_10);

        header('location: questionnaire_thanks.php');

    }

}

?>