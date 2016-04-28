<?php

$question_id = $_POST['question_id'];

require_once('database.php');

require_once "Model/cl_contactus.php";
$contactus_feature = new Contactus_feature();
$contactus_feature->cda($question_id, $db);

header('location: contactus_admin.php');
?>