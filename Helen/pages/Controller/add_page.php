<?php
// Get the product data

$name = $_POST['name'];
$title = $_POST['title'];
$user = $_POST['user'];
$status = $_POST['status'];
$content = $_POST['content'];


// Validate inputs
if (empty($name) || empty($title) || empty($user) || empty($status) || empty($content) ) {
    $error = "Invalid page data. Check all fields and try again.";
    include('error.php');
} else {
    // If valid, add the product to the database
    require_once('../Model/interactiondb.php');
    $pdb =  new PageDB();
    $pdb->addPages($name,$title,$user,$status,$content);

    // Display the Product List page
    header('location: ../View/index.php');
}
?>