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

    $query1 = 'SELECT * FROM questionnaire_answers WHERE userID = :user_id1';
    $statement1 = $db->prepare($query1);
    $statement1->bindValue(':user_id1', $user_id);
    $statement1->execute();
    $row1 = $statement1->fetchAll();
    $statement1->closeCursor();


    if ($row1){
        include('questionnaire_already_answered.php');
    }

    else {

        $query = "INSERT INTO questionnaire_answers
                (userID, aDate, answer1, answer2, answer3, answer4, answer5, answer6, answer7, answer8, answer9, answer10)
              VALUES
                (:user_id, :answer_date, :answer_1, :answer_2, :answer_3, :answer_4, :answer_5, :answer_6, :answer_7, :answer_8, :answer_9, :answer_10)";


        $statement = $db->prepare($query);
        $statement->bindValue(':user_id', $user_id);
        $statement->bindValue(':answer_date', $answer_date);
        $statement->bindValue(':answer_1', $answer_1);
        $statement->bindValue(':answer_2', $answer_2);
        $statement->bindValue(':answer_3', $answer_3);
        $statement->bindValue(':answer_4', $answer_4);
        $statement->bindValue(':answer_5', $answer_5);
        $statement->bindValue(':answer_6', $answer_6);
        $statement->bindValue(':answer_7', $answer_7);
        $statement->bindValue(':answer_8', $answer_8);
        $statement->bindValue(':answer_9', $answer_9);
        $statement->bindValue(':answer_10', $answer_10);

        $statement->execute();
        $statement->closeCursor();

        header('location: questionnaire_thanks.php');

    }

}

?>