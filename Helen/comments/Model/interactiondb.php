<?php
require_once 'dbclass.php';

class CommentDB{
    public function __construct() {
        
    }

//function to LIST all comments
    public function listComments(){
        $db = Dbclass::getDB();
        $query = "SELECT * FROM comments
              ORDER BY ID_comment";
        return $db->query($query);
    }

//function to LIST ONE comment

    public function listOneComment($id){
        $db = Dbclass::getDB();
        $query = "SELECT * FROM comments
               WHERE ID_comment = :id";
        $stm = $db->prepare($query);
        $stm->bindValue(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        $res = $stm->fetch();
        return $res;
    }

// function to ADD a comment
    public function addComments($id_page, $id_user, $text, $state){
        $db = Dbclass::getDB();
        $query = "INSERT INTO comments
                 (ID_page, ID_user, Text, state)
              VALUES
                 (:ipag, :ius, :te, :st)";
        $stm = $db->prepare($query);
        $stm->bindValue(':ipag', $id_page, PDO::PARAM_INT);
        $stm->bindValue(':ius', $id_user, PDO::PARAM_INT);
        $stm->bindValue(':te', $text, PDO::PARAM_STR);
        $stm->bindValue(':st', $state, PDO::PARAM_STR);

        $v = $stm->execute();
    }

// function to DELETE a comment
    public function deleteComments($id){
        
            $db = Dbclass::getDB();
            $query = "DELETE FROM comments
                      WHERE ID_comment = :id ";
            $stm = $db->prepare($query);
            $stm->bindParam(':id', $id);
            
            $count = $stm->execute();
            
            return "Deleted roWs: " . $count;
        }

// function to UPDATE a comment
    public function updateComments($id ,$id_page, $id_user, $text, $state){
        $db = Dbclass::getDB();
        $query = "UPDATE comments
                    SET ID_page = :ipag,
                    ID_user = :ius,
                    Text = :te,
                    state = :st
                      WHERE ID_comment = :id
                 ";
        $stm = $db->prepare($query);
        $stm->bindParam(':id', $id);
        $stm->bindValue(':ipag', $id_page, PDO::PARAM_INT);
        $stm->bindValue(':ius', $id_user, PDO::PARAM_INT);
        $stm->bindValue(':te', $text, PDO::PARAM_STR);
        $stm->bindValue(':st', $state, PDO::PARAM_STR);

        $count = $stm->execute();
        return "Updated rows: " . $count;
    }

// function to LIST comments of the page
    public function listPageComments($id){
        $db = Dbclass::getDB();
        $query = "SELECT * FROM comments
               WHERE ID_page = :id
               AND state = 'published' ";
        $stm = $db->prepare($query);
        $stm->bindValue(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        $res = $stm->fetchAll();
        //var_dump($res);
        return $res;
    }

// function to SHOW USERNAME of an author of a comment
    public function ShowUsername($id){
        $db = Dbclass::getDB();
        $query = "SELECT user.Username FROM user, comments
               WHERE comments.ID_user = user.ID_user
               AND comments.ID_user = :id";
        $stm = $db->prepare($query);
        $stm->bindValue(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        $res = $stm->fetchAll();
        //var_dump($res);
        return $res;
    }

// function to LIST comments based on STATE FOR ADMIN
    public function listNotPublishedComments($state){
        $db = Dbclass::getDB();
        $query = "SELECT * FROM comments
               WHERE state = :st";
        $stm = $db->prepare($query);
        $stm->bindValue(':st', $state, PDO::PARAM_INT);
        $stm->execute();
        $res = $stm->fetchAll();
        //var_dump($res);
        return $res;
    }


}