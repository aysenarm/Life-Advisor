<?php
require('../../../database.php');
require('../../Model/gallery.php');
require('../../Model/gallery_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_galleries';
}
if ($action == 'list_galleries') {
    // Get gallery and gallery data
    $galleries = galleryDB::getGalleries();

    // Display the gallery list
    include('gallery_list.php');
}
else if ($action == 'delete_gallery') {
    // Get the IDs
    $gallery_id = $_POST['gallery_id'];
    // Delete the gallery
    galleryDB::deleteGallery($gallery_id);

    // Display the gallery List page for the current gallery
    header("Location: .?");
}
else if ($action == 'show_add_form') {
    //echo $action;
    $galleries = galleryDB::getGalleries();
    include('gallery_add.php');
}
else if ($action == 'add_gallery') {
    $name = $_POST['name'];
    // Validate the inputs
    if ( empty($name)) {
        $error = "Invalid gallery data. Check all fields and try again.";
        include('../../../errors/error.php');
    } else {
        $gallery = new Gallery($_POST['name']);
        galleryDB::addGallery($gallery);

        // Display the gallery List page for the current gallery
          header("Location: .?");
    }
}
else if ($action == 'show_edit_form') {
    $galleries = galleryDB::getGalleries();
    $gallery_id = $_POST['gallery_id'];
    $gallery = galleryDB::getGallery($gallery_id);
    include('gallery_edit.php');
}
else if ($action == 'edit_gallery') {
    $name = $_POST['name'];
    $edited_gallery_id = $_POST['edited_gallery_id'];
    // Validate the inputs
    if ( empty($name)) {
        $error = "Invalid gallery data. Check all fields and try again.";
        include('../../../errors/error.php');
    } else {
        $gallery = new gallery($name);
        $gallery->setID($edited_gallery_id);
        galleryDB::editGallery($gallery);
        // Display the gallery List page for the current gallery
        header("Location: .?");
    }
}
else if ($action == 'show_detail_form') {
    echo $action;
    $galleries = galleryDB::getGalleries();

    $gallery_id = $_POST['gallery_id'];
    $gallery = galleryDB::getGallery($gallery_id);

    include('gallery_detail.php');
}
?>