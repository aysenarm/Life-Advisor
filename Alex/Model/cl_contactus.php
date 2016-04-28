<?php

    class Contactus_feature{

        public function __construct() {

        }

//----------contactus_add_form_user.php----------

        //---List of questions and answers of current user---

        public function cafu($user_id, $db){
            $query = 'SELECT * FROM contactus WHERE userID = :user_id ORDER BY questionID DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':user_id', $user_id);
            $statement->execute();
            $row = $statement->fetchAll();
            $statement->closeCursor();
            return $row;
        }

//----------contactus_add_user.php----------

        //---Insert question into DB from user---

        public function cau($user_id, $question, $category, $question_date, $db){
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
        }

//----------contactus_delete_admin.php----------

    //---Delete question and/or answer form DB by admin---

        public function cda($question_id, $db){
            $query = "DELETE FROM contactus WHERE questionID = :question_id";
            $db->exec($query);

            $statement = $db->prepare($query);
            $statement->bindValue(':question_id', $question_id);
            $statement->execute();
            $statement->closeCursor();
        }

//----------contactus_delete_user.php----------

    //---Delete question and/or answer form DB by user---

    public function cdu($question_id, $db){
        $query = "DELETE FROM contactus WHERE questionID = :question_id";
        $db->exec($query);

        $statement = $db->prepare($query);
        $statement->bindValue(':question_id', $question_id);
        $statement->execute();
        $statement->closeCursor();
    }

//----------contactus_update_admin.php----------

    //--- Answer a question or change an answer ---

    public function cua($question_id, $answer, $answer_date, $db){
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
    }

//----------contactus_update_form_admin.php----------

    //--- Display Category, Question and/or aswer to change an answer or create it  ---

    public function cufa($question_id, $db){
        $query = 'SELECT * FROM contactus WHERE questionID = :question_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':question_id', $question_id);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        return $row;
    }



    }

?>