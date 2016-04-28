<?php

$question_id = $_POST['question_id'];
$answer = $_POST['answer'];
$answer_date = $_POST['answer_date'];

if (
    empty($question_id) || empty($answer)
) {
    $error = "Invalid data!";
    include('error.php');
}

else {
    require_once('database.php');

    require_once "Model/cl_contactus.php";
    $contactus_feature = new Contactus_feature();
    $contactus_feature->cua($question_id, $answer, $answer_date, $db);


    header('location: contactus_admin.php');
}

?>