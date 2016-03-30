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

    $query = "INSERT INTO contactus
                (userID, question, category, questionDate)
              VALUES
                (:user_id, :question, :category, :question_date)";

    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->bindValue(':question', $question);
    $statement->bindValue(':category', $category);
    $statement->bindValue(':question_date', $question_date);


    $statement->execute();
    $statement->closeCursor();

    header('location: contactus_add_form_user.php');
}

?>