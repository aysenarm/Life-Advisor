<?php

$user_id = $_POST['user_id'];

require_once('database.php');

$query = "DELETE FROM questionnaire_answers WHERE userID = :user_id";
$db->exec($query);

$statement = $db->prepare($query);
$statement->bindValue(':user_id', $user_id);
$statement->execute();
$statement->closeCursor();

header('location: questionnaire_admin.php');
?>