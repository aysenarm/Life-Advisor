<?php
// Get comment data
$id = $_POST['id'];
$id_page = $_POST['id_page'];
$id_user = $_POST['id_user'];
$text = $_POST['text'];
$state = $_POST['state'];



// Validate inputs
if (empty($id) || empty($id_page) || empty($id_user) || empty($text) || empty($state)) {
    $error = "Invalid page data. Check all fields and try again.";
    include('error.php');
} else {
    // If valid, update the page in the database
    require_once('../Model/interactiondb.php');
    $pdb =  new CommentDB();
    $pdb->updateComments($id ,$id_page, $id_user, $text, $state);


    /// display the Admin actions comments page
    header('location: ../View/admin_comments.php');
}
?>