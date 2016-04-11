<?php

$q_1 = $_POST['q_1'];
$q_2 = $_POST['q_2'];
$q_3 = $_POST['q_3'];
$q_4 = $_POST['q_4'];
$q_5 = $_POST['q_5'];
$q_6 = $_POST['q_6'];
$q_7 = $_POST['q_7'];
$q_8 = $_POST['q_8'];
$q_9 = $_POST['q_9'];
$q_10 = $_POST['q_10'];

if (
    empty($q_1) || empty($q_2) || empty($q_3) || empty($q_4) || empty($q_5) || empty($q_6) || empty($q_7) || empty($q_8) ||  empty($q_9) || empty($q_10)
) {
    $error = "Invalid data!";
    include('error.php');
}
else {

    require_once('database.php');

    $query_a = "DELETE FROM questionnaire_answers";
    $db->exec($query_a);

    $statement_a = $db->prepare($query_a);
    $statement_a->execute();
    $statement_a->closeCursor();




    $query1 = 'UPDATE questionnaire_questions
              SET question=:q_1
              WHERE questionID = 1 ';
    $statement1 = $db->prepare($query1);
    $statement1->bindValue(':q_1', $q_1);
    $statement1->execute();
    $statement1->closeCursor();

    $query2 = 'UPDATE questionnaire_questions
                SET question=:q_2
                WHERE questionID = 2 ';
    $statement2 = $db->prepare($query2);
    $statement2->bindValue(':q_2', $q_2);
    $statement2->execute();
    $statement2->closeCursor();

    $query3 = 'UPDATE questionnaire_questions
                SET question=:q_3
                WHERE questionID = 3 ';
    $statement3 = $db->prepare($query3);
    $statement3->bindValue(':q_3', $q_3);
    $statement3->execute();
    $statement3->closeCursor();

    $query4 = 'UPDATE questionnaire_questions
                SET question=:q_4
                WHERE questionID = 4 ';
    $statement4 = $db->prepare($query4);
    $statement4->bindValue(':q_4', $q_4);
    $statement4->execute();
    $statement4->closeCursor();

    $query5 = 'UPDATE questionnaire_questions
            SET question=:q_5
            WHERE questionID = 5 ';
    $statement5 = $db->prepare($query5);
    $statement5->bindValue(':q_5', $q_5);
    $statement5->execute();
    $statement5->closeCursor();

    $query6 = 'UPDATE questionnaire_questions
            SET question=:q_6
            WHERE questionID = 6 ';
    $statement6 = $db->prepare($query6);
    $statement6->bindValue(':q_6', $q_6);
    $statement6->execute();
    $statement6->closeCursor();

    $query7 = 'UPDATE questionnaire_questions
            SET question=:q_7
            WHERE questionID = 7 ';
    $statement7 = $db->prepare($query7);
    $statement7->bindValue(':q_7', $q_7);
    $statement7->execute();
    $statement7->closeCursor();

    $query8 = 'UPDATE questionnaire_questions
            SET question=:q_8
            WHERE questionID = 8 ';
    $statement8 = $db->prepare($query8);
    $statement8->bindValue(':q_8', $q_8);
    $statement8->execute();
    $statement8->closeCursor();

    $query9 = 'UPDATE questionnaire_questions
            SET question=:q_9
            WHERE questionID = 9 ';
    $statement9 = $db->prepare($query9);
    $statement9->bindValue(':q_9', $q_9);
    $statement9->execute();
    $statement9->closeCursor();

    $query10 = 'UPDATE questionnaire_questions
            SET question=:q_10
            WHERE questionID = 10 ';
    $statement10 = $db->prepare($query10);
    $statement10->bindValue(':q_10', $q_10);
    $statement10->execute();
    $statement10->closeCursor();



    header('location: questionnaire_admin.php');
}

?>