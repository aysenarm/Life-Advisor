<?php
// Get the product data
$id = $_POST['id'];
$name = $_POST['name'];
$title = $_POST['title'];
$user = $_POST['user'];
$status = $_POST['status'];
$content = $_POST['content'];


// Validate inputs
if (empty($name) || empty($title) || empty($user) || empty($status) || empty($content)) {
    $error = "Invalid page data. Check all fields and try again.";

} else {
    // If valid, update the page in the database
    require_once('../Model/interactiondb.php');
    $pdb =  new PageDB();
    $pdb->updatePages($id,$name,$title,$user,$status,$content);


    // Display the Product List page
    header('location: ../View/index.php');
}
?>