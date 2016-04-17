<?php
// Get the product data
$id = $_POST['id'];
$title = $_POST['title'];
$user = $_POST['user'];
$status = $_POST['status'];
$content = $_POST['content'];
$rank = "1";
$tags = "test";
$menu = "Recipes";
$image = "1";

// Validate inputs
if (empty($title) || empty($user) || empty($status) || empty($content)) {
    $error = "Invalid page data. Check all fields and try again.";

} else {
    // If valid, update the page in the database
    require_once('../Model/interactiondb.php');
    $pdb =  new PageDB();
    $pdb->updatePages($id,$title,$user,$status,$content,$rank, $tags,$menu, $image );


    // Display the Product List page
    header('location: ../View/admin_pages.php');
}
?>