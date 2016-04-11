<?php
require('../../../database.php');
require('../../Model/topic.php');
require('../../Model/topic_db.php');
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_topics';
}
if ($action == 'list_topics') {
    // Get topic and topic data
    $topics = topicDB::getTopics();

    // Display the topic list
    include('topic_list.php');
}
else if ($action == 'delete_topic') {
    // Get the IDs
    $topic_id = $_POST['topic_id'];
    // Delete the topic
    topicDB::deleteTopic($topic_id);

    // Display the topic List page for the current topic
    header("Location: .?");
}
else if ($action == 'show_add_form') {
    //echo $action;
    $topics = topicDB::getTopics();
    include('topic_add.php');

}
else if ($action == 'add_topic') {

    $name = $_POST['name'];
    // Validate the inputs
    if (empty($name)) {
        $error = "Invalid topic data. Check all fields and try again.";
        include('../../../errors/error.php');
    } else {
        $topic = new Topic($_POST['name']);
        //date_default_timezone_set("America/New_York");
        $today = date("Y-m-d");
        $topic->setDatePublished($today);
        $topic->setUserID("1");
        $topic->setCategoryID("2");
        echo topicDB::addTopic($topic);

        // Display the topic List page for the current topic
        header("Location: .?");

    }
}
else if ($action == 'show_edit_form') {
    $topics = topicDB::getTopics();
    $topic_id = $_POST['topic_id'];
    $topic = topicDB::getTopic($topic_id);
    include('topic_edit.php');
}
else if ($action == 'edit_topic') {
    $name = $_POST['name'];
    $edited_topic_id = $_POST['edited_topic_id'];
    // Validate the inputs
    if ( empty($name)) {
        $error = "Invalid topic data. Check all fields and try again.";
        include('../../../errors/error.php');
    } else {
        $topic = new Topic($name);
        $topic->setID($edited_topic_id);
        $today = date("Y-m-d");
        $topic->setDatePublished($today);
        $topic->setUserID("1");
        $topic->setCategoryID("2");
        topicDB::editTopic($topic);
        // Display the topic List page for the current topic
        header("Location: .?");
    }
}
else if ($action == 'show_detail_form') {
    echo $action;
    $topics = topicDB::getTopics();

    $topic_id = $_POST['topic_id'];
    $topic = topicDB::getTopic($topic_id);

    include('topic_detail.php');
}
?>