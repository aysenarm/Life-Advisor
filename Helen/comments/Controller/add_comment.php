<?php
// Get the product data
$name = $_POST ["name"];
$page_id = $_POST ["page_id"];
$text_comment = $_POST ["text_comment"];
$state = "not published";

$name = htmlspecialchars($name);
$text_comment = htmlspecialchars($text_comment);


// add the comment to the database
require_once('../Model/interactiondb.php');
$pdb =  new CommentDB();
$pdb->addComments($page_id,$name,$text_comment, $state);

// Display the the same page
header('location:'.$_SERVER["HTTP_REFERER"]);



