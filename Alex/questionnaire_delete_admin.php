<?php

$user_id = $_POST['user_id'];

require_once('database.php');



require_once "Model/cl_questionnaire.php";
$questionnaire_feature = new Questionnaire_feature();
$questionnaire_feature->qda($db, $user_id);

header('location: questionnaire_admin.php');
?>