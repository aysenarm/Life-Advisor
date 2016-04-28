<?php


$user_id = $_POST['user_id'];
$question = $_POST['question'];
$category = $_POST['category'];
$question_date = $_POST['question_date'];


if (
    empty($user_id) || empty($question) || empty($category) || empty($question_date)
) {
    $error = "Invalid data!";
    include('error.php');
}
else {
    require_once('database.php');

    require_once "Model/cl_contactus.php";
    $contactus_feature = new Contactus_feature();
    $contactus_feature->cau($user_id, $question, $category, $question_date, $db);


    header('location: contactus_add_form_user.php');
}

?>