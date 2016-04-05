<?php
class topicDB {
    //four static method
    public static function getTopics() {
        $db = Database::getDB();
        $query = 'SELECT * FROM forum_topics';
        $result = $db->query($query);
        $topics = array();
        foreach ($result as $row) {
            $topic = new Topic($row['topicName']);
            $topic->setID($row['topicID']);
            $topic->setUserID($row['userID']);
            $topic->setCategoryID($row['categoryID']);
            $topic->setDatePublished($row['datePublished']);
            $topics[] = $topic;
        }
        return $topics;
    }
    public static function getTopic($topic_id) {
        $db = Database::getDB();
        $query = "SELECT * FROM forum_topics WHERE topicID = '$topic_id'";
        $result = $db->query($query);
        //convert result into array
        $row = $result->fetch();
        //creates topic object
        $topic = new Topic($row['topicName']);
        $topic->setID($row['topicID']);
        $topic->setUserID($row['userID']);
        $topic->setCategoryID($row['categoryID']);
        $topic->setDatePublished($row['datePublished']);
        return $topic;
    }

    public static function deleteTopic($topic_id) {
        $db = Database::getDB();
        $query = "DELETE FROM forum_topics WHERE topicID = '$topic_id'";
        $row_count = $db->exec($query);
        return $row_count;
    }

    public static function addTopic($topic) {
        $db = Database::getDB();
        $name = $topic->getName();
        $userID = $topic->getUserID();
        $categoryID = $topic->getCategoryID();
        $datePublished = $topic->getDatePublished();
        $query = "INSERT INTO forum_topics(topicName,userID,categoryID,datePublished) VALUES
('$name','$userID','$categoryID','$datePublished')";
        $row_count = $db->exec($query);
        //echo $row_count;
        return $row_count;
    }
    public static function editTopic($topic) {
        $db = Database::getDB();

        $topic_id = $topic->getID();
        $name = $topic->getName();
        $userID = $topic->getUserID();
        $categoryID = $topic->getCategoryID();
        $datePublished = $topic->getDatePublished();
        $query =
            "UPDATE forum_topics SET
            topicID ='$topic_id',
            topicName = '$name',
            userID = '$userID',
            categoryID = '$categoryID',
            datePublished ='$datePublished'
            WHERE topicID = '$topic_id'";
        $row_count = $db->exec($query);
        return $row_count;
    }
}
?>