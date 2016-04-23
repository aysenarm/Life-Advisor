<?php
require ('../../../database.php');
require('../../Model/comment.php');
require('../../Model/comment_db.php');
require ('../../Model/topic.php');
require ('../../Model/topic_db.php');
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_comments';
}
if (isset($_GET['topic_id'])) {
    $topicID = $_GET['topic_id'];
}
if (isset($_GET['category_id'])) {
    $categoryID = $_GET['category_id'];
}
if ($action == 'list_comments') {
    if(isset($_GET['topic_id']) && isset($_GET['category_id']) ){
        $topicID = $_GET['topic_id'];
        $categoryID = $_GET['category_id'];
        $topic = topicDB::getTopic($topicID);
        $comments = commentDB::getCommentsByTopic($topicID);
    }
    else {
        // Get comment and comment data
        $comments = commentDB::getComments();
    }
    // Display the comment list
    include('comment_list.php');
}

else if ($action == 'add_comment') {
    if (isset($_GET['topic_id']) && isset($_GET['category_id']) ) {
        $topicID = $_GET['topic_id'];
        $categoryID = $_GET['category_id'];
        $name = $_POST['name'];
        // Validate the inputs
        if (empty($name)) {
            $error = "Invalid comment data. Check all fields and try again.";
            include('../../../errors/error.php');
        } else {
            $comment = new Comment($_POST['name']);
            $comment->setTopicID($topicID);
            $comment->setUserID("1");
            $today = date("Y-m-d");
            $comment->setDatePublished($today);
            commentDB::addComment($comment);

            // Display the comment List page for the current comment
            header("Location:?action=list_comments&category_id=".$categoryID."&topic_id=".$topicID);
        }
    }
}

