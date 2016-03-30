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
    $query = "UPDATE contactus SET
                answer = :answer,
                answerDate = :answer_date
            WHERE questionID = :question_id ";

    $statement = $db->prepare($query);
    $statement->bindValue(':question_id', $question_id);
    $statement->bindValue(':answer', $answer);
    $statement->bindValue(':answer_date', $answer_date);


    $statement->execute();
    $statement->closeCursor();

    header('location: contactus_admin.php');
}

?>