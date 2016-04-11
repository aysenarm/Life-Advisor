<?php
class Comment {
    private $id;
    private $name;
    private $userID;
    private $datePublished;
    private $topicID;


    public function getTopicID()
    {
        return $this->topicID;
    }


    public function setTopicID($topicID)
    {
        $this->topicID = $topicID;
    }

    public function getUserID()
    {
        return $this->userID;
    }

    public function setUserID($userID)
    {
        $this->userID = $userID;
    }


    public function __construct($name) {
        $this->name = $name;
    }
    public function getID() {
        return $this->id;
    }

    public function setID($value) {
        $this->id = $value;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($value) {
        $this->name = $value;
    }


    public function getDatePublished()
    {
        return $this->datePublished;
    }

    public function setDatePublished($datePublished)
    {
        $this->datePublished = $datePublished;
    }
}
?>