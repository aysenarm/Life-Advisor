<?php

$question_id = $_POST['question_id'];

require_once('database.php');

$query = "DELETE FROM contactus WHERE questionID = :question_id";
$db->exec($query);

$statement = $db->prepare($query);
$statement->bindValue(':question_id', $question_id);
$statement->execute();
$statement->closeCursor();

header('location: contactus_add_form_user.php');
?>