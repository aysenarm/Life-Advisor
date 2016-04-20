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
            $comment->setDatePublished($row['datePublished']);
            $comment->setUserID($row['userID']);
            $comment->setTopicID($row['topicID']);
            $comments[] = $comment;
        }
        return $comments;
    }
    public static function getCommentsByTopic($comment_id) {
        $db = Database::getDB();
        $query = "SELECT forum_comments.commentName,
                  forum_comments.commentID,
                  forum_comments.datePublished,
                  forum_comments.userID,
                  forum_comments.topicID
                  FROM forum_comments JOIN forum_topics
                  ON (forum_comments.topicID = forum_topics.topicID)
                  WHERE forum_comments.topicID ='$comment_id'";
        $result = $db->query($query);
        $comments = array();
        foreach ($result as $row) {
            $comment = new Comment($row['commentName']);
            $comment->setID($row['commentID']);
            $comment->setDatePublished($row['datePublished']);
            $comment->setUserID($row['userID']);
            $comment->setTopicID($row['topicID']);
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
        $comment->setDatePublished($row['datePublished']);
        $comment->setUserID($row['userID']);
        $comment->setTopicID($row['topicID']);
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
        $datePublished = $comment->getDatePublished();
        $userID = $comment->getUserID();
        $topicID = $comment->getTopicID();
        $query =
            "INSERT INTO forum_comments(commentName,datePublished,userID,topicID)VALUES ('$name','$datePublished','$userID','$topicID')";

        $row_count = $db->exec($query);
        return $row_count;
    }
    public static function editComment($comment) {
        $db = Database::getDB();

        $comment_id = $comment->getID();
        $name = $comment->getName();
        $datePublished = $comment->getDatePublished();
        $userID = $comment->getUserID();
        $topicID = $comment->getTopicID();
        $query =
            "UPDATE forum_comments SET
              commentName = '$name',
              datePublished = '$datePublished',
              userID = '$userID',
              topicID = '$topicID'
              WHERE commentID = '$comment_id'";
        $row_count = $db->exec($query);
        return $row_count;
    }
}
?>