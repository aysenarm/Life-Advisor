<?php
require('../../../database.php');
require('../../Model/topic.php');
require('../../Model/topic_db.php');
require('../../Model/category.php');
require ('../../Model/category_db.php');
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_topics';
}
if (isset($_GET['category_id'])) {
    $categoryID = $_GET['category_id'];
}
if ($action == 'list_topics') {
    if(isset($_GET['category_id']) ){
        $categoryID = $_GET['category_id'];
        $topics = topicDB::getTopicsByCategory($categoryID);
        $category = categoryDB::getCategory($categoryID);
    }
    else{ // Get topic and topic data
        $topics = topicDB::getTopics();
    }

    // Display the topic list
    include('topic_list.php');
}
else if ($action == 'show_add_form') {
        $topics = topicDB::getTopics();
        include('promotion_add.php');

    //echo $action;


}
else if ($action == 'add_topic') {


    if (isset($_GET['category_id'])) {
        $categoryID = $_GET['category_id'];
        $name = $_POST['name'];
        // Validate the inputs
        if (empty($name) || empty($categoryID)) {
            $error = "Invalid topic data. Check all fields and try again.";
            include('../../../errors/error.php');
        } else {
            $topic = new Topic($_POST['name']);
            //date_default_timezone_set("America/New_York");
            $today = date("Y-m-d");
            $topic->setDatePublished($today);
            $topic->setUserID("1");
            $topic->setCategoryID($categoryID);
            topicDB::addTopic($topic);
            // Display the topic List page for the current topic
            header("Location: .?category_id=".$categoryID);

        }


    }
}
?>