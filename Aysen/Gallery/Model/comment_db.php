<?php
class commentDB {
    //four static method
    public static function getComments() {
        $db = Database::getDB();
        $query = 'SELECT * FROM forum_comments';
        $result = $db->query($query);
        $comments = array();
        foreach ($result as $row) {
            $comment = new Comment($row['commentName']);
            $comment->setID($row['commentID']);
            $comments[] = $comment;
        }
        return $comments;
    }
    public static function getComment($comment_id) {
        $db = Database::getDB();
        $query = "SELECT * FROM forum_comments WHERE commentID = '$comment_id'";
        $result = $db->query($query);
        //convert result into array
        $row = $result->fetch();
        //cretaes comment object
        $comment = new Comment($row['commentName']);
        $comment->setID($row['commentID']);
        return $comment;
    }

    public static function deleteComment($comment_id) {
        $db = Database::getDB();
        $query = "DELETE FROM forum_comments WHERE commentID = '$comment_id'";
        $row_count = $db->exec($query);
        return $row_count;
    }

    public static function addComment($comment) {
        $db = Database::getDB();
        $name = $comment->getName();
        $query =
            "INSERT INTO forum_comments(commentName)VALUES ('$name')";

        $row_count = $db->exec($query);
        return $row_count;
    }
    public static function editComment($comment) {
        $db = Database::getDB();

        $comment_id = $comment->getID();
        $name = $comment->getName();
        $query =
            "UPDATE forum_comments SET commentID ='$comment_id', commentName = '$name' WHERE commentID = '$comment_id'";
        $row_count = $db->exec($query);
        return $row_count;
    }
}
?>