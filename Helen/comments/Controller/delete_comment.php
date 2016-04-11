<?php
// Get IDs
$comment_id = $_POST['com_id'];

// Delete comment from the database

require_once('../Model/interactiondb.php');

$pdb =  new CommentDB();
$pages = $pdb->deleteComments($comment_id);


// display the Admin actions comments page
header('location: ../View/admin_comments.php');
?>