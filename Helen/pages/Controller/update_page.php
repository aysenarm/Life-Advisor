<?php
// Get the product data
$id = $_POST['id'];
$title = $_POST['title'];
$user = $_POST['user'];
$status = $_POST['status'];
$content = $_POST['content'];
$tags = $_POST['tags'];
$menu = $_POST['menu'];

require_once('../Model/interactiondb.php');
$pdb = new PageDB();

// Validate inputs
if (empty($title) || empty($user) || empty($status) || empty($content)) {
    $error = "Invalid page data. Check all fields and try again.";

} else {
    if(is_uploaded_file($_FILES["image"]["tmp_name"]))
    {
        $path = '../img/';
        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $path.$_FILES["image"]["name"])
        ){
            echo 'Smth is wrong with uploading the file';
            echo $_FILES['image']['tmp_name'];
            echo $_FILES['image']['name'];
        }
        else {
            $image = $_FILES["image"]["name"];

                // If valid, update the page in the database
                $pdb->updatePages($id, $title, $user, $status, $content, $tags, $menu, $image);

                // Display the Product List page
                header('location: ../View/admin_pages.php');

            }
        }

    else {

        // If valid, update the page in the database
        $pdb->updatePagesNoImage($id, $title, $user, $status, $content, $tags, $menu);

        // Display the Product List page
        header('location: ../View/admin_pages.php');
    }
}