<?php

    class Questionnaire_feature{

        public function __construct() {

        }

//----------questionnaire_add_form_user.php----------

        //---Display list of questions---

        public function qafu($db){
            $query = 'SELECT * FROM questionnaire_questions';
            $statement = $db->prepare($query);
            $statement->execute();
            $row = $statement->fetchAll();
            $statement->closeCursor();
            return $row;
        }

//----------questionnaire_add_user.php----------

        //---Display questions from DB---

        public function qau1($db, $user_id){
            $query1 = 'SELECT * FROM questionnaire_answers WHERE userID = :user_id1';
            $statement1 = $db->prepare($query1);
            $statement1->bindValue(':user_id1', $user_id);
            $statement1->execute();
            $row1 = $statement1->fetch();
            $statement1->closeCursor();

            return $row1;
        }

        //---Update answers in DB---

        public function qau2($db, $user_id, $answer_date, $answer_1, $answer_2, $answer_3, $answer_4, $answer_5, $answer_6, $answer_7, $answer_8, $answer_9, $answer_10){
            $query2 = 'UPDATE questionnaire_answers
                    SET aDate=:answer_date,
                        answer1=:answer_1,
                        answer2=:answer_2,
                        answer3=:answer_3,
                        answer4=:answer_4,
                        answer5=:answer_5,
                        answer6=:answer_6,
                        answer7=:answer_7,
                        answer8=:answer_8,
                        answer9=:answer_9,
                        answer10=:answer_10
                    WHERE userID=:user_id';

            $statement2 = $db->prepare($query2);
            $statement2->bindValue(':user_id', $user_id);
            $statement2->bindValue(':answer_date', $answer_date);
            $statement2->bindValue(':answer_1', $answer_1);
            $statement2->bindValue(':answer_2', $answer_2);
            $statement2->bindValue(':answer_3', $answer_3);
            $statement2->bindValue(':answer_4', $answer_4);
            $statement2->bindValue(':answer_5', $answer_5);
            $statement2->bindValue(':answer_6', $answer_6);
            $statement2->bindValue(':answer_7', $answer_7);
            $statement2->bindValue(':answer_8', $answer_8);
            $statement2->bindValue(':answer_9', $answer_9);
            $statement2->bindValue(':answer_10', $answer_10);

            $statement2->execute();
            $statement2->closeCursor();
        }

        //---Insert answers into DB---

        public function qau3($db, $user_id, $answer_date, $answer_1, $answer_2, $answer_3, $answer_4, $answer_5, $answer_6, $answer_7, $answer_8, $answer_9, $answer_10){
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
        }


//----------questionnaire_admin.php----------

    //---Display all questions---
    public function qa1($db){
        $query_q = 'SELECT * FROM questionnaire_questions';
        $statement_q = $db->prepare($query_q);
        $statement_q->execute();
        $row_q = $statement_q->fetchAll();
        $statement_q->closeCursor();

        return $row_q;
    }

    //---Display all answers---
    public function qa2($db){
        $query_a = 'SELECT * FROM questionnaire_answers ORDER BY aDate DESC';
        $statement_a = $db->prepare($query_a);
        $statement_a->execute();
        $row_a = $statement_a->fetchAll();
        $statement_a->closeCursor();

        return $row_a;
    }

//----------questionnaire_delete_admin.php----------

    //---Delete answers---
    public function qda($db, $user_id){
        $query = "DELETE FROM questionnaire_answers WHERE userID = :user_id";
        $db->exec($query);

        $statement = $db->prepare($query);
        $statement->bindValue(':user_id', $user_id);
        $statement->execute();
        $statement->closeCursor();
    }

//----------questionnaire_update_form_admin.php----------

    //---Get questions from DB

    public function qufa($db){
        $query = 'SELECT * FROM questionnaire_questions';
        $statement = $db->prepare($query);
        $statement->execute();
        $row = $statement->fetchAll();
        $statement->closeCursor();

        return $row;
    }

    }

?>