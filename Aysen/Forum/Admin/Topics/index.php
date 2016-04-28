<?php
require('../../../database.php');
require('../../Model/topic.php');
require('../../Model/topic_db.php');
require('../../Model/category.php');
require ('../../Model/category_db.php');
require_once ('../../../view/header.php');

if(isset($_SESSION['user_session'])) {

    $rez = $user->userInfo($_SESSION['user_session']);
    $_SESSION['role'] = $rez['Rights'];
    echo $_SESSION['role'];
    if ($_SESSION['role'] == 2){
        echo "<h2>We are sorry, but you have to be ADMIN to see this page</h2><br/>
            <a href='".$_SERVER['HTTP_REFERER']."'>Go back</a>";
    }
    else {

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
        else if ($action == 'delete_topic') {
            // Get the IDs
            $topic_id = $_POST['topic_id'];
            // Delete the topic
            topicDB::deleteTopic($topic_id);

            // Display the topic List page for the current topic
            header("Location: .?category_id=".$categoryID);
        }
        else if ($action == 'show_add_form') {
            $topics = topicDB::getTopics();
            include('topic_add.php');

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
        else if ($action == 'show_edit_form') {
            $topics = topicDB::getTopics();
            $topic_id = $_POST['topic_id'];
            $topic = topicDB::getTopic($topic_id);
            include('topic_edit.php');
        }
        else if ($action == 'edit_topic') {
            if (isset($_GET['category_id'])) {
                $categoryID = $_GET['category_id'];
                $name = $_POST['name'];
                $edited_topic_id = $_POST['edited_topic_id'];
                // Validate the inputs
                if (empty($name)||empty($categoryID)) {
                    $error = "Invalid topic data. Check all fields and try again.";
                    include('../../../errors/error.php');
                } else {
                    $topic = new Topic($name);
                    $topic->setID($edited_topic_id);
                    $today = date("Y-m-d");
                    $topic->setDatePublished($today);
                    $topic->setUserID("1");
                    $topic->setCategoryID($categoryID);
                    topicDB::editTopic($topic);
                    // Display the topic List page for the current topic
                    header("Location: .?category_id=" . $categoryID);
                }
            }
        }
        else if ($action == 'show_detail_form') {
            //echo $action;
            $topics = topicDB::getTopics();

            $topic_id = $_POST['topic_id'];
            $topic = topicDB::getTopic($topic_id);
            $category = categoryDB::getCategory($categoryID);
            include('topic_detail.php');
        }

    }
}
else {
    echo "<h2>We are sorry, but you have to be logged in to see this page,
please log in <a href='http://localhost/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
}
require_once ('../../../view/footer.php');
?>