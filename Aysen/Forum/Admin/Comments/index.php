<?php
require ('../../../database.php');
require('../../Model/comment.php');
require('../../Model/comment_db.php');
require ('../../Model/topic.php');
require ('../../Model/topic_db.php');

if(isset($_SESSION['user_session'])) {
    $rez = $user->userInfo($_SESSION['user_session']);
    $_SESSION['role'] = $rez['Rights'];
    echo $_SESSION['role'];
    if ($_SESSION['role'] == 2){
        include '../../../view/header.php';
        echo "<h2>We are sorry, but you have to be ADMIN to see this page</h2><br/>
            <a href='".$_SERVER['HTTP_REFERER']."'>Go back</a>";
        include '../../../view/footer.php';

    }
    else {

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
        else if ($action == 'delete_comment') {
            // Get the IDs
            $comment_id = $_POST['comment_id'];
            // Delete the comment
            commentDB::deleteComment($comment_id);

            // Display the comment List page for the current comment
            header("Location: .?category_id=".$categoryID."&topic_id=".$topicID);
        }
        else if ($action == 'show_add_form') {
            //echo $action;
            $comments = commentDB::getComments();
            include('comment_add.php');
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
                    header("Location: .?category_id=".$categoryID."&topic_id=".$topicID);
                }
            }
        }
        else if ($action == 'show_edit_form') {
            $comments = commentDB::getComments();
            $comment_id = $_POST['comment_id'];
            $comment = commentDB::getComment($comment_id);
            include('comment_edit.php');
        }
        else if ($action == 'edit_comment') {
            if (isset($_GET['topic_id']) && isset($_GET['category_id'])) {
                $topicID = $_GET['topic_id'];
                $categoryID = $_GET['category_id'];
                $name = $_POST['name'];
                $edited_comment_id = $_POST['edited_comment_id'];
                // Validate the inputs
                if (empty($name)) {
                    $error = "Invalid comment data. Check all fields and try again.";
                    include('../../../errors/error.php');
                } else {
                    $comment = new comment($name);
                    $comment->setID($edited_comment_id);
                    $comment->setTopicID($topicID);
                    $comment->setUserID("1");
                    $today = date("Y-m-d");
                    $comment->setDatePublished($today);
                    commentDB::editComment($comment);
                    // Display the comment List page for the current comment
                    header("Location: .?category_id=".$categoryID."&topic_id=".$topicID);
                }
            }
        }
        else if ($action == 'show_detail_form') {
            // echo $action;
            $comments = commentDB::getComments();

            $comment_id = $_POST['comment_id'];
            $comment = commentDB::getComment($comment_id);
            $topic = topicDB::getTopic($topicID);
            include('comment_detail.php');
        }

    }
}
else {
    include '../../../view/header.php';
    echo "<h2>We are sorry, but you have to be logged in to see this page,
please log in <a href='http://localhost/Life-Advisor/Antonio/login/View/login-form.php'>here</a></h2>";
    include '../../../view/footer.php';

}
