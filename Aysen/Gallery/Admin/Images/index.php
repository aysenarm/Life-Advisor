<?php
require('../../../database.php');
require('../../Model/image.php');
require('../../Model/image_db.php');
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_images';
}
if ($action == 'list_images') {
    // Get image and image data
    $images = imageDB::getImages();

    // Display the image list
    include('image_list.php');
}
else if ($action == 'delete_image') {
    // Get the IDs
    $image_id = $_POST['image_id'];
    // Delete the image
    imageDB::deleteImage($image_id);

    // Display the image List page for the current image
    header("Location: .?");
}
else if ($action == 'show_add_form') {
    echo $action;
    $images = imageDB::getImages();
    include('image_add.php');
}
else if ($action == 'add_image') {
    $name = $_POST['name'];
    $file = $_POST['fileToUpload'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    // Validate the inputs
    if ( empty($name)) {
        $error = "Invalid image data. Check all fields and try again.";
        include('../../../errors/error.php');
    } else {
        $image = new Image($_POST['name']);
        $image->setName($file);
        imageDB::addImage($image);

        // Display the image List page for the current image
        header("Location: .?");
    }
}
else if ($action == 'show_edit_form') {
    $images = imageDB::getImages();
    $image_id = $_POST['image_id'];
    $image = imageDB::getImage($image_id);
    include('image_edit.php');
}
else if ($action == 'edit_image') {
    $name = $_POST['name'];
    $edited_image_id = $_POST['edited_image_id'];
    // Validate the inputs
    if ( empty($name)) {
        $error = "Invalid image data. Check all fields and try again.";
        include('../../../errors/error.php');
    } else {
        $image = new image($name);
        $image->setID($edited_image_id);
        imageDB::editImage($image);
        // Display the image List page for the current image
        header("Location: .?");
    }
}
else if ($action == 'show_detail_form') {
    echo $action;
    $images = imageDB::getImages();

    $image_id = $_POST['image_id'];
    $image = imageDB::getImage($image_id);

    include('image_detail.php');
}
?>